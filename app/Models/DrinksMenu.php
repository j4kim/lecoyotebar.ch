<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DrinksMenu extends Model
{
    protected $casts = [
        'meta' => 'array',
    ];

    public function drinksMenuGroups(): HasMany
    {
        return $this->hasMany(DrinksMenuGroup::class)->chaperone();
    }
}
