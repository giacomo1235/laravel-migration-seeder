 <?php

use Illuminate\Database\Seeder;

use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $arrTrains = [
            [
                'azienda'	=> 'Trenitalia',
                'stazione_di_partenza' => 'Bologna',
                'stazione_di_arrivo' => 'Chieti',
                'orario_di_partenza' => '2022-05-05 20:20:20',
                'orario_di_arrivo' => '2022-05-05 19:19:19',
                'codice_treno' => 'fuvhfklvwfv',
                'numero_carrozze' => '9',
                'in_orario'	=> 'false',
                'cancellato'=> 'true'
            ],
            [
                'azienda'	=> 'Italo',
                'stazione_di_partenza' => 'Madrid',
                'stazione_di_arrivo' => 'Madrid',
                'orario_di_partenza' => '2022-05-05 22:22:22',
                'orario_di_arrivo' => '2022-05-05 21:21:21',
                'codice_treno' => 'jdhcvbljscb ',
                'numero_carrozze' => '8',
                'in_orario'	=> 'false',
                'cancellato'=> 'true'
            ],
            [
                'azienda'	=> 'Trenord',
                'stazione_di_partenza' => 'Bucchianico',
                'stazione_di_arrivo' => 'Los Angeles',
                'orario_di_partenza' => '1995-11-19 20:20:20',
                'orario_di_arrivo' => '1995-11-19 20:20:20',
                'codice_treno' => 'dkjcs;aslsa',
                'numero_carrozze' => '7',
                'in_orario'	=> 'false',
                'cancellato'=> 'true'
            ],
        ];

        foreach($arrTrains as $trainData) {
            $train = new Train();
            $train->azienda = $trainData['azienda'];
            $train->stazione_di_partenza = $trainData['stazione_di_partenza'];
            $train->stazione_di_arrivo = $trainData['stazione_di_arrivo'];
            $train->orario_di_partenza = $trainData['orario_di_partenza'];
            $train->orario_di_arrivo = $trainData['orario_di_arrivo'];
            $train->codice_treno = $trainData['codice_treno'];
            $train->numero_carrozze = $trainData['numero_carrozze'];
            $train->in_orario = $trainData['in_orario'];
            $train->cancellato = $trainData['cancellato'];
            $train->fill($trainData);
            $train->save();
        }

        for ($i = 1; $i < 500; $i++) {
            $trainData = [
                'azienda'                => $faker->varchar(100),
                'stazione_di_partenza'   => $faker->varchar(100),
                'stazione_di_arrivo'     => $faker->varchar(100),
                'orario_di_partenza'     => $faker->datetime(),
                'orario_di_arrivo'       => $faker->datetime(),
                'codice_treno'           => $faker->varchar(100),
                'numero_carrozze'        => $faker->int(11),
                'in_orario'              => $faker->boolean(),
                'cancellato'             => $faker->boolean()
                
            ];

            $train = new Train();
            $train->fill($trainData);
            $train->save();
        }
    }
}

/* 


'azienda'	=> 'Italo',
'stazione_di_partenza' => 'madrid',
'stazione_di_arrivo' => 'Mosca',
'orario_di_partenza' => '2022-05-05 20:20:20',
'orario_di_arrivo' => '2022-05-05 19:19:19',
'codice_treno' => 'fuvhfklvwfv',
'numero_carrozze' => '9',
'in_orario'	=> 'false',
'cancellato'=> 'true' */