<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',
                'password' => bcrypt('admin@gmail.com')
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('user@gmail.com')
            ],
        ];

        foreach($user as $key => $value) {
            \App\Models\User::create($value);
        }
    }
}
