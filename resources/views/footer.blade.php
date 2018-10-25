<footer class="footer">
    <div class="container">
        <div class="row mb-3">
            <div class="col-sm-3 text-center">
                <div class="footer-logo">
                    <img src="{{URL::asset('img/logo-galben.png')}}" alt="Logo Fotbal Dambovitean">
                </div>
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
                    <li class="nav-item social-facebook">
                        <a class="nav-link" href="https://www.facebook.com/fotbaldambovitean/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="copyright">© {{date('Y')}} Fotbal Dâmboviţean - Toate drepturile rezervate</p>
            </div>
        </div>
    </div>
</footer>
