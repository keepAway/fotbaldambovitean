@php
    $__liga  = Request::get('liga');
    $__serie = Request::get('serie');
    $__serie = gettype($__serie) != NULL ? $__serie : NULL;
@endphp

@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-7">
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
    <div class="row">
        <div class="col-sm-2"></div>
        {{-- Desktop --}}
        <div class="col-sm-7 d-none d-xl-block" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                <div class="col-sm-12 font-weight-bold" style="margin-top: 20px; margin-bottom: 5px; font-size: 20px;">
                    <div class="row">
                        <div class="col-sm-6">
                            <select class="form-control font-weight-bold" id="ligi" style="width: 100% !important; border-radius: 0 !important;">
                                @foreach($ligi as $liga)
                                    <option class="option" data-liga="{{$liga->liga}}" data-serie="{{$liga->serie == null ? null : $liga->serie}}" 
                                        {{($liga->liga == $__liga && $liga->serie == $__serie ? 'selected' : '')}}>
                                        Liga {{$liga->liga}} {{$liga->serie != null ? ', ' . 'Seria ' . $liga->serie : ''}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6 text-center">
                            @if(!Auth::check())
                                <div class="alert alert-danger" style="font-size: 11px; width: 100% !important; margin-bottom: 0px !important; margin-top: -4px !important;"> Trebuie sa fii logat pentru a adauga scoruri </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                        <table class="table text-center">
                            <thead style="background-color: #323b3e; color: #fff;">
                                <tr style="background-color: #323b3e; color: #fff;">
                                    <th>#</th>
                                    <th class="text-left">Program</th>
                                    <th class="text-right">Gazde</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="text-left">Oaspeti</th>
                                    @if(Auth::check())
                                        <th></th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($etape as $etapa)
                                    <form action="{{route('trimite-scor')}}" method="POST" class="prevent-resubmit">
                                    {{ csrf_field() }}
                                        <tr>
                                            <td class="align-middle" style="white-space: nowrap;"><b>{{$etapa->etapa}}</b></td>
                                            <td class="font-italic align-middle text-left" style="white-space: nowrap;">{{date("M d, Y", strtotime($etapa->data))}}, <b>{{($etapa->ora) ? $etapa->ora : '00:00'}}</b></td>
                                            <td class="text-right align-middle font-weight-bold">{{$etapa->gazde}}</td>
                                            <td class="align-middle">
                                                @if(Auth::check())
                                                    <input type="number" min="0" value="{{$etapa->g_gazde}}" class="form-control" name="g_gazde" style="width: 70px;" required>
                                                @else
                                                    <span class="font-weight-bold scor-color">
                                                        {{$etapa->g_gazde}}
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="font-weight-bold align-middle">-</td>
                                            <td class="align-middle">
                                                @if(Auth::check())
                                                    <input type="number" min="0" value="{{$etapa->g_oaspeti}}" class="form-control" name="g_oaspeti" style="width: 70px;" required>
                                                @else
                                                    <span class="font-weight-bold scor-color">
                                                        {{$etapa->g_oaspeti}}
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="text-left align-middle font-weight-bold">{{$etapa->oaspeti}}</td>
                                            @if(Auth::check())
                                            <td class="align-middle">
                                                <div style="white-space: nowrap;">
                                                    <button type="submit" class="btn btn-{{$etapa->adaugat == true ? 'danger' : 'success'}} btn-sm"> {{$etapa->adaugat == true ? 'Modifica' : 'Adauga'}} </button>
                                                    <a class="toggle-plus-minus btn btn-sm btn-{{($etapa->contestatie != '' || $etapa->incident != '' || $etapa->alte_detalii != '') ? 'danger' : 'success'}} display-details-container" data-id="{{$etapa->id}}" style="color: #fff;">
                                                        <i class="plus-minus fas fa-plus" style="font-weight: 600;"></i>
                                                    </a>
                                                    @php $i = 0; $j = 0; $k = 0; @endphp
                                                    @php
                                                        if($etapa->contestatie != '') {
                                                            $i = 1;
                                                        }

                                                        if($etapa->incident != '') {
                                                            $j = 1;
                                                        }
 
                                                        if($etapa->alte_detalii != '') {
                                                            $k = 1;
                                                        }
                                                    @endphp

                                                    @if($etapa->adaugat && ($i > 0 || $j > 0 || $k > 0))
                                                        <span class="w3-badge">{{$i+$j+$k}}</span>
                                                    @endif

                                                    <input type="hidden" name="id_etapa" value="{{$etapa->id}}">
                                                    <input type="hidden" name="gazde" value="{{$etapa->gazde}}">
                                                    <input type="hidden" name="oaspeti" value="{{$etapa->oaspeti}}">
                                                    <input type="hidden" name="liga" value="{{$etapa->liga}}">
                                                    <input type="hidden" name="serie" value="{{$etapa->serie}}">
                                                    <input type="hidden" name="update" value="{{$etapa->adaugat == true ? 'true' : 'false'}}">
                                                </div>
                                            </td>
                                            @endif
                                        </tr>
                                        <tr class="d-none" id="{{'container_' . $etapa->id}}">
                                        {{-- <tr class="{{($etapa->contestatie != '' || $etapa->incident != '' || $etapa->alte_detalii != '') ? '' : 'd-none'}}" id="{{'container_' . $etapa->id}}"> --}}
                                            <td class="pl-0 pr-0" colspan="9">
                                                <div class="card card-default text-left pl-0 pr-0 pt-0" style="border-radius: 0;">
                                                    <div class="card-body pb-1">
                                                        <div class="form-group mb-2">
                                                            <label class="switch-toggle">
                                                            <input type="checkbox" class="contestatie" data-id="{{$etapa->id}}" {{($etapa->contestatie != '') ? 'checked="checked"' : ''}}>
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <label class="form-check-label" style="font-weight: normal;"> Contestatie? </label>
                                                        </div>
                                                        <div class="{{$etapa->contestatie != '' ? '' : 'd-none'}} pb-2" id="{{'contestatie_' . $etapa->id}}">
                                                            <textarea name="contestatie" class="pl-2" rows="3" style="width: 100%" placeholder="&nbsp;&nbsp;Motivul contestatiei si echipa care contesta?">{{$etapa->contestatie != '' ? $etapa->contestatie : ''}}</textarea>
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <label class="switch-toggle">
                                                            <input type="checkbox" class="incident" data-id="{{$etapa->id}}" {{($etapa->incident != '') ? 'checked="checked"' : ''}}>
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <label class="form-check-label" style="font-weight: normal;"> Incidente? </label>
                                                        </div>
                                                        <div class="{{$etapa->incident != '' ? '' : 'd-none'}} pb-2" id="{{'incident_' . $etapa->id}}">
                                                            <textarea name="incident" class="pl-2" rows="3" style="width: 100%" placeholder="&nbsp;&nbsp;Descrie incidentul ...">{{$etapa->incident != '' ? $etapa->incident : ''}}</textarea>
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <label class="switch-toggle">
                                                            <input type="checkbox" class="detalii" data-id="{{$etapa->id}}" {{($etapa->alte_detalii != '') ? 'checked="checked"' : ''}}>
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <label class="form-check-label" style="font-weight: normal;"> Alte detalii ... </label>
                                                        </div>
                                                        <div class="{{$etapa->alte_detalii != '' ? '' : 'd-none'}}" id="{{'detalii_' . $etapa->id}}">
                                                            <textarea name="alte_detalii" class="pl-2" rows="3" style="width: 100%" placeholder="&nbsp;&nbsp;Descrie detaliul ...">{{$etapa->alte_detalii != '' ? $etapa->alte_detalii : ''}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tablet/Mobile --}}
        <div class="col-sm-7 d-xl-none" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                <div class="col-sm-12 font-weight-bold" style="margin-top: 20px; margin-bottom: 5px; font-size: 20px;">
                    <div class="row">
                        <div class="col-sm-12">
                            <select class="form-control font-weight-bold w-auto m-auto" id="mobile-ligi" style="width: 100% !important; border-radius: 0 !important;">
                                @foreach($ligi as $liga)
                                    <option class="option" data-liga="{{$liga->liga}}" data-serie="{{$liga->serie == null ? null : $liga->serie}}" 
                                        {{($liga->liga == $__liga && $liga->serie == $__serie ? 'selected' : '')}}>
                                        Liga {{$liga->liga}} {{$liga->serie != null ? ', ' . 'Seria ' . $liga->serie : ''}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">   
                        <div class="col-sm-12 text-center">
                            @if(!Auth::check())
                                <span style="font-size: 11px; font-style: italic; color: red">( Trebuie sa fii logat pentru a adauga scoruri )</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                        <table class="table text-center">
                            <tbody>
                                @foreach($etape as $etapa)
                                    <form action="{{route('trimite-scor')}}" method="POST" class="prevent-resubmit">
                                        {{ csrf_field() }}
                                        <tr style="background-color: #323b3e; color: #fff;">
                                            <td class="text-left">Etapa: {{$etapa->etapa}}</td>
                                            <td class="text-right font-italic">{{date("M d, Y", strtotime($etapa->data))}}, <b>{{($etapa->ora) ? $etapa->ora : '00:00'}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left align-middle font-weight-bold">{{$etapa->gazde}}</td>
                                            <td class="text-right">
                                                @if(Auth::check())
                                                    <input type="number" min="0" value="{{$etapa->g_gazde}}" class="form-control float-right" name="g_gazde" style="width: 70px;" required>
                                                @else
                                                    <span class="font-weight-bold scor-color">
                                                        {{$etapa->g_gazde}}
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left align-middle font-weight-bold">{{$etapa->oaspeti}}</td>
                                            <td class="text-right">
                                                @if(Auth::check())
                                                    <input type="number" min="0" value="{{$etapa->g_oaspeti}}" class="form-control float-right" name="g_oaspeti" style="width: 70px;" required>
                                                @else
                                                    <span class="font-weight-bold scor-color">
                                                        {{$etapa->g_oaspeti}}
                                                    </span>
                                                @endif
                                            </td>   
                                        </tr>
                                        <tr>
                                            @if(Auth::check())
                                            <td colspan="2" class="align-middle text-right">
                                                <div>
                                                    <button type="submit" class="btn btn-{{$etapa->adaugat == true ? 'danger' : 'success'}} btn-sm"> {{$etapa->adaugat == true ? 'Modifica' : 'Adauga'}} </button>
                                                    <a class="mobile-toggle-plus-minus btn btn-sm btn-{{($etapa->contestatie != '' || $etapa->incident != '' || $etapa->alte_detalii != '') ? 'danger' : 'success'}} mobile-display-details-container" data-id="{{$etapa->id}}" style="color: #fff;">
                                                        <i class="plus-minus fas fa-plus" style="font-weight: 600"></i>
                                                    </a>
                                                    @php $i = 0; $j = 0; $k = 0; @endphp
                                                    @php
                                                        if($etapa->contestatie != '') {
                                                            $i = 1;
                                                        }

                                                        if($etapa->incident != '') {
                                                            $j = 1;
                                                        }
 
                                                        if($etapa->alte_detalii != '') {
                                                            $k = 1;
                                                        }
                                                    @endphp

                                                    @if($etapa->adaugat && ($i > 0 || $j > 0 || $k > 0))
                                                        <span class="w3-badge">{{$i+$j+$k}}</span>
                                                    @endif

                                                    <input type="hidden" name="id_etapa" value="{{$etapa->id}}">
                                                    <input type="hidden" name="gazde" value="{{$etapa->gazde}}">
                                                    <input type="hidden" name="oaspeti" value="{{$etapa->oaspeti}}">
                                                    <input type="hidden" name="liga" value="{{$etapa->liga}}">
                                                    <input type="hidden" name="serie" value="{{$etapa->serie}}">
                                                    <input type="hidden" name="update" value="{{$etapa->adaugat == true ? 'true' : 'false'}}">
                                                </div>
                                            </td>
                                            @endif
                                        </tr>
                                        <tr class="d-none" id="{{'mobile_container_' . $etapa->id}}">
                                            <td class="pl-0 pr-0" colspan="2">
                                                <div class="card card-default text-left pl-0 pr-0 pt-0" style="border-radius: 0;">
                                                    <div class="card-body pb-1">
                                                        <div class="form-group mb-2">
                                                            <label class="switch-toggle">
                                                            <input type="checkbox" class="mobile_contestatie" data-id="{{$etapa->id}}" {{($etapa->contestatie != '') ? 'checked="checked"' : ''}}>
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <label class="form-check-label" style="font-weight: normal;"> Contestatie? </label>
                                                        </div>
                                                        <div class="{{$etapa->contestatie != '' ? '' : 'd-none'}} pb-2" id="{{'mobile_contestatie_' . $etapa->id}}">
                                                            <textarea name="contestatie" rows="3" style="width: 100%" placeholder="&nbsp;&nbsp;Motivul contestatiei si echipa care contesta?">{{$etapa->contestatie != '' ? $etapa->contestatie : ''}}</textarea>
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <label class="switch-toggle">
                                                            <input type="checkbox" class="mobile_incident" data-id="{{$etapa->id}}" {{($etapa->incident != '') ? 'checked="checked"' : ''}}>
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <label class="form-check-label" style="font-weight: normal;"> Incidente? </label>
                                                        </div>
                                                        <div class="{{$etapa->incident != '' ? '' : 'd-none'}} pb-2" id="{{'mobile_incident_' . $etapa->id}}">
                                                            <textarea name="incident" rows="3" style="width: 100%" placeholder="&nbsp;&nbsp;Descrie incidentul ...">{{$etapa->incident != '' ? $etapa->incident : ''}}</textarea>
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <label class="switch-toggle">
                                                            <input type="checkbox" class="mobile_detalii" data-id="{{$etapa->id}}" {{($etapa->alte_detalii != '') ? 'checked="checked"' : ''}}>
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <label class="form-check-label" style="font-weight: normal;"> Alte detalii ... </label>
                                                        </div>
                                                        <div class="{{$etapa->alte_detalii != '' ? '' : 'd-none'}} pb-2" id="{{'mobile_detalii_' . $etapa->id}}">
                                                            <textarea name="alte_detalii" rows="3" style="width: 100%" placeholder="&nbsp;&nbsp;Descrie detaliul ...">{{$etapa->alte_detalii != '' ? $etapa->alte_detalii : ''}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	    <div class="col-sm-3"></div>
    </div>
</div>

<script>
    $('#ligi, #mobile-ligi').change(function() {
        var liga  = $(this).find(':selected').data('liga');
        var serie = $(this).find(':selected').data('serie');
        
        if(serie != "") {
            return window.location.href ='/adauga-scor?liga=' + liga + '&serie=' + serie;
        } else {
            return window.location.href ='/adauga-scor?liga=' + liga;
        }
    });

    $('.contestatie, .incident, .detalii').click(function(){
        var id = $(this).data('id');
        var __class = $(this).attr('class');
        
        var _id = __class + '_' + id;
        $('#' + _id).toggleClass('d-none');
    });

    $('.mobile_contestatie, .mobile_incident, .mobile_detalii').click(function(){
        var id = $(this).data('id');
        var __class = $(this).attr('class');
        
        var _id = __class + '_' + id;
        $('#' + _id).toggleClass('d-none');
    });

    $('.display-details-container').click(function(){
        var id = $(this).data('id');
        $('#container_' + id).toggleClass('d-none');
    });

    $('.mobile-display-details-container').click(function(){
        var id = $(this).data('id');
        $('#mobile_container_' + id).toggleClass('d-none');
    });

    $('.toggle-plus-minus').click(function(){
        $(this).find('.plus-minus').toggleClass('fa-minus fa-plus');
    });

    $('.mobile-toggle-plus-minus').click(function(){
        $(this).find('.plus-minus').toggleClass('fa-minus fa-plus');
    });
</script>

@endsection