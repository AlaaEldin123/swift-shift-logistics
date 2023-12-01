<?php

namespace Botble\Logistics\Http\Requests;

use Botble\Logistics\Enums\CustomFieldType;
use Botble\Logistics\Models\CustomField;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomFieldRequest extends FormRequest
{
    public function rules(): array
    {
        $isDropdownField = $this->input('type') === CustomFieldType::DROPDOWN;

        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique(CustomField::class)->ignore($this->custom_field, 'id'),
            ],
            'required' => ['required', 'boolean'],
            'placeholder' => ['nullable', 'string'],
            'type' => ['required', 'string', Rule::in(CustomFieldType::values())],
            'options.*.id' => [
                'sometimes',
            ],
            'options.*.label' => [
                'nullable',
                'string',
                Rule::requiredIf(fn () => $isDropdownField),
            ],
            'options.*.value' => [
                'nullable',
                'string',
            ],
            'options.*.order' => [
                'numeric',
                'min:0',
                'max:999',
            ],
        ];
    }
}
