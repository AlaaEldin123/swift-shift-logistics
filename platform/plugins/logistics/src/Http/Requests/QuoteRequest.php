<?php

namespace Botble\Logistics\Http\Requests;

use Botble\Captcha\Facades\Captcha;
use Botble\Logistics\Enums\CustomFieldType;
use Botble\Logistics\Models\CustomField;
use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
    public function rules(): array
    {
        $rules = [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:10000'],
            'custom_fields' => ['nullable', 'array'],
        ];

        if (is_plugin_active('captcha')) {
            $rules += Captcha::rules();
        }

        if ($this->has('custom_fields')) {
            $customFields = CustomField::query()
                ->wherePublished()
                ->with('options:id,custom_field_id,label')
                ->get();

            $customFields->each(function (CustomField $customField) use (&$rules) {
                $customFieldRules[] = $customField->required ? 'required' : 'nullable';

                if ($customField->type == CustomFieldType::DROPDOWN) {
                    $customFieldRules[] = sprintf('in:%s', $customField->options->pluck('id')->implode(','));
                }

                if ($customField->type == CustomFieldType::CHECKBOX) {
                    $customFieldRules[] = 'array';
                } else {
                    $customFieldRules[] = 'string';
                }

                $rules["custom_fields.{$customField->getKey()}"] = $customFieldRules;
            });
        }

        return $rules;
    }

    public function attributes(): array
    {
        $attributes = is_plugin_active('captcha') ? Captcha::attributes() : [];

        CustomField::query()
            ->wherePublished()
            ->pluck('name', 'id')
            ->each(function (string $name, string $id) use (&$attributes) {
                return $attributes["custom_fields.$id"] = strtolower($name);
            });

        return $attributes;
    }
}
