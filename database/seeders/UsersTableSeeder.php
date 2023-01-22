<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'admin',
            'nid' => 12345678,
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('admin123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Md Shahbuddin Emon',
            'nid' => 465239864,
            'email' => 'emon36@2gmail.com',
            'role' => 'user',
            'password' => Hash::make('user123'),
        ]);
    }
}
