<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            SponsorhipSeeder::class,
            SponsorshipUserSeeder::class,
            DoctorSeeder::class,
            ReviewSeeder::class,
            SpecializationSeeder::class,
            DoctorSpecializationSeeder::class
        ]);
    }
}
