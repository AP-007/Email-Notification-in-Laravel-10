<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $user = [
        "name"=>"Adarsha Poudel",
        "email"=>"poudel0070@gmail.com",
        "email_verified_at"=>now(),
        "password"=>Hash::make('password'),
        "created_at"=>now(),
        "updated_at"=>now(),
      ];

      User::create($user);
    }
}
