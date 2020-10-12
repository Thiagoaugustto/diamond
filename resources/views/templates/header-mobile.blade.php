            <header class="header-mobile">
                <div class="container">
                    <div class="row">
                        @foreach ($config as $configs)
                            <div class="col-7">
                                @if ($configs->logo)
                                <img src="{{ url("storage/{$configs->logo}") }}" class="logomarca">
                                @endif
                            </div>     
                        @endforeach
                        <div class="col-5 pl-0" style="text-align: right;">
                            <a href="{{ route('user.home') }}"><i class="fas fa-home"></i></a>

                            <a class="toggle-menu scroll-effect" data-toggle="collapse"  role="button" href="#menu-desk" aria-expanded="false" aria-controls="menu-mobile"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </header>