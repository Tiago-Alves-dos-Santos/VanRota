<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Motorista extends Authenticatable
{
    use HasFactory,SoftDeletes,Notifiable;
    protected $guard = 'motorista';
    protected $guarded = [];
}
