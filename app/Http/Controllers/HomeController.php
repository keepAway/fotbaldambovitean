<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Echipe;
use App\Etape;
use App\Forma;
use App\Stiri;
use App\Categorie;
use App\View;
use App\Mail\ContactEmail;
use App\User;
use App\ScoruriTrimise;
use App\EtapaCurenta;
use App\Penalizari;
use App\PozitieStatus;
use App\Kino;

use Carbon\Carbon;
use Mail;
use DB;
use Auth;

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
    public function index(Request $request)
    {   
        $data       = $request->all();

        $categories = Categorie::pluck('id')->toArray();
        $cat        = isset($_GET["categorie"]) ? $_GET["categorie"] : null;
        $search     = isset($_GET['search']) && $_GET['search'] != "" ? $_GET['search'] : NULL;

        $stiri = Stiri::join('views', 'stiri.id', '=', 'views.stire_id')
                        ->join('categorii', 'stiri.categorie_id', '=', 'categorii.id')
                        ->join('users', 'stiri.user_id', '=', 'users.id')
                            ->select('stiri.*', 'views.counter as views', 'categorii.nume as nume_categorie', 'users.name as autor')
                            ->orderBy('pin', true)
                            ->orderBy('stiri.created_at', 'DESC');

        if(!empty($cat) && in_array($cat, $categories)) {
            $stiri = $stiri->where('categorie_id', $cat);
        }

        if(!empty($search)) {
            $exp = explode(' ', $search);
            foreach ($exp as $item) {
                $stiri = $stiri->where(function ($query) use ($item){
                    $query->where('titlu','LIKE', '%'.$item.'%');
                    $query->orWhere('continut','LIKE', '%'.$item.'%');
                });
            }

            /*$stiri = $stiri->whereRaw("MATCH (titlu,continut) AGAINST ('".$search."' IN NATURAL LANGUAGE MODE)");*/
            //echo '<pre>'; var_dump($stiri->get()); echo '</pre>';die;
        }

        $stiri = $stiri->paginate(20);
        
        return view('home')->with(['stiri' => $stiri]);       
    }


    public function clasament(Int $liga, String $sezon, Request $request){
        $data  = $request->all();
        $tab   = isset($data['tab']) ? $data['tab'] : NULL;
        $serie = NULL;
        $sezon = str_replace('-', '/', $sezon);

        if(isset($data['seria']) && $data['seria'] != NULL){
            $serie = $data['seria'];
        }

        $echipe = Echipe::where('liga', $liga)
                            ->where('serie', $serie)
                            ->where('sezon', $sezon)
                            ->join('toate_echipele', 'echipe.echipa_id', '=', 'toate_echipele.id')
                            ->selectRaw('
                                toate_echipele.team AS echipa,
                                toate_echipele.logo as logo,
                                echipe.*
                            ')
                            ->get();

        $echipe_penalizate = [];

        $pozitieStatus = PozitieStatus::where('liga', $liga)->where('serie', $serie)->get()->toArray();
        $pozitiiValide = PozitieStatus::where('liga', $liga)->where('serie', $serie)->pluck('pozitie')->toArray();

        foreach ($pozitieStatus as $key => $value) {
            $pozitieStatus[$value['pozitie']] = $value;
        }

        $i=0;
        $j=0;
        foreach ($echipe as $echipa) {
            $forma = Forma::where([ 'echipa_id' => $echipa->echipa_id ])
                            ->join('etape', 'forma.etapa_id', '=', 'etape.id')
                            ->join('toate_echipele AS teg', 'etape.gazde_id', 'teg.id')
                            ->join('toate_echipele AS teo', 'etape.oaspeti_id', 'teo.id')
                            ->where([ 'etape.liga' => $liga ])
                            ->where([ 'forma.sezon' => $sezon ])
                            ->where([ 'etape.serie' => $serie ])
                            ->selectRaw('
                                forma.*,
                                etape.*,
                                teg.team AS gazde,
                                teo.team AS oaspeti
                            ')
                            ->orderBy('etapa', 'DESC');

            $penalizare = Penalizari::where('echipa_id', $echipa->id)->first();
            
            if(!empty($penalizare)) {
                $echipe_penalizate[]             = $penalizare;
                $echipe_penalizate[$j]['echipa'] = $echipa->echipa;                
                $echipe[$i]['penalizata']        = true;
                $echipe[$i]['t_puncte']          = ($echipa->t_puncte - $penalizare->puncte);
                $echipe[$i]['puncte_penalizate'] = $penalizare->puncte;
                $j++;
            }


            if(isset($tab) && $tab == '1') {
                $forma = $forma->where('forma.gazde', true);
            }

            if(isset($tab) && $tab == '2') {
                $forma = $forma->where('forma.oaspeti', true);
            }

            if(isset($tab) && $tab == '3') {
                $forma = $forma;
            }

            $forma = $forma->orderBy('forma.created_at', 'DESC')
                            ->take(5)
                            ->get();

            $echipe[$i]['forma'] = $forma;
            $i++;
        }
        // dd($echipe_penalizate);
        // die;

        $__count = count($echipe);
        $page   = $__count % 2 == 0 ? ($__count / 2) : (($__count + 1) / 2);

        if(isset($tab) && $tab == '1') {
            $echipe = $echipe->sortByDesc(function($echipe) {
                return [$echipe->a_puncte, $echipe->a_golaveraj, $echipe->a_marcate];
            });
        }
        
        if(isset($tab) && $tab == '2') {
            $echipe = $echipe->sortByDesc(function($echipe) {
                return [$echipe->d_puncte, $echipe->d_golaveraj, $echipe->d_marcate];
            });
        }

        if($tab == NULL || $tab == '3') {
            $echipe = $echipe->sortByDesc(function($echipe) {
                return [$echipe->t_puncte, $echipe->t_golaveraj, $echipe->t_marcate];
            });
        }

        $etapa_curenta = NULL;
        $__check = EtapaCurenta::where('liga', $liga)->where('serie', $serie)->first();
        if(!empty($__check)){
            $etapa_curenta = $__check['etapa_curenta'];
        }

        $query = [
            ['liga','=', $liga],
            ['serie','=',$serie],
            ['sezon','=',$sezon]
        ];
        
        $etape  = Etape::where($query)
                        ->join('toate_echipele AS teg', 'etape.gazde_id', 'teg.id')
                        ->join('toate_echipele AS teo', 'etape.oaspeti_id', 'teo.id')
                        ->orderBy('etapa', 'ASC')
                        ->selectRaw('
                            etape.*,
                            teg.team AS gazde,
                            teg.logo AS logo_gazde,
                            teo.team AS oaspeti,
                            teo.logo AS logo_oaspeti
                        ')
                        ->orderBy('data', 'ASC')
                        ->orderBy('ora', 'ASC');

        $pagesNumber = ($etape->get()->count() / $page);
        $etape  = $etape->paginate($page);

        return view('clasament')->with([
            'sezon'             => $sezon,
            'liga'              => $liga,
            'serie'             => $serie,
            'echipe'            => $echipe,
            'etape'             => $etape,
            'etapa_curenta'     => $etapa_curenta,
            'echipe_penalizate' => $echipe_penalizate,
            'pozitieStatus'     => $pozitieStatus,
            'pozitiiValide'     => $pozitiiValide,
            'pagesNumber'       => $pagesNumber
        ]);
    }

    public function adaugaScor(Request $request){
        $data = $request->all();

        $g_gazde   = $data['g_gazde'];
        $g_oaspeti = $data['g_oaspeti'];
        $id_etapa  = $data['id_etapa'];
        $gazde     = $data['gazde_id'];
        $oaspeti   = $data['oaspeti_id'];
        $liga      = $data['liga'];
        $serie     = $data['serie'];
        $sezon     = str_replace('-', '/', $data['sezon']);
        $update    = $data['update'];

        $echipa_gazde   = Echipe::where('liga', $liga)->where('serie', $serie)->where('echipa_id', $gazde)->where('sezon', $sezon)->first();
        $echipa_oaspeti = Echipe::where('liga', $liga)->where('serie', $serie)->where('echipa_id', $oaspeti)->where('sezon', $sezon)->first();

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

                    $echipa_gazde->t_meciuri   = ($echipa_gazde->t_meciuri   + $meciuri_jucate);
                    $echipa_gazde->t_victorii  = ($echipa_gazde->t_victorii  + $victorii_gazde);
                    $echipa_gazde->t_marcate   = ($echipa_gazde->t_marcate   + $goluri_marcate_gazde);
                    $echipa_gazde->t_primite   = ($echipa_gazde->t_primite   + $goluri_primite_gazde);
                    $echipa_gazde->t_golaveraj = ($echipa_gazde->t_golaveraj + $golaveraj_gazde);
                    $echipa_gazde->t_puncte    = ($echipa_gazde->t_puncte    + $puncte_gazde);
                    $echipa_gazde->save();

                    //gazde acasa
                    $echipa_gazde->a_meciuri   = ($echipa_gazde->a_meciuri   + $meciuri_jucate);
                    $echipa_gazde->a_victorii  = ($echipa_gazde->a_victorii  + $victorii_gazde);
                    $echipa_gazde->a_marcate   = ($echipa_gazde->a_marcate   + $goluri_marcate_gazde);
                    $echipa_gazde->a_primite   = ($echipa_gazde->a_primite   + $goluri_primite_gazde);
                    $echipa_gazde->a_golaveraj = ($echipa_gazde->a_golaveraj + $golaveraj_gazde);
                    $echipa_gazde->a_puncte    = ($echipa_gazde->a_puncte    + $puncte_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->t_meciuri    = ($echipa_oaspeti->t_meciuri     + $meciuri_jucate);
                    $echipa_oaspeti->t_infrangeri = ($echipa_oaspeti->t_infrangeri  + $infrangeri_oaspeti);
                    $echipa_oaspeti->t_marcate    = ($echipa_oaspeti->t_marcate     + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->t_primite    = ($echipa_oaspeti->t_primite     + $goluri_primite_oaspeti);
                    $echipa_oaspeti->t_golaveraj  = ($echipa_oaspeti->t_golaveraj   + $golaveraj_oaspeti);
                    $echipa_oaspeti->save();

                    //oaspeti deplasare
                    $echipa_oaspeti->d_meciuri    = ($echipa_oaspeti->d_meciuri     + $meciuri_jucate);
                    $echipa_oaspeti->d_infrangeri = ($echipa_oaspeti->d_infrangeri  + $infrangeri_oaspeti);
                    $echipa_oaspeti->d_marcate    = ($echipa_oaspeti->d_marcate     + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->d_primite    = ($echipa_oaspeti->d_primite     + $goluri_primite_oaspeti);
                    $echipa_oaspeti->d_golaveraj  = ($echipa_oaspeti->d_golaveraj   + $golaveraj_oaspeti);
                    $echipa_oaspeti->save();

                    $forma = new Forma;
                    $forma->sezon    = $sezon;
                    $forma->etapa_id = $id_etapa;
                    $forma->echipa_id   = $gazde;
                    $forma->forma    = 'V';
                    $forma->gazde    = true;
                    $forma->save();

                    $forma = new Forma;
                    $forma->sezon    = $sezon;
                    $forma->etapa_id = $id_etapa;
                    $forma->echipa_id   = $oaspeti;
                    $forma->forma    = 'I';
                    $forma->oaspeti  = true;
                    $forma->save();
                }

                if($g_gazde == $g_oaspeti){
                    $puncte_gazde    = 1;
                    $puncte_oaspeti  = 1;

                    $egaluri_gazde   = 1;
                    $egaluri_oaspeti = 1;

                    $echipa_gazde->t_meciuri   = ($echipa_gazde->t_meciuri   + $meciuri_jucate);
                    $echipa_gazde->t_egaluri   = ($echipa_gazde->t_egaluri   + $egaluri_gazde);
                    $echipa_gazde->t_marcate   = ($echipa_gazde->t_marcate   + $goluri_marcate_gazde);
                    $echipa_gazde->t_primite   = ($echipa_gazde->t_primite   + $goluri_primite_gazde);
                    $echipa_gazde->t_golaveraj = ($echipa_gazde->t_golaveraj + $golaveraj_gazde);
                    $echipa_gazde->t_puncte    = ($echipa_gazde->t_puncte    + $puncte_gazde);
                    $echipa_gazde->save();

                    //gazde acasa
                    $echipa_gazde->a_meciuri   = ($echipa_gazde->a_meciuri   + $meciuri_jucate);
                    $echipa_gazde->a_egaluri   = ($echipa_gazde->a_egaluri   + $egaluri_gazde);
                    $echipa_gazde->a_marcate   = ($echipa_gazde->a_marcate   + $goluri_marcate_gazde);
                    $echipa_gazde->a_primite   = ($echipa_gazde->a_primite   + $goluri_primite_gazde);
                    $echipa_gazde->a_golaveraj = ($echipa_gazde->a_golaveraj + $golaveraj_gazde);
                    $echipa_gazde->a_puncte    = ($echipa_gazde->a_puncte    + $puncte_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->t_meciuri   = ($echipa_oaspeti->t_meciuri   + $meciuri_jucate);
                    $echipa_oaspeti->t_egaluri   = ($echipa_oaspeti->t_egaluri   + $egaluri_oaspeti);
                    $echipa_oaspeti->t_marcate   = ($echipa_oaspeti->t_marcate   + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->t_primite   = ($echipa_oaspeti->t_primite   + $goluri_primite_oaspeti);
                    $echipa_oaspeti->t_golaveraj = ($echipa_oaspeti->t_golaveraj + $golaveraj_oaspeti);
                    $echipa_oaspeti->t_puncte    = ($echipa_oaspeti->t_puncte    + $puncte_oaspeti);
                    $echipa_oaspeti->save();

                    //oaspeti deplasare
                    $echipa_oaspeti->d_meciuri   = ($echipa_oaspeti->d_meciuri   + $meciuri_jucate);
                    $echipa_oaspeti->d_egaluri   = ($echipa_oaspeti->d_egaluri   + $egaluri_oaspeti);
                    $echipa_oaspeti->d_marcate   = ($echipa_oaspeti->d_marcate   + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->d_primite   = ($echipa_oaspeti->d_primite   + $goluri_primite_oaspeti);
                    $echipa_oaspeti->d_golaveraj = ($echipa_oaspeti->d_golaveraj + $golaveraj_oaspeti);
                    $echipa_oaspeti->d_puncte    = ($echipa_oaspeti->d_puncte    + $puncte_oaspeti);
                    $echipa_oaspeti->save();

                    $forma = new Forma;
                    $forma->sezon    = $sezon;
                    $forma->etapa_id = $id_etapa;
                    $forma->echipa_id   = $gazde;
                    $forma->forma    = 'E';
                    $forma->gazde    = true;
                    $forma->save();

                    $forma = new Forma;
                    $forma->sezon    = $sezon;
                    $forma->etapa_id = $id_etapa;
                    $forma->echipa_id   = $oaspeti;
                    $forma->forma    = 'E';
                    $forma->oaspeti  = true;
                    $forma->save();
                }

                if($g_gazde < $g_oaspeti){
                    $puncte_oaspeti   = 3;

                    $victorii_oaspeti = 1;
                    $infrangeri_gazde = 1;

                    $echipa_gazde->t_meciuri    = ($echipa_gazde->t_meciuri     + $meciuri_jucate);
                    $echipa_gazde->t_infrangeri = ($echipa_gazde->t_infrangeri  + $infrangeri_gazde);
                    $echipa_gazde->t_marcate    = ($echipa_gazde->t_marcate     + $goluri_marcate_gazde);
                    $echipa_gazde->t_primite    = ($echipa_gazde->t_primite     + $goluri_primite_gazde);
                    $echipa_gazde->t_golaveraj  = ($echipa_gazde->t_golaveraj   + $golaveraj_gazde);
                    $echipa_gazde->save();

                    //gazde acasa
                    $echipa_gazde->a_meciuri    = ($echipa_gazde->a_meciuri     + $meciuri_jucate);
                    $echipa_gazde->a_infrangeri = ($echipa_gazde->a_infrangeri  + $infrangeri_gazde);
                    $echipa_gazde->a_marcate    = ($echipa_gazde->a_marcate     + $goluri_marcate_gazde);
                    $echipa_gazde->a_primite    = ($echipa_gazde->a_primite     + $goluri_primite_gazde);
                    $echipa_gazde->a_golaveraj  = ($echipa_gazde->a_golaveraj   + $golaveraj_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->t_meciuri   = ($echipa_oaspeti->t_meciuri   + $meciuri_jucate);
                    $echipa_oaspeti->t_victorii  = ($echipa_oaspeti->t_victorii  + $victorii_oaspeti);
                    $echipa_oaspeti->t_marcate   = ($echipa_oaspeti->t_marcate   + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->t_primite   = ($echipa_oaspeti->t_primite   + $goluri_primite_oaspeti);
                    $echipa_oaspeti->t_golaveraj = ($echipa_oaspeti->t_golaveraj + $golaveraj_oaspeti);
                    $echipa_oaspeti->t_puncte    = ($echipa_oaspeti->t_puncte    + $puncte_oaspeti);
                    $echipa_oaspeti->save();

                    //oaspeti deplasare
                    $echipa_oaspeti->d_meciuri   = ($echipa_oaspeti->d_meciuri   + $meciuri_jucate);
                    $echipa_oaspeti->d_victorii  = ($echipa_oaspeti->d_victorii  + $victorii_oaspeti);
                    $echipa_oaspeti->d_marcate   = ($echipa_oaspeti->d_marcate   + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->d_primite   = ($echipa_oaspeti->d_primite   + $goluri_primite_oaspeti);
                    $echipa_oaspeti->d_golaveraj = ($echipa_oaspeti->d_golaveraj + $golaveraj_oaspeti);
                    $echipa_oaspeti->d_puncte    = ($echipa_oaspeti->d_puncte    + $puncte_oaspeti);
                    $echipa_oaspeti->save();

                    $forma = new Forma;
                    $forma->sezon    = $sezon;
                    $forma->etapa_id = $id_etapa;
                    $forma->echipa_id   = $gazde;
                    $forma->forma    = 'I';
                    $forma->gazde    = true;
                    $forma->save();

                    $forma = new Forma;
                    $forma->sezon    = $sezon;
                    $forma->etapa_id = $id_etapa;
                    $forma->echipa_id   = $oaspeti;
                    $forma->forma    = 'V';
                    $forma->oaspeti  = true;
                    $forma->save();
                }

                $status = 'Scorul a fost adaugat.';
            }
            
            //@endof adaugare clasament
            if($update == 'true') {
                $meci = Etape::where('liga', $liga)->where('serie', $serie)->where('gazde_id', $gazde)->where('oaspeti_id', $oaspeti)->where('sezon', $sezon)->first();
                
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

                    $echipa_gazde->t_meciuri   = ($echipa_gazde->t_meciuri   - $meciuri_jucate);
                    $echipa_gazde->t_victorii  = ($echipa_gazde->t_victorii  - $victorii_gazde);
                    $echipa_gazde->t_marcate   = ($echipa_gazde->t_marcate   - $old_goluri_marcate_gazde);
                    $echipa_gazde->t_primite   = ($echipa_gazde->t_primite   - $old_goluri_primite_gazde);
                    $echipa_gazde->t_golaveraj = ($echipa_gazde->t_golaveraj - $old_golaveraj_gazde);
                    $echipa_gazde->t_puncte    = ($echipa_gazde->t_puncte    - $puncte_gazde);
                    $echipa_gazde->save();

                    //gazde acasa
                    $echipa_gazde->a_meciuri   = ($echipa_gazde->a_meciuri   - $meciuri_jucate);
                    $echipa_gazde->a_victorii  = ($echipa_gazde->a_victorii  - $victorii_gazde);
                    $echipa_gazde->a_marcate   = ($echipa_gazde->a_marcate   - $old_goluri_marcate_gazde);
                    $echipa_gazde->a_primite   = ($echipa_gazde->a_primite   - $old_goluri_primite_gazde);
                    $echipa_gazde->a_golaveraj = ($echipa_gazde->a_golaveraj - $old_golaveraj_gazde);
                    $echipa_gazde->a_puncte    = ($echipa_gazde->a_puncte    - $puncte_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->t_meciuri    = ($echipa_oaspeti->t_meciuri     - $meciuri_jucate);
                    $echipa_oaspeti->t_infrangeri = ($echipa_oaspeti->t_infrangeri  - $infrangeri_oaspeti);
                    $echipa_oaspeti->t_marcate    = ($echipa_oaspeti->t_marcate     - $old_goluri_marcate_oaspeti);
                    $echipa_oaspeti->t_primite    = ($echipa_oaspeti->t_primite     - $old_goluri_primite_oaspeti);
                    $echipa_oaspeti->t_golaveraj  = ($echipa_oaspeti->t_golaveraj   - $old_golaveraj_oaspeti);
                    $echipa_oaspeti->save();

                    //oaspeti deplasare
                    $echipa_oaspeti->d_meciuri    = ($echipa_oaspeti->d_meciuri     - $meciuri_jucate);
                    $echipa_oaspeti->d_infrangeri = ($echipa_oaspeti->d_infrangeri  - $infrangeri_oaspeti);
                    $echipa_oaspeti->d_marcate    = ($echipa_oaspeti->d_marcate     - $old_goluri_marcate_oaspeti);
                    $echipa_oaspeti->d_primite    = ($echipa_oaspeti->d_primite     - $old_goluri_primite_oaspeti);
                    $echipa_oaspeti->d_golaveraj  = ($echipa_oaspeti->d_golaveraj   - $old_golaveraj_oaspeti);
                    $echipa_oaspeti->save();
                }

                if($old_gazde == $old_oaspeti){
                    $puncte_gazde    = 1;
                    $puncte_oaspeti  = 1;

                    $egaluri_gazde   = 1;
                    $egaluri_oaspeti = 1;

                    $echipa_gazde->t_meciuri   = ($echipa_gazde->t_meciuri   - $meciuri_jucate);
                    $echipa_gazde->t_egaluri   = ($echipa_gazde->t_egaluri   - $egaluri_gazde);
                    $echipa_gazde->t_marcate   = ($echipa_gazde->t_marcate   - $old_goluri_marcate_gazde);
                    $echipa_gazde->t_primite   = ($echipa_gazde->t_primite   - $old_goluri_primite_gazde);
                    $echipa_gazde->t_golaveraj = ($echipa_gazde->t_golaveraj - $old_golaveraj_gazde);
                    $echipa_gazde->t_puncte    = ($echipa_gazde->t_puncte    - $puncte_gazde);
                    $echipa_gazde->save();

                    //gazde acasa
                    $echipa_gazde->a_meciuri   = ($echipa_gazde->a_meciuri   - $meciuri_jucate);
                    $echipa_gazde->a_egaluri   = ($echipa_gazde->a_egaluri   - $egaluri_gazde);
                    $echipa_gazde->a_marcate   = ($echipa_gazde->a_marcate   - $old_goluri_marcate_gazde);
                    $echipa_gazde->a_primite   = ($echipa_gazde->a_primite   - $old_goluri_primite_gazde);
                    $echipa_gazde->a_golaveraj = ($echipa_gazde->a_golaveraj - $old_golaveraj_gazde);
                    $echipa_gazde->a_puncte    = ($echipa_gazde->a_puncte    - $puncte_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->t_meciuri   = ($echipa_oaspeti->t_meciuri   - $meciuri_jucate);
                    $echipa_oaspeti->t_egaluri   = ($echipa_oaspeti->t_egaluri   - $egaluri_oaspeti);
                    $echipa_oaspeti->t_marcate   = ($echipa_oaspeti->t_marcate   - $old_goluri_marcate_oaspeti);
                    $echipa_oaspeti->t_primite   = ($echipa_oaspeti->t_primite   - $old_goluri_primite_oaspeti);
                    $echipa_oaspeti->t_golaveraj = ($echipa_oaspeti->t_golaveraj - $old_golaveraj_oaspeti);
                    $echipa_oaspeti->t_puncte    = ($echipa_oaspeti->t_puncte    - $puncte_oaspeti);
                    $echipa_oaspeti->save();

                    //oaspeti deplasare
                    $echipa_oaspeti->d_meciuri   = ($echipa_oaspeti->d_meciuri   - $meciuri_jucate);
                    $echipa_oaspeti->d_egaluri   = ($echipa_oaspeti->d_egaluri   - $egaluri_oaspeti);
                    $echipa_oaspeti->d_marcate   = ($echipa_oaspeti->d_marcate   - $old_goluri_marcate_oaspeti);
                    $echipa_oaspeti->d_primite   = ($echipa_oaspeti->d_primite   - $old_goluri_primite_oaspeti);
                    $echipa_oaspeti->d_golaveraj = ($echipa_oaspeti->d_golaveraj - $old_golaveraj_oaspeti);
                    $echipa_oaspeti->d_puncte    = ($echipa_oaspeti->d_puncte    - $puncte_oaspeti);
                    $echipa_oaspeti->save();
                }

                if($old_gazde < $old_oaspeti){
                    $puncte_oaspeti   = 3;

                    $victorii_oaspeti = 1;
                    $infrangeri_gazde = 1;

                    $echipa_gazde->t_meciuri    = ($echipa_gazde->t_meciuri     - $meciuri_jucate);
                    $echipa_gazde->t_infrangeri = ($echipa_gazde->t_infrangeri  - $infrangeri_gazde);
                    $echipa_gazde->t_marcate    = ($echipa_gazde->t_marcate     - $old_goluri_marcate_gazde);
                    $echipa_gazde->t_primite    = ($echipa_gazde->t_primite     - $old_goluri_primite_gazde);
                    $echipa_gazde->t_golaveraj  = ($echipa_gazde->t_golaveraj   - $old_golaveraj_gazde);
                    $echipa_gazde->save();

                    //gazde acasa
                    $echipa_gazde->a_meciuri    = ($echipa_gazde->a_meciuri     - $meciuri_jucate);
                    $echipa_gazde->a_infrangeri = ($echipa_gazde->a_infrangeri  - $infrangeri_gazde);
                    $echipa_gazde->a_marcate    = ($echipa_gazde->a_marcate     - $old_goluri_marcate_gazde);
                    $echipa_gazde->a_primite    = ($echipa_gazde->a_primite     - $old_goluri_primite_gazde);
                    $echipa_gazde->a_golaveraj  = ($echipa_gazde->a_golaveraj   - $old_golaveraj_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->t_meciuri   = ($echipa_oaspeti->t_meciuri   - $meciuri_jucate);
                    $echipa_oaspeti->t_victorii  = ($echipa_oaspeti->t_victorii  - $victorii_oaspeti);
                    $echipa_oaspeti->t_marcate   = ($echipa_oaspeti->t_marcate   - $old_goluri_marcate_oaspeti);
                    $echipa_oaspeti->t_primite   = ($echipa_oaspeti->t_primite   - $old_goluri_primite_oaspeti);
                    $echipa_oaspeti->t_golaveraj = ($echipa_oaspeti->t_golaveraj - $old_golaveraj_oaspeti);
                    $echipa_oaspeti->t_puncte    = ($echipa_oaspeti->t_puncte    - $puncte_oaspeti);
                    $echipa_oaspeti->save();

                    //oaspeti deplasare
                    $echipa_oaspeti->d_meciuri   = ($echipa_oaspeti->d_meciuri   - $meciuri_jucate);
                    $echipa_oaspeti->d_victorii  = ($echipa_oaspeti->d_victorii  - $victorii_oaspeti);
                    $echipa_oaspeti->d_marcate   = ($echipa_oaspeti->d_marcate   - $old_goluri_marcate_oaspeti);
                    $echipa_oaspeti->d_primite   = ($echipa_oaspeti->d_primite   - $old_goluri_primite_oaspeti);
                    $echipa_oaspeti->d_golaveraj = ($echipa_oaspeti->d_golaveraj - $old_golaveraj_oaspeti);
                    $echipa_oaspeti->d_puncte    = ($echipa_oaspeti->d_puncte    - $puncte_oaspeti);
                    $echipa_oaspeti->save();
                }

                
                if($g_gazde > $g_oaspeti){
                    $puncte_gazde       = 3;

                    $victorii_gazde     = 1;
                    $infrangeri_oaspeti = 1;

                    $echipa_gazde->t_meciuri   = ($echipa_gazde->t_meciuri   + $meciuri_jucate);
                    $echipa_gazde->t_victorii  = ($echipa_gazde->t_victorii  + $victorii_gazde);
                    $echipa_gazde->t_marcate   = ($echipa_gazde->t_marcate   + $goluri_marcate_gazde);
                    $echipa_gazde->t_primite   = ($echipa_gazde->t_primite   + $goluri_primite_gazde);
                    $echipa_gazde->t_golaveraj = ($echipa_gazde->t_golaveraj + $golaveraj_gazde);
                    $echipa_gazde->t_puncte    = ($echipa_gazde->t_puncte    + $puncte_gazde);
                    $echipa_gazde->save();

                    //gazde acasa
                    $echipa_gazde->a_meciuri   = ($echipa_gazde->a_meciuri   + $meciuri_jucate);
                    $echipa_gazde->a_victorii  = ($echipa_gazde->a_victorii  + $victorii_gazde);
                    $echipa_gazde->a_marcate   = ($echipa_gazde->a_marcate   + $goluri_marcate_gazde);
                    $echipa_gazde->a_primite   = ($echipa_gazde->a_primite   + $goluri_primite_gazde);
                    $echipa_gazde->a_golaveraj = ($echipa_gazde->a_golaveraj + $golaveraj_gazde);
                    $echipa_gazde->a_puncte    = ($echipa_gazde->a_puncte    + $puncte_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->t_meciuri    = ($echipa_oaspeti->t_meciuri     + $meciuri_jucate);
                    $echipa_oaspeti->t_infrangeri = ($echipa_oaspeti->t_infrangeri  + $infrangeri_oaspeti);
                    $echipa_oaspeti->t_marcate    = ($echipa_oaspeti->t_marcate     + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->t_primite    = ($echipa_oaspeti->t_primite     + $goluri_primite_oaspeti);
                    $echipa_oaspeti->t_golaveraj  = ($echipa_oaspeti->t_golaveraj   + $golaveraj_oaspeti);
                    $echipa_oaspeti->save();

                    //oaspeti deplasare
                    $echipa_oaspeti->d_meciuri    = ($echipa_oaspeti->d_meciuri     + $meciuri_jucate);
                    $echipa_oaspeti->d_infrangeri = ($echipa_oaspeti->d_infrangeri  + $infrangeri_oaspeti);
                    $echipa_oaspeti->d_marcate    = ($echipa_oaspeti->d_marcate     + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->d_primite    = ($echipa_oaspeti->d_primite     + $goluri_primite_oaspeti);
                    $echipa_oaspeti->d_golaveraj  = ($echipa_oaspeti->d_golaveraj   + $golaveraj_oaspeti);
                    $echipa_oaspeti->save();

                    $forma             = Forma::where('etapa_id', $id_etapa)->where('gazde', true)->first();
                    $forma->forma      = 'V';
                    $forma->updated_at = Carbon::now();
                    $forma->save();

                    $forma             = Forma::where('etapa_id', $id_etapa)->where('oaspeti', true)->first();
                    $forma->forma      = 'I';
                    $forma->updated_at = Carbon::now();
                    $forma->save();
                }

                if($g_gazde == $g_oaspeti){
                    $puncte_gazde    = 1;
                    $puncte_oaspeti  = 1;

                    $egaluri_gazde   = 1;
                    $egaluri_oaspeti = 1;

                    $echipa_gazde->t_meciuri   = ($echipa_gazde->t_meciuri   + $meciuri_jucate);
                    $echipa_gazde->t_egaluri   = ($echipa_gazde->t_egaluri   + $egaluri_gazde);
                    $echipa_gazde->t_marcate   = ($echipa_gazde->t_marcate   + $goluri_marcate_gazde);
                    $echipa_gazde->t_primite   = ($echipa_gazde->t_primite   + $goluri_primite_gazde);
                    $echipa_gazde->t_golaveraj = ($echipa_gazde->t_golaveraj + $golaveraj_gazde);
                    $echipa_gazde->t_puncte    = ($echipa_gazde->t_puncte    + $puncte_gazde);
                    $echipa_gazde->save();

                    //gazde acasa
                    $echipa_gazde->a_meciuri   = ($echipa_gazde->a_meciuri   + $meciuri_jucate);
                    $echipa_gazde->a_egaluri   = ($echipa_gazde->a_egaluri   + $egaluri_gazde);
                    $echipa_gazde->a_marcate   = ($echipa_gazde->a_marcate   + $goluri_marcate_gazde);
                    $echipa_gazde->a_primite   = ($echipa_gazde->a_primite   + $goluri_primite_gazde);
                    $echipa_gazde->a_golaveraj = ($echipa_gazde->a_golaveraj + $golaveraj_gazde);
                    $echipa_gazde->a_puncte    = ($echipa_gazde->a_puncte    + $puncte_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->t_meciuri   = ($echipa_oaspeti->t_meciuri   + $meciuri_jucate);
                    $echipa_oaspeti->t_egaluri   = ($echipa_oaspeti->t_egaluri   + $egaluri_oaspeti);
                    $echipa_oaspeti->t_marcate   = ($echipa_oaspeti->t_marcate   + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->t_primite   = ($echipa_oaspeti->t_primite   + $goluri_primite_oaspeti);
                    $echipa_oaspeti->t_golaveraj = ($echipa_oaspeti->t_golaveraj + $golaveraj_oaspeti);
                    $echipa_oaspeti->t_puncte    = ($echipa_oaspeti->t_puncte    + $puncte_oaspeti);
                    $echipa_oaspeti->save();

                    //oaspeti deplasare
                    $echipa_oaspeti->d_meciuri   = ($echipa_oaspeti->d_meciuri   + $meciuri_jucate);
                    $echipa_oaspeti->d_egaluri   = ($echipa_oaspeti->d_egaluri   + $egaluri_oaspeti);
                    $echipa_oaspeti->d_marcate   = ($echipa_oaspeti->d_marcate   + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->d_primite   = ($echipa_oaspeti->d_primite   + $goluri_primite_oaspeti);
                    $echipa_oaspeti->d_golaveraj = ($echipa_oaspeti->d_golaveraj + $golaveraj_oaspeti);
                    $echipa_oaspeti->d_puncte    = ($echipa_oaspeti->d_puncte    + $puncte_oaspeti);
                    $echipa_oaspeti->save();

                    $forma             = Forma::where('etapa_id', $id_etapa)->where('gazde', true)->first();
                    $forma->forma      = 'E';
                    $forma->updated_at = Carbon::now();
                    $forma->save();

                    $forma             = Forma::where('etapa_id', $id_etapa)->where('oaspeti', true)->first();
                    $forma->forma      = 'E';
                    $forma->updated_at = Carbon::now();
                    $forma->save();
                }

                if($g_gazde < $g_oaspeti){
                    $puncte_oaspeti   = 3;

                    $victorii_oaspeti = 1;
                    $infrangeri_gazde = 1;

                    $echipa_gazde->t_meciuri    = ($echipa_gazde->t_meciuri     + $meciuri_jucate);
                    $echipa_gazde->t_infrangeri = ($echipa_gazde->t_infrangeri  + $infrangeri_gazde);
                    $echipa_gazde->t_marcate    = ($echipa_gazde->t_marcate     + $goluri_marcate_gazde);
                    $echipa_gazde->t_primite    = ($echipa_gazde->t_primite     + $goluri_primite_gazde);
                    $echipa_gazde->t_golaveraj  = ($echipa_gazde->t_golaveraj   + $golaveraj_gazde);
                    $echipa_gazde->save();

                    //gazde acasa
                    $echipa_gazde->a_meciuri    = ($echipa_gazde->a_meciuri     + $meciuri_jucate);
                    $echipa_gazde->a_infrangeri = ($echipa_gazde->a_infrangeri  + $infrangeri_gazde);
                    $echipa_gazde->a_marcate    = ($echipa_gazde->a_marcate     + $goluri_marcate_gazde);
                    $echipa_gazde->a_primite    = ($echipa_gazde->a_primite     + $goluri_primite_gazde);
                    $echipa_gazde->a_golaveraj  = ($echipa_gazde->a_golaveraj   + $golaveraj_gazde);
                    $echipa_gazde->save();

                    $echipa_oaspeti->t_meciuri   = ($echipa_oaspeti->t_meciuri   + $meciuri_jucate);
                    $echipa_oaspeti->t_victorii  = ($echipa_oaspeti->t_victorii  + $victorii_oaspeti);
                    $echipa_oaspeti->t_marcate   = ($echipa_oaspeti->t_marcate   + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->t_primite   = ($echipa_oaspeti->t_primite   + $goluri_primite_oaspeti);
                    $echipa_oaspeti->t_golaveraj = ($echipa_oaspeti->t_golaveraj + $golaveraj_oaspeti);
                    $echipa_oaspeti->t_puncte    = ($echipa_oaspeti->t_puncte    + $puncte_oaspeti);
                    $echipa_oaspeti->save();

                    //oaspeti deplasare
                    $echipa_oaspeti->d_meciuri   = ($echipa_oaspeti->d_meciuri   + $meciuri_jucate);
                    $echipa_oaspeti->d_victorii  = ($echipa_oaspeti->d_victorii  + $victorii_oaspeti);
                    $echipa_oaspeti->d_marcate   = ($echipa_oaspeti->d_marcate   + $goluri_marcate_oaspeti);
                    $echipa_oaspeti->d_primite   = ($echipa_oaspeti->d_primite   + $goluri_primite_oaspeti);
                    $echipa_oaspeti->d_golaveraj = ($echipa_oaspeti->d_golaveraj + $golaveraj_oaspeti);
                    $echipa_oaspeti->d_puncte    = ($echipa_oaspeti->d_puncte    + $puncte_oaspeti);
                    $echipa_oaspeti->save();

                    $forma             = Forma::where('etapa_id', $id_etapa)->where('gazde', true)->first();
                    $forma->forma      = 'I';
                    $forma->updated_at = Carbon::now();
                    $forma->save();

                    $forma             = Forma::where('etapa_id', $id_etapa)->where('oaspeti', true)->first();
                    $forma->forma      = 'V';
                    $forma->updated_at = Carbon::now();
                    $forma->save();
                }

                $status = 'Scorul a fost modificat.';
            }
            // die;
            //@endof modificare clasament

            //adaugare scor
            $meci = Etape::where('liga', $liga)->where('serie', $serie)->where('gazde_id', $gazde)->where('oaspeti_id', $oaspeti)->where('sezon', $sezon)->first();
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

    public function contact() {
        return view('contact');
    }

    public function contactUs(Request $request) {
        $data = $request->all();

        $content = [
            'Nume'    => $data['nume'],
            'Email'   => $data['email'],
            'Telefon' => $data['telefon'],
            'Mesaj'   => $data['mesaj']
        ];

        Mail::to(['catana.ionut08@gmail.com'])->send(new ContactEmail($content));
        return redirect()->back()->with('status', 'Multumim pentru mesaj.');
    }

    public function parseJquery($liga, $serie, $etapa){

        // $data = '';
        // for ($i=1; $i <= 2; $i++) {

        //     if($i < 10) {
        //         $i = '0' . $i;
        //     }

            // $data .= file_get_contents('http://www.frf-ajf.ro/dambovita/competitii-fotbal/liga-a-5-a-sud-6693-et' . $i);
        // }
        $array = [
            // 'NORD' => 6692,
            // 'SUD'  => 6693,
            // 'VEST' => 6694,

            //'NORD' => 7000,
            //'SUD'  => 7001,
            //'liga4' => 6655
        ];

        if($etapa < 18) {
            header("Refresh:0; url=/parse-jquery/".$liga."/".$serie."/" . ($etapa + 1));
        }

        $x = $etapa;
        if($etapa < 10) {
            $x = '0' . $x;
        }

        /*Seniori*/
        $data = file_get_contents('https://www.frf-ajf.ro/dambovita/competitii-fotbal/liga-a-'.$liga.'-a-'.$serie.'/meciuri/etapa-' . $x);

        /*Juniori*/
        /*$data = file_get_contents('https://www.frf-ajf.ro/dambovita/competitii-fotbal/'.$liga.'-'.$serie.'/meciuri/etapa-' . $x);*/

        return view('parse-jquery')->with(['data' => $data, 'liga' => $liga, 'serie' => $serie, 'etapa' => $etapa])->render();      
    }

    public function parseMinifotbal($url) {
        $data = file_get_contents('http://www.campionateminifotbal.ro/campionatul-judetean-de-minifotbal-dambovita/competitii/2018/' . $url);
        return view('parse-minifotbal')->with([ 'data' => $data, 'url' => $url ])->render();      
        die;
    }

    public function parseLiga3($url) {
        $data = file_get_contents('https://www.frfotbal.ro/index.php?' . $url);
        return view('parse-liga-3')->with([ 'data' => $data, 'url' => $url ])->render();      
        die;
    }

    public function adminStiri() {
        $categorii = Categorie::all();

        return view('admin-stiri')->with(['categorii' => $categorii]);
    }

    public function adminSaveStire(Request $request) {
        $data = $request->all();

        // echo '<pre>';
        //     print_r($data);
        // echo '<pre>';
        // die;

        $stire = new Stiri;
        $view = new View;

        $stire->user_id = Auth::user()->id;
        $stire->pin = isset($data["stire_featured"]) ? true : false;
        $stire->titlu = $data["stire_titlu"];
        $stire->categorie_id = (int)$data["stire_categorie"];
        $stire->imagine = $data["stire_imagine"];
        $stire->introducere = $data["stire_introducere"];
        $stire->continut = $data["stire_continut"];
        $stire->created_at = Carbon::now();
        $stire->updated_at = Carbon::now();
        
        $stire->save();

        $stire->imagine = $stire->id .'_'. $data["stire_imagine"]->getClientOriginalName();
        $stire->save();

        $view->stire_id = $stire->id;        
        $view->counter = 0;
        $view->save();        

        // $data['stire_imagine']->storeAs('public/images', $stire->id .'_'.$data['stire_imagine']->getClientOriginalName());
        $data['stire_imagine']->move(base_path('../public_html/images'), $stire->id .'_'.$data['stire_imagine']->getClientOriginalName());
        // $request->image->move(base_path('public/images'), $filename);

        return redirect()->back()->with('status', 'Stirea a fost adaugata.');
    }

    public function stireDetaliu(Int $id) {
        $stire = Stiri::join('categorii', 'stiri.categorie_id', '=', 'categorii.id')
                    ->join('users', 'stiri.user_id', '=', 'users.id')
                    ->join('views', 'stiri.id', '=', 'views.stire_id')
                    ->select('stiri.*', 'categorii.nume as nume_categorie', 'users.name as autor', 'views.counter as views')
                    ->find($id);
        $alte_stiri = Stiri::where('stiri.id', '!=', $id)
                                ->where('stiri.categorie_id', $stire->categorie_id)
                                ->join('categorii', 'stiri.categorie_id', '=', 'categorii.id')
                                ->join('users', 'stiri.user_id', '=', 'users.id')
                                ->join('views', 'stiri.id', '=', 'views.stire_id')
                                ->select('stiri.*', 'categorii.nume as nume_categorie', 'users.name as autor', 'views.counter as views')
                                ->inRandomOrder()
                                ->take(2)
                                ->get();

        if(is_null($stire)) {
            return redirect('/');
        } else {
            return view('stire-detaliu')->with(['stire' => $stire, 'alte_stiri' => $alte_stiri, 'id' => $stire->id]);
        }
    }

    public function saveView(Request $request) {

        // echo '<pre>';
        //     print_r($request);
        // echo '</pre>';
        // die;
        $view = View::where('stire_id', $request->id)->first();
        $view->stire_id = $request->id;        
        $view->counter = $view->counter + 1;
        $view->save();
    }

    public function getTrimiteScor(Request $request){
        
        $data  = $request->all();
        $liga  = $data['liga'];
        $serie = (isset($data['serie']) && $data['serie'] != null ? $data['serie'] : NULL);
        $etapa_curenta = EtapaCurenta::where('liga', $liga)->where('serie', $serie)->first();
        $etapa_curenta = !empty($etapa_curenta) ? $etapa_curenta->etapa_curenta : 1;

        if(!in_array($liga, [1,3,4,5,6,7,8])){
            return redirect()->back()->withErrors('Liga indisponibila');
        }

        $etape = Etape::where('liga', '=', $liga)
                        ->where('serie', '=', $serie)
                        ->where('etapa', '<=', $etapa_curenta)
                        ->where('gazde', '!=', 'STA')
                        ->where('oaspeti', '!=', 'STA')
                        ->whereNull('g_gazde')
                        ->whereNull('g_oaspeti')
                        ->groupBy('liga', 'etapa', 'id')
                        ->get();

        if(Auth::check()) {
            $i = 0;
            foreach ($etape as $etapa) {
                $__check = ScoruriTrimise::where('etapa', $etapa->id)->where('user_id', Auth::user()->id)->first();

                if(!empty($__check) && ($etapa->id == $__check->etapa)) {
                    $etape[$i]->g_gazde      = $__check->g_gazde;
                    $etape[$i]->g_oaspeti    = $__check->g_oaspeti;
                    $etape[$i]->contestatie  = $__check->contestatie;
                    $etape[$i]->incident     = $__check->incident;
                    $etape[$i]->alte_detalii = $__check->alte_detalii;
                    $etape[$i]->adaugat      = true;
                }
                $i++;
            }
        }
        $ligi = Echipe::select('liga', 'serie')->where('liga', '>=', 3)->orWhereIn('serie', ['superliga', 'campionatul-firmelor'])->orderBy('liga')->orderBy('serie')->distinct()->get();

        return view('adauga-scor')->with(['etape' => $etape, 'ligi' => $ligi]);
    }

    public function addTrimiteScor(Request $request) {

        $data = $request->all();
        $update = $data['update'];

        $scor = ($update == 'false') ? new ScoruriTrimise : ScoruriTrimise::where('etapa', $data['id_etapa'])->first();
        $scor->user_id      = Auth::user()->id;
        $scor->g_gazde      = $data['g_gazde'];
        $scor->g_oaspeti    = $data['g_oaspeti'];
        $scor->etapa        = $data['id_etapa'];
        $scor->gazde        = $data['gazde'];
        $scor->oaspeti      = $data['oaspeti'];
        $scor->liga         = $data['liga'];
        $scor->serie        = $data['serie'];
        $scor->contestatie  = $data['contestatie'];
        $scor->incident     = $data['incident'];
        $scor->alte_detalii = $data['alte_detalii'];
        $scor->adaugat      = true;

        if($scor->save()) {
            $res = 'Scorul a fost adaugat, iti multumim!';
            if($update == 'true') {
                $res =  'Scorul a fost modificat, iti multumim!';
            }

            return redirect()->back()->with('status', $res);
        } else {
            return redirect()->back()->withErrors('Scorul nu a putut fi adaugat');
        }
    }

    public function scoruriPrimite(Request $request){
        
        $data  = $request->all();
        $liga  = $data['liga'];
        $serie = (isset($data['serie']) && $data['serie'] != null ? $data['serie'] : NULL);

        if(!in_array($liga, [1,3,4,5,6,7,8])){
            return redirect()->back()->withErrors('Liga indisponibila');
        }

        $etapa_curenta = EtapaCurenta::where('liga', $liga)->where('serie', $serie)->first();
        $etapa_curenta = !empty($etapa_curenta) ? $etapa_curenta->etapa_curenta : 1;
        $__check = ScoruriTrimise::where('liga', $liga)->where('serie', $serie)->orderBy('etapa', 'ASC')->get();

        $ligi = Echipe::select('liga', 'serie')->where('liga', '>=', 3)->orWhereIn('serie', ['superliga', 'campionatul-firmelor'])->orderBy('liga')->orderBy('serie')->distinct()->get();

        return view('scoruri-primite')->with(['etape' => $__check, 'ligi' => $ligi]);
    }

    public function useri() {

        $useri = User::paginate(50);
        return view('useri')->with(['useri' => $useri]);
    }
    
    public function disableUser($id) {
        $check = User::where('id', $id)->first()->disabled;
        $res = $check ? 'deblocat' : 'blocat';
        if(User::where('id', $id)->update(['disabled' => !$check])){
            return redirect()->back()->with('status', 'Utilizator ' . $res);
        }
    }

    public function etapaCurenta(Request $request) {
        $data     = $request->all();
        $liga     = $data['liga'];
        $serie    = $data['serie'];
        $etapa_id = $data['etapa_id'];

        // echo '<pre>';
        //     print_r($data);
        // echo '</pre>';
        // die;

        $__check = EtapaCurenta::where('liga', $liga)->where('serie', $serie)->first();
        $etapa_curenta = (empty($__check)) ? new EtapaCurenta : $__check;
        $etapa_curenta->liga = $liga;
        $etapa_curenta->serie = $serie;
        $etapa_curenta->etapa_curenta = $etapa_id;

        if($etapa_curenta->save()) {
            return redirect()->back()->with('status', 'Etapa a fost marcata ca si curenta!');
        } else {
            return redirect()->back()->withErrors('Etapa nu a putut fi marcata ca si curenta!');
        }
    }

    public function termeni()
    {   
        return view('termeni-si-conditii');       
    }

    public function confidentialitate()
    {   
        return view('confidentialitate');       
    }

    public function adaugaPenalizare(Request $request) {
        $data = $request->all();
        $echipa_id = $data['echipa_id'];
        $liga = $data['liga'];
        $serie = $data['serie'];
        $puncte = $data['puncte'];
        
        $penalizare = Penalizari::where('echipa_id', $echipa_id)->first();

        if(!empty($penalizare)) {
            if(!$penalizare->delete()){
                return redirect()->back()->withErrors('Ceva nu a mers bine, te rugam reincearca.');
            }
        }

        if($puncte != 0) {
            $penalizare = new Penalizari;
            $penalizare->echipa_id = $data['echipa_id'];
            $penalizare->liga      = $data['liga'];
            $penalizare->serie     = $data['serie'];
            $penalizare->puncte    = $data['puncte'];
            if($penalizare->save()) {
                return redirect()->back()->with('status', 'Penalizarea a fost adaugata.');
            } else {
                return redirect()->back()->withErrors('Ceva nu a mers bine, te rugam reincearca.');
            }
        }
    }

    public function getEtapaCurenta() {
        $etapaCurenta = EtapaCurenta::all();
        return response()->json(['etapaCurenta' => $etapaCurenta]);
    }

    public function adaugaData (Request $request)
    {
        $data = $request->all();

        $id_etapa = $data['etapa_id'];
        $date = $data['data'];

        $etapa = Etape::where('id', $id_etapa)->first();
        if(empty($etapa)) {
            return redirect()->back()->withErrors('Ceva nu a mers bine, te rugam reincearca.');
        }

        $formated_date = date('Y-m-d', strtotime($date));
        $time = date('H:i', strtotime($date));

        $etapa->data = $formated_date;
        $etapa->ora  = $time;

        if($etapa->save()) {
            return redirect()->back()->with('status', 'Data a fost adaugata.');
        } else {
            return redirect()->back()->withErrors('Ceva nu a mers bine, te rugam reincearca.');
        }
    }
}
