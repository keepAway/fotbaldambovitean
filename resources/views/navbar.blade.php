@php
    $current_url = Request::fullUrl();
@endphp
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <button type="button" id="sidebarCollapse" class="btn btn-dark">
            <i class="fas fa-align-justify"></i> &nbsp;
            <span style="font-size: 15px;">Meniu</span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto pl-2 pt-2">
                <li class="nav-item">
                    <a class="nav-link{{$current_url == url('/') ? " active" : ""}}" href="{{ url('/') }}">Stiri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{$current_url == route('trimite-scor', ['liga' => 4]) ? " active" : ""}}" href="{{ route('trimite-scor', ['liga' => 4]) }}">Adauga scor</a>
                </li>
                @if(Auth::check() && (Auth::user()->role == 'admin'))
                    <li class="nav-item">
                        <a class="nav-link{{$current_url == route('admin-stiri') ? " active" : ""}}" href="{{ route('admin-stiri') }}">Adauga stire</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link{{$current_url == route('contact') ? " active" : ""}}" href="{{ route('contact') }}">Contact</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link{{$current_url == route('login') ? " active" : ""}}" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item">
                    	<span class="nav-link">
                        	<strong style="font-style: italic;">{{ ucfirst(Auth::user()->name) }}</strong>
                    	</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
                <li class="nav-item social-facebook">
                    <a class="nav-link" href="https://www.facebook.com/fotbaldambovitean/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
