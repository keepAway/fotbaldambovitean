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
        <div class="col-lg-2">
            {{-- test --}}
        </div>
        <div class="col-sm-7 d-none d-xl-block" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                <div class="col-sm-12 font-weight-bold" style="margin-top: 20px; margin-bottom: 5px; font-size: 20px;">
                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control" id="ligi" style="font-weight: bold;">
                                @foreach($ligi as $liga)
                                    <option class="option" data-liga="{{$liga->liga}}" data-serie="{{$liga->serie == null ? null : $liga->serie}}" 
                                        {{($__liga == $liga->$liga || $__serie == $liga->serie ? 'selected' : '')}}>
                                        Liga {{$liga->liga}} {{$liga->serie != null ? ', ' . 'Seria ' . $liga->serie : ''}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-8">
                            @if(!Auth::check())
                                <span class="float-right" style="font-size: 11px; font-style: italic; color: red">( Trebuie sa fii logat pentru a adauga scoruri )</span>
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
                                        <tr>
                                            <td>Etapa: {{$etapa->etapa}}</td>
                                            <td class="font-italic">Data: {{$etapa->data}} | Ora: {{$etapa->ora}}</td>
                                            <td class="text-right align-middle font-weight-bold">{{$etapa->gazde}}</td>
                                            <td>
                                                @if(Auth::check())
                                                    <input type="number" min="0" value="{{$etapa->g_gazde}}" class="form-control" name="g_gazde" style="width: 70px;" required>
                                                @else
                                                    <span class="font-weight-bold">
                                                        {{$etapa->g_gazde}}
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="font-weight-bold align-middle">-</td>
                                            <td>
                                                @if(Auth::check())
                                                    <input type="number" min="0" value="{{$etapa->g_oaspeti}}" class="form-control" name="g_oaspeti" style="width: 70px;" required>
                                                @else
                                                    <span class="font-weight-bold">
                                                        {{$etapa->g_oaspeti}}
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="text-left align-middle font-weight-bold">{{$etapa->oaspeti}}</td>
                                            @if(Auth::check())
                                            <td>
                                                <div>
                                                    <button type="submit" class="btn btn-primary btn-sm"> Adauga </button>
                                                    <a class="toggle-plus-minus btn btn-sm btn-{{($etapa->contestatie != '' || $etapa->incident != '' || $etapa->alte_detalii != '') ? 'success' : 'primary'}} display-details-container" data-id="{{$etapa->id}}" style="color: #fff;">
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
        <div class="col-lg-2">
            {{-- test --}}
        </div>
    </div>
</div>

<script>
    $('#ligi').change(function() {
        var liga  = $(this).find(':selected').data('liga');
        var serie = $(this).find(':selected').data('serie');
        
        if(serie != "") {
            return window.location.href ='/scoruri-primite?liga=' + liga + '&serie=' + serie;
        } else {
            return window.location.href ='/scoruri-primite?liga=' + liga;
        }
    });

    $('.contestatie, .incident, .detalii').click(function(){
        var id = $(this).data('id');
        var __class = $(this).attr('class');
        
        var _id = __class + '_' + id;
        $('#' + _id).toggleClass('d-none');
    });

    $('.display-details-container').click(function(){
        var id = $(this).data('id');
        $('#container_' + id).toggleClass('d-none');
    });
</script>

@endsection