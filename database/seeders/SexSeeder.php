<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Masculino',
            'Femenino',

        ];

        foreach ($data as $sexName) {
            \App\Models\Sex::create([
                'name' => $sexName,
            ]);
        }
    }
}
