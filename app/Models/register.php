<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    //
    protected $table ='registers';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];
}
