<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Samir',
            'email' => 'samir@gmail.com',
            'address' => 'Pokhara',
            'status' => 0,
        ]);
        User::create([
            'name' => 'sandesh',
            'email' => 'sandesh@gmail.com',
            'address' => 'Pokhara',
            'status' => 0,
        ]);
        User::create([
            'name' => 'binayak',
            'email' => 'binayak@gmail.com',
            'address' => 'Pokhara',
            'status' => 0,
        ]);
        User::create([
            'name' => 'keshab',
            'email' => 'keshab@gmail.com',
            'address' => 'Pokhara',
            'status' => 0,
        ]);
        User::create([
            'name' => 'santosh',
            'email' => 'santosh@gmail.com',
            'address' => 'Pokhara',
            'status' => 0,
        ]);
        User::create([
            'name' => 'sandip',
            'email' => 'sandip@gmail.com',
            'address' => 'Pokhara',
            'status' => 0,
        ]);
        User::create([
            'name' => 'sudip',
            'email' => 'sudip@gmail.com',
            'address' => 'Pokhara',
            'status' => 0,
        ]);
        User::create([
            'name' => 'kedar',
            'email' => 'kedar@gmail.com',
            'address' => 'Pokhara',
            'status' => 0,
        ]);
        User::create([
            'name' => 'shankar',
            'email' => 'shankar@gmail.com',
            'address' => 'Pokhara',
            'status' => 0,
        ]);
    }
}
