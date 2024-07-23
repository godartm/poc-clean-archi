<?php

namespace Infrastructure\Seeders;

use Illuminate\Database\Seeder;
use Infrastructure\Factories\UserFactory;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        dump("okl");
        UserFactory::new()->createMany(5);
    }
}
