<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdmin extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('superbanget'), // Ganti dengan password yang aman
            'nik' => '999999999',
            'tanggal_lahir' => '1999-09-09',
            'jenis_kelamin' => 'Laki-laki',
            'role_id' => 3, // 1 untuk admin
        ]);
    }
}
