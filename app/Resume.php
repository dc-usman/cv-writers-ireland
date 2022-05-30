<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
    ];
}
