<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Authenticatable
{
    use HasFactory;
    protected $primaryKey = 'username';
    protected $keyType    = 'string';

    // protected $fillable = [
    //     'username',
    //     'password',
    // ];

    protected $hidden =[
        'password',
    ];
}
