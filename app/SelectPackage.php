<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectPackage extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
    ];
}
