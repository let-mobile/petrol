<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::updateOrcreate([
            'email' => 'admin@gmail.com',
        ],
         [
            'name' => 'ali',
            'password' => Hash::make('password'),
         ]
        );

    }
}
