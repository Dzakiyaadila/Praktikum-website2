<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Gunakan perulangan for untuk membuat 20 data
        for ($i = 0; $i < 20; $i++) {
            Book::create([
                'title'      => fake()->sentence(3),
                'author'     => fake()->name(),
                'status'     => fake()->randomElement(['wishlist', 'reading', 'finished']),
                'impression' => fake()->paragraph(2),
                'rating'     => fake()->numberBetween(1, 5),
            ]);
        }
    }
}