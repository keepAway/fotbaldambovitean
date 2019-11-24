<?php

use Illuminate\Database\Seeder;
use App\OverallTeams;
use App\Clasamente;
use App\Echipe;
use App\Etape;
use App\EtapeNew;
use App\Forma;

class UpdateOverallTeamsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $forma = Forma::all();
        foreach ($forma as $f) {
            $echipa = DB::table('toate_echipele')->where(['team' => $f->echipa ])->first();
            if(!is_null($echipa)){
                Forma::where(['id' => $f->id])->update([ 'echipa_id' => $echipa->id ]);
            } else {
                echo $f->echipa;
                echo PHP_EOL;
            }
        }


        #step2
    	// $etape = Etape::all();

    	// foreach ($etape as $e) {
    	// 	$gazde = DB::table('toate_echipele')->where(['team' => $e->gazde ])->first();
    	// 	$oaspeti = DB::table('toate_echipele')->where(['team' => $e->oaspeti])->first();

    	// 	Etape::where(['gazde' => $e->gazde])->update([ 'gazde_id' => $gazde->id ]);
    	// 	Etape::where(['oaspeti' => $e->oaspeti])->update([ 'oaspeti_id' => $oaspeti->id ]);
    	// }

        // $echipe = Echipe::all();

        // foreach ($echipe as $k => $e) {
        	// step 1
        	// $ot = OverallTeams::firstOrNew(['team' => $e->echipa]);
        	// $ot->logo = $e->logo;
        	// $ot->save();


        	// step 2
        	// $echipa_id = DB::table('toate_echipele')->where('team', $e->echipa)->first()->id;
        	// Echipe::where(['id' => $e->id])->update([ 'echipa_id' => $echipa_id ]);
        // }
    }
}
