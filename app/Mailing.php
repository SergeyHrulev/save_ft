<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mailing extends Model
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'email',
        'validate'
    ];

    protected $dates = [
        'deleted_at'
    ];

}
