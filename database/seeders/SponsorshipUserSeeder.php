<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SponsorshipUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        $sponsorshipsIds = Sponsorship::all()->pluck('id');

        foreach ($users as $user) {
            $user->sponsorhips()->attach($faker->randomElements($sponsorshipsIds, 1));
        }
    }
}
