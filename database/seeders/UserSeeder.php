<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = [
            "name" => "Jhon Doe",
            "email" => "jhondoe@mail.com",
            "password" => Hash::make('mypassword')
        ];
        $user = new User($user1);
        $user -> save();
    }
}
