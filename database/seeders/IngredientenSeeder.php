<?php

namespace Database\Seeders;

use App\Models\Ingredienten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredienten = [
            ['Ananas', 0.25],
            ['Kaas', 0.20],
            ['Salami', 0.30],
            ['Bacon', 0.30],
            ['Kip', 0.35],
            ['Rundvlees', 0.30],
            ['Champion', 0.25],
            ['Paprika', 0.20],
            ['Courgette', 0.25],

        ];

        foreach ($ingredienten as $ingredientData) {
            $ingredientNaam = $ingredientData[0];
            $prijs = $ingredientData[1];

            Ingredienten::create([
                'topping' => $ingredientNaam,
                'prijs' => $prijs,
            ]);
        }
    }
}
