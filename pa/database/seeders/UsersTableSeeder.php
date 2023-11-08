<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        User::create([
            'name' => 'Erni Veronica Sidabutar',
            'email' => 'vero@gmail.com',
            'password' => Hash::make('029')
        ]);

        User::create([
            'name' => 'Nur Avivah',
            'email' => 'avivah@gmail.com',
            'password' => Hash::make('010')
        ]);
    }
}
