<?php

namespace Botble\Logistics\Http\Requests;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Logistics\Models\Package;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'parent_id' => ['nullable', 'string', 'exists:lg_service_categories,id'],
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
                Rule::unique(Package::class, 'name')->ignore($this->service_category),
            ],
            'image' => ['nullable', 'string'],
            'order' => ['required', 'numeric', 'min:0', 'max:99999'],
            'status' => ['required', 'string', Rule::in(BaseStatusEnum::values())],
        ];
    }
}
