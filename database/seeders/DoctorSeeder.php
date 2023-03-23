<?php

namespace Database\Seeders;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $doctors = [
            [
                'address' => 'via Veneto, 3',
                'curriculum' => 'Navy Blue Minimalis Resumes.pdf',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '32499975312',
                'bio' => 'Laurea in Medicina e Chirurgia, Università degli Studi di Bari Aldo Moro Bari. Votazione di 110/110 e lode con plauso accademico
            Specializzazione in Ginecologia e Ostetricia, Università degli Studi di Bari Aldo Moro, Bari. Votazione 70/70 e lode
            International Fellowship Program for Advanced Training in Obstetrics and Gynecology, 2013-2016, Soroka University Medical Center, Beer Sheva, Israele'
            ],
            [
                'address' => 'via Roma, 1',
                'curriculum' => 'Verde Semplice Moderno Curriculum Vitae-1.pdf',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3332499973',
                'bio' => 'Ho conseguito la Laurea quinquennale in Psicologia (vecchio ordinamento) nel 2008.
            Ho svolto il tirocinio formativo presso il centro diurno Il Mandala di San Donato Milanese.
            Mi sono specializzato dal 2010 al 2012 in Counselling Psicologico corso tenuto da Obiettivo Psicologia scuola con sede a Roma.
            A partire da Gennaio 2010 ho svolto la libera professione collaborando con Stimulus Italia S.r.l. socetà che si occupa del benessere psicologico in azienda e di gestione e prevenzione dello stress lavoro-correlato.'
            ],
            [
                'address' => 'piazza Delle Erbe, 25',
                'curriculum' => 'Verde Semplice Moderno Curriculum Vitae-2.pdf',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '32499975343',
                'bio' => 'Medico abilitato alla professione dall’età di 24 anni. Specialista otorinolaringoiatra. Dottore di ricerca in scienze mediche cliniche e sperimentali. Master in Citologia Nasale. Esperta in rinoallergologia e in disturbi respiratori del sonno dell’età adulta e pediatrica.'
            ],
            [
                'address' => 'via Sicilia, 2',
                'curriculum' => 'Verde Semplice Moderno Curriculum Vitae-3.pdf',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '32499967312',
                'bio' => 'Laurea in Medicina e Chirurgia nel 2004.
            Specializzazione in Endocrinologia e Malattia del Ricambio nel 2009.
            Dottorato di Ricerca nel 2014 in "Scienze Endocrinologiche: Basi Molecolari dell\'Azione Ormonale".
            Esperto in Oncologia Endocrina perfezionatosi presso l\'Istituto Gustave Roussy di Parigi per la diagnosi, cura e monitoraggio dei pazienti affetti da cancro tiroideo, tumori neuroendocrini del tratto gastroenteropancreatico e carcinoma corticosurrenalico.'
            ],
            [
                'address' => 'via Garibaldi, 5',
                'curriculum' => 'Verde Semplice Moderno Curriculum Vitae-4.pdf',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3456789001',
                'bio' => 'Sono un medico-chirurgo specialista in Urologia.
            Mi sono laureata in Medicina e Chirurgia a Bologna nel 1998 e specializzata con lode nel 2003 sempre a Bologna.
            Mi occupo di prevenzione, diagnosi e trattamento delle patologie dell’apparato urogenitale maschile e femminile: calcolosi renale, le cistiti,prostatiti,incontinenza urinaria maschile e femminile, tumori delle vie genito urinarie ( prostata, vescica, rene, testicolo ) impotenza, infertilità maschile, iperplasia prostatica benigna, varicocele,fimosi,idrocele'
            ],
            [
                'address' => 'piazza Verdi, 15',
                'curriculum' => 'Verde Semplice Moderno Curriculum Vitae-5.pdf',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3336789543',
                'bio' => 'Sono un psicologo iscritta all\'Ordine degli Psicologi del Piemonte (n° 9064).
            Mi sono laureata in Psicologia Criminologica e Forense presso l\'Università di Torino e attualmente sono specializzanda in psicoterapia cognitiva-comportamentale presso la CBT Academy di Torino.
            Al mio percorso di studi ho affiancato diverse esperienze lavorative in comunità psichiatriche ed educative (area adolescenti e genitore-bambino); sono tirocinante presso il reparto di Neuropsichiatria infantile dell\'ASL AT, sede di Nizza Monferrato.'
            ],
            [
                'address' => 'Via Milano, 17',
                'curriculum' => 'Verde Semplice Moderno Curriculum Vitae-6.pdf',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3462525369',
                'bio' => 'Attraverso il colloquio offro uno spazio di ascolto, di riflessione e di comprensione. Ti aiuterò a confrontarti con le richieste interiori che possono nascere in particolari momenti della vita. La finalità è quella di promuovere il benessere nel rapporto con te stesso e con l\'altro (la tua/il tuo partner, la tua famiglia, i tuoi amici, il tuo lavoro).
            L\'emergenza che attualmente viviamo è una situazione stressante che ha messo e mette a dura prova la quotidianità di ognuno, aumentando talvolta situazioni psicologicamente difficili da attraversare. Momenti di ansia, di confusione, di non comprensione sono normali. Attraverso i colloqui ti permetterò di riflettere su strategie di adattamento ad una realtà cambiata, facendoti apprezzare la necessità dell\'evoluzione personale attraverso l\'ascolto interiore.
            Mi occupo anche di Psicologia della salute organizzativa e del rischio di stress correlato al lavoro. Da molti anni studio l\'etica della comunicazione in ambito medico e psicologico. Offro consulenza aziendale e formazione in ambito comunicativo a tutti quei professionisti che avvertono la necessità di apprendere nuovi modi di avvicinarsi alla propria utenza. Ho formalizzato l\'esperienze acquisita in questi campi attraverso pubblicazioni e convegni nazionali e internazionali (Tel Aviv, Budapest, Lisbona, Saragozza, Pisa, Lecce).'
            ],
            [
                'address' => 'Via Chieri, 19',
                'curriculum' => 'Verde Semplice Moderno Curriculum Vitae.pdf',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3462675369',
                'bio' => 'Dopo la laurea in scienze infermieristiche, il tirocinio in ospedale, e una tesi riguardante il bambino diabetico di tipo 1 e lo sport, ho capito che la nutrizione poteva fare la differenza nella prevenzione, nella gestione e nel trattamento di differenti problemi di salute, ma anche in altri ambiti, come quello sportivo.
            Ho deciso così di continuare gli studi di Biologia iniziati dopo il liceo, frequentando il corso di laurea magistrale in Biological Sciences presso l’università di Camerino e laureandomi con 110 e lode. Parallelamente ho frequentato anche il master SANIS con durata biennale spinta dalla mia passione per lo sport, che pratico da sempre.
            Durante questi anni mi sono interessata alla dieta zona, partecipando anche al convegno “Zone consultant”; così, insieme ad una collega, abbiamo studiato e commercializzato per 2 anni “La piadina della nutrizionista”, che rispettava i principi di una dieta bilanciata.'
            ],
            [
                'address' => 'Via Mancini, 159',
                'curriculum' => 'Navy Blue Minimalis Resumes.pdf',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3462658969',
                'bio' => 'Sono Dirigente Medico di I livello, in servizio presso l\'Unità Operativa Complessa di Otorinolaringoiatria del Presidio Ospedaliero " R. Dimiccoli".
            Mi sono laureato in Medicina e Chirurgia nel 2013 presso l\'Università di Bari e specializzato in Otorinolaringoiatria e Chirurgia Cervico-Facciale nel 2018 nella medesima Università.
            Ho lavorato presso Unità Operativa Complessa di Otorinolaringoiatria degli Spedali Civili di
            Brescia e ho frequentato numerosi centri di Otorino in Italia e all\'estero (Francia, Inghilterra, Germania, Malta).'
            ],
        ]; 
        $performances = ['Visita specialistica', 'Consulenza', 'Diagnosi', 'Certificazione'];

        foreach ($doctors as $doctor) {
            $newDoctor = new Doctor();
            $newDoctor->user_id = User::inRandomOrder()->first()->id;
            $newDoctor->bio = $doctor['bio'];
            $newDoctor->curriculum = $doctor['curriculum'];
            $newDoctor->photo = $doctor['photo'];
            $newDoctor->address = $doctor['address'];
            $newDoctor->phone = $doctor['phone'];
            $newDoctor->performance = $faker->randomElement($performances);
            $newDoctor->visibility = true;
            $newDoctor->save();
        }
    }
}