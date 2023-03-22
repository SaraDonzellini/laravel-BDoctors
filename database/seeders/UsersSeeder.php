<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Girolamo',
                'surname' => 'De Prisco',
                'slug' =>  'girolamo-deprisco', 
                'email' =>  'girolamodeprisco@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Sandra',
                'surname' => 'Iannone',
                'slug' =>  'sandra-iannone',
                'email' => 'sandraiannone@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Marilena',
                'surname' => 'Fiorentini',
                'slug' =>  'marlinea-fiorentini',
                'email' => 'marilenafiorentini@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Mario',
                'surname' => 'Rossi',
                'slug' =>  'mario-rossi',
                'email' => 'mariorossi@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Federico',
                'surname' => 'Masotti',
                'slug' =>  'federico-masotti',
                'email' => 'federicomasotti@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Gianluigi',
                'surname' => 'Gialli',
                'slug' =>  'gianluigi-gialli',
                'email' => 'gianluigigialli@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Marco',
                'surname' => 'Verdi',
                'slug' =>  'marco-verdi',
                'email' => 'marcoverdi@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Axel',
                'surname' => 'Fiorentini',
                'slug' =>  'axel-fiorentini',
                'email' => 'axelfiorentini@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
        ];

        
        foreach ($users as $user) {
            $newUser = new User();
            $newUser->name = $user['name'];
            $newUser->surname = $user['surname'];
            $newUser->slug = Str::slug($user['name'] . ' ' . $user['surname']);
            $newUser->email = $user['email'];
            $newUser->password = $user['password'];
            $newUser->save();
        }
    }
}