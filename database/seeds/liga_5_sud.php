<?php

use Illuminate\Database\Seeder;
use App\Echipe;
use App\Etape;

class liga_5_sud extends Seeder
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
				'echipa' => 'Spic de Grau Ghimpati',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Viitorul Gheboaia',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Unirea Slobozia Moara',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Luceafarul Bolovani',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Unirea Nucet',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Gloria 2018 Bucsani',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Sageata Branistea',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Flacara Ghinesti',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Victoria Vacaresti 2018',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Olimpia Marcesti',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Libertatea Urziceanca',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Publirex Ciocanesti',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Vanatorul 2015 Ratoaia',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Dentas Tartasesti',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Fulgerul Lunguletu',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Vointa Cretu',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Viitorul Dobra',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Vointa Podu Rizii',
				'liga'   => 5,
				'serie'  => 'SUD',
				'sezon'  => '2019/2020'
			]
		];

		$etape = [
			[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Publirex Ciocanesti',
				'oaspeti'   => 'Dentas Tartasesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Dobra',
				'oaspeti'   => 'Fulgerul Lunguletu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Podu Rizii',
				'oaspeti'   => 'Vanatorul 2015 Ratoaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Cretu',
				'oaspeti'   => 'Olimpia Marcesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Victoria Vacaresti 2018',
				'oaspeti'   => 'Luceafarul Bolovani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spic de Grau Ghimpati',
				'oaspeti'   => 'Gloria 2018 Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Ghinesti',
				'oaspeti'   => 'Unirea Nucet',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sageata Branistea',
				'oaspeti'   => 'Unirea Slobozia Moara',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Libertatea Urziceanca',
				'oaspeti'   => 'Viitorul Gheboaia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Fulgerul Lunguletu',
				'oaspeti'   => 'Publirex Ciocanesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Slobozia Moara',
				'oaspeti'   => 'Flacara Ghinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dentas Tartasesti',
				'oaspeti'   => 'Sageata Branistea',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gheboaia',
				'oaspeti'   => 'Viitorul Dobra',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Bolovani',
				'oaspeti'   => 'Vointa Podu Rizii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vanatorul 2015 Ratoaia',
				'oaspeti'   => 'Libertatea Urziceanca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Marcesti',
				'oaspeti'   => 'Victoria Vacaresti 2018',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria 2018 Bucsani',
				'oaspeti'   => 'Vointa Cretu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Nucet',
				'oaspeti'   => 'Spic de Grau Ghimpati',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'SUD',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			]
		];

		/*Echipe::where('liga', 5)->where('serie', 'SUD')
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

		/*Etape::where('liga', 5)->where('serie', 'SUD')
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
