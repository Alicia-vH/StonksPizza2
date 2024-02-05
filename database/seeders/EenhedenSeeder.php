<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Eenheden;


class EenhedenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eenheden = [
            ['Stuks'],
            ['Schijfjes'],
            ['Plakken'],
            ['Plakjes'],
            ['Blaadjes'],

        ];

        foreach ($eenheden as $maatData) {
            $eenheidNaam = $maatData[0];

            Eenheden::create([
                'eenhedens' => $eenheidNaam,
            ]);
        }    }
}
