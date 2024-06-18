<?php

namespace Database\Seeders;

use App\Models\Center;
use App\Models\Modality;
use App\Models\Student;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([MunicipalitySeeder::class]);

        Center::factory(5)->create();
        $this->call([ModalitySeeder::class]);
        $this->call([SexSeeder::class]);
        $this->call([CareerSeeder::class]);
        Student::factory(50)->create();
    }
}
