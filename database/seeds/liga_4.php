<?php

use Illuminate\Database\Seeder;
use App\Echipe;
use App\Etape;

class liga_4 extends Seeder
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
				'echipa' => 'Sportul Voinesti',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Unirea Bucsani',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Recolta Gura Sutii',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Gloria Cornesti',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Roberto Ziduri',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Progresul Matasaru',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'C.S.M Fieni',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Unirea Colibasi',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Viitorul Razvad',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Urban Titu',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Unirea Ungureni',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Olimpicii Ulmi',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Vointa Visina',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Gaz Metan Finta',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Luceafarul Dragomiresti',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Steagu Rosu Colacu',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'Cetatea 1396 Targoviste',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			], [
				'echipa' => 'FC Brezoaele',
				'liga'   => 4,
				'serie'  => NULL,
				'sezon'  => '2019/2020'
			]
		];

        $etape = [
			[
				'data'      => '2019-08-17',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-17',
				'ora'       => '11:00',
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-17',
				'ora'       => '11:00',
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-17',
				'ora'       => '11:00',
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-17',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-17',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-17',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-17',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-17',
				'ora'       => '11:00',
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 1
			],[
				'data'      => '2019-08-24',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-24',
				'ora'       => '11:00',
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-24',
				'ora'       => '11:00',
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-24',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-24',
				'ora'       => '11:00',
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-24',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-24',
				'ora'       => '11:00',
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-24',
				'ora'       => '11:00',
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-24',
				'ora'       => '11:00',
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 2
			],[
				'data'      => '2019-08-27',
				'ora'       => '18:00',
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-27',
				'ora'       => '18:00',
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-27',
				'ora'       => '18:00',
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-27',
				'ora'       => '18:00',
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-27',
				'ora'       => '18:00',
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-27',
				'ora'       => '18:00',
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-27',
				'ora'       => '18:00',
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-27',
				'ora'       => '18:00',
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-27',
				'ora'       => '18:00',
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 3
			],[
				'data'      => '2019-08-31',
				'ora'       => '11:00',
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-08-31',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-08-31',
				'ora'       => '11:00',
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-08-31',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-08-31',
				'ora'       => '11:00',
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-08-31',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-08-31',
				'ora'       => '11:00',
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-08-31',
				'ora'       => '11:00',
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-08-31',
				'ora'       => '11:00',
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 4
			],[
				'data'      => '2019-09-07',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-07',
				'ora'       => '11:00',
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-07',
				'ora'       => '11:00',
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-07',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-07',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-07',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-07',
				'ora'       => '11:00',
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-07',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-07',
				'ora'       => '11:00',
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 5
			],[
				'data'      => '2019-09-14',
				'ora'       => '11:00',
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-14',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-14',
				'ora'       => '11:00',
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-14',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-14',
				'ora'       => '11:00',
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-14',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-14',
				'ora'       => '11:00',
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-14',
				'ora'       => '11:00',
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-14',
				'ora'       => '11:00',
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 6
			],[
				'data'      => '2019-09-17',
				'ora'       => '18:00',
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-17',
				'ora'       => '18:00',
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-17',
				'ora'       => '18:00',
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-17',
				'ora'       => '18:00',
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-17',
				'ora'       => '18:00',
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-17',
				'ora'       => '18:00',
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-17',
				'ora'       => '18:00',
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-17',
				'ora'       => '18:00',
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-17',
				'ora'       => '18:00',
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 7
			],[
				'data'      => '2019-09-21',
				'ora'       => '11:00',
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-21',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-21',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-21',
				'ora'       => '11:00',
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-21',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-21',
				'ora'       => '11:00',
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-21',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-21',
				'ora'       => '11:00',
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-21',
				'ora'       => '11:00',
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 8
			],[
				'data'      => '2019-09-28',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-28',
				'ora'       => '11:00',
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-28',
				'ora'       => '11:00',
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-28',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-28',
				'ora'       => '11:00',
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-28',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-28',
				'ora'       => '11:00',
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-28',
				'ora'       => '11:00',
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-09-28',
				'ora'       => '11:00',
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 9
			],[
				'data'      => '2019-10-05',
				'ora'       => '11:00',
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-05',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-05',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-05',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-05',
				'ora'       => '11:00',
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-05',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-05',
				'ora'       => '11:00',
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-05',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-05',
				'ora'       => '11:00',
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 10
			],[
				'data'      => '2019-10-12',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-12',
				'ora'       => '11:00',
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-12',
				'ora'       => '11:00',
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-12',
				'ora'       => '11:00',
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-12',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-12',
				'ora'       => '11:00',
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-12',
				'ora'       => '11:00',
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-12',
				'ora'       => '11:00',
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-12',
				'ora'       => '11:00',
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 11
			],[
				'data'      => '2019-10-19',
				'ora'       => '11:00',
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-19',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-19',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-19',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-19',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-19',
				'ora'       => '11:00',
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-19',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-19',
				'ora'       => '11:00',
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-19',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 12
			],[
				'data'      => '2019-10-26',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-26',
				'ora'       => '11:00',
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-26',
				'ora'       => '11:00',
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-26',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-26',
				'ora'       => '11:00',
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-26',
				'ora'       => '11:00',
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-26',
				'ora'       => '11:00',
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-26',
				'ora'       => '11:00',
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-10-26',
				'ora'       => '11:00',
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 13
			],[
				'data'      => '2019-11-02',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-02',
				'ora'       => '11:00',
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-02',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-02',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-02',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-02',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-02',
				'ora'       => '11:00',
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-02',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-02',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 14
			],[
				'data'      => '2019-11-09',
				'ora'       => '11:00',
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-09',
				'ora'       => '11:00',
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-09',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-09',
				'ora'       => '11:00',
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-09',
				'ora'       => '11:00',
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-09',
				'ora'       => '11:00',
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-09',
				'ora'       => '11:00',
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-09',
				'ora'       => '11:00',
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-09',
				'ora'       => '11:00',
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 15
			],[
				'data'      => '2019-11-16',
				'ora'       => '11:00',
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-16',
				'ora'       => '11:00',
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-16',
				'ora'       => '11:00',
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-16',
				'ora'       => '11:00',
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-16',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-16',
				'ora'       => '11:00',
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-16',
				'ora'       => '11:00',
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-16',
				'ora'       => '11:00',
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-16',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 16
			],[
				'data'      => '2019-11-23',
				'ora'       => '11:00',
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-23',
				'ora'       => '11:00',
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-23',
				'ora'       => '11:00',
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-23',
				'ora'       => '11:00',
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-23',
				'ora'       => '11:00',
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-23',
				'ora'       => '11:00',
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-23',
				'ora'       => '11:00',
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-23',
				'ora'       => '11:00',
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => '2019-11-23',
				'ora'       => '11:00',
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 17
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 18
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 19
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 20
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 21
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 22
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 23
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 24
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 25
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 26
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 27
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 28
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 29
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 30
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 31
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 32
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Roberto Ziduri',
				'oaspeti'   => 'Sportul Voinesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Progresul Matasaru',
				'oaspeti'   => 'Recolta Gura Sutii',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Urban Titu',
				'oaspeti'   => 'C.S.M Fieni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Steagu Rosu Colacu',
				'oaspeti'   => 'Viitorul Razvad',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gaz Metan Finta',
				'oaspeti'   => 'Unirea Ungureni',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'FC Brezoaele',
				'oaspeti'   => 'Vointa Visina',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Bucsani',
				'oaspeti'   => 'Luceafarul Dragomiresti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Gloria Cornesti',
				'oaspeti'   => 'Cetatea 1396 Targoviste',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Olimpicii Ulmi',
				'oaspeti'   => 'Unirea Colibasi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 33
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Recolta Gura Sutii',
				'oaspeti'   => 'Roberto Ziduri',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Cetatea 1396 Targoviste',
				'oaspeti'   => 'Unirea Bucsani',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Sportul Voinesti',
				'oaspeti'   => 'Gloria Cornesti',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Colibasi',
				'oaspeti'   => 'Progresul Matasaru',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Unirea Ungureni',
				'oaspeti'   => 'Urban Titu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'C.S.M Fieni',
				'oaspeti'   => 'Olimpicii Ulmi',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Viitorul Razvad',
				'oaspeti'   => 'Gaz Metan Finta',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Vointa Visina',
				'oaspeti'   => 'Steagu Rosu Colacu',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 34
			],[
				'data'      => null,
				'ora'       => null,
				'gazde'     => 'Luceafarul Dragomiresti',
				'oaspeti'   => 'FC Brezoaele',
				'g_gazde'   => null,
				'g_oaspeti' => null,
				'liga'      => 4,
				'serie'     => null,
				'sezon'     => '2019/2020',
				'etapa'     => 34
			]
		];

		/*Echipe::where('liga', 4)->where('serie', null)
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

		/*Etape::where('liga', 4)->where('serie', null)
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
			$adauga->data      = $etapa['data'] /*!= NULL ? DateTime::createFromFormat('d-m-Y', ($etapa['data']))->format('Y-m-d') : NULL*/;
			$adauga->ora       = $etapa['ora'];
			$adauga->sezon     = $etapa['sezon'];
			$adauga->save();
		}
    }
}
