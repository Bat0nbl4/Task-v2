<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\UserTypeEnum;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(298)->create();
        \App\Models\User::factory(1)->create([
            'login' => 'admin',
            'email' => 'Admin@mail.ru',
            'password' => bcrypt('admin'),
            'user_type' => UserTypeEnum::Admin->value,
        ]);
        \App\Models\User::factory(1)->create([
            'login' => '123',
            'email' => 'lol@mail.ru',
            'password' => bcrypt('123'),
            'user_type' => UserTypeEnum::Publisher->value,
        ]);
    }
}
