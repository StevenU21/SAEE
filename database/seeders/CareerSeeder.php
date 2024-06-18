<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Career;
use App\Models\Center;
use App\Models\Modality;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Ciencia_Tecnologia_y_Salud' => [
                'Agronómica' => [
                    'Biología',
                    'Química',
                    'Matemáticas',
                    'Física',
                    'Tecnología Agrícola'
                ],
                'Agroindustrial' => [
                    'Biología',
                    'Química de Alimentos',
                    'Microbiología',
                    'Procesos Industriales',
                    'Tecnología de Alimentos'
                ],
                'Sistemas de Información' => [
                    'Programación',
                    'Bases de Datos',
                    'Redes de Computadoras',
                    'Ingeniería de Software',
                    'Inteligencia Artificial'
                ],
                'Enfermería con Orientación Materno Infantil' => [
                    'Anatomía',
                    'Fisiología',
                    'Cuidados Maternos',
                    'Cuidados Infantiles',
                    'Nutrición'
                ],
                'Ciencias Médicas' => [
                    'Anatomía',
                    'Fisiología',
                    'Bioquímica',
                    'Farmacología',
                    'Patología'
                ],
                'Medicina' => [
                    'Anatomía',
                    'Fisiología',
                    'Patología',
                    'Farmacología',
                    'Medicina Interna'
                ],
            ],
            'Ciencias_de_la_Educación_y_Humanidades' => [
                'Psicología' => [
                    'Introducción a la Psicología',
                    'Psicología del Desarrollo',
                    'Psicopatología',
                    'Psicología Clínica',
                    'Neuropsicología'
                ],
                'Inglés' => [
                    'Fonética y Fonología',
                    'Gramática Inglesa',
                    'Literatura Inglesa',
                    'Didáctica del Inglés',
                    'Traducción e Interpretación'
                ],
                'Ciencias Sociales' => [
                    'Sociología',
                    'Antropología',
                    'Historia Social',
                    'Teoría Social',
                    'Investigación Social'
                ],
                'Trabajo Social' => [
                    'Fundamentos del Trabajo Social',
                    'Política Social',
                    'Métodos de Intervención Social',
                    'Trabajo Social Comunitario',
                    'Ética Profesional'
                ],
                'Educación Física y Deportes' => [
                    'Anatomía del Ejercicio',
                    'Fisiología del Ejercicio',
                    'Entrenamiento Deportivo',
                    'Didáctica de la Educación Física',
                    'Rehabilitación Deportiva'
                ],
                'Lengua y Literatura Hispánica' => [
                    'Gramática Española',
                    'Literatura Hispanoamericana',
                    'Linguística',
                    'Teoría Literaria',
                    'Escritura Creativa'
                ],
                'Ciencias Naturales' => [
                    'Biología',
                    'Química',
                    'Física',
                    'Geología',
                    'Ecología'
                ],
                'Turismo Sostenible' => [
                    'Ecoturismo',
                    'Gestión Ambiental',
                    'Planificación Turística',
                    'Marketing Turístico',
                    'Desarrollo Comunitario'
                ],
                'Física - Matemática' => [
                    'Cálculo',
                    'Álgebra',
                    'Física General',
                    'Ecuaciones Diferenciales',
                    'Estadística'
                ],
                'Pedagogía con mención en Educación Infantil' => [
                    'Psicología Infantil',
                    'Didáctica de la Educación Infantil',
                    'Desarrollo Cognitivo',
                    'Educación Inclusiva',
                    'Juegos y Dinámicas Infantiles'
                ],
            ],
            'Ciencias_Económicas_y_Administrativas' => [
                'Contaduría Pública y Finanzas' => [
                    'Contabilidad General',
                    'Finanzas Corporativas',
                    'Auditoría',
                    'Impuestos',
                    'Economía Financiera'
                ],
                'Administración de Empresas' => [
                    'Principios de Administración',
                    'Gestión de Recursos Humanos',
                    'Marketing',
                    'Contabilidad',
                    'Estrategia Empresarial'
                ],
                'Mercadotecnia' => [
                    'Investigación de Mercados',
                    'Publicidad',
                    'Comportamiento del Consumidor',
                    'Marketing Digital',
                    'Gestión de Ventas'
                ],
                'Banca y Finanzas' => [
                    'Economía Bancaria',
                    'Gestión Financiera',
                    'Mercados Financieros',
                    'Contabilidad Bancaria',
                    'Derecho Bancario'
                ],
                'Economía' => [
                    'Microeconomía',
                    'Macroeconomía',
                    'Econometría',
                    'Historia Económica',
                    'Política Económica'
                ],
            ]
        ];

        // foreach ($data as $areaName => $careers) {
        //     $area = Area::create(['name' => $areaName]);

        //     foreach ($careers as $careersName) {
        //         Career::create([
        //             'name' => $careersName,
        //             'area_id' => $area->id,
        //             'center_id' => Center::inRandomOrder()->first()->id,
        //             'modality_id' => Modality::inRandomOrder()->first()->id,
        //         ]);
        //     }
        // }

        foreach ($data as $areaName => $careers) {
            $area = Area::create(['name' => $areaName]);

            foreach ($careers as $careerName => $subjects) {
                $career = Career::create([
                    'name' => $careerName,
                    'area_id' => $area->id,
                    'center_id' => Center::inRandomOrder()->first()->id,
                    'modality_id' => Modality::inRandomOrder()->first()->id,
                ]);

                foreach ($subjects as $subjectName) {
                    Subject::create([
                        'name' => $subjectName,
                        'career_id' => $career->id,
                    ]);
                }
            }
        }
    }
}
