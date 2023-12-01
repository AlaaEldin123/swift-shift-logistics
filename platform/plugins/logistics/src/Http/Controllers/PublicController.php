<?php

namespace Botble\Logistics\Http\Controllers;

use Botble\Base\Facades\BaseHelper;
use Botble\Base\Facades\EmailHandler;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Logistics\Enums\CustomFieldType;
use Botble\Logistics\Http\Requests\QuoteRequest;
use Botble\Logistics\Models\CustomField;
use Botble\Logistics\Models\Package;
use Botble\Logistics\Models\Quote;
use Botble\Logistics\Models\Service;
use Botble\Logistics\Models\ServiceCategory;
use Botble\SeoHelper\Facades\SeoHelper;
use Botble\SeoHelper\SeoOpenGraph;
use Botble\Slug\Facades\SlugHelper;
use Botble\Theme\Facades\AdminBar;
use Botble\Theme\Facades\Theme;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

class PublicController extends BaseController
{
    public function storeQuote(QuoteRequest $request, BaseHttpResponse $response): BaseHttpResponse
    {
        $customFields = $request->input('custom_fields', []);
        $fields = [];

        if (! empty($customFields)) {
            CustomField::query()
                ->whereIn('id', array_keys($customFields))
                ->select(['id', 'name', 'type'])
                ->with('options')
                ->get()
                ->map(function (CustomField $customField) use (&$fields, $customFields) {
                    $option = $customField->options->where('id', Arr::get($customFields, $customField->getKey()))->pluck('label');

                    if ($customField->type == CustomFieldType::CHECKBOX) {
                        return $fields[$customField->name] = implode(', ', $customFields[$customField->getKey()]);
                    }

                    if ($customField->type == CustomFieldType::TEXT || $customField->type == CustomFieldType::TEXTAREA) {
                        return $fields[$customField->name] = Arr::get($customFields, $customField->getKey());
                    }

                    return $fields[$customField->name] = $option->first();
                });
        }

        try {
            $quote = Quote::query()->create(array_merge($request->validated(), [
                'fields' => $fields,
            ]));

            EmailHandler::setModule('logistics')
                ->setVariableValues([
                    'site_name' => config('app.name'),
                    'contact_name' => $quote->name,
                    'contact_email' => $quote->email,
                    'contact_message' => $quote->message,
                    'fields' => $quote->fields ?? [],
                ])
                ->sendUsingTemplate('quote-request-notice');

            return $response->setMessage(__('Thank you for your quote request. We will contact you soon.'));
        } catch (Exception $exception) {
            BaseHelper::logError($exception);

            return $response
                ->setError()
                ->setMessage(__('An error occurred. Please try again later.'));
        }
    }

    public function services(): Response
    {
        SeoHelper::setTitle(__('Services'));

        $services = Service::query()
            ->wherePublished()
            ->latest()
            ->paginate(10);

        return Theme::scope('logistics.services', compact('services'))->render();
    }

    public function serviceCategory(string $key): Response
    {
        $slug = SlugHelper::getSlug($key, SlugHelper::getPrefix(ServiceCategory::class));

        if (! $slug) {
            abort(404);
        }

        $serviceCategory = ServiceCategory::query()
            ->with('services')
            ->wherePublished()
            ->findOrFail($slug->reference_id);

        SeoHelper::setTitle($serviceCategory->name)
            ->setDescription($serviceCategory->description);

        SeoHelper::setSeoOpenGraph(
            (new SeoOpenGraph())
                ->setDescription($serviceCategory->description)
                ->setUrl($serviceCategory->url)
                ->setTitle($serviceCategory->name)
                ->setType('article')
        );

        Theme::breadcrumb()
            ->add(__('Home'), route('public.index'))
            ->add($serviceCategory->name, $serviceCategory->url);

        if (function_exists('admin_bar')) {
            AdminBar::registerLink(
                trans('plugins/logistics::logistics.edit_this_service_category'),
                route('logistics.service-categories.edit', $serviceCategory->getKey()),
                null,
                'logistics.service-categories.edit'
            );
        }

        return Theme::scope('logistics.service-category', compact('serviceCategory'))->render();
    }

    public function service(string $key): Response
    {
        $slug = SlugHelper::getSlug($key, SlugHelper::getPrefix(Service::class));

        if (! $slug) {
            abort(404);
        }

        $service = Service::query()
            ->wherePublished()
            ->findOrFail($slug->reference_id);

        SeoHelper::setTitle($service->name)
            ->setDescription($service->description);

        SeoHelper::setSeoOpenGraph(
            (new SeoOpenGraph())
                ->setDescription($service->description)
                ->setUrl($service->url)
                ->setTitle($service->name)
                ->setType('article')
        );

        Theme::breadcrumb()
            ->add(__('Home'), route('public.index'))
            ->add($service->name, $service->url);

        $relatedServices = Service::query()
            ->wherePublished()
            ->where('id', '<>', $service->getKey())
            ->with('metadata')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        if (function_exists('admin_bar')) {
            AdminBar::registerLink(
                trans('plugins/logistics::logistics.edit_this_service'),
                route('logistics.services.edit', $service->getKey()),
                null,
                'logistics.services.edit'
            );
        }

        return Theme::scope('logistics.service', compact('service', 'relatedServices'))->render();
    }

    public function package(string $key): Response
    {
        $slug = SlugHelper::getSlug($key, SlugHelper::getPrefix(Package::class));

        if (! $slug) {
            abort(404);
        }

        $package = Package::query()
            ->wherePublished()
            ->findOrFail($slug->reference_id);

        if (function_exists('admin_bar')) {
            AdminBar::registerLink(
                trans('plugins/logistics::logistics.edit_this_package'),
                route('logistics.packages.edit', $package->getKey()),
                null,
                'logistics.packages.edit'
            );
        }

        return Theme::scope('logistics.package', compact('package'))->render();
    }
}
