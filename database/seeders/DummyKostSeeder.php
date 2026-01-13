<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kost;
use App\Models\User;

class DummyKostSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'owner@kostzone.test')->first();

        if (!$user) {
            return;
        }

        $kosts = [
            [
                'nama_kost' => 'Kost Melati',
                'tipe_kost' => 'putri',
                'harga' => 750000,
                'spesifikasi' => 'Kost nyaman dekat kampus, kamar mandi dalam.',
            ],
            [
                'nama_kost' => 'Kost Mawar',
                'tipe_kost' => 'putra',
                'harga' => 650000,
                'spesifikasi' => 'Lingkungan aman dan bersih.',
            ],
            [
                'nama_kost' => 'Kost Anggrek',
                'tipe_kost' => 'campuran',
                'harga' => 900000,
                'spesifikasi' => 'Full fasilitas, parkiran luas.',
            ],
        ];

        foreach ($kosts as $k) {
            Kost::create([
                'user_id'      => $user->id,
                'nama_kost'    => $k['nama_kost'],
                'tipe_kost'    => $k['tipe_kost'],
                'max_penghuni' => 1,
                'kecamatan'    => 'Lowokwaru',
                'kabupaten'    => 'Malang',
                'kota'         => 'Malang',
                'spesifikasi'  => $k['spesifikasi'],
                'pembayaran'   => 'bulanan',
                'harga'        => $k['harga'],
            ]);
        }
    }
}
