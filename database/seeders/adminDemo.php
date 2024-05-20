<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class adminDemo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Aymane',
            'email' => 'aymane@kridaba.com',
            'password' => Hash::make('adminadmin'),
            'role' => 'admin',
            'avatar' => '/images/avatars/avatar_2.jpg'
        ]);
        User::create([
            'name' => 'jawad',
            'email' => 'jawad@admin.com',
            'password' => Hash::make('adminadmin'),
            'role' => 'admin',
            'avatar' => '/images/avatars/avatar_6.jpg'
        ]);
    }
}
