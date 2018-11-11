@php
    $current_url = Request::fullUrl();
@endphp
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container" style="padding-left: 15px; padding-right: 15px;">
        <div class="close dismiss-open" id="sidebarCollapse" style="{{\Request::route()->getName() == 'stire-detaliu' ? 'padding-top: 6px !important;' : ''}}">
            <i class="fas fa-arrow-right" style="font-size: 25px; font-weight: bold !important; vertical-align: text-top; color: #fff; cursor: pointer;"></i>
        </div>

        <span class="d-inline-block d-lg-none ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 15px;">
            <i class="fas fa-bars fa-lg" id="sidebarCollapse" style="font-size: 25px; font-weight: bold !important; vertical-align: sub; color: #f4d90c; cursor: pointer;"></i>
        </span>

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
                <li class="nav-item d-none">
                    <a class="nav-link{{$current_url == route('contact') ? " active" : ""}}" href="{{ route('contact') }}">Contact</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" id="login-modal" style="cursor: pointer;">{{ __('Login') }}</a>
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
                <li class="nav-item social-facebook" style="margin-left: 8px !important; {{\Request::route()->getName() == 'stire-detaliu' ? 'padding-top: 6px !important;' : ''}}">
                    <a class="nav-link" href="https://www.facebook.com/fotbalarena/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@include('auth/login')
@include('auth/register')

<script type="text/javascript">
    $('#login-modal').click(function() {
        $('.login-modal').modal('show');
    });

    $('#register-modal').click(function() {
        $('.login-modal').modal('hide');
        $('.register-modal').modal('show');
    });

    $('.loginBtnCustom').click(function(){
        let email = $('#email').val().trim();
        let password = $('#password').val().trim();
        let fields = ['email', 'password'];

        $('#credentials').text('').addClass('d-none');

        fields.forEach(function(item){
            $('#'+item+'-response').addClass('d-none');
            $('#'+item).removeClass('is-invalid');
        });
        
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ route('json-login') }}",
            type: 'POST',
            data: {
                email: email,
                password: password
            },
            success: function( response ) {

                if(response.success == false && response.message == '') {
                    response.errors.forEach(function(item){
                        $('#'+item).addClass('is-invalid');
                        $('#'+item+'-response').removeClass('d-none');
                    });
                    return;
                }

                if(response.success == false && response.message != '') {
                    $('#credentials').text(response.message).removeClass('d-none');
                    return;
                }

                if(response.success == true) {
                    location.reload();
                }
            }
        }); 
    });
</script>
