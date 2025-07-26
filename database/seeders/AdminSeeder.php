<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
    
        User::create([
            'name' => 'Rafikul Islam',
            'email' => 'rafekulislamrafe@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
