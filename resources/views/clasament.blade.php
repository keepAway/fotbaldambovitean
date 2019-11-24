@php 
    $seria       = Request::get('seria') ? Request::get('seria') :  NULL;
    $tab         = Request::get('tab') ? Request::get('tab') :  NULL;
    $current_url = Request::fullUrl();
    $page = Request::get('page') ? Request::get('page') : 1;
    
    $a = isset($seria) && $seria != NULL ? ucwords(str_replace('-', ' ', $seria)) : '';

    $changeLogo = ['campionatul-firmelor', 'superliga'];

    $__title = 'Clasament ' . ($liga == 7 ? 'Juniori D (U13)' : ($liga == 8 ? 'Juniori E (U11)' : 'Liga ' . $liga)) . ($seria != '' ? ', Seria: ' . $a : '') . ', Etapa ' . $page;


    if($liga == 4) {
    	$__image = asset('images/liga_4_logo.png');
	} elseif($liga == 5 && $seria == 'Nord') {
		$__image = asset('images/liga_5_nord_logo.png');
	} elseif($liga == 5 && $seria == 'Sud') {
		$__image = asset('images/liga_5_sud_logo.png');
	} elseif($liga == 5 && $seria == 'Vest') {
		$__image = asset('images/liga_5_vest_logo.png');
	} elseif($liga == 6 && $seria == 'Nord') {
		$__image = asset('images/liga_6_nord_logo.png');
	} elseif($liga == 6 && $seria == 'Sud') {
		$__image = asset('images/liga_6_sud_logo.png');
	} elseif($liga == 3 && $seria == '1') {
		$__image = asset('images/liga_3_serie_1_logo.png');
	} elseif($liga == 3 && $seria == '2') {
		$__image = asset('images/liga_3_serie_2_logo.png');
	} elseif($liga == 3 && $seria == '3') {
		$__image = asset('images/liga_3_serie_3_logo.png');
	} elseif($liga == 3 && $seria == '4') {
		$__image = asset('images/liga_3_serie_4_logo.png');
	} elseif($liga == 3 && $seria == '5') {
		$__image = asset('images/liga_3_serie_5_logo.png');
	} else {
    	$__image = asset('images/' . (in_array($seria, $changeLogo) ? 'logo_minifotbal.jpg' : '1_logo_.jpg'));
	}

    $__liga  = '';
    $__serie = '';
    $output  = '';

    if($liga == 7) {
        $__liga = 'Juniori D (U13) Dambovita';
    } elseif($liga == 8) {
        $__liga = 'Juniori E (U11) Dambovita';
    } else {
        if($liga > 3 && $seria != '' ) {
            $__serie = ($seria != '' ? (', Seria ' . $a . (in_array($seria, $changeLogo) ? ' Minifotbal' : '') . ' Dambovita') : '');
        } elseif ($liga == 3) {
            $__serie = ', Seria ' . $seria;
        } else {
            $__serie = ($seria != '' ? (', Seria ' . $a . (in_array($seria, $changeLogo) ? ' Minifotbal' : '') . ' Dambovita') : '');
        }
        
        $__liga = $liga;
    }

    $__description = 'Urmăreşte clasamentele si rezultatele din Liga ' . $__liga . $__serie . ' ' .$sezon . ', total şi acasă/deplasare, precum şi forma (ultimele 5 meciuri) din Liga ' . $__liga . $__serie . ' ' . $sezon;


    $keywoards = 'clasamentele, rezultatele, ' . ('Liga ' . $__liga . $__serie . ' ' . $sezon) . ', onoare, promotie, total, acasa/deplasare, forma ultimele 5 meciuri';

    foreach($echipe as $echipa) {
        if($echipa->echipa != 'STA') {
            $keywoards .=  ', ' . $echipa->echipa;
        }
    }

    $sezon = str_replace('/', '-', $sezon);

@endphp

