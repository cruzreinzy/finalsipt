<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Book::factory(10)->create();

        \App\Models\Students::factory(10)->create();

        \App\Models\Facilities::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Rein Cruz',
            'email' => 'reincruz@gmail.com',
            'password' => 'reinzy'
        ]);
    }
}
