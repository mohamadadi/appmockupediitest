<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInfo;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrInsert([
            'id' => 1,
            'email' => 'admin.test@gmail.com',
        ],
        [
            'id' => 1,
            'email' => 'admin.test@gmail.com',
            'password' => @Hash::make('Admin'),
            'role' => 'Admin'
        ]);
    }
}
