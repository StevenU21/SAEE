<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Estelí' => [
                'Estelí',
                'Condega',
                'La Trinidad',
                'Pueblo Nuevo',
                'San Juan de Limay',
                'San Nicolás',
                'San Sebastián de Yalí',
                'La Concordia',
            ],
            'Managua' => [
                'Managua',
                'Ciudad Sandino',
                'El Crucero',
                'Mateare',
                'San Francisco Libre',
                'San Rafael del Sur',
                'Ticuantepe',
                'Villa El Carmen',
            ],
            'Matagalpa' => [
                'Matagalpa',
                'Ciudad Darío',
                'Esquipulas',
                'Matiguás',
                'Muy Muy',
                'Rancho Grande',
                'Río Blanco',
                'San Dionisio',
                'San Isidro',
                'San Ramón',
                'Sébaco',
                'Terrabona',
            ],
            'León' => [
                'León',
                'Achuapa',
                'El Jicaral',
                'El Sauce',
                'La Paz Centro',
                'Larreynaga',
                'Nagarote',
                'Quezalguaque',
                'Santa Rosa del Peñón',
                'Telica',
            ],
            'Chinandega' => [
                'Chinandega',
                'Chichigalpa',
                'Cinco Pinos',
                'Corinto',
                'El Realejo',
                'El Viejo',
                'Posoltega',
                'Puerto Morazán',
                'San Francisco del Norte',
                'San Pedro del Norte',
                'Somotillo',
                'Villa Nueva',
            ],
            'Granada' => [
                'Granada',
                'Diriá',
                'Diriomo',
                'Nandaime',
            ],
            'Masaya' => [
                'Masaya',
                'Catarina',
                'La Concepción',
                'Masatepe',
                'Nandasmo',
                'Nindirí',
                'Niquinohomo',
                'San Juan de Oriente',
                'Tisma',
            ],
            'Carazo' => [
                'Jinotepe',
                'Diriamba',
                'Dolores',
                'El Rosario',
                'La Conquista',
                'La Paz de Carazo',
                'San Marcos',
                'Santa Teresa',
            ],
            'Rivas' => [
                'Rivas',
                'Altagracia',
                'Belén',
                'Buenos Aires',
                'Cárdenas',
                'Moyogalpa',
                'Potosí',
                'San Jorge',
                'San Juan del Sur',
                'Tola',
            ],
            'Jinotega' => [
                'Jinotega',
                'El Cuá',
                'La Concordia',
                'San Rafael del Norte',
                'San Sebastián de Yalí',
                'Santa María de Pantasma',
                'Wiwilí de Jinotega',
            ],
            'Nueva Segovia' => [
                'Ocotal',
                'Ciudad Antigua',
                'Dipilto',
                'El Jícaro',
                'Jalapa',
                'Macuelizo',
                'Murra',
                'Quilalí',
                'San Fernando',
                'Santa María',
                'Wiwilí de Nueva Segovia',
            ],
            'Madriz' => [
                'Somoto',
                'Cusmapa',
                'Las Sabanas',
                'Palacagüina',
                'San Lucas',
                'San José de Cusmapa',
                'Totogalpa',
            ],
            'Boaco' => [
                'Boaco',
                'Camoapa',
                'San José de los Remates',
                'San Lorenzo',
                'Santa Lucía',
                'Teustepe',
            ],
            'Chontales' => [
                'Juigalpa',
                'Acoyapa',
                'Comalapa',
                'El Coral',
                'La Libertad',
                'San Pedro de Lóvago',
                'Santo Domingo',
                'Santo Tomás',
                'Villa Sandino',
            ],
            'Río San Juan' => [
                'San Carlos',
                'El Almendro',
                'El Castillo',
                'Morrito',
                'San Juan del Norte',
            ],
            'Atlántico Norte' => [
                'Puerto Cabezas',
                'Bonanza',
                'Prinzapolka',
                'Rosita',
                'Siuna',
                'Waslala',
            ],
            'Atlántico Sur' => [
                'Bluefields',
                'Bocana de Paiwas',
                'El Ayote',
                'El Rama',
                'Kukra Hill',
                'Laguna de Perlas',
                'Muelle de los Bueyes',
                'Nueva Guinea',
                'Paiwas',
                'Río Blanco',
                'San Carlos',
                'Tortuguero',
            ],
        ];

        foreach ($data as $departmentName => $municipalities) {
            $department = Department::create(['name' => $departmentName]);

            foreach ($municipalities as $municipalityName) {
                Municipality::create([
                    'name' => $municipalityName,
                    'department_id' => $department->id,
                    
                ]);
            }
        }
    }
}
