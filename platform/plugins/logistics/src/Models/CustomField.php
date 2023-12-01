<?php

namespace Botble\Logistics\Models;

use Botble\Base\Casts\SafeContent;
use Botble\Base\Models\BaseModel;
use Botble\Logistics\Enums\CustomFieldType;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Arr;

class CustomField extends BaseModel
{
    protected $table = 'lg_custom_fields';

    protected $fillable = [
        'author_type',
        'author_id',
        'name',
        'placeholder',
        'required',
        'type',
        'order',
        'is_global',
    ];

    protected $casts = [
        'type' => CustomFieldType::class,
        'is_global' => 'bool',
        'order' => 'int',
        'name' => SafeContent::class,
        'required' => 'bool',
    ];

    protected static function booted(): void
    {
        static::deleting(function (CustomField $model) {
            $model->options()->delete();
        });
    }

    public function author(): MorphTo
    {
        return $this->morphTo();
    }

    public function options(): HasMany
    {
        return $this->hasMany(CustomFieldOption::class, 'custom_field_id');
    }

    public function saveRelations(array $data = []): void
    {
        if (Arr::get($data, 'type') === CustomFieldType::TEXT) {
            Arr::forget($data, 'options');
        }

        $options = $this->formatOptions(Arr::get($data, 'options', []));

        $this->options()
            ->whereNotIn('id', collect($options)->pluck('id')->all())
            ->delete();

        if (count($options)) {
            $this->options()->saveMany($options);
        }
    }

    protected function formatOptions(array $options = []): array
    {
        if (empty($options)) {
            return [];
        }

        $customFieldOptions = [];

        foreach ($options as $item) {
            $option = null;

            if (Arr::exists($item, 'id')) {
                $option = CustomFieldOption::query()->find($item['id']);
                $option->fill($item);
            }

            if (! $option) {
                $option = new CustomFieldOption($item);
            }

            $customFieldOptions[] = $option;
        }

        return $customFieldOptions;
    }
}
