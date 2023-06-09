<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'administrasi_',
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'bio' => 'Aku pekerja kreatif, tidak punya banyak duit',
            'role' => 'admin',
            'image_profile' => null,
            'password' => bcrypt('Admin999'),
        ]);
    }
}