@extends('layouts.app')
@section('title', $__title)
@section('image', $__image)
@section('description', $__description)
@section('keywoards', $keywoards)
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            @if ( count( $errors ) > 0 )
                @foreach ($errors->all() as $error)
                    <div class="row">
                        <div class="col-sm-12 alert alert-danger text-center">{{ $error }}</div>
                    </div>
                @endforeach
            @endif

            @if (session('status'))
                <div class="row">
                    <div class="col-sm-12 alert alert-success text-center" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{session('status')}}
                    </div>
                </div>
            @endif
        </div>
        <div class="col-sm-3">
        </div>
    </div>

    <div id="fb-root"></div>

    <div class="row">
        <div class="col-lg-3">
            @include('parts/page-reporter')
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                <div class="col-sm-12 font-weight-bold" style="height: 40px; margin-top: 20px; margin-bottom: 5px;font-size: 16px;">
                    <label style="font-size: 20px; margin-left: 5px;"> Clasament </label> | 
                     {{$liga == 7 ? 'Juniori D (U13)' : ($liga == 8 ? 'Juniori E (U11)' : 'Liga '.$liga)}}
                     {{isset($seria) && $seria != NULL ? ', Seria: ' . ucwords(str_replace('-', ' ', $seria)) : ''}}
                </div>

                @include('parts/select-sezon')
                @include('parts/block-penalizare')
                
                <div class="col-sm-12" style="padding-left: 5px; padding-right: 5px;">
                    <ul class="nav nav-tabs font-weight-bold" style="background-color: #323b3e; color: #fff; border: 1px solid #323b3e; border-radius: 0;">
                        <li class="nav-item" style="padding-left: 0px; padding-right: 0px;">
                            <a class="nav-link" style="border-radius: 0; color: {{$tab == NULL ? '#f4d90c !important' : ''}}" href="{{ route('clasament', ['liga' => $liga, 'seria' => $seria, 'sezon' => $sezon]) }}">Total</a>
                        </li>
                        <li class="nav-item" style="padding-left: 0px; padding-right: 0px;">
                            <a class="nav-link" style="border-radius: 0; color:  {{$tab == '1' ? '#f4d90c !important' : ''}}" href="{{ route('clasament', ['liga' => $liga, 'seria' => $seria, 'tab' => 1, 'sezon' => $sezon]) }}">Acasa</a>
                        </li>
                        <li class="nav-item" style="padding-left: 0px; padding-right: 0px;">
                            <a class="nav-link" style="border-radius: 0; color: {{$tab == '2' ? '#f4d90c !important' : ''}}" href="{{ route('clasament', ['liga' => $liga, 'seria' => $seria, 'tab'=> 2, 'sezon' => $sezon]) }}">Deplasare</a>
                        </li>
                        <li class="nav-item d-block d-sm-none" style="padding-left: 0px; padding-right: 0px;">
                            <a class="nav-link" style="border-radius: 0; color: {{$tab == '3' ? '#f4d90c !important' : ''}}" href="{{ route('clasament', ['liga' => $liga, 'seria' => $seria, 'tab'=> 3, 'sezon' => $sezon]) }}">Forma</a>
                        </li>
                    </ul>
                    <div class="table-responsive-sm table-responsive-md pb-2">
                        <table class="table table-hover text-center" style="margin-bottom: 0;">
                            <thead style="background-color: #323b3e; color: #fff;">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col" class="text-left">Echipa</th>
                                    <th scope="col" class="{{$tab == 3 ? 'd-none' : ''}}">M</th>
                                    <th scope="col" class="{{$tab == 3 ? 'd-none' : ''}}">V</th>
                                    <th scope="col" class="d-none d-sm-table-cell">E</th>
                                    <th scope="col" class="d-none d-sm-table-cell">I</th>
                                    <th scope="col" class="{{$tab == 3 ? 'd-none' : ''}}">Gol</th>
                                    <th scope="col" class="d-none d-sm-table-cell">+/-</th>
                                    <th scope="col" class="{{$tab == 3 ? 'd-none' : ''}}">P</th>
                                    <th scope="col" class="{{$tab == 3 ? '' : 'd-none d-sm-table-cell'}}">Forma</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($echipe as $echipa)
                                    @if($echipa->echipa != 'STA')
                                        <tr style="border-bottom: 1px solid #dee2e6 !important;">
                                            <td class="font-weight-bold" style="width: 1%; text-align: center; color: #fff; 
                                                background-color: {{in_array($i, $pozitiiValide) ? $pozitieStatus[$i]['culoare'] : '#323b3e'}} !important;" data-toggle="tooltip" data-placement="top" title="{{in_array($i, $pozitiiValide) ? $pozitieStatus[$i]['status'] : ''}}">
                                                {{$i++}}.
                                            </td>
                                            <td class="text-left font-weight-bold team-name">
                                                <div style="display: flex; align-items: center;">
                                                    <span class="pr-2">
                                                        @if(is_null($echipa->logo))
                                                            <img src="{{URL::asset('teams_logo/Default_Logo.svg')}}" alt="{{$echipa->echipa}}" title="{{$echipa->echipa}}" style="width: 20px; height: 20px;">
                                                        @else
                                                            <img src="{{URL::asset('teams_logo/'.$echipa->logo)}}" alt="{{$echipa->echipa}}" title="{{$echipa->echipa}}" style="width: 20px; height: 20px;">
                                                        @endif
                                                    </span>
                                                    <span>{{$echipa->echipa}}</span>
                                                    @if($echipa->penalizata && $tab == NULL)
                                                        <span>
                                                            <span class="red-badge">-{{$echipa->puncte_penalizate}}p</span>
                                                        </span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="{{$tab == 3 ? 'd-none' : ''}}">
                                                {{$tab == NULL ? $echipa->t_meciuri : ($tab == 1 ? $echipa->a_meciuri : $echipa->d_meciuri)}}
                                            </td>
                                            <td class="{{$tab == 3 ? 'd-none' : ''}}">
                                                {{$tab == NULL ? $echipa->t_victorii : ($tab == 1 ? $echipa->a_victorii : $echipa->d_victorii)}}
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                {{$tab == NULL ? $echipa->t_egaluri : ($tab == 1 ? $echipa->a_egaluri : $echipa->d_egaluri)}}
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                {{$tab == NULL ? $echipa->t_infrangeri : ($tab == 1 ? $echipa->a_infrangeri : $echipa->d_infrangeri)}}
                                            </td>
                                            <td class="text-nowrap{{$tab == 3 ? ' d-none' : ''}}">
                                                {{$tab == NULL ? $echipa->t_marcate : ($tab == 1 ? $echipa->a_marcate : $echipa->d_marcate)}}
                                                 - 
                                                {{$tab == NULL ? $echipa->t_primite : ($tab == 1 ? $echipa->a_primite : $echipa->d_primite)}}
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                {{$tab == NULL ? $echipa->t_golaveraj : ($tab == 1 ? $echipa->a_golaveraj : $echipa->d_golaveraj)}}
                                            </td>
                                            <td class="{{$tab == 3 ? 'd-none' : ''}}">
                                                <b>{{$tab == NULL ? $echipa->t_puncte : ($tab == 1 ? $echipa->a_puncte : $echipa->d_puncte)}}</b>
                                            </td>
                                            <td class="{{$tab == 3 ? 'd-inline-flex' : 'd-none d-sm-inline-flex'}}" style="border-top: none !important;">
                                                {{-- <div class="forma" style="background: #656565; cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Etapa urmatoare: ">
                                                    ?
                                                </div> --}}
                                                @foreach($echipa->forma as $forma)
                                                    @if($forma->forma == 'V')
                                                        <div class="forma" style="background: #28a745; cursor: pointer;" data-toggle="tooltip" data-placement="top" title="{{$forma->g_gazde}} : {{$forma->g_oaspeti}} ({{$forma->gazde}} - {{$forma->oaspeti}})">
                                                            {{$forma->forma}}
                                                        </div>
                                                    @elseif($forma->forma == 'E')
                                                        <div class="forma" style="background: #FFA500; cursor: pointer;" data-toggle="tooltip" data-placement="top" title="{{$forma->g_gazde}} : {{$forma->g_oaspeti}} ({{$forma->gazde}} - {{$forma->oaspeti}})">
                                                            {{$forma->forma}}
                                                        </div>
                                                    @else
                                                        <div class="forma" style="background: #DB4727; cursor: pointer;" data-toggle="tooltip" data-placement="top" title="{{$forma->g_gazde}} : {{$forma->g_oaspeti}} ({{$forma->gazde}} - {{$forma->oaspeti}})">
                                                            î
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" style="background: #F8F8F8; margin-right: 5px; margin-left: 5px; margin-bottom: 10px;">
                    <div class="news-detail-share pt-3 pb-3 text-center m-auto">
                        <div class="addthis_inline_share_toolbox_igh9"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            @include('parts/page-plugin')
        </div>
    </div>

    <div class="line"></div>{{-- 
    <div class="row" id="blogspot">
        <div class="col-sm-12">
        </div>
    </div>
    <div class="line"></div> --}}

    <div class="row">
        <div class="col-sm-3"></div>
        <!-- Etapa desktop -->
        <div class="col-sm-6 d-none d-xl-block" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                @if(Auth::check() && Auth::user()->role == 'admin')
                    <div class="pl-2 font-weight-bold" style="height: 40px; margin-top: 20px; margin-bottom: 5px; font-size: 20px;">
                        <form action="{{route('etapa-curenta')}}" method="POST" class="prevent-resubmit">
                            {{ csrf_field() }}
                            <input type="hidden" name="liga" value="{{$liga}}">
                            <input type="hidden" name="serie" value="{{isset($serie) ? $serie : NULL}}">
                            <input type="hidden" name="etapa_id" value="{{$etape[0]->etapa}}">
                                <button class="btn btn-{{$etapa_curenta == NULL || $etapa_curenta !== $etape[0]->etapa ? 'secondary' : 'success'}} btn-sm">
                                    <i class="fas fa-check"></i>
                                </button>
                        </form>
                    </div>
                @endif
                <div class="col-sm-11 font-weight-bold float-left" style="height: 40px; margin-top: 20px; margin-bottom: 5px; font-size: 16px;">
                    <label style="font-size: 20px; margin-left: 5px;"> Etape </label> | 
                    {{$liga == 7 ? 'Juniori D (U13)' : ($liga == 8 ? 'Juniori E (U11)' : 'Liga '.$liga)}}
                    {{isset($seria) && $seria != NULL ? ', Seria: ' . ucwords(str_replace('-', ' ', $seria)) : ''}}
                </div>
                <div class="col-sm-12" style="padding-left: 5px; padding-right: 5px;">
                    <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                        <table class="table table-striped table-hover text-center">
                            <thead style="background-color: #323b3e; color: #fff;">
                                <tr style="background-color: #323b3e; color: #fff;">
                                    <th>#</th>
                                    <th class="text-left">Program</th>
                                    <th class="text-right">Gazde</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="text-left">Oaspeti</th>
                                    @if(Auth::check() && Auth::user()->role == 'admin')
                                        <th></th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($etape as $etapa)
                                    @if(($etapa->gazde == 'STA' && $etapa->oaspeti == 'STA'))
                                    @else
                                        <form action="{{route('adauga-scor')}}" method="POST" class="prevent-resubmit">
                                        {{ csrf_field() }}
                                        <tr>
                                            <td class="align-middle"><b>{{$etapa->etapa}}</b></td>
                                            @if(($etapa->gazde != 'STA' && $etapa->oaspeti != 'STA'))
                                                @if(Auth::check() && Auth::user()->role == 'admin')
                                                    <td class="font-italic align-middle text-left" style="white-space: nowrap;">
                                                        <a href="#" class="open-modal" data-toggle="modal" data-target="#updateDateModal" data-title="{{$etapa->gazde . ' - '. $etapa->oaspeti}}" data-id="{{$etapa->id}}">{{is_null($etapa->data) ? 'Data nu este disponibila' : date("M d, Y", strtotime($etapa->data))}} <b>{{is_null($etapa->data) ? '' : (', ' . $etapa->ora)}}</b></a>
                                                    </td>    
                                                @else
                                                    <td class="font-italic align-middle text-left open-modal" style="white-space: nowrap;">{{is_null($etapa->data) ? 'Data nu este disponibila' : date("M d, Y", strtotime($etapa->data))}} <b>{{is_null($etapa->data) ? '' : (', ' . $etapa->ora)}}</b></td>
                                                @endif
                                            @else
                                                <td class="font-weight-bold align-middle"></td>
                                            @endif
                                            <td class="text-right align-middle font-weight-bold">
                                                {{$etapa->gazde}}
                                                <!-- <span class="pr-2">
                                                    @if(is_null($etapa->logo_gazde))
                                                        <img src="{{URL::asset('teams_logo/Default_Logo.svg')}}" style="width: 20px; height: 20px;">
                                                    @else
                                                        <img src="{{URL::asset('teams_logo/'.$etapa->logo_gazde)}}" alt="{{$etapa->logo_gazde}}" title="{{$etapa->logo_gazde}}" style="width: 20px; height: 20px;">
                                                    @endif
                                                </span> -->
                                            </td>
                                            @if(($etapa->gazde != 'STA' && $etapa->oaspeti != 'STA'))
                                                <td>
                                                    @if(Auth::check() && Auth::user()->role == 'admin')
                                                        <input type="number" min="0" value="{{$etapa->g_gazde}}" class="form-control" name="g_gazde" style="width: 70px;">
                                                    @else
                                                        <span class="font-weight-bold scor-color">
                                                            {{$etapa->g_gazde}}
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="font-weight-bold align-middle">-</td>
                                                <td>
                                                    @if(Auth::check() && Auth::user()->role == 'admin')
                                                        <input type="number" min="0" value="{{$etapa->g_oaspeti}}" class="form-control" name="g_oaspeti" style="width: 70px;">
                                                    @else
                                                        <span class="font-weight-bold scor-color">
                                                            {{$etapa->g_oaspeti}}
                                                        </span>
                                                    @endif
                                                </td>
                                            @else
                                                <td></td>
                                                <td class="font-weight-bold align-middle">-</td>
                                                <td></td>
                                            @endif
                                            <td class="text-left align-middle font-weight-bold">
                                                <!-- <span class="pr-2">
                                                    @if(is_null($etapa->logo_oaspeti))
                                                        <img src="{{URL::asset('teams_logo/Default_Logo.svg')}}" style="width: 20px; height: 20px;">
                                                    @else
                                                        <img src="{{URL::asset('teams_logo/'.$etapa->logo_oaspeti)}}" alt="{{$etapa->logo_oaspeti}}" title="{{$etapa->logo_oaspeti}}" style="width: 20px; height: 20px;">
                                                    @endif
                                                </span> -->
                                                {{$etapa->oaspeti}}
                                            </td>
                                            @if(Auth::check() && Auth::user()->role == 'admin')
                                            @if(($etapa->gazde != 'STA' && $etapa->oaspeti != 'STA'))
                                                <td class="align-middle">
                                                    <button type="submit" class="btn btn-{{$etapa->adaugat == true ? 'danger' : 'success'}} btn-sm"> {{$etapa->adaugat == true ? 'Modifica' : 'Adauga'}} </button>
                                                    <input type="hidden" name="id_etapa" value="{{$etapa->id}}">
                                                    <input type="hidden" name="gazde" value="{{$etapa->gazde}}">
                                                    <input type="hidden" name="oaspeti" value="{{$etapa->oaspeti}}">
                                                    <input type="hidden" name="liga" value="{{$etapa->liga}}">
                                                    <input type="hidden" name="serie" value="{{$etapa->serie}}">
                                                    <input type="hidden" name="update" value="{{$etapa->adaugat == true ? 'true' : 'false'}}">
                                                    <input type="hidden" name="sezon" value="{{$sezon}}">
                                                    <input type="hidden" name="gazde_id" value="{{$etapa->gazde_id}}">
                                                    <input type="hidden" name="oaspeti_id" value="{{$etapa->oaspeti_id}}">
                                                </td>
                                                @else
                                                    <td class="font-weight-bold align-middle"></td>
                                                @endif
                                            @endif
                                        </tr>
                                        </form>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    {{$etape->appends(\Request::except('page'))->links()}}
                </div>
                <div class="col-sm-12" style="background: #F8F8F8; margin-right: 5px; margin-left: 5px; margin-bottom: 10px;">
                    <div class="news-detail-share pt-3 pb-3 text-center m-auto">
                        <div class="addthis_inline_share_toolbox_igh9"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Etapa tablet/mobile -->
        <a href="#etape" id="etape"></a>
        <div class="col-sm-6 d-xl-none" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                <div class="col-xs-10 font-weight-bold" style="margin-left: 5px; height: 40px; margin-top: 20px; margin-bottom: 5px; font-size: 20px;">
                    Etapa <span style="font-weight: bold; font-style: italic; font-size: 16px">{{$page}}</span>
                </div>
                @if(Auth::check() && Auth::user()->role == 'admin')
                    <div class="col-xs-2 font-weight-bold" style="margin-left: 10px; height: 40px; margin-top: 20px; margin-bottom: 5px; font-size: 20px;">
                        <form action="{{route('etapa-curenta')}}" method="POST" class="prevent-resubmit">
                        {{ csrf_field() }}
                        <input type="hidden" name="liga" value="{{$liga}}">
                        <input type="hidden" name="serie" value="{{isset($serie) ? $serie : NULL}}">
                        <input type="hidden" name="etapa_id" value="{{$etape[0]->etapa}}">
                            <button class="btn btn-{{$etapa_curenta == NULL || $etapa_curenta !== $etape[0]->etapa ? 'secondary' : 'success'}} btn-sm">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>
                    </div>
                @endif
                <div class="col-sm-12" style="padding-right: 5px; padding-left: 5px;">
                    <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                        <table class="table table-hover text-center">
                            <tbody>
                                @foreach($etape as $key => $etapa)
                                    @if(($etapa->gazde == 'STA' && $etapa->oaspeti == 'STA'))
                                    @else
                                        <form action="{{route('adauga-scor')}}" method="POST" class="prevent-resubmit">
                                        {{ csrf_field() }}
                                        <tr style="background-color: #323b3e; color: #fff;">
                                            <td class="text-left">Etapa: {{$etapa->etapa}}</td>
                                            @if(Auth::check() && Auth::user()->role == 'admin')
                                                <td class="text-right font-italic">
                                                    <a href="#" class="open-modal" data-toggle="modal" data-target="#updateDateModal" data-title="{{$etapa->gazde . ' - '. $etapa->oaspeti}}" data-id="{{$etapa->id}}">{{is_null($etapa->data) ? 'Data nu este disponibila' : date("M d, Y", strtotime($etapa->data))}}
                                                    <b> {{is_null($etapa->data) ? '' : (', ' . $etapa->ora)}}</b></a>
                                                </td>  
                                            @else
                                                @if(($etapa->gazde != 'STA' && $etapa->oaspeti != 'STA'))
                                                    <td class="text-right font-italic">
                                                        {{is_null($etapa->data) ? 'Data nu este disponibila' : date("M d, Y", strtotime($etapa->data))}}
                                                        <b> {{is_null($etapa->data) ? '' : (', ' . $etapa->ora)}}</b>
                                                    </td>
                                                @else
                                                    <td class="text-right font-italic pr-4"></td>
                                                @endif
                                            @endif
                                        </tr>
                                        <tr>
                                            <td class="text-left align-middle font-weight-bold">
                                                <span class="pr-0">
                                                    @if(is_null($etapa->logo_gazde))
                                                        <img src="{{URL::asset('teams_logo/Default_Logo.svg')}}" style="width: 20px; height: 20px;">
                                                    @else
                                                        <img src="{{URL::asset('teams_logo/'.$etapa->logo_gazde)}}" alt="{{$etapa->logo_gazde}}" title="{{$etapa->logo_gazde}}" style="width: 20px; height: 20px;">
                                                    @endif
                                                </span>
                                                {{$etapa->gazde}}
                                            </td>
                                            @if(($etapa->gazde != 'STA' && $etapa->oaspeti != 'STA'))
                                                <td class="text-right">
                                                    @if(Auth::check() && Auth::user()->role == 'admin')
                                                        <input type="number" min="0" value="{{$etapa->g_gazde}}" class="form-control text-center" name="g_gazde" style="width: 70px; float: right;">
                                                    @else
                                                        <span class="font-weight-bold scor-color text-center">
                                                            {{$etapa->g_gazde}}
                                                        </span>
                                                    @endif
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        <tr>
                                            <td class="text-left align-middle font-weight-bold">
                                                <span class="pr-0">
                                                    @if(is_null($etapa->logo_oaspeti))
                                                        <img src="{{URL::asset('teams_logo/Default_Logo.svg')}}" style="width: 20px; height: 20px;">
                                                    @else
                                                        <img src="{{URL::asset('teams_logo/'.$etapa->logo_oaspeti)}}" alt="{{$etapa->logo_oaspeti}}" title="{{$etapa->logo_oaspeti}}" style="width: 20px; height: 20px;">
                                                    @endif
                                                </span>
                                                {{$etapa->oaspeti}}
                                            </td>
                                            @if(($etapa->gazde != 'STA' && $etapa->oaspeti != 'STA'))
                                                <td class="text-right">
                                                    @if(Auth::check() && Auth::user()->role == 'admin')
                                                        <input type="number" min="0" value="{{$etapa->g_oaspeti}}" class="form-control text-center" name="g_oaspeti" style="width: 70px; float: right;">
                                                    @else
                                                        <span class="font-weight-bold scor-color text-center">
                                                            {{$etapa->g_oaspeti}}
                                                        </span>
                                                    @endif
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        </tr>

                                        @if(($etapa->gazde != 'STA' && $etapa->oaspeti != 'STA'))
                                            </tr>
                                                @if(Auth::check() && Auth::user()->role == 'admin')
                                                <tr>
                                                    <td colspan="2" class="text-right">
                                                        <button type="submit" class="btn btn-{{$etapa->adaugat == true ? 'danger' : 'success'}} btn-sm"> {{$etapa->adaugat == true ? 'Modifica' : 'Adauga'}} </button>
                                                        <input type="hidden" name="id_etapa" value="{{$etapa->id}}">
                                                        <input type="hidden" name="gazde" value="{{$etapa->gazde}}">
                                                        <input type="hidden" name="oaspeti" value="{{$etapa->oaspeti}}">
                                                        <input type="hidden" name="liga" value="{{$etapa->liga}}">
                                                        <input type="hidden" name="serie" value="{{$etapa->serie}}">
                                                        <input type="hidden" name="update" value="{{$etapa->adaugat == true ? 'true' : 'false'}}">
                                                        <input type="hidden" name="sezon" value="{{$sezon}}">
                                                        <input type="hidden" name="gazde_id" value="{{$etapa->gazde_id}}">
                                                        <input type="hidden" name="oaspeti_id" value="{{$etapa->oaspeti_id}}">
                                                    </td>
                                                </tr>
                                                @endif
                                            </tr>
                                        @endif
                                        </form>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12" style="margin-right: 5px; margin-left: 5px; margin-bottom: 15px;">
                    <div class="row">
                        <div class="col-3">
                            <span class="btn btn-dark btn-sm float-right prev" style="height: 100%; width: 50%; font-weight: bold;">
                                <span style="vertical-align: -webkit-baseline-middle;">
                                    <i class="fas fa-arrow-left fa-lg"></i>
                                </span>
                            </span>
                        </div>
                        <div class="col-6">
                            <select class="form-control font-weight-bold" id="change-etapa" style="width: 100% !important; border-radius: 0 !important;">
                                @for($i=1; $i<=$pagesNumber; $i++)
                                    <option class="option text-center" {{$i == $page ? 'selected' : ''}} value="{{$i}}">
                                        Etapa {{$i}}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-3">
                            <span class="btn btn-dark btn-sm float-left next" style="height: 100%; width: 50%; font-weight: bold;">
                                <span style="vertical-align: -webkit-baseline-middle;">
                                    <i class="fas fa-arrow-right fa-lg"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" style="background: #F8F8F8; margin-right: 5px; margin-left: 5px; margin-bottom: 10px;">
                    <div class="news-detail-share pt-3 pb-3 text-center m-auto">
                        <div class="addthis_inline_share_toolbox_igh9"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
    <div class="line"></div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                <div class="col-sm-12 font-weight-bold" style="height: 40px; margin-top: 20px; margin-bottom: 5px; font-size: 20px;">
                    <label style="font-size: 16px; margin-left: 5px;"> Comenteaza etapa</label>
                </div>
                <div id="fb-root"></div>
                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v3.1&appId=2136989686622565&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
                <div class="col-sm-12">
                    <div class="fb-comments" data-href="{{$current_url}}" data-numposts="5" data-width="100%"></div>
                </div>
            </div></div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="updateDateModal" tabindex="-1" role="dialog" aria-labelledby="updateDateModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <b><h7 class="modal-title" id="updateDateModalLabel"></h7></b>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class='col-sm-12'>
                        <form action="{{route('adauga-data')}}" method="POST" class="prevent-resubmit" id="adaugaData">
                            {{ csrf_field() }}
                            <div class="form-group" style="margin-bottom: 0px">
                                <div class='input-group date'>
                                    <input type='text' class="form-control" name="data" id="datetimepicker"
                                        placeholder="Click to pick a date" readonly="true" style="border-radius: 0" />
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">
                                            <i class="fas fa-calendar-alt fa-1x"></i>
                                        </span>
                                    </div>
                                    <input type='hidden' name="etapa_id" id="etapaId" value="" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Inchide</button>
                <button type="button" class="btn btn-success adauga-data">Adauga</button>
            </div>
        </div>
    </div>
