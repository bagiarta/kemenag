<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_request extends Model
{
    protected $table = 'user_request';
    protected $guarded = [];

    public function email()
    {
        return @$this->hasOne(user::class);
    }
    public function id()
    {
        return @$this->belongsTo(User::class, 'email', 'email');
    }
}
