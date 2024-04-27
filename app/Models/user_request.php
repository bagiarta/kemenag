<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_request extends Model
{
    protected $table = 'user_requests';
    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->req_no = $model->generateReqNo();
        });
    }

    protected function generateReqNo()
    {
        $id = $this->id ?? self::max('id') + 1; // Mendapatkan id terbaru atau 1 jika tidak ada record
        $date = now()->format('mdY');
        return "{$id}/{$date}";
    }
}
