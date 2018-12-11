<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'email'
    ];

    protected $hidden = [
        'created_at'
    ];
}
