<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            CategoriesSeeder::class,
            ServicesSeeder::class,
            DoctorsSeeder::class,
            MembersSeeder::class,
            ArticlesSeeder::class,
            TransactionsSeeder::class,
        ]);
    }
}
