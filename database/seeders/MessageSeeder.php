<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use app\Models\User;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 15; $i++) {
            $newMessage = new Message();
            $newMessage->user_id = User::inRandomOrder()->first()->id;
            $newMessage->name = $faker->unique()->firstName();
            $newMessage->surname = $faker->unique()->lastName();
            $newMessage->text = $faker->unique()->realText();
            $newMessage->email = $faker->unique()->email();;
            $newMessage->save();
        }
    }
}
