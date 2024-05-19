<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'FIC Deni',
            'email' => 'deni@fic.com',
            'password' => 'deni@fic.com',
        ]);

        //category factory 2
        Category::factory(2)->create();

        //product factory 100
        Product::factory(100)->create();
    }
}