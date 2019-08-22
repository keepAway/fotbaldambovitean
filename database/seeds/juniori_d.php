<?php

use Illuminate\Database\Seeder;
use App\Echipe;
use App\Etape;

class juniori_d extends Seeder
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
				'echipa' => 'Progresul Gaesti',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Chindia Targoviste 2',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'C.S.M Fieni',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'CSS Targoviste',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'FC Pucioasa',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Fortis Valea Lunga',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Urban Titu',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Flacara Moreni',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Kinder Targoviste',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'GSA Nucet',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Luceafarul Dragomiresti',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Kinder Targoviste 2',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Olimpicii Ulmi',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Urban Titu 2',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'Chindia Targoviste',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			],[
				'echipa' => 'STA',
				'liga'   => 7,
				'serie'  => null,
				'sezon'  => '2019/2020'
			]
		];

		$etape = [
			[
				'data' => '2019-09-01',
				'ora'  => '17:00',
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 1
			],[
				'data' => '2019-09-01',
				'ora'  => '17:00',
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 1
			],[
				'data' => '2019-09-01',
				'ora'  => '17:00',
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 1
			],[
				'data' => '2019-09-01',
				'ora'  => '17:00',
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 1
			],[
				'data' => '2019-09-01',
				'ora'  => '17:00',
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 1
			],[
				'data' => '2019-09-01',
				'ora'  => '17:00',
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 1
			],[
				'data' => '2019-09-01',
				'ora'  => '17:00',
				'gazde' => 'Urban Titu',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 1
			],[
				'data' => '2019-09-01',
				'ora'  => '17:00',
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 1
			],[
				'data' => '2019-09-05',
				'ora'  => '17:00',
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 2
			],[
				'data' => '2019-09-05',
				'ora'  => '17:00',
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 2
			],[
				'data' => '2019-09-05',
				'ora'  => '17:00',
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 2
			],[
				'data' => '2019-09-05',
				'ora'  => '17:00',
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 2
			],[
				'data' => '2019-09-05',
				'ora'  => '17:00',
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 2
			],[
				'data' => '2019-09-05',
				'ora'  => '17:00',
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 2
			],[
				'data' => '2019-09-05',
				'ora'  => '17:00',
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 2
			],[
				'data' => '2019-09-05',
				'ora'  => '17:00',
				'gazde' => 'STA',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 2
			],[
				'data' => '2019-09-08',
				'ora'  => '17:00',
				'gazde' => 'STA',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 3
			],[
				'data' => '2019-09-08',
				'ora'  => '17:00',
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 3
			],[
				'data' => '2019-09-08',
				'ora'  => '17:00',
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 3
			],[
				'data' => '2019-09-08',
				'ora'  => '17:00',
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 3
			],[
				'data' => '2019-09-08',
				'ora'  => '17:00',
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 3
			],[
				'data' => '2019-09-08',
				'ora'  => '17:00',
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 3
			],[
				'data' => '2019-09-08',
				'ora'  => '17:00',
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 3
			],[
				'data' => '2019-09-08',
				'ora'  => '17:00',
				'gazde' => 'Urban Titu',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 3
			],[
				'data' => '2019-09-12',
				'ora'  => '17:00',
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 4
			],[
				'data' => '2019-09-12',
				'ora'  => '17:00',
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 4
			],[
				'data' => '2019-09-12',
				'ora'  => '17:00',
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 4
			],[
				'data' => '2019-09-12',
				'ora'  => '17:00',
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 4
			],[
				'data' => '2019-09-12',
				'ora'  => '17:00',
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 4
			],[
				'data' => '2019-09-12',
				'ora'  => '17:00',
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 4
			],[
				'data' => '2019-09-12',
				'ora'  => '17:00',
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 4
			],[
				'data' => '2019-09-12',
				'ora'  => '17:00',
				'gazde' => 'Urban Titu',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 4
			],[
				'data' => '2019-09-15',
				'ora'  => '17:00',
				'gazde' => 'STA',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 5
			],[
				'data' => '2019-09-15',
				'ora'  => '17:00',
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 5
			],[
				'data' => '2019-09-15',
				'ora'  => '17:00',
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 5
			],[
				'data' => '2019-09-15',
				'ora'  => '17:00',
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 5
			],[
				'data' => '2019-09-15',
				'ora'  => '17:00',
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 5
			],[
				'data' => '2019-09-15',
				'ora'  => '17:00',
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 5
			],[
				'data' => '2019-09-15',
				'ora'  => '17:00',
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 5
			],[
				'data' => '2019-09-15',
				'ora'  => '17:00',
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 5
			],[
				'data' => '2019-09-22',
				'ora'  => '17:00',
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 6
			],[
				'data' => '2019-09-22',
				'ora'  => '17:00',
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 6
			],[
				'data' => '2019-09-22',
				'ora'  => '17:00',
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 6
			],[
				'data' => '2019-09-22',
				'ora'  => '17:00',
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 6
			],[
				'data' => '2019-09-22',
				'ora'  => '17:00',
				'gazde' => 'Urban Titu',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 6
			],[
				'data' => '2019-09-22',
				'ora'  => '17:00',
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 6
			],[
				'data' => '2019-09-22',
				'ora'  => '17:00',
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 6
			],[
				'data' => '2019-09-22',
				'ora'  => '17:00',
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 6
			],[
				'data' => '2019-09-29',
				'ora'  => '17:00',
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 7
			],[
				'data' => '2019-09-29',
				'ora'  => '17:00',
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 7
			],[
				'data' => '2019-09-29',
				'ora'  => '17:00',
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 7
			],[
				'data' => '2019-09-29',
				'ora'  => '17:00',
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 7
			],[
				'data' => '2019-09-29',
				'ora'  => '17:00',
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 7
			],[
				'data' => '2019-09-29',
				'ora'  => '17:00',
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 7
			],[
				'data' => '2019-09-29',
				'ora'  => '17:00',
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 7
			],[
				'data' => '2019-09-29',
				'ora'  => '17:00',
				'gazde' => 'STA',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 7
			],[
				'data' => '2019-10-06',
				'ora'  => '16:00',
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 8
			],[
				'data' => '2019-10-06',
				'ora'  => '16:00',
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 8
			],[
				'data' => '2019-10-06',
				'ora'  => '16:00',
				'gazde' => 'Urban Titu',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 8
			],[
				'data' => '2019-10-06',
				'ora'  => '16:00',
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 8
			],[
				'data' => '2019-10-06',
				'ora'  => '16:00',
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 8
			],[
				'data' => '2019-10-06',
				'ora'  => '16:00',
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 8
			],[
				'data' => '2019-10-06',
				'ora'  => '16:00',
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 8
			],[
				'data' => '2019-10-06',
				'ora'  => '16:00',
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 8
			],[
				'data' => '2019-10-10',
				'ora'  => '16:00',
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 9
			],[
				'data' => '2019-10-10',
				'ora'  => '16:00',
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 9
			],[
				'data' => '2019-10-10',
				'ora'  => '16:00',
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 9
			],[
				'data' => '2019-10-10',
				'ora'  => '16:00',
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 9
			],[
				'data' => '2019-10-10',
				'ora'  => '16:00',
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 9
			],[
				'data' => '2019-10-10',
				'ora'  => '16:00',
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 9
			],[
				'data' => '2019-10-10',
				'ora'  => '16:00',
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 9
			],[
				'data' => '2019-10-10',
				'ora'  => '16:00',
				'gazde' => 'STA',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 9
			],[
				'data' => '2019-10-13',
				'ora'  => '16:00',
				'gazde' => 'Urban Titu',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 10
			],[
				'data' => '2019-10-13',
				'ora'  => '16:00',
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 10
			],[
				'data' => '2019-10-13',
				'ora'  => '16:00',
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 10
			],[
				'data' => '2019-10-13',
				'ora'  => '16:00',
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 10
			],[
				'data' => '2019-10-13',
				'ora'  => '16:00',
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 10
			],[
				'data' => '2019-10-13',
				'ora'  => '16:00',
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 10
			],[
				'data' => '2019-10-13',
				'ora'  => '16:00',
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 10
			],[
				'data' => '2019-10-13',
				'ora'  => '16:00',
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 10
			],[
				'data' => '2019-10-20',
				'ora'  => '16:00',
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 11
			],[
				'data' => '2019-10-20',
				'ora'  => '16:00',
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 11
			],[
				'data' => '2019-10-20',
				'ora'  => '16:00',
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 11
			],[
				'data' => '2019-10-20',
				'ora'  => '16:00',
				'gazde' => 'STA',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 11
			],[
				'data' => '2019-10-20',
				'ora'  => '16:00',
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 11
			],[
				'data' => '2019-10-20',
				'ora'  => '16:00',
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 11
			],[
				'data' => '2019-10-20',
				'ora'  => '16:00',
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 11
			],[
				'data' => '2019-10-20',
				'ora'  => '16:00',
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 11
			],[
				'data' => '2019-10-27',
				'ora'  => '16:00',
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 12
			],[
				'data' => '2019-10-27',
				'ora'  => '16:00',
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 12
			],[
				'data' => '2019-10-27',
				'ora'  => '16:00',
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 12
			],[
				'data' => '2019-10-27',
				'ora'  => '16:00',
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 12
			],[
				'data' => '2019-10-27',
				'ora'  => '16:00',
				'gazde' => 'Urban Titu',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 12
			],[
				'data' => '2019-10-27',
				'ora'  => '16:00',
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 12
			],[
				'data' => '2019-10-27',
				'ora'  => '16:00',
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 12
			],[
				'data' => '2019-10-27',
				'ora'  => '16:00',
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 12
			],[
				'data' => '2019-11-03',
				'ora'  => '15:00',
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 13
			],[
				'data' => '2019-11-03',
				'ora'  => '15:00',
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 13
			],[
				'data' => '2019-11-03',
				'ora'  => '15:00',
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 13
			],[
				'data' => '2019-11-03',
				'ora'  => '15:00',
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 13
			],[
				'data' => '2019-11-03',
				'ora'  => '15:00',
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 13
			],[
				'data' => '2019-11-03',
				'ora'  => '15:00',
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 13
			],[
				'data' => '2019-11-03',
				'ora'  => '15:00',
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 13
			],[
				'data' => '2019-11-03',
				'ora'  => '15:00',
				'gazde' => 'STA',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 13
			],[
				'data' => '2019-11-10',
				'ora'  => '15:00',
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 14
			],[
				'data' => '2019-11-10',
				'ora'  => '15:00',
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 14
			],[
				'data' => '2019-11-10',
				'ora'  => '15:00',
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 14
			],[
				'data' => '2019-11-10',
				'ora'  => '15:00',
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 14
			],[
				'data' => '2019-11-10',
				'ora'  => '15:00',
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 14
			],[
				'data' => '2019-11-10',
				'ora'  => '15:00',
				'gazde' => 'Urban Titu',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 14
			],[
				'data' => '2019-11-10',
				'ora'  => '15:00',
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 14
			],[
				'data' => '2019-11-10',
				'ora'  => '15:00',
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 14
			],[
				'data' => '2019-11-17',
				'ora'  => '15:00',
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 15
			],[
				'data' => '2019-11-17',
				'ora'  => '15:00',
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 15
			],[
				'data' => '2019-11-17',
				'ora'  => '15:00',
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 15
			],[
				'data' => '2019-11-17',
				'ora'  => '15:00',
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 15
			],[
				'data' => '2019-11-17',
				'ora'  => '15:00',
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 15
			],[
				'data' => '2019-11-17',
				'ora'  => '15:00',
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 15
			],[
				'data' => '2019-11-17',
				'ora'  => '15:00',
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 15
			],[
				'data' => '2019-11-17',
				'ora'  => '15:00',
				'gazde' => 'STA',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 15
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'STA',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 16
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 16
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 16
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 16
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 16
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 16
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 16
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 16
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 17
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 17
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 17
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 17
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 17
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 17
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 17
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 17
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 18
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 18
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 18
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 18
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 18
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 18
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 18
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 18
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 19
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 19
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 19
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 19
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 19
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 19
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 19
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'STA',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 19
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 20
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 20
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 20
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 20
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 20
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 20
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 20
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 20
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 21
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 21
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 21
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 21
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 21
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'STA',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 21
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 21
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 21
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 22
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 22
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 22
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 22
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 22
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 22
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 22
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 22
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 23
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 23
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 23
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 23
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'STA',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 23
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 23
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 23
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 23
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 24
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 24
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 24
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 24
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 24
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 24
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 24
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 24
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 25
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 25
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 25
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'STA',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 25
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 25
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 25
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 25
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 25
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 26
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 26
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 26
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 26
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 26
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 26
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 26
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 26
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'STA',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 27
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 27
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 27
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 27
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 27
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 27
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 27
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 27
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 28
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 28
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 28
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 28
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 28
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 28
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 28
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 28
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'STA',
				'oaspeti' => 'Flacara Moreni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 29
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste',
				'oaspeti' => 'Kinder Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 29
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Olimpicii Ulmi',
				'oaspeti' => 'Kinder Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 29
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'CSS Targoviste',
				'oaspeti' => 'Fortis Valea Lunga',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 29
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Chindia Targoviste 2',
				'oaspeti' => 'C.S.M Fieni',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 29
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Luceafarul Dragomiresti',
				'oaspeti' => 'Urban Titu',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 29
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'GSA Nucet',
				'oaspeti' => 'Urban Titu 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 29
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'FC Pucioasa',
				'oaspeti' => 'Progresul Gaesti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 29
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Flacara Moreni',
				'oaspeti' => 'Chindia Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 30
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste',
				'oaspeti' => 'Olimpicii Ulmi',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 30
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Kinder Targoviste 2',
				'oaspeti' => 'CSS Targoviste',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 30
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Fortis Valea Lunga',
				'oaspeti' => 'Chindia Targoviste 2',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 30
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'C.S.M Fieni',
				'oaspeti' => 'Luceafarul Dragomiresti',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 30
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu',
				'oaspeti' => 'GSA Nucet',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 30
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Urban Titu 2',
				'oaspeti' => 'FC Pucioasa',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 30
			],[
				'data' => null,
				'ora'  => null,
				'gazde' => 'Progresul Gaesti',
				'oaspeti' => 'STA',
				'g_gazde' => null,
				'g_oaspeti' => null,
				'liga' => 7,
				'serie' => null,
				'sezon' => '2019/2020',
				'etapa' => 30
			]
		];

		/*Echipe::where('liga', 7)->where('serie', null)
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

		/*Etape::where('liga', 7)->where('serie', null)
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
			$adauga->data      = $etapa['data'];
			$adauga->ora       = $etapa['ora'];
			$adauga->sezon     = $etapa['sezon'];
			$adauga->save();
		}
    }
}
