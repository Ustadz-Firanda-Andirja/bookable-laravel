<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait HasUsers
{
    public static function bootHasUsers()
    {
        static::creating(function ($model) {
            $model->user_id = Auth::id();
        });
    }
}
