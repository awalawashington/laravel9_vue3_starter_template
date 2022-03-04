<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserVerifyEmail extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $fillable = [
        'email',
        'code',
        'token',
        'code_expires_at',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'code_expires_at' => 'datetime'
    ];
}
