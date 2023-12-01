<?php

namespace Botble\Logistics\Models;

use Botble\Base\Models\BaseModel;
use Botble\Logistics\Enums\QuoteStatus;

class Quote extends BaseModel
{
    protected $table = 'lg_quotes';

    protected $fillable = [
        'name',
        'email',
        'fields',
        'message',
        'status',
    ];

    protected $casts = [
        'fields' => 'json',
        'status' => QuoteStatus::class,
    ];
}
