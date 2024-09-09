<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Cyrus Admin',
            'usertype' => 'admin',
            'email' => 'cyrusadmin@gmail.com',
            'password' => '$2y$12$3PoGvXlZK/HWtmE9CjULL.10q6iAJgRkexqiPYDGwmTLZuZoFFpDi', //qwerqwer
        ]);

        User::create([
            'name' => 'Cyrus User',
            'usertype' => 'user',
            'email' => 'cyruspro.gg@gmail.com',
            'password' => '$2y$12$3PoGvXlZK/HWtmE9CjULL.10q6iAJgRkexqiPYDGwmTLZuZoFFpDi', //qwerqwer
        ]);

    }
}
