<?php

namespace Database\Seeders;

use App\Models\Toy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toys = [];
        for ($i = 1; $i <= 500; $i++) {
            $toys[] = [
                'name' => fake()->text(20),
                'stock' => fake()->numberBetween(1, 50),
                'price' => fake()->randomElement([10000, 15000, 12000, 5000, 20000]),
                'desc' => fake()->paragraph(4),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        Toy::insert($toys);
    }
}
