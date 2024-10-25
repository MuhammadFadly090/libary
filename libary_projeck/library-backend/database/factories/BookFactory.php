<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // Judul acak
            'author' => $this->faker->name(), // Penulis acak
            'year' => $this->faker->year(), // Tahun acak
            'category' => $this->faker->word(), // kategori acak 
            'Publisher' => $this->faker->company(), //penerbit acak
            'description' => $this->faker->paragraph(), // Deskripsi acak
        ];
    }
}
