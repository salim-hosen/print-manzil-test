<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            "name" => "admin",
            "email" => "admin@example.com",
            "password" => bcrypt("demopass"),
            "user_type" => User::USER_TYPE_ADMIN
        ]);

        // $merchant = User::create([
        //     "name" => "merchant",
        //     "email" => "merchant@example.com",
        //     "password" => bcrypt("demopass"),
        //     "user_type" => User::USER_TYPE_MERCHANT
        // ]);
    }
}
