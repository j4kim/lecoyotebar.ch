<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DrinksMenuItem extends Model
{
    protected $casts = [
        'prices' => 'array',
    ];

    public function drinksMenuGroup(): BelongsTo
    {
        return $this->belongsTo(DrinksMenuGroup::class);
    }
}
