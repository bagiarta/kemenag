<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    protected $table = 'biodata';
    protected $filetable = [
        'nik',
        'nama',
        'email',
        'ttl',
        'gender',
        'agama',
        'alamat',
        'telepon',
        'pekerjaan'
    ];

    public function nik()
    {
        return $this->hasOne(user::class);
    }
}
