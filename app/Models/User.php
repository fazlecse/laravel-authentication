<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'age',
        'role',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected  function casts(): array{
        return[
            'password'=>'hashed',
        ];
    }
}
