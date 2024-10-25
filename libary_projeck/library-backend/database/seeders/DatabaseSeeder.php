<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed 10 dummy users
        User::factory(2)->create();

        // Seed 20 dummy books
        Book::factory(2)->create();
    }
}
