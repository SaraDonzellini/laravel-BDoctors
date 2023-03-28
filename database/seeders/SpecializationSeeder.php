<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specializations = [
            [
                'title' => 'Medico di base',
                'color' => '#D6F8D6'
            ],
            [
                'title' => 'Ginecologo',
                'color' => '#7FC6A4'
            ],
            [
                'title' => 'Ortopedico',
                'color' => '#A6C48A'
            ],
            [
                'title' => 'Dermatologo',
                'color' => '#F6E7CB'
            ],
            [
                'title' => 'Psicologo',
                'color' => '#DD9787'
            ],
            [
                'title' => 'Oculista',
                'color' => '#74D3AE'
            ],
            [
                'title' => 'Urologo',
                'color' => '#EDE6E3'
            ],
            [
                'title' => 'Otorino',
                'color' => '#DADAD9'
            ],
        ];

        foreach ($specializations as $specialization) {
            $newSpecialization = new Specialization();
            $newSpecialization->title = $specialization['title'];
            $newSpecialization->color = $specialization['color'];
            $newSpecialization->save();
        }
    }
}