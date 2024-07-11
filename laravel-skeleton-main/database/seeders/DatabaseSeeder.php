<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AppSetting;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User Seeder
        User::factory()->create([
            'name' => 'Antun Nitraj',
            'email' => 'antun@invictum.hr',
            'password' => bcrypt('password'),
            'theme' => 'dark',
        ]);
        User::factory()->create([
            'name' => 'Ivan Štimac',
            'email' => 'ivan@invictum.hr',
            'password' => bcrypt('password'),
        ]);

        // App settings
        AppSetting::create([
            'data_key' => 'example_setting',
            'data_type' => 'text'
        ]);
    }
}
