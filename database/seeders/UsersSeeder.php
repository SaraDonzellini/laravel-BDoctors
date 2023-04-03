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
            [
                'name' => 'Giovanni',
                'surname' => 'Spada',
                'slug' =>  'giovanni-spada',
                'email' => 'giovannispada@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Gianfranco',
                'surname' => 'Sassi',
                'slug' =>  'gianfranco-sassi',
                'email' => 'gianfrancosassi@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Maria',
                'surname' => 'Masala',
                'slug' =>  'gianfranco-masala',
                'email' => 'gianfrancomasala@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Mariangela',
                'surname' => 'Campani',
                'slug' =>  'mariangela-campani',
                'email' => 'mariangelacampani@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Gianni',
                'surname' => 'Pincopallo',
                'slug' =>  'gianni-pincopallo',
                'email' => 'giannipincopallo@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Matteo',
                'surname' => 'Canali',
                'slug' =>  'matteo-canali',
                'email' => 'matteocanali@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Enrico',
                'surname' => 'Colombo',
                'slug' =>  'enrico-colombo',
                'email' => 'enricocolombo@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Antonio',
                'surname' => 'Fontana',
                'slug' =>  'antonio-fontana',
                'email' => 'antoniofontana@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Marta',
                'surname' => 'Barbieri',
                'slug' =>  'marta-barbieri',
                'email' => 'martabarbieri@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Camilla',
                'surname' => 'Amato',
                'slug' =>  'camilla-amato',
                'email' => 'camillaamato@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Martina',
                'surname' => 'Serra',
                'slug' =>  'martina-serra',
                'email' => 'martinaserra@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Alessio',
                'surname' => 'Gentile',
                'slug' =>  'alessio-gentile',
                'email' => 'alessiogentile@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            

            [
                'name' => 'Barbara',
                'surname' => 'Ginzella',
                'slug' =>  'barbara-ginzella', 
                'email' =>  'barbaraginzella@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Franchino',
                'surname' => 'Salami',
                'slug' =>  'franchino-salami',
                'email' => 'franchinosalami@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Roberta',
                'surname' => 'Gengisca',
                'slug' =>  'roberta-gengisca',
                'email' => 'robertagengisca@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Ciro',
                'surname' => 'Esposito',
                'slug' =>  'ciro-esposito',
                'email' => 'ciroesposito@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Bambi',
                'surname' => 'BergamoAlta',
                'slug' =>  'bambi-bergamoalta',
                'email' => 'bambibergamoalta@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Genoveffo',
                'surname' => 'Francopalli',
                'slug' =>  'genoveffo-francopalli',
                'email' => 'genoveffofrancopalli@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Michelangela',
                'surname' => 'Da vinci',
                'slug' =>  'michelangela-davinci',
                'email' => 'michelangeladavinci@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Pippo',
                'surname' => 'Piccioni',
                'slug' =>  'pippo-piccioni',
                'email' => 'pippopiccioni@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Checco',
                'surname' => 'Gatti',
                'slug' =>  'checco-gatti',
                'email' => 'checcogatti@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Falco',
                'slug' =>  'giovanni-falco',
                'email' => 'giovannifalco@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Bruno',
                'surname' => 'Vino',
                'slug' =>  'bruno-vino',
                'email' => 'brunovino@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Muchacha',
                'slug' =>  'giovanni-muchacha',
                'email' => 'giovannimuchachai@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Jhonny',
                'surname' => 'Bravo',
                'slug' =>  'jhonny-bravo',
                'email' => 'jhonnybravo@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Angela',
                'surname' => 'Diavoli',
                'slug' =>  'angela-diavoli',
                'email' => 'angeladiavoli@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Francesco',
                'surname' => 'Schettino',
                'slug' =>  'francesco-schettino',
                'email' => 'francescoschettino@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Gandhi',
                'surname' => 'Spartano',
                'slug' =>  'gandhi-spartano',
                'email' => 'gandhispartano@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Giosuè',
                'surname' => 'Lazzari',
                'slug' =>  'giosuè-lazzari',
                'email' => 'giosuèlazzari@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'David',
                'surname' => 'Tennant',
                'slug' =>  'David-tennant',
                'email' => 'davidtennant@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Carla',
                'surname' => 'Magnante',
                'slug' =>  'carla-magnante',
                'email' => 'carlamagnante@gmail.com',
                'password'  => Hash::make('testtest'),
            ],
            [
                'name' => 'Dario',
                'surname' => 'Moccia',
                'slug' =>  'dario-moccia',
                'email' => 'dariomoccia@gmail.com',
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