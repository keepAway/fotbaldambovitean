<div class="wrapper">
    <nav id="sidebar">       
        <div id="dismiss">
            <i class="fas fa-arrow-alt-circle-left fa-2x"></i>
        </div>
        <div class="sidebar-header">
            <h3 style="margin-bottom: 5px; font-size: 20px; font-weight: bold;">
                Fotbal Dambovitean
                <span style="font-style: italic;">.ro</span>
            </h3>
        </div>

        <ul class="list-unstyled components">
        	<li>
                <a href="{{ route('clasament', ['liga' => 1]) }}">Liga 1</a>
            </li>
            <li>
                <a href="{{ route('clasament', ['liga' => 2]) }}">Liga 2</a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Liga 3</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="{{ route('clasament', ['liga' => 3, 'seria' => 1]) }}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Seria 1
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clasament', ['liga' => 3, 'seria' => 2]) }}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Seria 2
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clasament', ['liga' => 3, 'seria' => 3]) }}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Seria 3
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clasament', ['liga' => 3, 'seria' => 4]) }}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Seria 4
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clasament', ['liga' => 3, 'seria' => 5]) }}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Seria 5
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('clasament', ['liga' => 4 ]) }}">Liga 4</a>
            </li>
            <li>
                <a href="#homeSubmenuLiga5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Liga 5</a>
                <ul class="collapse list-unstyled" id="homeSubmenuLiga5">
                    <li>
                        <a href="{{ route('clasament', ['liga' => 5, 'seria' => 'Nord']) }}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Liga 5 Nord
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clasament', ['liga' => 5, 'seria' => 'Sud']) }}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Liga 5 Sud
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clasament', ['liga' => 5, 'seria' => 'Vest']) }}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Liga 5 Vest
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#homeSubmenuLiga6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Liga 6</a>
                <ul class="collapse list-unstyled" id="homeSubmenuLiga6">
                    <li>
                        <a href="{{ route('clasament', ['liga' => 6, 'seria' => 'Nord']) }}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Liga 6 Nord
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clasament', ['liga' => 6, 'seria' => 'Sud']) }}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Liga 6 Sud
                        </a>
                    </li>
                </ul>
            </li>
            <hr>
            @if(Auth::check())
            <li>
                <a href="#homeSubmenuAdmin" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Admin </a>
                <ul class="collapse list-unstyled" id="homeSubmenuAdmin">
                    <li>
                        <a href="{{ route('scoruri-primite', ['liga' => 4])}}">
                            <i class="fas fa-angle-right mr-1"></i>
                            Scoruri primite
                        </a>
                    </li>
                    <li>
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