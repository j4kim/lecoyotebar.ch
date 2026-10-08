<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DrinksMenuGroup extends Model
{
    protected $casts = [
        'columns' => 'array',
        'notes' => 'array',
        'items' => 'array',
    ];

    public function drinksMenuItems(): HasMany
    {
        return $this->hasMany(DrinksMenuItem::class)->chaperone();
    }
}
