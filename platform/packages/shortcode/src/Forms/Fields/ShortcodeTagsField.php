<?php

namespace Botble\Shortcode\Forms\Fields;

use Botble\Base\Facades\Assets;
use Botble\Base\Facades\Html;
use Botble\Base\Forms\Fields\TagField;

class ShortcodeTagsField extends TagField
{
    public function render(array $options = [], $showLabel = true, $showField = true, $showError = true): string
    {
        return Assets::styleToHtml('tagify') .
            Assets::scriptToHtml('tagify') .
            Html::script('vendor/core/core/base/js/tags.js') .
            parent::render($options, $showLabel, $showField, $showError);
    }
}
