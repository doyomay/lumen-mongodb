<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Logs extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip',
        'headers',
        'data'
    ];
}
