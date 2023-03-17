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
            [
                'title' => 'Dentista',
                'color' => '#5BC3EB'
            ],
            [
                'title' => 'Endocrinologo',
                'color' => '#EEE0CB'
            ],
            [
                'title' => 'Neurologo',
                'color' => '#BAA898'
            ],
            [
                'title' => 'Fisioterapista',
                'color' => '#BFD7EA'
            ],
            [
                'title' => 'Pediatra',
                'color' => '#FAF8D4'
            ],
            [
                'title' => 'Psicoterapeuta',
                'color' => '#EBDCCB'
            ],
            [
                'title' => 'Andrologo',
                'color' => '#C3BAAA'
            ],
            [
                'title' => 'Proctologo',
                'color' => '#B2A3B5'
            ],
            [
                'title' => 'Logopedista',
                'color' => '#B098A4'
            ],
            [
                'title' => 'Medico competente',
                'color' => '#DBD9DB'
            ],
            [
                'title' => 'Sessuologo',
                'color' => '#E5EBEA'
            ],
            [
                'title' => 'Chirurgo pediatrico',
                'color' => '#F0A202'
            ],
            [
                'title' => 'Medico genetista',
                'color' => '#DB995A'
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