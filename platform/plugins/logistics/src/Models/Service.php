<?php

namespace Botble\Logistics\Models;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Service extends BaseModel
{
    protected $table = 'lg_services';

    protected $fillable = [
        'category_id',
        'author_id',
        'author_type',
        'title',
        'description',
        'content',
        'thumbnail',
        'images',
        'is_featured',
        'views',
        'status',
    ];

    protected $casts = [
        'is_featured' => 'bool',
        'views' => 'int',
        'images' => 'array',
        'status' => BaseStatusEnum::class,
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    public function author(): MorphTo
    {
        return $this->morphTo();
    }
}
