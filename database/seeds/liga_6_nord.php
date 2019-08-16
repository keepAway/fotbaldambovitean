<?php

use Illuminate\Database\Seeder;
use App\Echipe;
use App\Etape;

class liga_6_nord extends Seeder
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
				'echipa' => 'Petrolul Iedera',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Olimpicii Ulmi III',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Vulcana Pandele',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Comertul 2014 Viisoara',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Vointa Valea Voievozilor',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Viitorul Pietrari',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Viitorul Gorgota',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Unirea Ogrea',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Varcolacii Comisani',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Muscelul Valeni',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Cetate 1396 Targoviste II',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Rapid Gemenea',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Blue Boys Targoviste',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Malu cu Flori',
				'liga'   => 6,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			]
		];

		$etape = [
			[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Rapid Gemenea',
				'oaspeti'   => 'Malu cu Flori',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Comertul 2014 Viisoara',
				'oaspeti'   => 'Muscelul Valeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Gorgota',
				'oaspeti'   => 'Vulcana Pandele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Unirea Ogrea',
				'oaspeti'   => 'Cetate 1396 Targoviste II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Varcolacii Comisani',
				'oaspeti'   => 'Blue Boys Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Viitorul Pietrari',
				'oaspeti'   => 'Petrolul Iedera',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Olimpicii Ulmi III',
				'oaspeti'   => 'Vointa Valea Voievozilor',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Malu cu Flori',
				'oaspeti'   => 'Olimpicii Ulmi III',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Vointa Valea Voievozilor',
				'oaspeti'   => 'Viitorul Pietrari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Petrolul Iedera',
				'oaspeti'   => 'Varcolacii Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Blue Boys Targoviste',
				'oaspeti'   => 'Unirea Ogrea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Cetate 1396 Targoviste II',
				'oaspeti'   => 'Viitorul Gorgota',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Vulcana Pandele',
				'oaspeti'   => 'Comertul 2014 Viisoara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => '14:30',
				'gazde'     => 'Muscelul Valeni',
				'oaspeti'   => 'Rapid Gemenea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			]
		];

		/*Echipe::where('liga', 6)->where('serie', 'NORD')
								->where('sezon', '2019/2020')
								->delete();*/
		foreach ($echipe as $echipa) {
			$adauga = new Echipe;
			$adauga->echipa = trim($echipa['echipa']);
			$adauga->liga   = $echipa['liga'];
			$adauga->serie  = $echipa['serie'];
			$adauga->sezon  = $echipa['sezon'];
			$adauga->save();
		}

		/*Etape::where('liga', 6)->where('serie', 'NORD')
								->where('sezon', '2019/2020')
								->delete();*/
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
