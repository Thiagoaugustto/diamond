            <header class="header-principal" style="padding-top: 0;">
                <div class="container">
                    <div class="row">
                        @foreach ($config as $configs)
                            <div class="col-7">
                                @if ($configs->logo)
                                <img src="{{ url("storage/{$configs->logo}") }}" class="logomarca">
                                @endif
                            </div>     
                        @endforeach
                        <div class="col-5 pl-0" style="text-align: right; padding: 25px 0;">
                            
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#buscaDeskModal" class="scroll-effect" data-sr-id="2" style="padding: 0 10px;"><i class="fa fa-search" style="font-size: 30px; color: #343a40;"></i></a>

                            <a href="{{ route('user.home') }}"><i class="fas fa-home" style="font-size: 30px; color: #343a40;"></i></a>

                            <a class="toggle-menu scroll-effect" data-toggle="collapse"  role="button" href="#menu-desk" aria-expanded="false" aria-controls="menu-mobile" style="padding: 0 10px;"><i class="fa fa-bars" style="font-size: 30px; color: #343a40;"></i></a>

                        </div>
                    </div>
                </div>
            </header>