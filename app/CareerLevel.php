<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerLevel extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
    ];
}
