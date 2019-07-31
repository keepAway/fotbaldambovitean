<?php

use Illuminate\Database\Seeder;
use App\Echipe;
use App\Etape;

class liga_5_nord extends Seeder
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
				'echipa' => 'Viitorul I.L. Caragiale',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Luceafarul Darmanesti',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Flacara Suta Seaca',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Sageata Gura Ocnitei',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Vointa Sacuieni',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Vointa Tatarani',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Vointa Steaua Pietrosita',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Sportul Runcu',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Fortis Valea Lunga',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Viitorul Ocnita',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Pomicola Raciu',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Victoria Comisani',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Vointa Adanca',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Olimpicii 2 Ulmi',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Vointa Buciumeni',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Doicesti',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Unirea Lucieni',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Bradul Moroeni',
				'liga'   => 5,
				'serie'  => 'NORD',
				'sezon'  => '2019/2020'
			]
		];

		$etape = [
			[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Sacuieni',
				'oaspeti'   => 'Doicesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul I.L. Caragiale',
				'oaspeti'   => 'Vointa Tatarani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Ocnita',
				'oaspeti'   => 'Vointa Steaua Pietrosita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Runcu',
				'oaspeti'   => 'Vointa Buciumeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Gura Ocnitei',
				'oaspeti'   => 'Unirea Lucieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Bradul Moroeni',
				'oaspeti'   => 'Olimpicii 2 Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Darmanesti',
				'oaspeti'   => 'Victoria Comisani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fortis Valea Lunga',
				'oaspeti'   => 'Pomicola Raciu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Adanca',
				'oaspeti'   => 'Flacara Suta Seaca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Tatarani',
				'oaspeti'   => 'Vointa Sacuieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Pomicola Raciu',
				'oaspeti'   => 'Luceafarul Darmanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Doicesti',
				'oaspeti'   => 'Fortis Valea Lunga',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Suta Seaca',
				'oaspeti'   => 'Viitorul I.L. Caragiale',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Lucieni',
				'oaspeti'   => 'Viitorul Ocnita',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Steaua Pietrosita',
				'oaspeti'   => 'Vointa Adanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Buciumeni',
				'oaspeti'   => 'Sageata Gura Ocnitei',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii 2 Ulmi',
				'oaspeti'   => 'Sportul Runcu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Comisani',
				'oaspeti'   => 'Bradul Moroeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'NORD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			]
		];

    	/*Echipe::where('liga', 5)->where('serie', 'NORD')
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

		/*Etape::where('liga', 5)->where('serie', 'NORD')
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
