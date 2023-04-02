<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorships =
            [
                [
                    'price' => '2.99',
                    'duration' => '24',
                    'specifics' =>  'bronze',
                ],
                [
                    'price' => '5.99',
                    'duration' => '72',
                    'specifics' =>  'silver',
                ],
                [
                    'price' => '9.99',
                    'duration' => '144',
                    'specifics' =>  'gold',
                ]
            ];

        foreach ($sponsorships as $sponsorship) {
            $newSponsorhip = new Sponsorship();
            $newSponsorhip->price = $sponsorship['price'];
            $newSponsorhip->duration = $sponsorship['duration'];
            $newSponsorhip->specifics = $sponsorship['specifics'];
            $newSponsorhip->save();
        }
    }
}
