<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DoctorSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $doctors = Doctor::all();
        
        $specializationsID = Specialization::all()->pluck('id');

        foreach($doctors as $doctor) {
            $doctor->specializations()->attach($faker->randomElements($specializationsID, 2));
        }
    }
}
