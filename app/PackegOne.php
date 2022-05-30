<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackegOne extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
    ];
}
