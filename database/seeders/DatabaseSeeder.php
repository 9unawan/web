<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Membuat peran
        Role::create([
            'role_name' => 'admin',
        ]);

        Role::create([
            'role_name' => 'user',
        ]);
        // Data pengguna tambahan
        $userData = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'role_id' => '1',
                'password' => bcrypt('123'), // Menggunakan bcrypt() untuk mengenkripsi kata sandi
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'role_id' => '2',
                'password' => bcrypt('123'), // Menggunakan bcrypt() untuk mengenkripsi kata sandi
            ]
        ];

        // Membuat pengguna tambahan secara manual
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
