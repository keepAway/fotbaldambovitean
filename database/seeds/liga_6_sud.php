<?php

use Illuminate\Database\Seeder;
use App\Echipe;
use App\Etape;

class liga_6_sud extends Seeder
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
				'echipa' => 'Unirea Bucsani II',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Neajlovul Puntea de Greci',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Vointa Crevedia 2010',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Sageata Catunu 1975',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Rapid Hagioaica',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Luceafarul Poiana',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Gaz Metan Vladeni',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Gaita Bilciuresti',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Dacia Hulubesti',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Juniorul Ciocanesti',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Avantul Produlesti',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Coada Izvorului',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Universitatea Baleni',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Vulturii Sperantei Petresti',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Gloria Postarnacu',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Recolta Gura Sutii II',
				'liga'   => 6,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			]
		];

		$etape = [
			[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-01',
				'ora'       => '14:30',
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-08',
				'ora'       => '14:30',
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-11',
				'ora'       => '17:00',
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-11',
				'ora'       => '17:00',
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-11',
				'ora'       => '17:00',
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-11',
				'ora'       => '17:00',
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-11',
				'ora'       => '17:00',
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-11',
				'ora'       => '17:00',
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-11',
				'ora'       => '17:00',
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-11',
				'ora'       => '17:00',
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-15',
				'ora'       => '14:30',
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-22',
				'ora'       => '14:30',
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-29',
				'ora'       => '14:30',
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-06',
				'ora'       => '14:30',
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-13',
				'ora'       => '14:30',
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-20',
				'ora'       => '14:30',
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-27',
				'ora'       => '14:30',
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-03',
				'ora'       => '14:30',
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-10',
				'ora'       => '14:30',
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-17',
				'ora'       => '14:30',
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-24',
				'ora'       => '14:30',
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-24',
				'ora'       => '14:30',
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-24',
				'ora'       => '14:30',
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-24',
				'ora'       => '14:30',
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-24',
				'ora'       => '14:30',
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-24',
				'ora'       => '14:30',
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-24',
				'ora'       => '14:30',
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-24',
				'ora'       => '14:30',
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vulturii Sperantei Petresti',
				'oaspeti'   => 'Gloria Postarnacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Avantul Produlesti',
				'oaspeti'   => 'Neajlovul Puntea de Greci',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii II',
				'oaspeti'   => 'Universitatea Baleni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani II',
				'oaspeti'   => 'Coada Izvorului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Vladeni',
				'oaspeti'   => 'Dacia Hulubesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Poiana',
				'oaspeti'   => 'Juniorul Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Catunu 1975',
				'oaspeti'   => 'Vointa Crevedia 2010',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Rapid Hagioaica',
				'oaspeti'   => 'Gaita Bilciuresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Postarnacu',
				'oaspeti'   => 'Avantul Produlesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Neajlovul Puntea de Greci',
				'oaspeti'   => 'Recolta Gura Sutii II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Universitatea Baleni',
				'oaspeti'   => 'Unirea Bucsani II',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Coada Izvorului',
				'oaspeti'   => 'Gaz Metan Vladeni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dacia Hulubesti',
				'oaspeti'   => 'Luceafarul Poiana',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Juniorul Ciocanesti',
				'oaspeti'   => 'Sageata Catunu 1975',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Crevedia 2010',
				'oaspeti'   => 'Rapid Hagioaica',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaita Bilciuresti',
				'oaspeti'   => 'Vulturii Sperantei Petresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 6,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			]
		];

		/*Echipe::where('liga', 6)->where('serie', 'SUD')
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

		/*Etape::where('liga', 6)->where('serie', 'SUD')
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
