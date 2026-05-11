<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin Wezesha',
            'email' => 'admin@wezesha-foundation.org',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            FlexBizSeeder::class,
            SettingSeeder::class,
            PostSeeder::class,
        ]);
    }
}
