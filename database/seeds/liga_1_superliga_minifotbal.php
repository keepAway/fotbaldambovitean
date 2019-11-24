<?php

use Illuminate\Database\Seeder;
use App\Echipe;
use App\Etape;

class liga_1_superliga_minifotbal extends Seeder
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
                'echipa' => 'TIV All Star',
                'liga'   => 1,
                'serie'  => 'superliga',
                'sezon'  => '2019/2020'
            ], [
                'echipa' => 'Spartan TGV',
                'liga'   => 1,
                'serie'  => 'superliga',
                'sezon'  => '2019/2020'
            ], [
                'echipa' => 'NR 12',
                'liga'   => 1,
                'serie'  => 'superliga',
                'sezon'  => '2019/2020'
            ], [
                'echipa' => 'FC Vulcana',
                'liga'   => 1,
                'serie'  => 'superliga',
                'sezon'  => '2019/2020'
            ], [
                'echipa' => 'FC Ticalosii',
                'liga'   => 1,
                'serie'  => 'superliga',
                'sezon'  => '2019/2020'
            ], [
                'echipa' => 'Kablutronik',
                'liga'   => 1,
                'serie'  => 'superliga',
                'sezon'  => '2019/2020'
            ], [
                'echipa' => 'Real TGV',
                'liga'   => 1,
                'serie'  => 'superliga',
                'sezon'  => '2019/2020'
            ], [
                'echipa' => 'Vikingii',
                'liga'   => 1,
                'serie'  => 'superliga',
                'sezon'  => '2019/2020'
            ], [
                'echipa' => 'Young Boys',
                'liga'   => 1,
                'serie'  => 'superliga',
                'sezon'  => '2019/2020'
            ], [
                'echipa' => 'Hooligans',
                'liga'   => 1,
                'serie'  => 'superliga',
                'sezon'  => '2019/2020'
            ], [
                'echipa' => 'Micro 2',
                'liga'   => 1,
                'serie'  => 'superliga',
                'sezon'  => '2019/2020'
            ], [
                'echipa' => 'Mustang Forte',
                'liga'   => 1,
                'serie'  => 'superliga',
                'sezon'  => '2019/2020'
            ]
        ];
        
		$etape = [ 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Mustang Forte",
		      "oaspeti" => "Micro 2",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Young Boys",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Ticalosii",
		      "oaspeti" => "Spartan TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Real TGV",
		      "oaspeti" => "Hooligans",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Vikingii",
		      "oaspeti" => "FC Vulcana",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "TIV All Star",
		      "oaspeti" => "NR 12",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Micro 2",
		      "oaspeti" => "NR 12",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Vulcana",
		      "oaspeti" => "TIV All Star",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Hooligans",
		      "oaspeti" => "Vikingii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spartan TGV",
		      "oaspeti" => "Real TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Young Boys",
		      "oaspeti" => "FC Ticalosii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Mustang Forte",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Micro 2",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Ticalosii",
		      "oaspeti" => "Mustang Forte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Real TGV",
		      "oaspeti" => "Young Boys",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Vikingii",
		      "oaspeti" => "Spartan TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "TIV All Star",
		      "oaspeti" => "Hooligans",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "NR 12",
		      "oaspeti" => "FC Vulcana",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Micro 2",
		      "oaspeti" => "FC Vulcana",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Hooligans",
		      "oaspeti" => "NR 12",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spartan TGV",
		      "oaspeti" => "TIV All Star",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Young Boys",
		      "oaspeti" => "Vikingii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Mustang Forte",
		      "oaspeti" => "Real TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "FC Ticalosii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Ticalosii",
		      "oaspeti" => "Micro 2",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Real TGV",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Vikingii",
		      "oaspeti" => "Mustang Forte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "TIV All Star",
		      "oaspeti" => "Young Boys",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "NR 12",
		      "oaspeti" => "Spartan TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Vulcana",
		      "oaspeti" => "Hooligans",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Micro 2",
		      "oaspeti" => "Hooligans",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spartan TGV",
		      "oaspeti" => "FC Vulcana",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Young Boys",
		      "oaspeti" => "NR 12",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Mustang Forte",
		      "oaspeti" => "TIV All Star",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Vikingii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Ticalosii",
		      "oaspeti" => "Real TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Real TGV",
		      "oaspeti" => "Micro 2",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Vikingii",
		      "oaspeti" => "FC Ticalosii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "TIV All Star",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "NR 12",
		      "oaspeti" => "Mustang Forte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Vulcana",
		      "oaspeti" => "Young Boys",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Hooligans",
		      "oaspeti" => "Spartan TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Micro 2",
		      "oaspeti" => "Spartan TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Young Boys",
		      "oaspeti" => "Hooligans",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Mustang Forte",
		      "oaspeti" => "FC Vulcana",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "NR 12",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Ticalosii",
		      "oaspeti" => "TIV All Star",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Real TGV",
		      "oaspeti" => "Vikingii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Vikingii",
		      "oaspeti" => "Micro 2",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "TIV All Star",
		      "oaspeti" => "Real TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "NR 12",
		      "oaspeti" => "FC Ticalosii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Vulcana",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Hooligans",
		      "oaspeti" => "Mustang Forte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spartan TGV",
		      "oaspeti" => "Young Boys",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Micro 2",
		      "oaspeti" => "Young Boys",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Mustang Forte",
		      "oaspeti" => "Spartan TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Hooligans",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Ticalosii",
		      "oaspeti" => "FC Vulcana",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Real TGV",
		      "oaspeti" => "NR 12",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Vikingii",
		      "oaspeti" => "TIV All Star",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "TIV All Star",
		      "oaspeti" => "Micro 2",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "NR 12",
		      "oaspeti" => "Vikingii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Vulcana",
		      "oaspeti" => "Real TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Hooligans",
		      "oaspeti" => "FC Ticalosii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spartan TGV",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Young Boys",
		      "oaspeti" => "Mustang Forte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Micro 2",
		      "oaspeti" => "Mustang Forte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Young Boys",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spartan TGV",
		      "oaspeti" => "FC Ticalosii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Hooligans",
		      "oaspeti" => "Real TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Vulcana",
		      "oaspeti" => "Vikingii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "NR 12",
		      "oaspeti" => "TIV All Star",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "NR 12",
		      "oaspeti" => "Micro 2",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "TIV All Star",
		      "oaspeti" => "FC Vulcana",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Vikingii",
		      "oaspeti" => "Hooligans",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Real TGV",
		      "oaspeti" => "Spartan TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Ticalosii",
		      "oaspeti" => "Young Boys",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Mustang Forte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Micro 2",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Mustang Forte",
		      "oaspeti" => "FC Ticalosii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Young Boys",
		      "oaspeti" => "Real TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spartan TGV",
		      "oaspeti" => "Vikingii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Hooligans",
		      "oaspeti" => "TIV All Star",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Vulcana",
		      "oaspeti" => "NR 12",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Vulcana",
		      "oaspeti" => "Micro 2",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "NR 12",
		      "oaspeti" => "Hooligans",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "TIV All Star",
		      "oaspeti" => "Spartan TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Vikingii",
		      "oaspeti" => "Young Boys",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Real TGV",
		      "oaspeti" => "Mustang Forte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Ticalosii",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Micro 2",
		      "oaspeti" => "FC Ticalosii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Real TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Mustang Forte",
		      "oaspeti" => "Vikingii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Young Boys",
		      "oaspeti" => "TIV All Star",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spartan TGV",
		      "oaspeti" => "NR 12",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Hooligans",
		      "oaspeti" => "FC Vulcana",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Hooligans",
		      "oaspeti" => "Micro 2",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Vulcana",
		      "oaspeti" => "Spartan TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "NR 12",
		      "oaspeti" => "Young Boys",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "TIV All Star",
		      "oaspeti" => "Mustang Forte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Vikingii",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Real TGV",
		      "oaspeti" => "FC Ticalosii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Micro 2",
		      "oaspeti" => "Real TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Ticalosii",
		      "oaspeti" => "Vikingii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "TIV All Star",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Mustang Forte",
		      "oaspeti" => "NR 12",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Young Boys",
		      "oaspeti" => "FC Vulcana",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spartan TGV",
		      "oaspeti" => "Hooligans",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spartan TGV",
		      "oaspeti" => "Micro 2",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Hooligans",
		      "oaspeti" => "Young Boys",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Vulcana",
		      "oaspeti" => "Mustang Forte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "NR 12",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "TIV All Star",
		      "oaspeti" => "FC Ticalosii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Vikingii",
		      "oaspeti" => "Real TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Micro 2",
		      "oaspeti" => "Vikingii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Real TGV",
		      "oaspeti" => "TIV All Star",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Ticalosii",
		      "oaspeti" => "NR 12",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "FC Vulcana",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Mustang Forte",
		      "oaspeti" => "Hooligans",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Young Boys",
		      "oaspeti" => "Spartan TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Young Boys",
		      "oaspeti" => "Micro 2",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Spartan TGV",
		      "oaspeti" => "Mustang Forte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Hooligans",
		      "oaspeti" => "Kablutronik",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Vulcana",
		      "oaspeti" => "FC Ticalosii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "NR 12",
		      "oaspeti" => "Real TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "TIV All Star",
		      "oaspeti" => "Vikingii",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ], 
		   [ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Micro 2",
		      "oaspeti" => "TIV All Star",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Vikingii",
		      "oaspeti" => "NR 12",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Real TGV",
		      "oaspeti" => "FC Vulcana",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "FC Ticalosii",
		      "oaspeti" => "Hooligans",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Kablutronik",
		      "oaspeti" => "Spartan TGV",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],[ 
		      "data" => "2020-00-00",
		      "ora" => "00:00",
		      "gazde" => "Mustang Forte",
		      "oaspeti" => "Young Boys",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "superliga",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ]
		];

		Echipe::where('liga', 1)->where('serie', 'superliga')->where('sezon', '2019/2020')->delete();

		foreach ($echipe as $echipa) {
			$adauga = new Echipe;
			$adauga->echipa = trim($echipa['echipa']);
			$adauga->liga   = $echipa['liga'];
			$adauga->serie  = $echipa['serie'];
			$adauga->sezon  = $echipa['sezon'];
			$adauga->save();
		}

		Etape::where('liga', 1)->where('serie', 'superliga')->where('sezon', '2019/2020')->delete();

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
