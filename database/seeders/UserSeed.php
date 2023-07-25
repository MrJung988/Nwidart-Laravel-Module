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
        User::firstOrCreate([
            'email' => 'samir@gmail.com',
        ], [
            'name' => 'Samir Karki',
            'password' => bcrypt('admin123'),
            'phone' => '9876541230',
            'address' => 'Pokhara',
            'user_code' => 'COM-001',
            'id_no' => '23021',
            'company_id' => 1,
            'status' => 'active',
        ]);
    }
}
