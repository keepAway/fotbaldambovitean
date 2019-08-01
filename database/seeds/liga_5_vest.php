<?php

use Illuminate\Database\Seeder;
use App\Echipe;
use App\Etape;

class liga_5_vest extends Seeder
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
				'echipa' => 'Flacara Valea Mare',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Viitorul Straosti',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Viitorul Tomsani',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Spicul Jugureni',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Petrolul Rascaieti',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Flacara Zavoiu',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Olimpia Morteni',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Vointa Ionesti',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Sportul Mogosani',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Viitorul Gaesti',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Viitorul Burduca',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Dinamo Odaia Turcului',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Corbii Mari',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Unirea Cobia',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Olimpia Picior de Munte',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'F.C. Potlogi',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Viitorul Gura Foii',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'PCM Ungureni',
				'liga'   => 5,
				'serie'  => 'VEST',
				'sezon'  => '2019/2020'
			]
		];

		$etape = [
			[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-18',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-25',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-28',
				'ora'       => '18:00',
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-01',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-08',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-11',
				'ora'       => '18:00',
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2018-09-15',
				'ora'       => '11:00',
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-09-15',
				'ora'       => '11:00',
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2018-09-15',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-22',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-29',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-06',
				'ora'       => '11:00',
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-13',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-20',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-27',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-03',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-10',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-17',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-24',
				'ora'       => '11:00',
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Cobia',
				'oaspeti'   => 'PCM Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Corbii Mari',
				'oaspeti'   => 'F.C. Potlogi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Mogosani',
				'oaspeti'   => 'Dinamo Odaia Turcului',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Tomsani',
				'oaspeti'   => 'Viitorul Gaesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Petrolul Rascaieti',
				'oaspeti'   => 'Vointa Ionesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Valea Mare',
				'oaspeti'   => 'Flacara Zavoiu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gura Foii',
				'oaspeti'   => 'Spicul Jugureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Picior de Munte',
				'oaspeti'   => 'Viitorul Straosti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpia Morteni',
				'oaspeti'   => 'Viitorul Burduca',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'F.C. Potlogi',
				'oaspeti'   => 'Unirea Cobia',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Straosti',
				'oaspeti'   => 'Viitorul Gura Foii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'PCM Ungureni',
				'oaspeti'   => 'Olimpia Picior de Munte',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Burduca',
				'oaspeti'   => 'Corbii Mari',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Ionesti',
				'oaspeti'   => 'Sportul Mogosani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Dinamo Odaia Turcului',
				'oaspeti'   => 'Olimpia Morteni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Gaesti',
				'oaspeti'   => 'Petrolul Rascaieti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Flacara Zavoiu',
				'oaspeti'   => 'Viitorul Tomsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Spicul Jugureni',
				'oaspeti'   => 'Flacara Valea Mare',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 5,
				'serie'     => 'VEST',
				'sezon'     => '2019/2020',
				'etapa'     => 34
			]
		];

        /*Echipe::where('liga', 5)->where('serie', 'VEST')
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

		/*Etape::where('liga', 5)->where('serie', 'VEST')
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
