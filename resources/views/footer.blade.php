<footer class="footer">
    <div class="container">
        <div class="row mb-3">
            <div class="col-sm-3 text-center">
                <ul class="nav navbar-nav ml-auto pl-2 flex-row justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link pl-2 pr-2" href="mailto:contact@fotbal-arena.ro" style="text-transform: none;"><span class="fa fa-envelope-open fa-lg" aria-hidden="true" style="color: #f4d90c;"></span>&nbsp; &nbsp; contact@fotbal-arena.ro</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 text-center">
                <ul class="nav navbar-nav ml-auto pl-2 flex-row justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link pl-2 pr-2" href="{{route('termeni')}}">Termeni şi condiţii</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-2 pr-2" href="{{route('confidentialitate')}}">Confidenţialitate</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 text-center">
                <ul class="nav navbar-nav ml-auto pl-2 flex-row justify-content-center">
                    <li class="nav-item">
                        <div class="nav-link">Urmăreşte-ne</div>
                    </li>
                    <li class="nav-item social-facebook" style="{{\Request::route()->getName() == 'stire-detaliu' ? 'padding-top: 6px !important;' : ''}}">
                        <a class="nav-link" href="https://www.facebook.com/fotbalarena/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="copyright">© 2018 - {{date('Y')}} | Fotbal Arena - Toate drepturile rezervate</p>
            </div>
        </div>
    </div>
</footer>
