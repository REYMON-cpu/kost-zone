<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User; // <<< WAJIB

class Kost extends Model
{
    protected $fillable = [
        'user_id',
        'nama_kost',
        'tipe_kost',
        'max_penghuni',
        'kecamatan',
        'kabupaten',
        'kota',
        'spesifikasi',
        'pembayaran',
        'harga'
    ];

    public function images()
    {
        return $this->hasMany(KostImage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
