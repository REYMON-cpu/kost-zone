<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DummyUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Owner Dummy',
            'email' => 'owner@kostzone.test',
            'phone' => '081234567890',
            'password' => Hash::make('password'),
        ]);
    }
}
