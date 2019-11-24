<?php

use Illuminate\Database\Seeder;
use App\Echipe;
use App\Etape;

class liga_1_campionatul_firmelor_minifotbal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $echipe = [
		    [
		        'echipa' => 'Velrom',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'Regal',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'GEO Sting',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'Raiman Auto',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'Taxatorii',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'GLS Curier',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'Profi Dambovita',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'Microbilt',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'Spitalul Judetean',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'Compania de APA Targoviste',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'Dedeman Targoviste',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'FAN Curier',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'Stalker',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'Kablutronik',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'Bardi Auto',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ],[
		        'echipa' => 'Valsor',
		        'liga'   => 1,
		        'serie'  => 'campionatul-firmelor',
		        'sezon'  => '2019/2020'
		    ]
		];

		$etape = [ 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 23
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 23
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 23
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 23
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 23
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 23
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 23
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 23
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 24
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 24
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 24
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 24
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 24
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 24
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 24
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 24
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 25
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 25
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 25
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 25
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 25
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 25
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 25
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 25
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 26
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 26
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 26
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 26
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 26
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 26
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 26
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 26
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 27
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 27
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 27
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 27
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 27
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 27
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 27
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 27
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 28
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 28
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 28
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 28
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 28
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 28
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 28
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 28
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Raiman Auto",
		      "oaspeti" => "Regal",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 29
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GLS Curier",
		      "oaspeti" => "Velrom",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 29
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Microbilt",
		      "oaspeti" => "GEO Sting",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 29
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Compania de APA Targoviste",
		      "oaspeti" => "Taxatorii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 29
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FAN Curier",
		      "oaspeti" => "Profi Dambovita",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 29
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Spitalul Judetean",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 29
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Valsor",
		      "oaspeti" => "Dedeman Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 29
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Bardi Auto",
		      "oaspeti" => "Stalker",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 29
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Velrom",
		      "oaspeti" => "Raiman Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 30
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "GEO Sting",
		      "oaspeti" => "GLS Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 30
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Taxatorii",
		      "oaspeti" => "Microbilt",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 30
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Profi Dambovita",
		      "oaspeti" => "Compania de APA Targoviste",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 30
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spitalul Judetean",
		      "oaspeti" => "FAN Curier",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 30
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Dedeman Targoviste",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 30
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Stalker",
		      "oaspeti" => "Valsor",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 30
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Regal",
		      "oaspeti" => "Bardi Auto",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "campionatul-firmelor",
		      "sezon" => "2019/2020",
		      "etapa" => 30
		   ]
		];

		Echipe::where('liga', 1)->where('serie', 'campionatul-firmelor')->where('sezon', '2019/2020')->delete();

		foreach ($echipe as $echipa) {
			$adauga = new Echipe;
			$adauga->echipa = trim($echipa['echipa']);
			$adauga->liga   = $echipa['liga'];
			$adauga->serie  = $echipa['serie'];
			$adauga->sezon  = $echipa['sezon'];
			$adauga->save();
		}

		Etape::where('liga', 1)->where('serie', 'campionatul-firmelor')->where('sezon', '2019/2020')->delete();

		foreach ($etape as $etapa) {
			$adauga = new Etape;
			$adauga->gazde     = trim($etapa['gazde']);
			$adauga->oaspeti   = trim($etapa['oaspeti']);
			$adauga->g_gazde   = $etapa['g_gazde'];
			$adauga->g_oaspeti = $etapa['g_oaspeti'];
			$adauga->liga      = $etapa['liga'];
			$adauga->serie     = $etapa['serie'];
			$adauga->etapa     = $etapa['etapa'];
			$adauga->data      = $etapa['data']/* != NULL ? DateTime::createFromFormat('d-m-Y', ($etapa['data']))->format('Y-m-d') : NULL*/;
			$adauga->ora       = $etapa['ora'];
			$adauga->sezon     = $etapa['sezon'];
			$adauga->save();
		}
    }
}
