<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;



class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table= "admin_user";
    protected $fillable = [
        'email',
        'password'
    ];
}
