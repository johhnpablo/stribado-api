<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    protected $fillable = [
        'name',
        'icon',
        'description',
        'type',
        'recurrence',
        'ammount'
    ];

    protected $attributes = [
        'ammount' => 0,
        'recurrence' => null,
        'type' => null,
        'description' => '',
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
}
