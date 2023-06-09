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
            'name' => 'Samir Karki',
            'email' => 'samir@gmail.com',
            'address' => 'Pokhara',
            'phone' => '9876541230',
            'user_code' => 'COM-001',
            'id_no' => '2302',
            'company_id' => 1,
            'status' => 0,
        ]);
    }
}
