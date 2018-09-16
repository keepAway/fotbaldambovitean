<?php 
    $seria       = Request::get('seria') ? Request::get('seria') :  NULL;
    $tab         = Request::get('tab') ? Request::get('tab') :  NULL;
    $current_url = Request::fullUrl();
?>
<!-- Page Content  -->
<div id="content">
    @include('navbar')
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

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v3.1&appId=2136989686622565&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-7" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                <div class="col-sm-12" style="height: 40px; margin-top: 20px; margin-bottom: 5px; font-size: 20px; font-weight: bold; padding-left: 5px; padding-right: 5px;">
                    Liga {{$liga}} {{isset($seria) && $seria != NULL ? ' | Seria ' . $seria : ''}}
                    <label style="font-size: 16px; margin-left: 5px;"> Clasament</label>
                </div>
                <div class="col-sm-12" style="padding-left: 5px; padding-right: 5px;">
                    <ul class="nav nav-tabs" style="background-color: #085f00; color: #fff; font-weight: bold; border: 1px solid #085f00; border-radius: 0;">
                        <li class="nav-item">
                            <a class="nav-link" style="border-radius: 0; background-color: {{$tab == NULL ? '#053600' : ''}}" href="{{ route('clasament', ['liga' => $liga, 'seria' => $seria]) }}">Total</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="border-radius: 0; background-color:  {{$tab == '1' ? '#053600' : ''}}" href="{{ route('clasament', ['liga' => $liga, 'seria' => $seria, 'tab' => 1]) }}">Acasa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="border-radius: 0; background-color: {{$tab == '2' ? '#053600' : ''}}" href="{{ route('clasament', ['liga' => $liga, 'seria' => $seria, 'tab'=> 2]) }}">Deplasare</a>
                        </li>
                    </ul>
                    <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                        <table class="table table-hover text-center">
                            <thead style="background-color: #085f00; color: #fff;">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col" class="text-left">Echipa</th>
                                    <th scope="col">M</th>
                                    <th scope="col" class="d-none d-lg-table-cell">V</th>
                                    <th scope="col" class="d-none d-lg-table-cell">E</th>
                                    <th scope="col" class="d-none d-lg-table-cell">I</th>
                                    <th scope="col" class="d-none d-lg-table-cell">Gol</th>
                                    <th scope="col" class="d-none d-lg-table-cell">+/-</th>
                                    <th scope="col">P</th>
                                    <th scope="col">Forma</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($echipe as $echipa)
                                <tr>
                                    <td style="width: 1%; background: #{{$i <= 2 ? '004682' : ''}}; text-align: center; font-weight: bold; color: #{{$i <= 2 ? 'FFF' : '000'}};">{{$i++}}.</td>
                                    <td style="font-weight: bold;" class="text-left">{{$echipa->echipa}}</td>
                                    <td>{{$tab == NULL ? $echipa->t_meciuri : ($tab == 1 ? $echipa->a_meciuri : $echipa->d_meciuri)}}</td>
                                    <td class="d-none d-lg-table-cell">{{$tab == NULL ? $echipa->t_victorii : ($tab == 1 ? $echipa->a_victorii : $echipa->d_victorii)}}</td>
                                    <td class="d-none d-lg-table-cell">{{$tab == NULL ? $echipa->t_egaluri : ($tab == 1 ? $echipa->a_egaluri : $echipa->d_egaluri)}}</td>
                                    <td class="d-none d-lg-table-cell">{{$tab == NULL ? $echipa->t_infrangeri : ($tab == 1 ? $echipa->a_infrangeri : $echipa->d_infrangeri)}}</td>
                                    <td class="text-nowrap d-none d-lg-table-cell">
                                        {{$tab == NULL ? $echipa->t_marcate : ($tab == 1 ? $echipa->a_marcate : $echipa->d_marcate)}}
                                         - 
                                        {{$tab == NULL ? $echipa->t_primite : ($tab == 1 ? $echipa->a_primite : $echipa->d_primite)}}</td>
                                    <td class="d-none d-lg-table-cell">{{$tab == NULL ? $echipa->t_golaveraj : ($tab == 1 ? $echipa->a_golaveraj : $echipa->d_golaveraj)}}</td>
                                    <td>{{$tab == NULL ? $echipa->t_puncte : ($tab == 1 ? $echipa->a_puncte : $echipa->d_puncte)}}</td>
                                    <td>
                                        <div style="display: inline-flex;">
                                                <div class="forma" style="background: #656565; cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Etapa urmatoare: ">
                                                    ?
                                                </div>
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
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>

    <div class="line"></div>
    {{-- <div class="row" id="blogspot">
        <div class="col-sm-12">
        </div>
    </div>
    <div class="line"></div> --}}

    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-7" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                <div class="col-sm-12" style="height: 40px; margin-top: 20px; margin-bottom: 5px; font-size: 20px; font-weight: bold;">
                    Liga {{$liga}} {{isset($seria) && $seria != NULL ? ' | Seria ' . $seria : ''}}
                    <label style="font-size: 16px; margin-left: 5px;"> Etape</label>
                </div>
                <div class="col-sm-12">
                    <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                        <table class="table table-hover text-center">
                            <tbody>
                                @foreach($etape as $etapa)
                                    <form action="{{route('adauga-scor')}}" method="POST" class="prevent-resubmit">
                                    {{ csrf_field() }}
                                    <tr>
                                        <td>Etapa: {{$etapa->etapa}}</td>
                                        <td>{{$etapa->data}} | {{$etapa->ora}}</td>
                                        <td class="text-right" style="font-weight: bold;">{{$etapa->gazde}}</td>
                                        <td>
                                            @if(Auth::check())
                                                <input type="number" min="0" value="{{$etapa->g_gazde}}" class="form-control" name="g_gazde" style="width: 70px;">
                                            @else
                                                <span style="font-weight: bold;">
                                                    {{$etapa->g_gazde}}
                                                </span>
                                            @endif
                                        </td>
                                        <td style="font-weight: bold;">-</td>
                                        <td>
                                            @if(Auth::check())
                                                <input type="number" min="0" value="{{$etapa->g_oaspeti}}" class="form-control" name="g_oaspeti" style="width: 70px;">
                                            @else
                                                <span style="font-weight: bold;">
                                                    {{$etapa->g_oaspeti}}
                                                </span>
                                            @endif
                                        </td>
                                        <td class="text-left" style="font-weight: bold;">{{$etapa->oaspeti}}</td>
                                        @if(Auth::check())
                                        <td>
                                            <button type="submit" class="btn btn-{{$etapa->adaugat == true ? 'success' : 'primary'}} btn-sm"> {{$etapa->adaugat == true ? 'Modifica' : 'Adauga'}} </button>
                                            <input type="hidden" name="id_etapa" value="{{$etapa->id}}">
                                            <input type="hidden" name="gazde" value="{{$etapa->gazde}}">
                                            <input type="hidden" name="oaspeti" value="{{$etapa->oaspeti}}">
                                            <input type="hidden" name="liga" value="{{$etapa->liga}}">
                                            <input type="hidden" name="serie" value="{{$etapa->serie}}">
                                            <input type="hidden" name="update" value="{{$etapa->adaugat == true ? 'true' : 'false'}}">
                                        </td>
                                        @endif
                                    </tr>
                                    </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12 text-center" style="text-align: center !important;">
                    {{ $etape->appends(\Request::except('page'))->links() }}
                </div>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
    <div class="line"></div>
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-7" style="background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.15);">
            <div class="row">
                <div class="col-sm-12" style="height: 40px; margin-top: 20px; margin-bottom: 5px; font-size: 20px; font-weight: bold;">
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
            </div>
        </div>
    </div>
</div>