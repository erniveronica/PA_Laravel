<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // DB::table('users')->truncate();
        $this->call(UsersTableSeeder::class);
    }
    // run terminal -> php artisan db:seed
    // fungsi database sender -> memasukan data ke database secara otomatis (pengembang mengisi database dengan default/sampel)
}
