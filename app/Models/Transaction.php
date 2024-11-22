<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