</div>

<script>
    let page = '{{$page}}';
    let liga = '{{$liga}}';
    let serie = '{{$seria}}';
    let sezon = '{{$sezon}}';

    $('.prev').click(function(){
        let prev = (parseInt(page) - 1);
        if(serie !== '') {
            window.location.href = '?seria='+serie+'&page='+prev+'#etape';
        } else {
            window.location.href = '?page='+prev+'#etape';
        }
    });

    $('.next').click(function(){
        let next = (parseInt(page) + 1);
        if(serie !== '') {
            window.location.href = '?seria='+serie+'&page='+next+'#etape';
        } else {
            window.location.href = '?page='+next+'#etape';
        }
    });

    $('#change-etapa').change(function(){
        let page = $(this).val();
        if(serie !== '') {
            window.location.href = '?seria='+serie+'&page='+page+'#etape';
        } else {
            window.location.href = '?page='+page+'#etape';
        }
    });

    $('.open-modal').click(function(e){
        e.preventDefault();

        var title = $(this).data('title');
        var id    = $(this).data('id');

        $('#updateDateModalLabel').text(title);
        $('#etapaId').val(id);

        $('#datetimepicker').datetimepicker({
            step: 10,
            formatDate: 'Y-m-d',
            minTime: '08:00',
            maxTime: '23:00'
        });
    });

    $('.adauga-data').click(function(){
        var data = $('#datetimepicker').val();
        var id   = $('#etapaId').val();

        if(data == '') {
            alert('Alege o data!');
        } else {
            $('#adaugaData').submit();
        }
    });
</script>
@endsection