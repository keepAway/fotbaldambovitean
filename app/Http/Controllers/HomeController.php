<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Echipe;
use App\Etape;
use App\Forma;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function clasament(Int $liga, Request $request){
        $data = $request->all();
        
        $serie = NULL;

        if(isset($data['seria']) && $data['seria'] != NULL){
            $serie = $data['seria'];
        }

        $echipe = Echipe::where('liga', $liga)->where('serie', $serie)->get();

        $i=0;
        foreach ($echipe as $echipa) {
            $forma = Forma::where('echipa', $echipa->echipa)
                                        ->join('etape', 'forma.etapa_id', '=', 'etape.id')
                                        ->orderBy('forma.created_at', 'DESC')
                                        ->take(5)
                                        ->get();
            $echipe[$i]['forma'] = $forma;
            $i++;
        }

        $page   = (count($echipe) / 2);

        $echipe = $echipe->sortByDesc(function($echipe) {
            return [$echipe->puncte, $echipe->golaveraj];
        });


        $etape  = Etape::where('liga', $liga)->where('serie', $serie)->orderBy('etapa', 'ASC')->orderBy('data', 'ASC')->orderBy('ora', 'ASC')->paginate($page);

        // echo '<pre>';
        //     print_r($echipe);
        // echo '</pre>';
        // die;

        return view('welcome')->with(['liga' => $liga, 'echipe' => $echipe, 'etape' => $etape]);
    }

    public function adaugaScor(Request $request){
        $data = $request->all();

        $g_gazde   = $data['g_gazde'];
        $g_oaspeti = $data['g_oaspeti'];
        $id_etapa  = $data['id_etapa'];
        $gazde     = $data['gazde'];
        $oaspeti   = $data['oaspeti'];
        $liga      = $data['liga'];
        $serie     = $data['serie'];
        $update    = $data['update'];

        $echipa_gazde   = Echipe::where('liga', $liga)->where('serie', $serie)->where('echipa', $gazde)->first();
        $echipa_oaspeti = Echipe::where('liga', $liga)->where('serie', $serie)->where('echipa', $oaspeti)->first();

        if((isset($g_gazde) && $g_gazde != '') && (isset($g_oaspeti) && $g_oaspeti != '')){
            //adaugare clasament
            $meciuri_jucate = 1;
            $goluri_marcate_gazde = $g_gazde;
            $goluri_marcate_oaspeti = $g_oaspeti;

            $goluri_primite_gazde = $g_oaspeti;
            $goluri_primite_oaspeti = $g_gazde;

            $golaveraj_gazde   = ($g_gazde - $g_oaspeti);
            $golaveraj_oaspeti = ($g_oaspeti - $g_gazde);

            if($update == 'false') {
                if($g_gazde > $g_oaspeti){
                    $puncte_gazde       = 3;

                    $victorii_gazde     = 1;
                    $infrangeri_oaspeti = 1;

                    $echipa_gazde->meciuri   = ($echipa_gazde->meciuri   + $meciuri_jucate);
                    $echipa_gazde->victorii  = ($echipa_gazde->victorii  + $victorii_gazde);
                    $echipa_gazde->marcate   = ($echipa_gazde->marcate   + $goluri_marcate_gazde);
                    $echipa_gazde->primite   = ($echipa_gazde->primite   + $goluri_primite_gazde);
                    $echipa_gazde->golaveraj = ($echipa_gazde->golaveraj + $golaveraj_gazde);
                    $echipa_gazde->puncte    = ($echipa_gazde->puncte    + $puncte_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->meciuri    = ($echipa_oaspeti->meciuri     + $meciuri_jucate);
                    $echipa_oaspeti->infrangeri = ($echipa_oaspeti->infrangeri  + $infrangeri_oaspeti);
                    $echipa_oaspeti->marcate    = ($echipa_oaspeti->marcate     + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->primite    = ($echipa_oaspeti->primite     + $goluri_primite_oaspeti);
                    $echipa_oaspeti->golaveraj  = ($echipa_oaspeti->golaveraj   + $golaveraj_oaspeti);
                    $echipa_oaspeti->save();

                    $forma = new Forma;
                    $forma->etapa_id = $id_etapa;
                    $forma->echipa   = $gazde;
                    $forma->forma    = 'V';
                    $forma->gazde    = true;
                    $forma->save();

                    $forma = new Forma;
                    $forma->etapa_id = $id_etapa;
                    $forma->echipa   = $oaspeti;
                    $forma->forma    = 'I';
                    $forma->oaspeti  = true;
                    $forma->save();
                }

                if($g_gazde == $g_oaspeti){
                    $puncte_gazde    = 1;
                    $puncte_oaspeti  = 1;

                    $egaluri_gazde   = 1;
                    $egaluri_oaspeti = 1;

                    $echipa_gazde->meciuri   = ($echipa_gazde->meciuri   + $meciuri_jucate);
                    $echipa_gazde->egaluri   = ($echipa_gazde->egaluri   + $egaluri_gazde);
                    $echipa_gazde->marcate   = ($echipa_gazde->marcate   + $goluri_marcate_gazde);
                    $echipa_gazde->primite   = ($echipa_gazde->primite   + $goluri_primite_gazde);
                    $echipa_gazde->golaveraj = ($echipa_gazde->golaveraj + $golaveraj_gazde);
                    $echipa_gazde->puncte    = ($echipa_gazde->puncte    + $puncte_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->meciuri   = ($echipa_oaspeti->meciuri   + $meciuri_jucate);
                    $echipa_oaspeti->egaluri   = ($echipa_oaspeti->egaluri   + $egaluri_oaspeti);
                    $echipa_oaspeti->marcate   = ($echipa_oaspeti->marcate   + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->primite   = ($echipa_oaspeti->primite   + $goluri_primite_oaspeti);
                    $echipa_oaspeti->golaveraj = ($echipa_oaspeti->golaveraj + $golaveraj_oaspeti);
                    $echipa_oaspeti->puncte    = ($echipa_oaspeti->puncte    + $puncte_oaspeti);
                    $echipa_oaspeti->save();

                    $forma = new Forma;
                    $forma->etapa_id = $id_etapa;
                    $forma->echipa   = $gazde;
                    $forma->forma    = 'E';
                    $forma->gazde    = true;
                    $forma->save();

                    $forma = new Forma;
                    $forma->etapa_id = $id_etapa;
                    $forma->echipa   = $oaspeti;
                    $forma->forma    = 'E';
                    $forma->oaspeti  = true;
                    $forma->save();
                }

                if($g_gazde < $g_oaspeti){
                    $puncte_oaspeti   = 3;

                    $victorii_oaspeti = 1;
                    $infrangeri_gazde = 1;

                    $echipa_gazde->meciuri    = ($echipa_gazde->meciuri     + $meciuri_jucate);
                    $echipa_gazde->infrangeri = ($echipa_gazde->infrangeri  + $infrangeri_gazde);
                    $echipa_gazde->marcate    = ($echipa_gazde->marcate     + $goluri_marcate_gazde);
                    $echipa_gazde->primite    = ($echipa_gazde->primite     + $goluri_primite_gazde);
                    $echipa_gazde->golaveraj  = ($echipa_gazde->golaveraj   + $golaveraj_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->meciuri   = ($echipa_oaspeti->meciuri   + $meciuri_jucate);
                    $echipa_oaspeti->victorii  = ($echipa_oaspeti->victorii  + $victorii_oaspeti);
                    $echipa_oaspeti->marcate   = ($echipa_oaspeti->marcate   + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->primite   = ($echipa_oaspeti->primite   + $goluri_primite_oaspeti);
                    $echipa_oaspeti->golaveraj = ($echipa_oaspeti->golaveraj + $golaveraj_oaspeti);
                    $echipa_oaspeti->puncte    = ($echipa_oaspeti->puncte    + $puncte_oaspeti);
                    $echipa_oaspeti->save();

                    $forma = new Forma;
                    $forma->etapa_id = $id_etapa;
                    $forma->echipa   = $gazde;
                    $forma->forma    = 'I';
                    $forma->gazde    = true;
                    $forma->save();

                    $forma = new Forma;
                    $forma->etapa_id = $id_etapa;
                    $forma->echipa   = $oaspeti;
                    $forma->forma    = 'V';
                    $forma->oaspeti  = true;
                    $forma->save();
                }

                $status = 'Scorul a fost adaugat.';
            }
            
            //@endof adaugare clasament
            if($update == 'true') {
                $meci = Etape::where('liga', $liga)->where('serie', $serie)->where('gazde', $gazde)->where('oaspeti', $oaspeti)->first();
                
                $old_gazde   = $meci->g_gazde;
                $old_oaspeti = $meci->g_oaspeti;

                $old_meciuri_jucate = 1;
                $old_goluri_marcate_gazde = $old_gazde;
                $old_goluri_marcate_oaspeti = $old_oaspeti;

                $old_goluri_primite_gazde = $old_oaspeti;
                $old_goluri_primite_oaspeti = $old_gazde;

                $old_golaveraj_gazde   = ($old_gazde - $old_oaspeti);
                $old_golaveraj_oaspeti = ($old_oaspeti - $old_gazde);

                if($old_gazde > $old_oaspeti){
                    $puncte_gazde       = 3;

                    $victorii_gazde     = 1;
                    $infrangeri_oaspeti = 1;

                    $echipa_gazde->meciuri   = ($echipa_gazde->meciuri   - $meciuri_jucate);
                    $echipa_gazde->victorii  = ($echipa_gazde->victorii  - $victorii_gazde);
                    $echipa_gazde->marcate   = ($echipa_gazde->marcate   - $old_goluri_marcate_gazde);
                    $echipa_gazde->primite   = ($echipa_gazde->primite   - $old_goluri_primite_gazde);
                    $echipa_gazde->golaveraj = ($echipa_gazde->golaveraj - $old_golaveraj_gazde);
                    $echipa_gazde->puncte    = ($echipa_gazde->puncte    - $puncte_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->meciuri    = ($echipa_oaspeti->meciuri     - $meciuri_jucate);
                    $echipa_oaspeti->infrangeri = ($echipa_oaspeti->infrangeri  - $infrangeri_oaspeti);
                    $echipa_oaspeti->marcate    = ($echipa_oaspeti->marcate     - $old_goluri_marcate_oaspeti);
                    $echipa_oaspeti->primite    = ($echipa_oaspeti->primite     - $old_goluri_primite_oaspeti);
                    $echipa_oaspeti->golaveraj  = ($echipa_oaspeti->golaveraj   - $old_golaveraj_oaspeti);
                    $echipa_oaspeti->save();
                }

                if($old_gazde == $old_oaspeti){
                    $puncte_gazde    = 1;
                    $puncte_oaspeti  = 1;

                    $egaluri_gazde   = 1;
                    $egaluri_oaspeti = 1;

                    $echipa_gazde->meciuri   = ($echipa_gazde->meciuri   - $meciuri_jucate);
                    $echipa_gazde->egaluri   = ($echipa_gazde->egaluri   - $egaluri_gazde);
                    $echipa_gazde->marcate   = ($echipa_gazde->marcate   - $old_goluri_marcate_gazde);
                    $echipa_gazde->primite   = ($echipa_gazde->primite   - $old_goluri_primite_gazde);
                    $echipa_gazde->golaveraj = ($echipa_gazde->golaveraj - $old_golaveraj_gazde);
                    $echipa_gazde->puncte    = ($echipa_gazde->puncte    - $puncte_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->meciuri   = ($echipa_oaspeti->meciuri   - $meciuri_jucate);
                    $echipa_oaspeti->egaluri   = ($echipa_oaspeti->egaluri   - $egaluri_oaspeti);
                    $echipa_oaspeti->marcate   = ($echipa_oaspeti->marcate   - $old_goluri_marcate_oaspeti);
                    $echipa_oaspeti->primite   = ($echipa_oaspeti->primite   - $old_goluri_primite_oaspeti);
                    $echipa_oaspeti->golaveraj = ($echipa_oaspeti->golaveraj - $old_golaveraj_oaspeti);
                    $echipa_oaspeti->puncte    = ($echipa_oaspeti->puncte    - $puncte_oaspeti);
                    $echipa_oaspeti->save();
                }

                if($old_gazde < $old_oaspeti){
                    $puncte_oaspeti   = 3;

                    $victorii_oaspeti = 1;
                    $infrangeri_gazde = 1;

                    $echipa_gazde->meciuri    = ($echipa_gazde->meciuri     - $meciuri_jucate);
                    $echipa_gazde->infrangeri = ($echipa_gazde->infrangeri  - $infrangeri_gazde);
                    $echipa_gazde->marcate    = ($echipa_gazde->marcate     - $old_goluri_marcate_gazde);
                    $echipa_gazde->primite    = ($echipa_gazde->primite     - $old_goluri_primite_gazde);
                    $echipa_gazde->golaveraj  = ($echipa_gazde->golaveraj   - $old_golaveraj_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->meciuri   = ($echipa_oaspeti->meciuri   - $meciuri_jucate);
                    $echipa_oaspeti->victorii  = ($echipa_oaspeti->victorii  - $victorii_oaspeti);
                    $echipa_oaspeti->marcate   = ($echipa_oaspeti->marcate   - $old_goluri_marcate_oaspeti);
                    $echipa_oaspeti->primite   = ($echipa_oaspeti->primite   - $old_goluri_primite_oaspeti);
                    $echipa_oaspeti->golaveraj = ($echipa_oaspeti->golaveraj - $old_golaveraj_oaspeti);
                    $echipa_oaspeti->puncte    = ($echipa_oaspeti->puncte    - $puncte_oaspeti);
                    $echipa_oaspeti->save();
                }

                
                if($g_gazde > $g_oaspeti){
                    $puncte_gazde       = 3;

                    $victorii_gazde     = 1;
                    $infrangeri_oaspeti = 1;

                    $echipa_gazde->meciuri   = ($echipa_gazde->meciuri   + $meciuri_jucate);
                    $echipa_gazde->victorii  = ($echipa_gazde->victorii  + $victorii_gazde);
                    $echipa_gazde->marcate   = ($echipa_gazde->marcate   + $goluri_marcate_gazde);
                    $echipa_gazde->primite   = ($echipa_gazde->primite   + $goluri_primite_gazde);
                    $echipa_gazde->golaveraj = ($echipa_gazde->golaveraj + $golaveraj_gazde);
                    $echipa_gazde->puncte    = ($echipa_gazde->puncte    + $puncte_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->meciuri    = ($echipa_oaspeti->meciuri     + $meciuri_jucate);
                    $echipa_oaspeti->infrangeri = ($echipa_oaspeti->infrangeri  + $infrangeri_oaspeti);
                    $echipa_oaspeti->marcate    = ($echipa_oaspeti->marcate     + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->primite    = ($echipa_oaspeti->primite     + $goluri_primite_oaspeti);
                    $echipa_oaspeti->golaveraj  = ($echipa_oaspeti->golaveraj   + $golaveraj_oaspeti);
                    $echipa_oaspeti->save();
                }

                if($g_gazde == $g_oaspeti){
                    $puncte_gazde    = 1;
                    $puncte_oaspeti  = 1;

                    $egaluri_gazde   = 1;
                    $egaluri_oaspeti = 1;

                    $echipa_gazde->meciuri   = ($echipa_gazde->meciuri   + $meciuri_jucate);
                    $echipa_gazde->egaluri   = ($echipa_gazde->egaluri   + $egaluri_gazde);
                    $echipa_gazde->marcate   = ($echipa_gazde->marcate   + $goluri_marcate_gazde);
                    $echipa_gazde->primite   = ($echipa_gazde->primite   + $goluri_primite_gazde);
                    $echipa_gazde->golaveraj = ($echipa_gazde->golaveraj + $golaveraj_gazde);
                    $echipa_gazde->puncte    = ($echipa_gazde->puncte    + $puncte_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->meciuri   = ($echipa_oaspeti->meciuri   + $meciuri_jucate);
                    $echipa_oaspeti->egaluri   = ($echipa_oaspeti->egaluri   + $egaluri_oaspeti);
                    $echipa_oaspeti->marcate   = ($echipa_oaspeti->marcate   + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->primite   = ($echipa_oaspeti->primite   + $goluri_primite_oaspeti);
                    $echipa_oaspeti->golaveraj = ($echipa_oaspeti->golaveraj + $golaveraj_oaspeti);
                    $echipa_oaspeti->puncte    = ($echipa_oaspeti->puncte    + $puncte_oaspeti);
                    $echipa_oaspeti->save();
                }

                if($g_gazde < $g_oaspeti){
                    $puncte_oaspeti   = 3;

                    $victorii_oaspeti = 1;
                    $infrangeri_gazde = 1;

                    $echipa_gazde->meciuri    = ($echipa_gazde->meciuri     + $meciuri_jucate);
                    $echipa_gazde->infrangeri = ($echipa_gazde->infrangeri  + $infrangeri_gazde);
                    $echipa_gazde->marcate    = ($echipa_gazde->marcate     + $goluri_marcate_gazde);
                    $echipa_gazde->primite    = ($echipa_gazde->primite     + $goluri_primite_gazde);
                    $echipa_gazde->golaveraj  = ($echipa_gazde->golaveraj   + $golaveraj_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->meciuri   = ($echipa_oaspeti->meciuri   + $meciuri_jucate);
                    $echipa_oaspeti->victorii  = ($echipa_oaspeti->victorii  + $victorii_oaspeti);
                    $echipa_oaspeti->marcate   = ($echipa_oaspeti->marcate   + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->primite   = ($echipa_oaspeti->primite   + $goluri_primite_oaspeti);
                    $echipa_oaspeti->golaveraj = ($echipa_oaspeti->golaveraj + $golaveraj_oaspeti);
                    $echipa_oaspeti->puncte    = ($echipa_oaspeti->puncte    + $puncte_oaspeti);
                    $echipa_oaspeti->save();
                }

                $status = 'Scorul a fost modificat.';
            }
            // die;
            //@endof modificare clasament

            //adaugare scor
            $meci = Etape::where('liga', $liga)->where('serie', $serie)->where('gazde', $gazde)->where('oaspeti', $oaspeti)->first();
            $meci->g_gazde   = $g_gazde;
            $meci->g_oaspeti = $g_oaspeti;
            $meci->adaugat   = true;
            $meci->save();
            //@endof adaugare scor
            
            return redirect()->back()->with('status', $status);
        } else {
            return redirect()->back()->withErrors('Adauga nr. de goluri pentru ambele echipe.');
        }
    }

    public function contact(){
        return view('contact');
    }
}
