<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Erni Veronica Sidabutar',
            'email' => '2109116029@gmail.com',
            'password' => Hash::make('2109116029')
        ]);

        User::create([
            'name' => 'Nur Avivah',
            'email' => '2109116010@gmail.com',
            'password' => Hash::make('2109116010')
        ]);
    }

    // run terminal -> php artisan db:seed
    // fungsi database sender -> memasukan data ke database secara otomatis (pengembang mengisi database dengan default/sampel)
}
