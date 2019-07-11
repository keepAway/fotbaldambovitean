<?php

use Illuminate\Database\Seeder;
use App\Echipe;
use App\Etape;

class UpdateLiga1TableSezon20192020 extends Seeder
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
				'echipa' => 'Sepsi',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'FC Voluntari',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'FC Botoșani',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Astra Giurgiu',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Poli Iași',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'CFR Cluj',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Universitatea Craiova',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Academica Clinceni',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'FC Hermannstadt',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'FCSB',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Dinamo București',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Gaz Metan Mediaș',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Chindia Târgoviște',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'FC Viitorul',
				'serie'  => NULL,
				'liga'   => 1,
				'sezon'  => '2019/2020'
			]
		];


		$etape  = [
			[
				'data'      => '2018-07-12',
				'ora'       => '18:30',
				'oaspeti'   => 'Sepsi',
				'gazde'     => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2018-07-13',
				'ora'       => '18:00',
				'oaspeti'   => 'FC Botoșani',
				'gazde'     => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2018-07-13',
				'ora'       => '21:00',
				'oaspeti'   => 'Poli Iași',
				'gazde'     => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2018-07-14',
				'ora'       => '18:00',
				'oaspeti'   => 'Academica Clinceni',
				'gazde'     => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2018-07-14',
				'ora'       => '21:00',
				'oaspeti'   => 'FC Hermannstadt',
				'gazde'     => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2018-07-15',
				'ora'       => '18:00',
				'oaspeti'   => 'Chindia Târgoviște',
				'gazde'     => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2018-07-15',
				'ora'       => '21:00',
				'oaspeti'   => 'Dinamo București',
				'gazde'     => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2018-07-19',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2018-07-19',
				'ora'       => '21:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2018-07-20',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2018-07-20',
				'ora'       => '21:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2018-07-21',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2018-07-21',
				'ora'       => '21:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2018-07-22',
				'ora'       => '21:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2018-07-27',
				'ora'       => '18:00',
				'gazde'     => 'CFR Cluj',
				'oaspeti'   => 'Dinamo București',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2018-07-27',
				'ora'       => '18:00',
				'gazde'     => 'FC Viitorul',
				'oaspeti'   => 'FC Hermannstadt',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2018-07-27',
				'ora'       => '18:00',
				'gazde'     => 'FC Voluntari',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2018-07-27',
				'ora'       => '18:00',
				'gazde'     => 'FCSB',
				'oaspeti'   => 'FC Botoșani',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2018-07-27',
				'ora'       => '18:00',
				'gazde'     => 'Gaz Metan Mediaș',
				'oaspeti'   => 'Sepsi',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2018-07-27',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'Academica Clinceni',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2018-07-27',
				'ora'       => '18:00',
				'gazde'     => 'Universitatea Craiova',
				'oaspeti'   => 'Chindia Târgoviște',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2018-08-03',
				'ora'       => '18:00',
				'gazde'     => 'Astra Giurgiu',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2018-08-03',
				'ora'       => '18:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2018-08-03',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'Academica Clinceni',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2018-08-03',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2018-08-03',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2018-08-03',
				'ora'       => '18:00',
				'gazde'     => 'FC Voluntari',
				'oaspeti'   => 'Poli Iași',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2018-08-03',
				'ora'       => '18:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2018-08-10',
				'ora'       => '18:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'Chindia Târgoviște',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2018-08-10',
				'ora'       => '18:00',
				'gazde'     => 'CFR Cluj',
				'oaspeti'   => 'FC Hermannstadt',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2018-08-10',
				'ora'       => '18:00',
				'gazde'     => 'FC Viitorul',
				'oaspeti'   => 'FC Botoșani',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2018-08-10',
				'ora'       => '18:00',
				'gazde'     => 'FCSB',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2018-08-10',
				'ora'       => '18:00',
				'gazde'     => 'Gaz Metan Mediaș',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2018-08-10',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'Dinamo București',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2018-08-10',
				'ora'       => '18:00',
				'gazde'     => 'Universitatea Craiova',
				'oaspeti'   => 'Sepsi',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2018-08-17',
				'ora'       => '18:00',
				'gazde'     => 'Astra Giurgiu',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2018-08-17',
				'ora'       => '18:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'Dinamo București',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2018-08-17',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2018-08-17',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'Academica Clinceni',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2018-08-17',
				'ora'       => '18:00',
				'gazde'     => 'FC Voluntari',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2018-08-17',
				'ora'       => '18:00',
				'gazde'     => 'FCSB',
				'oaspeti'   => 'Poli Iași',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2018-08-17',
				'ora'       => '18:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2018-08-24',
				'ora'       => '18:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'Sepsi',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-08-24',
				'ora'       => '18:00',
				'gazde'     => 'CFR Cluj',
				'oaspeti'   => 'FC Botoșani',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-08-24',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'FC Hermannstadt',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-08-24',
				'ora'       => '18:00',
				'gazde'     => 'FC Viitorul',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-08-24',
				'ora'       => '18:00',
				'gazde'     => 'Gaz Metan Mediaș',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-08-24',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'Chindia Târgoviște',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-08-24',
				'ora'       => '18:00',
				'gazde'     => 'Universitatea Craiova',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-08-31',
				'ora'       => '18:00',
				'gazde'     => 'Astra Giurgiu',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2018-08-31',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'Academica Clinceni',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2018-08-31',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'Chindia Târgoviște',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2018-08-31',
				'ora'       => '18:00',
				'gazde'     => 'FC Voluntari',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2018-08-31',
				'ora'       => '18:00',
				'gazde'     => 'FCSB',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2018-08-31',
				'ora'       => '18:00',
				'gazde'     => 'Gaz Metan Mediaș',
				'oaspeti'   => 'Poli Iași',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2018-08-31',
				'ora'       => '18:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'Dinamo București',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2018-09-14',
				'ora'       => '18:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2018-09-14',
				'ora'       => '18:00',
				'gazde'     => 'CFR Cluj',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2018-09-14',
				'ora'       => '18:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'Sepsi',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2018-09-14',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'FC Botoșani',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2018-09-14',
				'ora'       => '18:00',
				'gazde'     => 'FC Viitorul',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2018-09-14',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'FC Hermannstadt',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2018-09-14',
				'ora'       => '18:00',
				'gazde'     => 'Universitatea Craiova',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2018-09-21',
				'ora'       => '18:00',
				'gazde'     => 'Astra Giurgiu',
				'oaspeti'   => 'Dinamo București',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2018-09-21',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'Chindia Târgoviște',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2018-09-21',
				'ora'       => '18:00',
				'gazde'     => 'FC Viitorul',
				'oaspeti'   => 'Poli Iași',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2018-09-21',
				'ora'       => '18:00',
				'gazde'     => 'FC Voluntari',
				'oaspeti'   => 'Academica Clinceni',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2018-09-21',
				'ora'       => '18:00',
				'gazde'     => 'FCSB',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2018-09-21',
				'ora'       => '18:00',
				'gazde'     => 'Gaz Metan Mediaș',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2018-09-21',
				'ora'       => '18:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'FC Hermannstadt',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2018-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2018-09-28',
				'ora'       => '18:00',
				'gazde'     => 'CFR Cluj',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2018-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2018-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2018-09-28',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'FC Botoșani',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2018-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'Sepsi',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2018-09-28',
				'ora'       => '18:00',
				'gazde'     => 'Universitatea Craiova',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2018-10-05',
				'ora'       => '18:00',
				'gazde'     => 'Astra Giurgiu',
				'oaspeti'   => 'FC Hermannstadt',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2018-10-05',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'Sepsi',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2018-10-05',
				'ora'       => '18:00',
				'gazde'     => 'FC Viitorul',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2018-10-05',
				'ora'       => '18:00',
				'gazde'     => 'FC Voluntari',
				'oaspeti'   => 'Chindia Târgoviște',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2018-10-05',
				'ora'       => '18:00',
				'gazde'     => 'FCSB',
				'oaspeti'   => 'Dinamo București',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2018-10-05',
				'ora'       => '18:00',
				'gazde'     => 'Gaz Metan Mediaș',
				'oaspeti'   => 'Academica Clinceni',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2018-10-05',
				'ora'       => '18:00',
				'gazde'     => 'Universitatea Craiova',
				'oaspeti'   => 'Poli Iași',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2018-10-19',
				'ora'       => '18:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2018-10-19',
				'ora'       => '18:00',
				'gazde'     => 'CFR Cluj',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2018-10-19',
				'ora'       => '18:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2018-10-19',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2018-10-19',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2018-10-19',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'FC Botoșani',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2018-10-19',
				'ora'       => '18:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2018-10-26',
				'ora'       => '18:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2018-10-26',
				'ora'       => '18:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2018-10-26',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2018-10-26',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2018-10-26',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2018-10-26',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2018-10-26',
				'ora'       => '18:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2018-11-02',
				'ora'       => '18:00',
				'gazde'     => 'Astra Giurgiu',
				'oaspeti'   => 'Poli Iași',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2018-11-02',
				'ora'       => '18:00',
				'gazde'     => 'CFR Cluj',
				'oaspeti'   => 'Academica Clinceni',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2018-11-02',
				'ora'       => '18:00',
				'gazde'     => 'FC Viitorul',
				'oaspeti'   => 'Chindia Târgoviște',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2018-11-02',
				'ora'       => '18:00',
				'gazde'     => 'FC Voluntari',
				'oaspeti'   => 'FC Botoșani',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2018-11-02',
				'ora'       => '18:00',
				'gazde'     => 'FCSB',
				'oaspeti'   => 'Sepsi',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2018-11-02',
				'ora'       => '18:00',
				'gazde'     => 'Gaz Metan Mediaș',
				'oaspeti'   => 'FC Hermannstadt',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2018-11-02',
				'ora'       => '18:00',
				'gazde'     => 'Universitatea Craiova',
				'oaspeti'   => 'Dinamo București',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2018-11-09',
				'ora'       => '18:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'Poli Iași',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2018-11-09',
				'ora'       => '18:00',
				'gazde'     => 'Astra Giurgiu',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2018-11-09',
				'ora'       => '18:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2018-11-09',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2018-11-09',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2018-11-09',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2018-11-09',
				'ora'       => '18:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2018-11-23',
				'ora'       => '18:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'Dinamo București',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2018-11-23',
				'ora'       => '18:00',
				'gazde'     => 'CFR Cluj',
				'oaspeti'   => 'Chindia Târgoviște',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2018-11-23',
				'ora'       => '18:00',
				'gazde'     => 'FC Viitorul',
				'oaspeti'   => 'Sepsi',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2018-11-23',
				'ora'       => '18:00',
				'gazde'     => 'FCSB',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2018-11-23',
				'ora'       => '18:00',
				'gazde'     => 'Gaz Metan Mediaș',
				'oaspeti'   => 'FC Botoșani',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2018-11-23',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2018-11-23',
				'ora'       => '18:00',
				'gazde'     => 'Universitatea Craiova',
				'oaspeti'   => 'FC Hermannstadt',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2018-11-30',
				'ora'       => '18:00',
				'gazde'     => 'Astra Giurgiu',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => '2018-11-30',
				'ora'       => '18:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'Academica Clinceni',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => '2018-11-30',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'Poli Iași',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => '2018-11-30',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => '2018-11-30',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => '2018-11-30',
				'ora'       => '18:00',
				'gazde'     => 'FC Voluntari',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => '2018-11-30',
				'ora'       => '18:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => '2018-12-04',
				'ora'       => '18:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'FC Hermannstadt',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => '2018-12-04',
				'ora'       => '18:00',
				'gazde'     => 'CFR Cluj',
				'oaspeti'   => 'Sepsi',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => '2018-12-04',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'Chindia Târgoviște',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => '2018-12-04',
				'ora'       => '18:00',
				'gazde'     => 'FC Viitorul',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => '2018-12-04',
				'ora'       => '18:00',
				'gazde'     => 'Gaz Metan Mediaș',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => '2018-12-04',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => '2018-12-04',
				'ora'       => '18:00',
				'gazde'     => 'Universitatea Craiova',
				'oaspeti'   => 'FC Botoșani',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => '2018-12-07',
				'ora'       => '18:00',
				'gazde'     => 'Astra Giurgiu',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => '2018-12-07',
				'ora'       => '18:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'Poli Iași',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => '2018-12-07',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => '2018-12-07',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'Dinamo București',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => '2018-12-07',
				'ora'       => '18:00',
				'gazde'     => 'FC Voluntari',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => '2018-12-07',
				'ora'       => '18:00',
				'gazde'     => 'FCSB',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => '2018-12-07',
				'ora'       => '18:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'Academica Clinceni',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => '2018-12-14',
				'ora'       => '18:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'FC Botoșani',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => '2018-12-14',
				'ora'       => '18:00',
				'gazde'     => 'CFR Cluj',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => '2018-12-14',
				'ora'       => '18:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'FC Hermannstadt',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => '2018-12-14',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'Sepsi',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => '2018-12-14',
				'ora'       => '18:00',
				'gazde'     => 'FC Viitorul',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => '2018-12-14',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => '2018-12-14',
				'ora'       => '18:00',
				'gazde'     => 'Universitatea Craiova',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => '2018-12-21',
				'ora'       => '18:00',
				'gazde'     => 'Astra Giurgiu',
				'oaspeti'   => 'Academica Clinceni',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => '2018-12-21',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'Dinamo București',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => '2018-12-21',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'Poli Iași',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => '2018-12-21',
				'ora'       => '18:00',
				'gazde'     => 'FC Voluntari',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => '2018-12-21',
				'ora'       => '18:00',
				'gazde'     => 'FCSB',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => '2018-12-21',
				'ora'       => '18:00',
				'gazde'     => 'Gaz Metan Mediaș',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => '2018-12-21',
				'ora'       => '18:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'Chindia Târgoviște',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => '2018-02-01',
				'ora'       => '18:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => '2018-02-01',
				'ora'       => '18:00',
				'gazde'     => 'CFR Cluj',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => '2018-02-01',
				'ora'       => '18:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'FC Botoșani',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => '2018-02-01',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => '2018-02-01',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'Sepsi',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => '2018-02-01',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => '2018-02-01',
				'ora'       => '18:00',
				'gazde'     => 'Universitatea Craiova',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => '2018-02-08',
				'ora'       => '18:00',
				'gazde'     => 'Astra Giurgiu',
				'oaspeti'   => 'Chindia Târgoviște',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => '2018-02-08',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'FC Hermannstadt',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => '2018-02-08',
				'ora'       => '18:00',
				'gazde'     => 'FC Viitorul',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => '2018-02-08',
				'ora'       => '18:00',
				'gazde'     => 'FC Voluntari',
				'oaspeti'   => 'Dinamo București',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => '2018-02-08',
				'ora'       => '18:00',
				'gazde'     => 'FCSB',
				'oaspeti'   => 'Academica Clinceni',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => '2018-02-08',
				'ora'       => '18:00',
				'gazde'     => 'Gaz Metan Mediaș',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => '2018-02-08',
				'ora'       => '18:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'Poli Iași',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => '2018-02-15',
				'ora'       => '18:00',
				'gazde'     => 'Academica Clinceni',
				'oaspeti'   => 'Gaz Metan Mediaș',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => '2018-02-15',
				'ora'       => '18:00',
				'gazde'     => 'CFR Cluj',
				'oaspeti'   => 'FC Viitorul',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => '2018-02-15',
				'ora'       => '18:00',
				'gazde'     => 'Chindia Târgoviște',
				'oaspeti'   => 'FC Voluntari',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => '2018-02-15',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo București',
				'oaspeti'   => 'FCSB',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => '2018-02-15',
				'ora'       => '18:00',
				'gazde'     => 'FC Hermannstadt',
				'oaspeti'   => 'Astra Giurgiu',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => '2018-02-15',
				'ora'       => '18:00',
				'gazde'     => 'Poli Iași',
				'oaspeti'   => 'Universitatea Craiova',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => '2018-02-15',
				'ora'       => '18:00',
				'gazde'     => 'Sepsi',
				'oaspeti'   => 'FC Botoșani',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => '2018-02-22',
				'ora'       => '18:00',
				'gazde'     => 'Astra Giurgiu',
				'oaspeti'   => 'Sepsi',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => '2018-02-22',
				'ora'       => '18:00',
				'gazde'     => 'FC Botoșani',
				'oaspeti'   => 'Poli Iași',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => '2018-02-22',
				'ora'       => '18:00',
				'gazde'     => 'FC Viitorul',
				'oaspeti'   => 'Academica Clinceni',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => '2018-02-22',
				'ora'       => '18:00',
				'gazde'     => 'FC Voluntari',
				'oaspeti'   => 'FC Hermannstadt',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => '2018-02-22',
				'ora'       => '18:00',
				'gazde'     => 'FCSB',
				'oaspeti'   => 'Chindia Târgoviște',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => '2018-02-22',
				'ora'       => '18:00',
				'gazde'     => 'Gaz Metan Mediaș',
				'oaspeti'   => 'Dinamo București',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => '2018-02-22',
				'ora'       => '18:00',
				'gazde'     => 'Universitatea Craiova',
				'oaspeti'   => 'CFR Cluj',
				'g_gazde'   => NULL,
				'g_oaspeti' => NULL,
				'liga'      => 1,
				'serie'     => NULL,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			]
		];

		Echipe::where('liga', 1)->where('serie', null)->delete();
		foreach ($echipe as $echipa) {
			$adauga = new Echipe;
			$adauga->echipa = trim($echipa['echipa']);
			$adauga->liga   = $echipa['liga'];
			$adauga->serie  = $echipa['serie'];
			$adauga->sezon  = $echipa['sezon'];
			$adauga->save();
		}

		Etape::where('liga', 1)->where('serie', null)->delete();
		foreach ($etape as $etapa) {
			$adauga = new Etape;
			$adauga->gazde     = trim($etapa['gazde']);
			$adauga->oaspeti   = trim($etapa['oaspeti']);
			$adauga->g_gazde   = $etapa['g_gazde'];
			$adauga->g_oaspeti = $etapa['g_oaspeti'];
			$adauga->liga      = $etapa['liga'];
			$adauga->serie     = $etapa['serie'];
			$adauga->etapa     = $etapa['etapa'];
			$adauga->data      = $etapa['data'];
			$adauga->ora       = $etapa['ora'];
			$adauga->sezon     = $etapa['sezon'];
			$adauga->save();
		}
    }
}
