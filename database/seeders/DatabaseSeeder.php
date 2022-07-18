<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Daniel Pacheco',
            'email' => 'daniel@teste.com',
            'password' => '$2y$10$z2wGBQLLKHmig76KVm86P.j6s2wsMYMA0ba/1DzOo5sl2vzL7YOPq'
        ]);
    }
}
