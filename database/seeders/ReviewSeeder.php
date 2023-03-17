<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [
            [
                'name' => 'Mario',
                'surname' => 'Rossi',
                'text' => 'Ottimo prodotto, lo consiglio vivamente!',
                'vote' => 4
            ],
            [
                'name' => 'Giuseppe',
                'surname' => 'Verdi',
                'text' => 'Non sono soddisfatto del prodotto, troppo costoso.',
                'vote' => 2
            ],
            [
                'name' => 'Luigi',
                'surname' => 'Bianchi',
                'text' => 'Prodotto di media qualità, nulla di eccezionale.',
                'vote' => 3
            ],
            [
                'name' => 'Paolo',
                'surname' => 'Neri',
                'text' => 'Ho comprato questo prodotto e ne sono rimasto molto soddisfatto!',
                'vote' => 4
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Verde',
                'text' => 'Non mi piace per niente, non lo consiglio a nessuno!',
                'vote' => 1
            ],
            [
                'name' => 'Marco',
                'surname' => 'Buti',
                'text' => 'Prodotto di qualità, superiore alle mie aspettative.',
                'vote' => 4
            ]
        ];

        foreach ($reviews as $review) {
            $newReview = new Review();
            $newReview->user_id =User::inRandomOrder()->first()->id;
            $newReview->name = $review['name'];
            $newReview->surname = $review['surname'];
            $newReview->text = $review['text'];
            $newReview->vote = $review['vote'];
            $newReview->save();
        }
    }
}
