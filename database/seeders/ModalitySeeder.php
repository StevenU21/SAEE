<?php

namespace Database\Seeders;

use App\Models\Modality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modality = [
            'Matutino',
            'Vespertino',
            'Nocturno',
            'Sabatino',
            'Domingo',
            'Diurno',
        ];

        foreach ($modality as $modalityName) {
            Modality::create([
                'name' => $modalityName,
            ]);
        }
    }
}
