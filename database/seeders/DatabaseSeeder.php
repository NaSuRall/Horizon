<?php

namespace Database\Seeders;

use App\Models\Marque;
use App\Models\Product;
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
        // User::factory(10)->create();

        User::factory(10)->create(  [
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Product::create([
            'name' => 'Test product',
            'description' => 'Test product',
            'prix' => 100,
            'quantite' => 10,
            'image' => 'test.jpg',
            'reference' => 1,
        ]);
        Product::create([
            'name' => 'Test product',
            'description' => 'Test product',
            'prix' => 100,
            'quantite' => 10,
            'image' => 'test.jpg',
            'reference' => 1,
        ]);
        Product::create([
            'name' => 'Test product',
            'description' => 'Test product',
            'prix' => 100,
            'quantite' => 10,
            'image' => 'test.jpg',
            'reference' => 1,
        ]);  Product::create([
        'name' => 'Test product',
        'description' => 'Test product',
        'prix' => 100,
        'quantite' => 10,
        'image' => 'test.jpg',
        'reference' => 1,
    ]);
        Product::create([
            'name' => 'Test product',
            'description' => 'Test product',
            'prix' => 100,
            'quantite' => 10,
            'image' => 'test.jpg',
            'reference' => 1,
        ]);

        Marque::create([
           'name' => 'Kawazaki',
        ]);
        Marque::create([
            'name' => 'KTM',
        ]);
        Marque::create([
            'name' => 'Maxxess',
        ]);
        Marque::create([
            'name' => 'Honda',
        ]);
        Marque::create([
            'name' => 'Suzuki',
        ]);
    }
}
