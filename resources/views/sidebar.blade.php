@php 
    $current_url = Request::fullUrl();
    $seria       = Request::get('seria') ? Request::get('seria') :  NULL;
    $liga        = Request::segment(3) ? Request::segment(3) :  NULL;
@endphp
<div class="wrapper">
    <nav id="sidebar">       
        <div class="close" id="dismiss">
            <i class="fas fa-arrow-left" style="font-size: 25px; font-weight: bold !important; vertical-align: text-top; color: #fff; cursor: pointer; {{\Request::route()->getName() == 'stire-detaliu' ? 'padding-top: 6px !important;' : ''}}"></i>
        </div>
        <div class="sidebar-header">
            <a href="/">
                <img src="{{URL::asset('img/logo-gri-3.png')}}" alt="Logo Fotbal Arena" style="height: 95px !important;"></a>
        </div>

        <ul class="list-unstyled components">
            {{-- <li class="nav-link" style="padding: 0">
                <a href="{{ route('clasament', ['liga' => 2]) }}" id="liga_1" class="sidebar-link{{$liga == 1 ? " active" : ""}}">Liga 1</a>
            </li> --}}
            <li class="nav-link" style="padding: 0">
                <a href="{{ route('clasament', ['liga' => 2]) }}" id="liga_2" class="sidebar-link{{$liga == 2 ? " active" : ""}}">Liga 2</a>
            </li>
            {{-- <li class="nav-link" style="padding: 0">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar-link{{ str_contains($current_url, '/liga/3') ? ' active' : '' }}">Liga 3</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('clasament', ['liga' => 3, 'seria' => 1]) }}" id="liga_3_1" class="sidebar-link{{$current_url == route('clasament', ['liga' => 3, 'seria' => 1]) ? " active" : ""}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Seria 1
                        </a>
                    </li>
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('clasament', ['liga' => 3, 'seria' => 2]) }}" id="liga_3_2" class="sidebar-link{{$current_url == route('clasament', ['liga' => 3, 'seria' => 2]) ? " active" : ""}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Seria 2
                        </a>
                    </li>
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('clasament', ['liga' => 3, 'seria' => 3]) }}" id="liga_3_3" class="sidebar-link{{$current_url == route('clasament', ['liga' => 3, 'seria' => 3]) ? " active" : ""}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Seria 3
                        </a>
                    </li>
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('clasament', ['liga' => 3, 'seria' => 4]) }}" id="liga_3_4" class="sidebar-link{{$current_url == route('clasament', ['liga' => 3, 'seria' => 4]) ? " active" : ""}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Seria 4
                        </a>
                    </li>
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('clasament', ['liga' => 3, 'seria' => 5]) }}" id="liga_3_5" class="sidebar-link{{$current_url == route('clasament', ['liga' => 3, 'seria' => 5]) ? " active" : ""}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Seria 5
                        </a>
                    </li>
                </ul>
            </li> --}}
            <li class="nav-link" style="padding: 0">
                <a href="{{ route('clasament', ['liga' => 4 ]) }}" id="liga_4" class="sidebar-link{{$liga == 4 ? " active" : ""}}">Liga 4</a>
            </li>
            <li class="nav-link" style="padding: 0">
                <a href="#homeSubmenuLiga5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar-link{{ $liga == 5 ? ' active' : '' }}">Liga 5</a>
                <ul class="collapse list-unstyled" id="homeSubmenuLiga5">
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('clasament', ['liga' => 5, 'seria' => 'Nord']) }}" id="liga_5_Nord" class="sidebar-link{{$liga == 5 && $seria == 'Nord' ? " active" : ""}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Liga 5 Nord
                        </a>
                    </li>
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('clasament', ['liga' => 5, 'seria' => 'Sud']) }}" id="liga_5_Sud" class="sidebar-link{{$liga == 5 && $seria == 'Sud' ? " active" : ""}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Liga 5 Sud
                        </a>
                    </li>
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('clasament', ['liga' => 5, 'seria' => 'Vest']) }}" id="liga_5_Vest" class="sidebar-link{{$liga == 5 && $seria == 'Vest' ? " active" : ""}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Liga 5 Vest
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-link" style="padding: 0">
                <a href="#homeSubmenuLiga6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar-link{{ $liga == 6 ? ' active' : '' }}">Liga 6</a>
                <ul class="collapse list-unstyled" id="homeSubmenuLiga6">
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('clasament', ['liga' => 6, 'seria' => 'Nord']) }}" id="liga_6_Nord" class="sidebar-link{{$liga == 6 && $seria == 'Nord' ? " active" : ""}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Liga 6 Nord
                        </a>
                    </li>
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('clasament', ['liga' => 6, 'seria' => 'Sud']) }}" id="liga_6_Sud" class="sidebar-link{{$liga == 6 && $seria == 'Sud' ? " active" : ""}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Liga 6 Sud
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-link" style="padding: 0">
                <a href="#homeSubmenuLiga7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar-link{{ $liga == 7 ? ' active' : '' }}">Juniori</a>
                <ul class="collapse list-unstyled" id="homeSubmenuLiga7">
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('clasament', ['liga' => 7]) }}" id="liga_7" class="sidebar-link{{$liga == 7 ? " active" : ""}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Juniori D (U13)
                        </a>
                    </li>
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('clasament', ['liga' => 8,]) }}" id="liga_8" class="sidebar-link{{$liga == 8 ? " active" : ""}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Juniori E (U11)
                        </a>
                    </li>
                </ul>
            </li>

            <hr>
            @if(Auth::check() && Auth::user()->role == 'admin')
            <li class="nav-link" style="padding: 0">
                <a href="#homeSubmenuAdmin" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Admin </a>
                <ul class="collapse list-unstyled" id="homeSubmenuAdmin">
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('scoruri-primite', ['liga' => 4])}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Scoruri primite
                        </a>
                    </li>
                    <li class="nav-link" style="padding: 0">
                        <a href="{{ route('useri') }}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Useri
                        </a>
                    </li>
                </ul>
            </li>
            @endif
        </ul>
    </nav>
</div>
<script>
    $(document).ready(function($){
        $.ajax({
            type : "get",
            url: "{{ route('get-etapa-curenta') }}",
            data: {},
            success: function(response) {
                response.etapaCurenta.forEach(function(item) {
                    let href = '';
                    let id = '#liga_';

                    if(item.serie !== null) {
                        href = '/clasament/liga/'+item.liga+'?seria='+item.serie+'&page='+item.etapa_curenta;
                        id += item.liga + '_' + item.serie;
                    } else {
                        href = '/clasament/liga/'+item.liga+'?page='+item.etapa_curenta;
                        id += item.liga;
                    }

                    $(id).attr("href", href);
                });
            }
        });
    });
</script>