<?php

namespace Botble\Logistics\Providers;

use Botble\Base\Supports\ServiceProvider;
use Botble\JsValidation\Facades\JsValidator;
use Botble\Logistics\Http\Requests\QuoteRequest;
use Botble\Logistics\Models\CustomField;
use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Theme\Facades\Theme;
use Illuminate\Contracts\View\View;

class HookServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Shortcode::register('request-quote', __('Request Quote form'), __('Request Quote form'), function (ShortcodeCompiler $shortcode): View {
            Theme::asset()->container('footer')
                ->add('js-validation', 'vendor/core/core/js-validation/js/js-validation.js', ['jquery']);
            Theme::asset()->container('footer')
                ->writeContent('js-validation-script', JsValidator::formRequest(QuoteRequest::class), ['jquery']);

            $customFields = CustomField::query()
                ->wherePublished()
                ->with('options')
                ->get();

            return view(
                apply_filters('request-quote-shortcode', 'plugins/logistics::shortcodes.request-quote', $shortcode, $customFields),
                compact('shortcode', 'customFields')
            );
        });
    }
}
