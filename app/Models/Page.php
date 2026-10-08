<?php

namespace App\Models;

use App\Enums\PageTemplate;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $casts = [
        'template' => PageTemplate::class,
        'blocks' => 'array',
    ];
}
