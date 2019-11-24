<?php

use Illuminate\Database\Seeder;
use App\Echipe;
use App\Etape;
use App\ToateEchipele;

class liga_elitelor_u_16 extends Seeder
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
		      'echipa' => 'ACS Colţea 1920 Braşov'
		   ],[
		      'echipa' => 'Petrolul Ploiești'
		   ],[
		      'echipa' => 'Csikszereda Miercurea Ciuc'
		   ],[
		      'echipa' => 'LPS Suceava'
		   ],[
		      'echipa' => 'ACS Kids Tâmpa Braşov'
		   ],[
		      'echipa' => 'Politehnica Iaşi'
		   ],[
		      'echipa' => 'Sepsi OSK Sfântu Gheorghe'
		   ],[
		      'echipa' => 'FC Botoșani'
		   ],[
		      'echipa' => 'Chindia Târgovişte'
		   ],[
		      'echipa' => 'CSS Târgovişte'
		   ],[
		      'echipa' => 'Astra Giurgiu'
		   ]
		];

		$etape = 
		[ 
		   [ 
		      "data" => "2019-08-10",
		      "ora" => "10:00",
		      "gazde" => "Astra Giurgiu",
		      "oaspeti" => "Petrolul Ploiești",
		      "g_gazde" => 0,
		      "g_oaspeti" => 6,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],
		   [ 
		      "data" => "2019-08-10",
		      "ora" => "10:00",
		      "gazde" => "Chindia Târgovişte",
		      "oaspeti" => "Csikszereda Miercurea Ciuc",
		      "g_gazde" => 1,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],
		   [ 
		      "data" => "2019-08-10",
		      "ora" => "10:00",
		      "gazde" => "FC Botoșani",
		      "oaspeti" => "CSS Târgovişte",
		      "g_gazde" => 4,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],
		   [ 
		      "data" => "2019-08-10",
		      "ora" => "10:00",
		      "gazde" => "STA",
		      "oaspeti" => "ACS Kids Tâmpa Braşov",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],
		   [ 
		      "data" => "2019-08-10",
		      "ora" => "10:00",
		      "gazde" => "LPS Suceava",
		      "oaspeti" => "Sepsi OSK Sfântu Gheorghe",
		      "g_gazde" => 2,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],
		   [ 
		      "data" => "2019-08-10",
		      "ora" => "10:00",
		      "gazde" => "Politehnica Iaşi",
		      "oaspeti" => "ACS Colţea 1920 Braşov",
		      "g_gazde" => 0,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 1
		   ],
		   [ 
		      "data" => "2019-08-14",
		      "ora" => "10:00",
		      "gazde" => "Petrolul Ploiești",
		      "oaspeti" => "ACS Colţea 1920 Braşov",
		      "g_gazde" => 7,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],
		   [ 
		      "data" => "2019-08-14",
		      "ora" => "10:00",
		      "gazde" => "Sepsi OSK Sfântu Gheorghe",
		      "oaspeti" => "Politehnica Iaşi",
		      "g_gazde" => 3,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],
		   [ 
		      "data" => "2019-08-14",
		      "ora" => "10:00",
		      "gazde" => "ACS Kids Tâmpa Braşov",
		      "oaspeti" => "LPS Suceava",
		      "g_gazde" => 3,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],
		   [ 
		      "data" => "2019-08-14",
		      "ora" => "10:00",
		      "gazde" => "CSS Târgovişte",
		      "oaspeti" => "STA",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],
		   [ 
		      "data" => "2019-08-14",
		      "ora" => "10:00",
		      "gazde" => "Csikszereda Miercurea Ciuc",
		      "oaspeti" => "FC Botoșani",
		      "g_gazde" => 2,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],
		   [ 
		      "data" => "2019-08-14",
		      "ora" => "10:00",
		      "gazde" => "Astra Giurgiu",
		      "oaspeti" => "Chindia Târgovişte",
		      "g_gazde" => 1,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 2
		   ],
		   [ 
		      "data" => "2019-08-17",
		      "ora" => "10:00",
		      "gazde" => "FC Botoșani",
		      "oaspeti" => "Astra Giurgiu",
		      "g_gazde" => 7,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],
		   [ 
		      "data" => "2019-08-17",
		      "ora" => "10:00",
		      "gazde" => "STA",
		      "oaspeti" => "Csikszereda Miercurea Ciuc",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],
		   [ 
		      "data" => "2019-08-17",
		      "ora" => "10:00",
		      "gazde" => "LPS Suceava",
		      "oaspeti" => "CSS Târgovişte",
		      "g_gazde" => 12,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],
		   [ 
		      "data" => "2019-08-17",
		      "ora" => "10:00",
		      "gazde" => "Politehnica Iaşi",
		      "oaspeti" => "ACS Kids Tâmpa Braşov",
		      "g_gazde" => 2,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],
		   [ 
		      "data" => "2019-08-17",
		      "ora" => "16:00",
		      "gazde" => "ACS Colţea 1920 Braşov",
		      "oaspeti" => "Sepsi OSK Sfântu Gheorghe",
		      "g_gazde" => 3,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],
		   [ 
		      "data" => "2019-08-18",
		      "ora" => "10:00",
		      "gazde" => "Chindia Târgovişte",
		      "oaspeti" => "Petrolul Ploiești",
		      "g_gazde" => 1,
		      "g_oaspeti" => 9,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 3
		   ],
		   [ 
		      "data" => "2019-08-21",
		      "ora" => "10:00",
		      "gazde" => "Petrolul Ploiești",
		      "oaspeti" => "Sepsi OSK Sfântu Gheorghe",
		      "g_gazde" => 7,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],
		   [ 
		      "data" => "2019-08-21",
		      "ora" => "10:00",
		      "gazde" => "ACS Kids Tâmpa Braşov",
		      "oaspeti" => "ACS Colţea 1920 Braşov",
		      "g_gazde" => 0,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],
		   [ 
		      "data" => "2019-08-21",
		      "ora" => "10:00",
		      "gazde" => "CSS Târgovişte",
		      "oaspeti" => "Politehnica Iaşi",
		      "g_gazde" => 0,
		      "g_oaspeti" => 4,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],
		   [ 
		      "data" => "2019-08-21",
		      "ora" => "10:00",
		      "gazde" => "Csikszereda Miercurea Ciuc",
		      "oaspeti" => "LPS Suceava",
		      "g_gazde" => 3,
		      "g_oaspeti" => 3,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],
		   [ 
		      "data" => "2019-08-21",
		      "ora" => "10:00",
		      "gazde" => "Astra Giurgiu",
		      "oaspeti" => "STA",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],
		   [ 
		      "data" => "2019-08-21",
		      "ora" => "10:00",
		      "gazde" => "Chindia Târgovişte",
		      "oaspeti" => "FC Botoșani",
		      "g_gazde" => 3,
		      "g_oaspeti" => 4,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 4
		   ],
		   [ 
		      "data" => "2019-08-24",
		      "ora" => "10:00",
		      "gazde" => "FC Botoșani",
		      "oaspeti" => "Petrolul Ploiești",
		      "g_gazde" => 0,
		      "g_oaspeti" => 8,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],
		   [ 
		      "data" => "2019-08-24",
		      "ora" => "10:00",
		      "gazde" => "STA",
		      "oaspeti" => "Chindia Târgovişte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],
		   [ 
		      "data" => "2019-08-24",
		      "ora" => "10:00",
		      "gazde" => "LPS Suceava",
		      "oaspeti" => "Astra Giurgiu",
		      "g_gazde" => 14,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],
		   [ 
		      "data" => "2019-08-24",
		      "ora" => "10:00",
		      "gazde" => "Politehnica Iaşi",
		      "oaspeti" => "Csikszereda Miercurea Ciuc",
		      "g_gazde" => 0,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],
		   [ 
		      "data" => "2019-08-24",
		      "ora" => "16:00",
		      "gazde" => "ACS Colţea 1920 Braşov",
		      "oaspeti" => "CSS Târgovişte",
		      "g_gazde" => 5,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],
		   [ 
		      "data" => "2019-08-25",
		      "ora" => "16:00",
		      "gazde" => "Sepsi OSK Sfântu Gheorghe",
		      "oaspeti" => "ACS Kids Tâmpa Braşov",
		      "g_gazde" => 3,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 5
		   ],
		   [ 
		      "data" => "2019-08-28",
		      "ora" => "10:00",
		      "gazde" => "Csikszereda Miercurea Ciuc",
		      "oaspeti" => "ACS Colţea 1920 Braşov",
		      "g_gazde" => 2,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],
		   [ 
		      "data" => "2019-08-28",
		      "ora" => "10:00",
		      "gazde" => "Astra Giurgiu",
		      "oaspeti" => "Politehnica Iaşi",
		      "g_gazde" => 0,
		      "g_oaspeti" => 3,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],
		   [ 
		      "data" => "2019-08-28",
		      "ora" => "10:00",
		      "gazde" => "Chindia Târgovişte",
		      "oaspeti" => "LPS Suceava",
		      "g_gazde" => 1,
		      "g_oaspeti" => 10,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],
		   [ 
		      "data" => "2019-08-28",
		      "ora" => "10:00",
		      "gazde" => "FC Botoșani",
		      "oaspeti" => "STA",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],
		   [ 
		      "data" => "2019-08-28",
		      "ora" => "16:00",
		      "gazde" => "CSS Târgovişte",
		      "oaspeti" => "Sepsi OSK Sfântu Gheorghe",
		      "g_gazde" => 3,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],
		   [ 
		      "data" => "2019-08-29",
		      "ora" => "11:00",
		      "gazde" => "Petrolul Ploiești",
		      "oaspeti" => "ACS Kids Tâmpa Braşov",
		      "g_gazde" => 2,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 6
		   ],
		   [ 
		      "data" => "2019-08-31",
		      "ora" => "10:00",
		      "gazde" => "STA",
		      "oaspeti" => "Petrolul Ploiești",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],
		   [ 
		      "data" => "2019-08-31",
		      "ora" => "10:00",
		      "gazde" => "LPS Suceava",
		      "oaspeti" => "FC Botoșani",
		      "g_gazde" => 5,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],
		   [ 
		      "data" => "2019-08-31",
		      "ora" => "10:00",
		      "gazde" => "Politehnica Iaşi",
		      "oaspeti" => "Chindia Târgovişte",
		      "g_gazde" => 4,
		      "g_oaspeti" => 3,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],
		   [ 
		      "data" => "2019-08-31",
		      "ora" => "10:00",
		      "gazde" => "ACS Kids Tâmpa Braşov",
		      "oaspeti" => "CSS Târgovişte",
		      "g_gazde" => 10,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],
		   [ 
		      "data" => "2019-08-31",
		      "ora" => "16:00",
		      "gazde" => "ACS Colţea 1920 Braşov",
		      "oaspeti" => "Astra Giurgiu",
		      "g_gazde" => 2,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],
		   [ 
		      "data" => "2019-09-01",
		      "ora" => "16:00",
		      "gazde" => "Sepsi OSK Sfântu Gheorghe",
		      "oaspeti" => "Csikszereda Miercurea Ciuc",
		      "g_gazde" => 0,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 7
		   ],
		   [ 
		      "data" => "2019-09-03",
		      "ora" => "14:00",
		      "gazde" => "FC Botoșani",
		      "oaspeti" => "Politehnica Iaşi",
		      "g_gazde" => 2,
		      "g_oaspeti" => 4,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],
		   [ 
		      "data" => "2019-09-04",
		      "ora" => "10:00",
		      "gazde" => "Petrolul Ploiești",
		      "oaspeti" => "CSS Târgovişte",
		      "g_gazde" => 11,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],
		   [ 
		      "data" => "2019-09-04",
		      "ora" => "10:00",
		      "gazde" => "Csikszereda Miercurea Ciuc",
		      "oaspeti" => "ACS Kids Tâmpa Braşov",
		      "g_gazde" => 3,
		      "g_oaspeti" => 3,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],
		   [ 
		      "data" => "2019-09-04",
		      "ora" => "10:00",
		      "gazde" => "Astra Giurgiu",
		      "oaspeti" => "Sepsi OSK Sfântu Gheorghe",
		      "g_gazde" => 0,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],
		   [ 
		      "data" => "2019-09-04",
		      "ora" => "10:00",
		      "gazde" => "Chindia Târgovişte",
		      "oaspeti" => "ACS Colţea 1920 Braşov",
		      "g_gazde" => 0,
		      "g_oaspeti" => 3,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],
		   [ 
		      "data" => "2019-09-04",
		      "ora" => "10:00",
		      "gazde" => "STA",
		      "oaspeti" => "LPS Suceava",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 8
		   ],
		   [ 
		      "data" => "2019-09-07",
		      "ora" => "10:00",
		      "gazde" => "LPS Suceava",
		      "oaspeti" => "Petrolul Ploiești",
		      "g_gazde" => 3,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],
		   [ 
		      "data" => "2019-09-07",
		      "ora" => "10:00",
		      "gazde" => "Politehnica Iaşi",
		      "oaspeti" => "STA",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],
		   [ 
		      "data" => "2019-09-07",
		      "ora" => "10:00",
		      "gazde" => "ACS Kids Tâmpa Braşov",
		      "oaspeti" => "Astra Giurgiu",
		      "g_gazde" => 9,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],
		   [ 
		      "data" => "2019-09-07",
		      "ora" => "16:00",
		      "gazde" => "ACS Colţea 1920 Braşov",
		      "oaspeti" => "FC Botoșani",
		      "g_gazde" => 3,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],
		   [ 
		      "data" => "2019-09-08",
		      "ora" => "10:00",
		      "gazde" => "CSS Târgovişte",
		      "oaspeti" => "Csikszereda Miercurea Ciuc",
		      "g_gazde" => 1,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],
		   [ 
		      "data" => "2019-09-08",
		      "ora" => "16:00",
		      "gazde" => "Sepsi OSK Sfântu Gheorghe",
		      "oaspeti" => "Chindia Târgovişte",
		      "g_gazde" => 0,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 9
		   ],
		   [ 
		      "data" => "2019-09-13",
		      "ora" => "15:00",
		      "gazde" => "LPS Suceava",
		      "oaspeti" => "Politehnica Iaşi",
		      "g_gazde" => 2,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],
		   [ 
		      "data" => "2019-09-14",
		      "ora" => "10:00",
		      "gazde" => "Petrolul Ploiești",
		      "oaspeti" => "Csikszereda Miercurea Ciuc",
		      "g_gazde" => 3,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],
		   [ 
		      "data" => "2019-09-14",
		      "ora" => "10:00",
		      "gazde" => "Astra Giurgiu",
		      "oaspeti" => "CSS Târgovişte",
		      "g_gazde" => 1,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],
		   [ 
		      "data" => "2019-09-14",
		      "ora" => "10:00",
		      "gazde" => "FC Botoșani",
		      "oaspeti" => "Sepsi OSK Sfântu Gheorghe",
		      "g_gazde" => 1,
		      "g_oaspeti" => 4,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],
		   [ 
		      "data" => "2019-09-14",
		      "ora" => "10:00",
		      "gazde" => "STA",
		      "oaspeti" => "ACS Colţea 1920 Braşov",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],
		   [ 
		      "data" => "2019-09-15",
		      "ora" => "10:00",
		      "gazde" => "Chindia Târgovişte",
		      "oaspeti" => "ACS Kids Tâmpa Braşov",
		      "g_gazde" => 0,
		      "g_oaspeti" => 3,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 10
		   ],
		   [ 
		      "data" => "2019-09-21",
		      "ora" => "10:00",
		      "gazde" => "Politehnica Iaşi",
		      "oaspeti" => "Petrolul Ploiești",
		      "g_gazde" => 2,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],
		   [ 
		      "data" => "2019-09-21",
		      "ora" => "10:00",
		      "gazde" => "ACS Kids Tâmpa Braşov",
		      "oaspeti" => "FC Botoșani",
		      "g_gazde" => 5,
		      "g_oaspeti" => 3,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],
		   [ 
		      "data" => "2019-09-21",
		      "ora" => "10:00",
		      "gazde" => "Csikszereda Miercurea Ciuc",
		      "oaspeti" => "Astra Giurgiu",
		      "g_gazde" => 6,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],
		   [ 
		      "data" => "2019-09-21",
		      "ora" => "16:00",
		      "gazde" => "ACS Colţea 1920 Braşov",
		      "oaspeti" => "LPS Suceava",
		      "g_gazde" => 4,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],
		   [ 
		      "data" => "2019-09-22",
		      "ora" => "10:00",
		      "gazde" => "CSS Târgovişte",
		      "oaspeti" => "Chindia Târgovişte",
		      "g_gazde" => 3,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],
		   [ 
		      "data" => "2019-09-22",
		      "ora" => "16:00",
		      "gazde" => "Sepsi OSK Sfântu Gheorghe",
		      "oaspeti" => "STA",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 11
		   ],
		   [ 
		      "data" => "2019-09-28",
		      "ora" => "10:00",
		      "gazde" => "Petrolul Ploiești",
		      "oaspeti" => "Astra Giurgiu",
		      "g_gazde" => 4,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],
		   [ 
		      "data" => "2019-09-28",
		      "ora" => "10:00",
		      "gazde" => "Csikszereda Miercurea Ciuc",
		      "oaspeti" => "Chindia Târgovişte",
		      "g_gazde" => 4,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],
		   [ 
		      "data" => "2019-09-28",
		      "ora" => "10:00",
		      "gazde" => "ACS Kids Tâmpa Braşov",
		      "oaspeti" => "STA",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],
		   [ 
		      "data" => "2019-09-28",
		      "ora" => "16:00",
		      "gazde" => "ACS Colţea 1920 Braşov",
		      "oaspeti" => "Politehnica Iaşi",
		      "g_gazde" => 3,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],
		   [ 
		      "data" => "2019-09-29",
		      "ora" => "10:00",
		      "gazde" => "CSS Târgovişte",
		      "oaspeti" => "FC Botoșani",
		      "g_gazde" => 1,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],
		   [ 
		      "data" => "2019-09-29",
		      "ora" => "10:00",
		      "gazde" => "Sepsi OSK Sfântu Gheorghe",
		      "oaspeti" => "LPS Suceava",
		      "g_gazde" => 9,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 12
		   ],
		   [ 
		      "data" => "2019-10-05",
		      "ora" => "10:00",
		      "gazde" => "Politehnica Iaşi",
		      "oaspeti" => "Sepsi OSK Sfântu Gheorghe",
		      "g_gazde" => 5,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],
		   [ 
		      "data" => "2019-10-05",
		      "ora" => "10:00",
		      "gazde" => "STA",
		      "oaspeti" => "CSS Târgovişte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],
		   [ 
		      "data" => "2019-10-05",
		      "ora" => "10:00",
		      "gazde" => "FC Botoșani",
		      "oaspeti" => "Csikszereda Miercurea Ciuc",
		      "g_gazde" => 1,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],
		   [ 
		      "data" => "2019-10-05",
		      "ora" => "14:00",
		      "gazde" => "Chindia Târgovişte",
		      "oaspeti" => "Astra Giurgiu",
		      "g_gazde" => 4,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],
		   [ 
		      "data" => "2019-10-05",
		      "ora" => "16:00",
		      "gazde" => "ACS Colţea 1920 Braşov",
		      "oaspeti" => "Petrolul Ploiești",
		      "g_gazde" => 3,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],
		   [ 
		      "data" => "2019-10-06",
		      "ora" => "10:00",
		      "gazde" => "LPS Suceava",
		      "oaspeti" => "ACS Kids Tâmpa Braşov",
		      "g_gazde" => 2,
		      "g_oaspeti" => 4,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 13
		   ],
		   [ 
		      "data" => "2019-10-12",
		      "ora" => "10:00",
		      "gazde" => "Petrolul Ploiești",
		      "oaspeti" => "Chindia Târgovişte",
		      "g_gazde" => 3,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],
		   [ 
		      "data" => "2019-10-12",
		      "ora" => "10:00",
		      "gazde" => "Astra Giurgiu",
		      "oaspeti" => "FC Botoșani",
		      "g_gazde" => 0,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],
		   [ 
		      "data" => "2019-10-12",
		      "ora" => "10:00",
		      "gazde" => "Csikszereda Miercurea Ciuc",
		      "oaspeti" => "STA",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],
		   [ 
		      "data" => "2019-10-12",
		      "ora" => "10:00",
		      "gazde" => "ACS Kids Tâmpa Braşov",
		      "oaspeti" => "Politehnica Iaşi",
		      "g_gazde" => 5,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],
		   [ 
		      "data" => "2019-10-13",
		      "ora" => "10:00",
		      "gazde" => "CSS Târgovişte",
		      "oaspeti" => "LPS Suceava",
		      "g_gazde" => 2,
		      "g_oaspeti" => 4,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],
		   [ 
		      "data" => "2019-10-13",
		      "ora" => "10:00",
		      "gazde" => "Sepsi OSK Sfântu Gheorghe",
		      "oaspeti" => "ACS Colţea 1920 Braşov",
		      "g_gazde" => 1,
		      "g_oaspeti" => 3,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 14
		   ],
		   [ 
		      "data" => "2019-10-19",
		      "ora" => "10:00",
		      "gazde" => "Politehnica Iaşi",
		      "oaspeti" => "CSS Târgovişte",
		      "g_gazde" => 5,
		      "g_oaspeti" => 4,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],
		   [ 
		      "data" => "2019-10-19",
		      "ora" => "10:00",
		      "gazde" => "LPS Suceava",
		      "oaspeti" => "Csikszereda Miercurea Ciuc",
		      "g_gazde" => 1,
		      "g_oaspeti" => 0,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],
		   [ 
		      "data" => "2019-10-19",
		      "ora" => "10:00",
		      "gazde" => "STA",
		      "oaspeti" => "Astra Giurgiu",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],
		   [ 
		      "data" => "2019-10-19",
		      "ora" => "10:00",
		      "gazde" => "FC Botoșani",
		      "oaspeti" => "Chindia Târgovişte",
		      "g_gazde" => 2,
		      "g_oaspeti" => 3,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],
		   [ 
		      "data" => "2019-10-19",
		      "ora" => "16:00",
		      "gazde" => "ACS Colţea 1920 Braşov",
		      "oaspeti" => "ACS Kids Tâmpa Braşov",
		      "g_gazde" => 2,
		      "g_oaspeti" => 2,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],
		   [ 
		      "data" => "2019-10-20",
		      "ora" => "11:00",
		      "gazde" => "Sepsi OSK Sfântu Gheorghe",
		      "oaspeti" => "Petrolul Ploiești",
		      "g_gazde" => 3,
		      "g_oaspeti" => 1,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 15
		   ],
		   [ 
		      "data" => "2019-10-26",
		      "ora" => "10:00",
		      "gazde" => "Petrolul Ploiești",
		      "oaspeti" => "FC Botoșani",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],
		   [ 
		      "data" => "2019-10-26",
		      "ora" => "10:00",
		      "gazde" => "Astra Giurgiu",
		      "oaspeti" => "LPS Suceava",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],
		   [ 
		      "data" => "2019-10-26",
		      "ora" => "10:00",
		      "gazde" => "Csikszereda Miercurea Ciuc",
		      "oaspeti" => "Politehnica Iaşi",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],
		   [ 
		      "data" => "2019-10-26",
		      "ora" => "10:00",
		      "gazde" => "ACS Kids Tâmpa Braşov",
		      "oaspeti" => "Sepsi OSK Sfântu Gheorghe",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],
		   [ 
		      "data" => "2019-10-27",
		      "ora" => "10:00",
		      "gazde" => "Chindia Târgovişte",
		      "oaspeti" => "STA",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],
		   [ 
		      "data" => "2019-10-27",
		      "ora" => "10:00",
		      "gazde" => "CSS Târgovişte",
		      "oaspeti" => "ACS Colţea 1920 Braşov",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 16
		   ],
		   [ 
		      "data" => "2019-11-02",
		      "ora" => "10:00",
		      "gazde" => "ACS Kids Tâmpa Braşov",
		      "oaspeti" => "Petrolul Ploiești",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],
		   [ 
		      "data" => "2019-11-02",
		      "ora" => "10:00",
		      "gazde" => "Politehnica Iaşi",
		      "oaspeti" => "Astra Giurgiu",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],
		   [ 
		      "data" => "2019-11-02",
		      "ora" => "10:00",
		      "gazde" => "LPS Suceava",
		      "oaspeti" => "Chindia Târgovişte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],
		   [ 
		      "data" => "2019-11-02",
		      "ora" => "10:00",
		      "gazde" => "STA",
		      "oaspeti" => "FC Botoșani",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],
		   [ 
		      "data" => "2019-11-02",
		      "ora" => "16:00",
		      "gazde" => "ACS Colţea 1920 Braşov",
		      "oaspeti" => "Csikszereda Miercurea Ciuc",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],
		   [ 
		      "data" => "2019-11-03",
		      "ora" => "16:00",
		      "gazde" => "Sepsi OSK Sfântu Gheorghe",
		      "oaspeti" => "CSS Târgovişte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 17
		   ],
		   [ 
		      "data" => "2019-11-09",
		      "ora" => "10:00",
		      "gazde" => "Petrolul Ploiești",
		      "oaspeti" => "STA",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],
		   [ 
		      "data" => "2019-11-09",
		      "ora" => "10:00",
		      "gazde" => "FC Botoșani",
		      "oaspeti" => "LPS Suceava",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],
		   [ 
		      "data" => "2019-11-09",
		      "ora" => "10:00",
		      "gazde" => "Astra Giurgiu",
		      "oaspeti" => "ACS Colţea 1920 Braşov",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],
		   [ 
		      "data" => "2019-11-09",
		      "ora" => "10:00",
		      "gazde" => "Csikszereda Miercurea Ciuc",
		      "oaspeti" => "Sepsi OSK Sfântu Gheorghe",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],
		   [ 
		      "data" => "2019-11-10",
		      "ora" => "10:00",
		      "gazde" => "Chindia Târgovişte",
		      "oaspeti" => "Politehnica Iaşi",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],
		   [ 
		      "data" => "2019-11-10",
		      "ora" => "10:00",
		      "gazde" => "CSS Târgovişte",
		      "oaspeti" => "ACS Kids Tâmpa Braşov",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 18
		   ],
		   [ 
		      "data" => "2019-11-16",
		      "ora" => "10:00",
		      "gazde" => "ACS Kids Tâmpa Braşov",
		      "oaspeti" => "Csikszereda Miercurea Ciuc",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],
		   [ 
		      "data" => "2019-11-16",
		      "ora" => "10:00",
		      "gazde" => "Politehnica Iaşi",
		      "oaspeti" => "FC Botoșani",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],
		   [ 
		      "data" => "2019-11-16",
		      "ora" => "10:00",
		      "gazde" => "LPS Suceava",
		      "oaspeti" => "STA",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],
		   [ 
		      "data" => "2019-11-16",
		      "ora" => "16:00",
		      "gazde" => "ACS Colţea 1920 Braşov",
		      "oaspeti" => "Chindia Târgovişte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],
		   [ 
		      "data" => "2019-11-17",
		      "ora" => "10:00",
		      "gazde" => "CSS Târgovişte",
		      "oaspeti" => "Petrolul Ploiești",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],
		   [ 
		      "data" => "2019-11-17",
		      "ora" => "16:00",
		      "gazde" => "Sepsi OSK Sfântu Gheorghe",
		      "oaspeti" => "Astra Giurgiu",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 19
		   ],
		   [ 
		      "data" => "2019-11-23",
		      "ora" => "10:00",
		      "gazde" => "Petrolul Ploiești",
		      "oaspeti" => "LPS Suceava",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],
		   [ 
		      "data" => "2019-11-23",
		      "ora" => "10:00",
		      "gazde" => "STA",
		      "oaspeti" => "Politehnica Iaşi",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],
		   [ 
		      "data" => "2019-11-23",
		      "ora" => "10:00",
		      "gazde" => "FC Botoșani",
		      "oaspeti" => "ACS Colţea 1920 Braşov",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],
		   [ 
		      "data" => "2019-11-23",
		      "ora" => "10:00",
		      "gazde" => "Astra Giurgiu",
		      "oaspeti" => "ACS Kids Tâmpa Braşov",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],
		   [ 
		      "data" => "2019-11-23",
		      "ora" => "10:00",
		      "gazde" => "Csikszereda Miercurea Ciuc",
		      "oaspeti" => "CSS Târgovişte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],
		   [ 
		      "data" => "2019-11-24",
		      "ora" => "10:00",
		      "gazde" => "Chindia Târgovişte",
		      "oaspeti" => "Sepsi OSK Sfântu Gheorghe",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 20
		   ],
		   [ 
		      "data" => "2019-11-30",
		      "ora" => "10:00",
		      "gazde" => "Csikszereda Miercurea Ciuc",
		      "oaspeti" => "Petrolul Ploiești",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],
		   [ 
		      "data" => "2019-11-30",
		      "ora" => "10:00",
		      "gazde" => "ACS Kids Tâmpa Braşov",
		      "oaspeti" => "Chindia Târgovişte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],
		   [ 
		      "data" => "2019-11-30",
		      "ora" => "10:00",
		      "gazde" => "Politehnica Iaşi",
		      "oaspeti" => "LPS Suceava",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],
		   [ 
		      "data" => "2019-11-30",
		      "ora" => "16:00",
		      "gazde" => "ACS Colţea 1920 Braşov",
		      "oaspeti" => "STA",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],
		   [ 
		      "data" => "2019-12-01",
		      "ora" => "10:00",
		      "gazde" => "CSS Târgovişte",
		      "oaspeti" => "Astra Giurgiu",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],
		   [ 
		      "data" => "2019-12-01",
		      "ora" => "16:00",
		      "gazde" => "Sepsi OSK Sfântu Gheorghe",
		      "oaspeti" => "FC Botoșani",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 21
		   ],
		   [ 
		      "data" => "2019-03-14",
		      "ora" => "10:00",
		      "gazde" => "Petrolul Ploiești",
		      "oaspeti" => "Politehnica Iaşi",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],
		   [ 
		      "data" => "2019-03-14",
		      "ora" => "10:00",
		      "gazde" => "LPS Suceava",
		      "oaspeti" => "ACS Colţea 1920 Braşov",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],
		   [ 
		      "data" => "2019-03-14",
		      "ora" => "10:00",
		      "gazde" => "STA",
		      "oaspeti" => "Sepsi OSK Sfântu Gheorghe",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],
		   [ 
		      "data" => "2019-03-14",
		      "ora" => "10:00",
		      "gazde" => "FC Botoșani",
		      "oaspeti" => "ACS Kids Tâmpa Braşov",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],
		   [ 
		      "data" => "2019-03-14",
		      "ora" => "10:00",
		      "gazde" => "Astra Giurgiu",
		      "oaspeti" => "Csikszereda Miercurea Ciuc",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ],
		   [ 
		      "data" => "2019-03-17",
		      "ora" => "10:00",
		      "gazde" => "Chindia Târgovişte",
		      "oaspeti" => "CSS Târgovişte",
		      "g_gazde" => null,
		      "g_oaspeti" => null,
		      "liga" => 1,
		      "serie" => "elitelor-u-16",
		      "sezon" => "2019/2020",
		      "etapa" => 22
		   ]
		];

		foreach ($echipe as $echipa) {

			$check = ToateEchipele::where('team', trim($echipa['echipa']))->first();
			if(is_null($check)) {
				$adauga = new ToateEchipele;
				$adauga->team = trim($echipa['echipa']);
				$adauga->save();
			}

			// Echipe::where('echipa_id', $e->id)->delete();
			$clasament = new Echipe;
			$clasament->echipa_id = is_null($check) ? $adauga->id : $check->id;
			$clasament->liga = 1;
			$clasament->serie = "elitelor-u-16";
			$clasament->sezon = '2019/2020';
			$clasament->save();
		}


		Etape::where('liga', 1)->where('serie', "elitelor-u-16")->where('sezon', '2019/2020')->delete();

		foreach ($etape as $etapa) {
			$gazde = ToateEchipele::where('team', trim($etapa['gazde']))->first();
			$oaspeti = ToateEchipele::where('team', trim($etapa['oaspeti']))->first();

			$adauga = new Etape;
			$adauga->gazde_id   = $gazde['id'];
			$adauga->oaspeti_id = $oaspeti['id'];
			$adauga->g_gazde    = $etapa['g_gazde'];
			$adauga->g_oaspeti  = $etapa['g_oaspeti'];
			$adauga->liga       = $etapa['liga'];
			$adauga->serie      = $etapa['serie'];
			$adauga->etapa      = $etapa['etapa'];
			$adauga->data       = $etapa['data'];
			$adauga->ora        = $etapa['ora'];
			$adauga->sezon      = $etapa['sezon'];
			$adauga->save();
		}
    }
}
