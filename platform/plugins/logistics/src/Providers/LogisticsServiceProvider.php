<?php

namespace Botble\Logistics\Providers;

use Botble\Base\Facades\DashboardMenu;
use Botble\Base\Facades\EmailHandler;
use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\LanguageAdvanced\Supports\LanguageAdvancedManager;
use Botble\Logistics\Models\CustomField;
use Botble\Logistics\Models\CustomFieldOption;
use Botble\Logistics\Models\Package;
use Botble\Logistics\Models\Service;
use Botble\Logistics\Models\ServiceCategory;
use Botble\Slug\Facades\SlugHelper;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Events\RouteMatched;

class LogisticsServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {
        $this
            ->setNamespace('plugins/logistics')
            ->loadAndPublishConfigurations(['permissions', 'email'])
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadMigrations()
            ->publishAssets()
            ->loadRoutes()
            ->registerSlugHelper()
            ->registerLanguage();

        DashboardMenu::default()->beforeRetrieving(function () {
            DashboardMenu::make()
                ->registerItem([
                    'id' => 'cms-core-logistics',
                    'priority' => 5,
                    'name' => 'plugins/logistics::logistics.name',
                    'icon' => 'ti ti-truck',
                    'permissions' => ['logistics.index'],
                ])
                ->registerItem([
                    'id' => 'cms-core-logistics-quotation-requests',
                    'priority' => 1,
                    'parent_id' => 'cms-core-logistics',
                    'name' => 'plugins/logistics::logistics.quotation_request.name',
                    'url' => route('logistics.quotation-requests.index'),
                    'permissions' => ['logistics.quotation-requests.index'],
                ])
                ->registerItem([
                    'id' => 'cms-core-logistics-service-categories',
                    'priority' => 2,
                    'parent_id' => 'cms-core-logistics',
                    'name' => 'plugins/logistics::logistics.service_category.name',
                    'permissions' => ['logistics.service-categories.index'],
                    'url' => route('logistics.service-categories.index'),
                ])
                ->registerItem([
                    'id' => 'cms-core-logistics-services',
                    'priority' => 3,
                    'parent_id' => 'cms-core-logistics',
                    'name' => 'plugins/logistics::logistics.service.name',
                    'permissions' => ['logistics.services.index'],
                    'url' => route('logistics.services.index'),
                ])
                ->registerItem([
                    'id' => 'cms-core-logistics-packages',
                    'priority' => 4,
                    'parent_id' => 'cms-core-logistics',
                    'name' => 'plugins/logistics::logistics.package.name',
                    'permissions' => ['logistics.packages.index'],
                    'url' => route('logistics.packages.index'),
                ])
                ->registerItem([
                    'id' => 'cms-core-logistics-custom-fields',
                    'priority' => 5,
                    'parent_id' => 'cms-core-logistics',
                    'name' => 'plugins/logistics::logistics.custom_field.name',
                    'url' => route('logistics.custom-fields.index'),
                    'permissions' => ['logistics.custom-fields.index'],
                ]);
        });

        $this->app['events']->listen(RouteMatched::class, function () {
            EmailHandler::addTemplateSettings('logistics', config('plugins.logistics.email', []));
        });

        $this->app->booted(function (Application $app) {
            $app->register(HookServiceProvider::class);
        });
    }

    protected function registerSlugHelper(): self
    {
        SlugHelper::registerModule(ServiceCategory::class, 'Service Categories');
        SlugHelper::registerModule(Service::class, 'Services');
        SlugHelper::registerModule(Package::class, 'Packages');

        SlugHelper::setPrefix(ServiceCategory::class, 'service-categories');
        SlugHelper::setPrefix(Service::class, 'services');
        SlugHelper::setPrefix(Package::class, 'packages');
        SlugHelper::setColumnUsedForSlugGenerator(Service::class, 'title');

        return $this;
    }

    protected function registerLanguage(): self
    {
        if (! defined('LANGUAGE_MODULE_SCREEN_NAME') || ! defined('LANGUAGE_ADVANCED_MODULE_SCREEN_NAME')) {
            return $this;
        }

        LanguageAdvancedManager::registerModule(ServiceCategory::class, [
            'name',
            'description',
        ]);

        LanguageAdvancedManager::registerModule(Service::class, [
            'title',
            'description',
            'content',
        ]);

        LanguageAdvancedManager::registerModule(Package::class, [
            'name',
            'description',
            'content',
            'price',
            'annual_price',
            'features',
        ]);

        LanguageAdvancedManager::registerModule(CustomField::class, [
            'name',
            'placeholder',
            'type',
        ]);

        LanguageAdvancedManager::registerModule(CustomFieldOption::class, [
            'label',
            'value',
        ]);

        LanguageAdvancedManager::addTranslatableMetaBox('custom_fields_box');

        add_action(LANGUAGE_ADVANCED_ACTION_SAVED, function ($data, $request) {
            if ($data instanceof CustomField) {
                $options = $request->input('options', []);

                if (! $options) {
                    return;
                }

                $newRequest = new Request();

                $newRequest->replace([
                    'language' => $request->input('language'),
                    'ref_lang' => $request->input('ref_lang'),
                ]);

                foreach ($options as $value) {
                    if (! isset($value['id'])) {
                        continue;
                    }

                    $option = CustomFieldOption::query()->find($value['id']);

                    $newRequest->merge([
                        'label' => $value['label'],
                        'value' => $value['value'],
                    ]);

                    if ($option) {
                        LanguageAdvancedManager::save($option, $newRequest);
                    }
                }
            }
        }, 1234, 2);

        return $this;
    }
}
