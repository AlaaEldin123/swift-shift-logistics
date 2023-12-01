<?php

namespace Botble\Logistics\Http\Requests;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Logistics\Models\Service;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'category_id' => ['required', 'exists:lg_service_categories,id'],
            'title' => [
                'required',
                'string',
                'min:3',
                'max:255',
                Rule::unique(Service::class, 'title')->ignore($this->service),
            ],
            'description' => ['nullable', 'string', 'max:400'],
            'content' => ['required', 'string'],
            'thumbnail' => ['required', 'string'],
            'images' => ['nullable', 'array'],
            'is_featured' => ['nullable', 'boolean'],
            'status' => ['required', 'string', Rule::in(BaseStatusEnum::values())],
        ];
    }
}
