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
                'curriculum' => 'imgs/Curriculum_1.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '32499975312',
                'bio' => 'Laurea in Medicina e Chirurgia, Università degli Studi di Bari Aldo Moro Bari. Votazione di 110/110 e lode con plauso accademico
            Specializzazione in Ginecologia e Ostetricia, Università degli Studi di Bari Aldo Moro, Bari. Votazione 70/70 e lode
            International Fellowship Program for Advanced Training in Obstetrics and Gynecology, 2013-2016, Soroka University Medical Center, Beer Sheva, Israele'
            ],
            [
                'address' => 'via Roma, 1',
                'curriculum' => 'imgs/Curriculum_2.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3332499973',
                'bio' => 'Ho conseguito la Laurea quinquennale in Psicologia (vecchio ordinamento) nel 2008.
            Ho svolto il tirocinio formativo presso il centro diurno Il Mandala di San Donato Milanese.
            Mi sono specializzato dal 2010 al 2012 in Counselling Psicologico corso tenuto da Obiettivo Psicologia scuola con sede a Roma.
            A partire da Gennaio 2010 ho svolto la libera professione collaborando con Stimulus Italia S.r.l. socetà che si occupa del benessere psicologico in azienda e di gestione e prevenzione dello stress lavoro-correlato.'
            ],
            [
                'address' => 'piazza Delle Erbe, 25',
                'curriculum' => 'imgs/Curriculum_3.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '32499975343',
                'bio' => 'Medico abilitato alla professione dall’età di 24 anni. Specialista otorinolaringoiatra. Dottore di ricerca in scienze mediche cliniche e sperimentali. Master in Citologia Nasale. Esperta in rinoallergologia e in disturbi respiratori del sonno dell’età adulta e pediatrica.'
            ],
            [
                'address' => 'via Sicilia, 2',
                'curriculum' => 'imgs/Curriculum_4.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '32499967312',
                'bio' => 'Laurea in Medicina e Chirurgia nel 2004.
            Specializzazione in Endocrinologia e Malattia del Ricambio nel 2009.
            Dottorato di Ricerca nel 2014 in "Scienze Endocrinologiche: Basi Molecolari dell\'Azione Ormonale".
            Esperto in Oncologia Endocrina perfezionatosi presso l\'Istituto Gustave Roussy di Parigi per la diagnosi, cura e monitoraggio dei pazienti affetti da cancro tiroideo, tumori neuroendocrini del tratto gastroenteropancreatico e carcinoma corticosurrenalico.'
            ],
            [
                'address' => 'via Garibaldi, 5',
                'curriculum' => 'imgs/Curriculum_5.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3456789001',
                'bio' => 'Sono un medico-chirurgo specialista in Urologia.
            Mi sono laureata in Medicina e Chirurgia a Bologna nel 1998 e specializzata con lode nel 2003 sempre a Bologna.
            Mi occupo di prevenzione, diagnosi e trattamento delle patologie dell’apparato urogenitale maschile e femminile: calcolosi renale, le cistiti,prostatiti,incontinenza urinaria maschile e femminile, tumori delle vie genito urinarie ( prostata, vescica, rene, testicolo ) impotenza, infertilità maschile, iperplasia prostatica benigna, varicocele,fimosi,idrocele'
            ],
            [
                'address' => 'piazza Verdi, 15',
                'curriculum' => 'imgs/Curriculum_6.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3336789543',
                'bio' => 'Sono un psicologo iscritta all\'Ordine degli Psicologi del Piemonte (n° 9064).
            Mi sono laureata in Psicologia Criminologica e Forense presso l\'Università di Torino e attualmente sono specializzanda in psicoterapia cognitiva-comportamentale presso la CBT Academy di Torino.
            Al mio percorso di studi ho affiancato diverse esperienze lavorative in comunità psichiatriche ed educative (area adolescenti e genitore-bambino); sono tirocinante presso il reparto di Neuropsichiatria infantile dell\'ASL AT, sede di Nizza Monferrato.'
            ],
            [
                'address' => 'Via Milano, 17',
                'curriculum' => 'imgs/Curriculum_1.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3462525369',
                'bio' => 'Attraverso il colloquio offro uno spazio di ascolto, di riflessione e di comprensione. Ti aiuterò a confrontarti con le richieste interiori che possono nascere in particolari momenti della vita. La finalità è quella di promuovere il benessere nel rapporto con te stesso e con l\'altro (la tua/il tuo partner, la tua famiglia, i tuoi amici, il tuo lavoro).
            L\'emergenza che attualmente viviamo è una situazione stressante che ha messo e mette a dura prova la quotidianità di ognuno, aumentando talvolta situazioni psicologicamente difficili da attraversare. Momenti di ansia, di confusione, di non comprensione sono normali. Attraverso i colloqui ti permetterò di riflettere su strategie di adattamento ad una realtà cambiata, facendoti apprezzare la necessità dell\'evoluzione personale attraverso l\'ascolto interiore.
            Mi occupo anche di Psicologia della salute organizzativa e del rischio di stress correlato al lavoro. Da molti anni studio l\'etica della comunicazione in ambito medico e psicologico. Offro consulenza aziendale e formazione in ambito comunicativo a tutti quei professionisti che avvertono la necessità di apprendere nuovi modi di avvicinarsi alla propria utenza. Ho formalizzato l\'esperienze acquisita in questi campi attraverso pubblicazioni e convegni nazionali e internazionali (Tel Aviv, Budapest, Lisbona, Saragozza, Pisa, Lecce).'
            ],
            [
                'address' => 'Via Chieri, 19',
                'curriculum' => 'imgs/Curriculum_2.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3462675369',
                'bio' => 'Dopo la laurea in scienze infermieristiche, il tirocinio in ospedale, e una tesi riguardante il bambino diabetico di tipo 1 e lo sport, ho capito che la nutrizione poteva fare la differenza nella prevenzione, nella gestione e nel trattamento di differenti problemi di salute, ma anche in altri ambiti, come quello sportivo.
            Ho deciso così di continuare gli studi di Biologia iniziati dopo il liceo, frequentando il corso di laurea magistrale in Biological Sciences presso l’università di Camerino e laureandomi con 110 e lode. Parallelamente ho frequentato anche il master SANIS con durata biennale spinta dalla mia passione per lo sport, che pratico da sempre.
            Durante questi anni mi sono interessata alla dieta zona, partecipando anche al convegno “Zone consultant”; così, insieme ad una collega, abbiamo studiato e commercializzato per 2 anni “La piadina della nutrizionista”, che rispettava i principi di una dieta bilanciata.'
            ],
            [
                'address' => 'Via Mancini, 159',
                'curriculum' => 'imgs/Curriculum_3.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3462658969',
                'bio' => 'Sono Dirigente Medico di I livello, in servizio presso l\'Unità Operativa Complessa di Otorinolaringoiatria del Presidio Ospedaliero " R. Dimiccoli".
            Mi sono laureato in Medicina e Chirurgia nel 2013 presso l\'Università di Bari e specializzato in Otorinolaringoiatria e Chirurgia Cervico-Facciale nel 2018 nella medesima Università.
            Ho lavorato presso Unità Operativa Complessa di Otorinolaringoiatria degli Spedali Civili di
            Brescia e ho frequentato numerosi centri di Otorino in Italia e all\'estero (Francia, Inghilterra, Germania, Malta).'
            ],
            [
                'address' => 'Viale Mameli, 29',
                'curriculum' => 'imgs/Curriculum_4.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3462657486',
                'bio' => 'Dottore con laurea in Medicina e chirurgia dal 1991 ottenuta a Torino. Sono iscritto all\'albo Provinciale dei Medici Chirurghi di TORINO dal 25/05/1992. Attualmente lavora in provincia di TO.
            Mi occupo della prevenzione, della valutazione e della cura delle malattie che coinvolgono la popolazione anziana (Malattia di Alzheimer e Demenze, Malattia di Parkinson e Disturbi del Movimento, Malattie Cerebrovascolari,valutazione della non autosufficienza con certificazione per pensione d\'invalidità e di accompagno e legge 104, completi di scale di valutazione ),effettuando Test per Disturbi della Memoria e della Cognitività, dell\'Umore e del Comportamento, affrontando non solo le problematiche cliniche acute, post-acute e croniche , ma anche quelle psicologiche e socio-economiche.'
            ],
            [
                'address' => 'Viale Umberto, 133',
                'curriculum' => 'imgs/Curriculum_5.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3462657253',
                'bio' => 'Effettuo refertazioni e counseling di test genetici per la valutazione del rischio di sviluppare patologie neurodegenerative.
            Nel 2016 mi sono perfezionato in Medicina Preventiva Potenziativa Anti- Aging che è una medicina predittiva in quanto, grazie ai tests genetici, può predire lo sviluppo di un processo patologico, in qualsiasi cellula dell’organismo; è una medicina integrale perchè analizza globalmente ed in tempo reale i fenomeni fisiologici e/o patologici delle nostre cellule; è una medicina preventiva perchè grazie alla conoscenza di ciò che sta o può verificarsi nell’immediato o prossimo o lontano futuro, può consentire di mettere in atto interventi capaci di prevenire, modificare, rallentare, annullare o spostare nel tempo, tali fenomeni biologici; è una medicina rigenerativa in quanto capace di intervenire direttamente sui meccanismi di rigenerazione cellulare; è medicina complementare e integrativa perchè si collega direttamente alla medicina convenzionale, con tempi e modalità di estrinsecazione diverse.
            Effettuo inoltre trattamenti con ossigeno-ozonoterapia.'
            ],
            [
                'address' => 'Via Flexbox, 36',
                'curriculum' => 'imgs/Curriculum_6.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3532677253',
                'bio' => 'Durante questi 11 anni di esperienza mi sono confrontato con tantissime persone a cui ho dato supporto psicologico su diverse tematiche tra cui ad esempio la gestione dello stress in ambito lavorativo, problematiche di coppia, ansia, gestione del cambiamento, gestione dei conflitti, empowerment, disabilità, identità di genere work life balance a interventi in azienda in situazioni di emergenza.
            La mia metodologia di lavoro si basa sul qui ed ora, sul momento presente.
            In base alla problematica che viene portata all\'interno dei colloqui si troverà la strategia più efficace per ritrovare il benessere psicologico.
            Il mio è un approccio centrato sulla persona, dove poter parlare delle proprie problematiche con un professionista competente e pronto ad ascoltarti nel pieno rispetto dei tuoi tempi.
            Troveremo durante il percorso le strategie e le risorse per gestire al meglio le situazioni problematiche e ritrovare il benessere psicofisico.
            Il primo colloquio è gratuito, dura 30 minuti e ha la finalità di valutare la possibilità di lavorare insieme rispetto alla problematica che viene portata.
            È possibile anche acquistare pacchetti di visite per una maggiore convenienza.'
            ],
            [
                'address' => 'Via XX Settembre, 12',
                'curriculum' => 'imgs/Curriculum_1.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3532676123',
                'bio' => 'Mi occupo anche di Psicologia della salute organizzativa e del rischio di stress correlato al lavoro. Da molti anni studio l\'etica della comunicazione in ambito medico e psicologico. Offro consulenza aziendale e formazione in ambito comunicativo a tutti quei professionisti che avvertono la necessità di apprendere nuovi modi di avvicinarsi alla propria utenza. Ho formalizzato l\'esperienze acquisita in questi campi attraverso pubblicazioni e convegni nazionali e internazionali (Tel Aviv, Budapest, Lisbona, Saragozza, Pisa, Lecce).
            Queste esperienze mi hanno permesso di sviluppare, inoltre, metodologie innovative nell\'ambito della progettazione in ambito sociale (locale, nazionale ed europeo). Per questo motivo, assieme al colloquio individuale, propongo interventi dedicati al gruppo, per attraversare ostacoli che possono presentarsi in ambito comunicativo.
            Infine, mi occupo di Communication Assessment per l\'impresa, fornendo analisi di valenza etica ed efficacia strategica nei piani di comunicazione adottati dalle aziende. Quest\' intervento si innesta nell\' ambito della Psicologia del lavoro.'
            ],
            [
                'address' => 'Via Luca Pacioli, 88',
                'curriculum' => 'imgs/Curriculum_2.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3531596123',
                'bio' => 'Concluso il percorso universitario, ho lavorato per i 2 anni successivi in un’azienda alimentare dove mi occupavo di Ricerca e Sviluppo e Controllo Qualità, esperienza che mi ha permesso di studiare e mettere in pratica la tecnologia che si trova dietro gli alimenti e mi ha dato una visione a 360° del mondo alimentare.
            Terminata anche quest’esperienza che cerco di utilizzare anche nel mio attuale lavoro, ho deciso di dedicarmi a tempo pieno al lavoro di Nutrizionista continuando a formarmi in tutti i campi, con un\' attenzione particolare, soprattutto nell’ultimo anno alla Dieta chetogenica, VLCKD e frequentando il 18° corso di alimentazione e nutrizione umana dove sono stati trattati i seguenti argomenti: Approccio nutrizionale nel bambino, nell\'adulto e nell\'anziano, dieta chetogenica, ciclizzazione, digiuno intermittente, dieta mima digiuno, alimentazione nella donna in condizioni fisiologiche e patologiche, protocollo autoimmune, alimentazione vegetale e disturbi del comportamento alimentare.
            Attualmente iscritta al primo anno di Scienze e tecniche psicologiche.'
            ],
            [
                'address' => 'Via Fratelli Rosselli, 117',
                'curriculum' => 'imgs/Curriculum_3.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3531578852',
                'bio' => 'Nel 2016 mi sono perfezionato in Medicina Preventiva Potenziativa Anti- Aging che è una medicina predittiva in quanto, grazie ai tests genetici, può predire lo sviluppo di un processo patologico, in qualsiasi cellula dell’organismo; è una medicina integrale perchè analizza globalmente ed in tempo reale i fenomeni fisiologici e/o patologici delle nostre cellule; è una medicina preventiva perchè grazie alla conoscenza di ciò che sta o può verificarsi nell’immediato o prossimo o lontano futuro, può consentire di mettere in atto interventi capaci di prevenire, modificare, rallentare, annullare o spostare nel tempo, tali fenomeni biologici; è una medicina rigenerativa in quanto capace di intervenire direttamente sui meccanismi di rigenerazione cellulare; è medicina complementare e integrativa perchè si collega direttamente alla medicina convenzionale, con tempi e modalità di estrinsecazione diverse.
            Effettuo inoltre trattamenti con ossigeno-ozonoterapia.'
            ],
            [
                'address' => 'Via del Lavoro, 75',
                'curriculum' => 'imgs/Curriculum_4.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3125678852',
                'bio' => 'Laurea in Medicina e Chirurgia nel 2004.
            Specializzazione in Endocrinologia e Malattia del Ricambio nel 2009.
            Dottorato di Ricerca nel 2014 in "Scienze Endocrinologiche: Basi Molecolari dell\'Azione Ormonale".
            Esperto in Oncologia Endocrina perfezionatosi presso l\'Istituto Gustave Roussy di Parigi per la diagnosi, cura e monitoraggio dei pazienti affetti da cancro tiroideo, tumori neuroendocrini del tratto gastroenteropancreatico e carcinoma corticosurrenalico.'
            ],
            [
                'address' => 'Via Leonardo da Vinci, 324',
                'curriculum' => 'imgs/Curriculum_5.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3121218852',
                'bio' => 'Ho conseguito la Laurea quinquennale in Psicologia (vecchio ordinamento) nel 2008.
            Ho svolto il tirocinio formativo presso il centro diurno Il Mandala di San Donato Milanese.
            Mi sono specializzato dal 2010 al 2012 in Counselling Psicologico corso tenuto da Obiettivo Psicologia scuola con sede a Roma.
            A partire da Gennaio 2010 ho svolto la libera professione collaborando con Stimulus Italia S.r.l. socetà che si occupa del benessere psicologico in azienda e di gestione e prevenzione dello stress lavoro-correlato.
            In particolare mi sono occupato della gestione delle chiamate entranti al numero verde messo a disposizione dei dipendenti di aziende convenzionate che possono contattare il servizio 24 ore su 24 per ricevere supporto psicologico o effettuare video consulenze per problematiche riguardanti la sfera personale piuttosto che professionale.'
            ],
            [
                'address' => 'Via Silvio Pellico, 24',
                'curriculum' => 'imgs/Curriculum_6.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3175218852',
                'bio' => 'Sono un medico-chirurgo specialista in Urologia.
            Mi sono laureata in Medicina e Chirurgia a Bologna nel 1998 e specializzata con lode nel 2003 sempre a Bologna.
            Mi occupo di prevenzione, diagnosi e trattamento delle patologie dell’apparato urogenitale maschile e femminile: calcolosi renale, le cistiti,prostatiti,incontinenza urinaria maschile e femminile, tumori delle vie genito urinarie ( prostata, vescica, rene, testicolo ) impotenza, infertilità maschile, iperplasia prostatica benigna, varicocele,fimosi,idrocele'
            ],
            [
                'address' => 'Via S. Costanzo, 158',
                'curriculum' => 'imgs/Curriculum_1.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3175218852',
                'bio' => 'Sono Dirigente Medico di I livello, in servizio presso l\'Unità Operativa Complessa di Otorinolaringoiatria del Presidio Ospedaliero " R. Dimiccoli".
            Mi sono laureato in Medicina e Chirurgia nel 2013 presso l\'Università di Bari e specializzato in Otorinolaringoiatria e Chirurgia Cervico-Facciale nel 2018 nella medesima Università.
            Ho lavorato presso Unità Operativa Complessa di Otorinolaringoiatria degli Spedali Civili di
            Brescia e ho frequentato numerosi centri di Otorino in Italia e all\'estero (Francia, Inghilterra, Germania, Malta).'
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_2.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => 'Dottore con laurea in Medicina e chirurgia dal 1991 ottenuta a Torino. Sono iscritto all\'albo Provinciale dei Medici Chirurghi di TORINO dal 25/05/1992. Attualmente lavora in provincia di TO.
            Mi occupo della prevenzione, della valutazione e della cura delle malattie che coinvolgono la popolazione anziana (Malattia di Alzheimer e Demenze, Malattia di Parkinson e Disturbi del Movimento, Malattie Cerebrovascolari,valutazione della non autosufficienza con certificazione per pensione d\'invalidità e di accompagno e legge 104, completi di scale di valutazione ),effettuando Test per Disturbi della Memoria e della Cognitività, dell\'Umore e del Comportamento, affrontando non solo le problematiche cliniche acute, post-acute e croniche , ma anche quelle psicologiche e socio-economiche.'
            ],
            [
                'address' => 'Via Roma 1, Milano',
                'curriculum' => 'imgs/Curriculum_1.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => 'Sono appassionato del mio lavoro e dedico tutto il mio tempo a migliorare la vita dei miei pazienti. Ho una vasta esperienza in interventi di rinoplastica, liposuzione e mastoplastica additiva.'
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/curriculum_3.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => 'Ho scelto di dedicarmi alla cura della salute delle donne e mi sono specializzata in particolare nella diagnosi e terapia delle patologie del sistema riproduttivo femminile. Sono una professionista attenta, empatica e disponibile.'
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/curriculum_5.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => 'Offro ai miei pazienti una vasta gamma di servizi sanitari, dalla prevenzione alla diagnosi e cura di patologie comuni. Sono sempre disponibile per ascoltare le loro esigenze e fornire loro le migliori cure possibili.'
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/curriculum_3.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => 'Offro un approccio integrato alla cura della salute mentale, utilizzando tecniche cognitive, comportamentali e psicodinamiche per aiutare i miei pazienti a superare le difficoltà. Sono appassionato del mio lavoro e credo che la salute mentale sia un diritto di tutti.'
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/curriculum_3.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => 'Offro servizi di igiene dentale, sbiancamento, riabilitazione protesica e implantologia. Sono sempre disponibile a rispondere alle domande dei miei pazienti e a fornire loro la migliore assistenza possibile.'
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/curriculum_1.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => 'Sono specializzato nella diagnosi e cura delle patologie della pelle, dalla dermatite atopica alle malattie autoimmuni. Utilizzo le tecniche più avanzate e innovative per garantire ai miei pazienti il miglior trattamento possibile.'
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/curriculum_3.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Ho una vasta esperienza nella cura della salute dei bambini, dalla nascita all'adolescenza. Offro servizi di prevenzione, diagnosi e cura di patologie comuni, ma anche di disturbi dello sviluppo e della crescita. Sono sempre a disposizione dei genitori per rispondere alle loro domande e fornire loro il supporto necessario."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/curriculum_2.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Offro servizi di prevenzione, diagnosi e cura delle malattie cardiovascolari, dal controllo della pressione arteriosa alla gestione dell'infarto del miocardio. Sono appassionato della mia professione e lavoro ogni giorno per garantire ai miei pazienti la migliore qualità della vita possibile."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_5.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Ho una vasta esperienza nella diagnosi e cura delle malattie del sistema nervoso, dal morbo di Alzheimer all'ictus. Utilizzo le tecniche più avanzate per garantire ai miei pazienti il miglior trattamento possibile. Sono sempre disponibile per ascoltare le loro esigenze e fornire loro il supporto necessario."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_4.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Offro servizi di diagnosi e cura dei disturbi mentali, dal disturbo bipolare alla schizofrenia. Utilizzo un approccio integrato che comprende psicoterapia, farmacoterapia e altre tecniche. Sono appassionata del mio lavoro e credo che ogni paziente meriti un approccio personalizzato e attento alle sue esigenze."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_4.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Sono specializzato nella diagnosi e cura delle patologie dell'apparato muscolo-scheletrico, dalle fratture alle malattie articolari. Offro servizi di consulenza, terapia fisica, riabilitazione e chirurgia ortopedica. Sono sempre a disposizione dei miei pazienti per rispondere alle loro domande e fornire loro la migliore assistenza possibile."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_2.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Sono specializzata nella diagnosi e cura delle patologie del sistema endocrino, dal diabete all'ipotiroidismo. Offro servizi di consulenza, terapia farmacologica e monitoraggio della salute endocrina. Sono sempre a disposizione dei miei pazienti per fornire loro il supporto necessario."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_1.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Sono specializzato nella diagnosi e cura delle patologie del sistema uro-genitale maschile, dalla prostatite all'ipertrofia prostatica benigna. Offro servizi di consulenza, terapia farmacologica e chirurgia urologica. Sono sempre a disposizione dei miei pazienti per rispondere alle loro domande e fornire loro il supporto necessario."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_3.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Sono specializzata nella diagnosi e cura delle patologie della pelle, dalle dermatiti alle neoplasie cutanee. Offro servizi di consulenza, terapia farmacologica e chirurgia dermatologica. Sono sempre a disposizione dei miei pazienti per rispondere alle loro domande e fornire loro il supporto necessario."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_5.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Sono specializzato nella diagnosi e cura delle patologie del cuore, dalle aritmie alle malattie coronariche. Offro servizi di consulenza, terapia farmacologica, monitoraggio della salute cardiaca e interventi chirurgici. Sono sempre a disposizione dei miei pazienti per fornire loro il supporto necessario."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_5.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Sono specializzata nella diagnosi e cura delle patologie dell'apparato genitale femminile, dal papilloma virus alle malattie dell'utero. Offro servizi di consulenza, terapia farmacologica e chirurgia ginecologica. Sono sempre a disposizione delle mie pazienti per rispondere alle loro domande e fornire loro il supporto necessario."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_4.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Sono specializzato nella diagnosi e cura delle patologie degli occhi, dal glaucoma alla degenerazione maculare. Offro servizi di consulenza, terapia farmacologica, correzione visiva e chirurgia oftalmica. Sono sempre a disposizione dei miei pazienti per fornire loro il supporto necessario."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_3.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Sono specializzata nella diagnosi e cura delle patologie dei bambini, dalla febbre alle malattie respiratorie. Offro servizi di consulenza, monitoraggio della crescita e dello sviluppo, terapia farmacologica e vaccinazioni. Sono sempre a disposizione dei miei piccoli pazienti e delle loro famiglie per rispondere alle loro domande e fornire loro il supporto necessario."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_1.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Sono specializzato nella diagnosi e cura delle patologie dei polmoni, dall'asma alla broncopneumopatia cronica ostruttiva. Offro servizi di consulenza, terapia farmacologica, monitoraggio della funzionalità polmonare e interventi chirurgici. Sono sempre a disposizione dei miei pazienti per fornire loro il supporto necessario."
            ],
            [
                'address' => 'Via S. Cristoforo, 45',
                'curriculum' => 'imgs/Curriculum_2.png',
                'photo' => 'imgs/avatar_placeholder.jpg',
                'phone' => '3172579652',
                'bio' => "Sono specializzata nella diagnosi e cura delle patologie dell'apparato digerente, dalla gastrite alla colite. Offro servizi di consulenza, terapia farmacologica, endoscopia digestiva e interventi chirurgici. Sono sempre a disposizione dei miei pazienti per rispondere alle loro domande e fornire loro il supporto necessario."
            ],
        ];
        $performances = ['Visita specialistica', 'Consulenza', 'Diagnosi', 'Certificazione'];

        $users = User::all();

        foreach ($doctors as $key => $doctor) {
            $newDoctor = new Doctor();
            $newDoctor->user_id = $users[$key]->id;
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
