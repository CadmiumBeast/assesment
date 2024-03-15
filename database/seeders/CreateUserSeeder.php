<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Cashier',
                'email' => 'cashier@test.com',
                'password' => bcrypt('password'),
                'type' => 'cashier',
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@test.com',
                'password' => bcrypt('password'),
                'type' => 'manager',
            ],
            [
                'name' => 'Owner',
                'email' => 'owner@test.com',
                'password' => bcrypt('password'),
                'type' => 'owner',
            ],
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }

    }
}
