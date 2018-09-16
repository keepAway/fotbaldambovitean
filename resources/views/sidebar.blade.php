    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">       
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div class="sidebar-header">
                <h3 style="height: 40px; margin-top: 20px; margin-bottom: 5px; font-size: 20px; font-weight: bold;">Fotbal Dambovitean</h3>
            </div>

            <ul class="list-unstyled components">
            	<li>
                    <a href="{{ route('clasament', ['liga' => 1]) }}">Liga 1</a>
                </li>
                <li class="active">
                    <a href="{{ route('clasament', ['liga' => 2]) }}">Liga 2</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Liga 3</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{ route('clasament', ['liga' => 3, 'seria' => 1]) }}">Seria 1</a>
                        </li>
                        <li>
                            <a href="{{ route('clasament', ['liga' => 3, 'seria' => 2]) }}">Seria 2</a>
                        </li>
                        <li>
                            <a href="{{ route('clasament', ['liga' => 3, 'seria' => 3]) }}">Seria 3</a>
                        </li>
                        <li>
                            <a href="{{ route('clasament', ['liga' => 3, 'seria' => 4]) }}">Seria 4</a>
                        </li>
                        <li>
                            <a href="{{ route('clasament', ['liga' => 3, 'seria' => 5]) }}">Seria 5</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('clasament', ['liga' => 4]) }}">Liga 4</a>
                </li>
                <li>
                    <a href="{{ route('clasament', ['liga' => 5, 'seria' => 'Nord']) }}">Liga 5 Nord</a>
                </li>
                <li>
                    <a href="{{ route('clasament', ['liga' => 5, 'seria' => 'Sud']) }}">Liga 5 Sud</a>
                </li>
                <li>
                    <a href="{{ route('clasament', ['liga' => 5, 'seria' => 'Vest']) }}">Liga 5 Vest</a>
                </li>
                <li>
                    <a href="{{ route('clasament', ['liga' => 6, 'seria' => 'Nord']) }}">Liga 6 Nord</a>
                </li>
                <li>
                    <a href="{{ route('clasament', ['liga' => 6, 'seria' => 'Sud']) }}">Liga 6 Sud</a>
                </li>
            </ul>
        </nav>
        @if($current_route == 'clasament')
            @include('clasament')
        @else
            @include('stiri')
        @endif
    </div>