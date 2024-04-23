<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata';
    // protected $fillable = [
    //     'ttl',
    //     'gender',
    //     'agama',
    //     'alamat',
    //     'telepon',
    //     'pekerjaan'
    // ];
    protected $guarded = [];

    public function nik()
    {
        return $this->hasOne(user::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
