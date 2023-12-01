<?php

namespace Botble\RealEstate\Http\Resources;

use Botble\Logistics\Models\CustomField;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin CustomField
 */
class CustomFieldResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->getKey(),
            'name' => $this->name,
            'type' => $this->type->getValue(),
            'options' => $this->options,
        ];
    }
}
