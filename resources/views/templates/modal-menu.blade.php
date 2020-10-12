        <!-- Modal Menu Mobile -->
            <section class="mobile-nav" id="menu-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <ul class="nav-personalizada">
                                <li>
                                    <a class="toggle-menu scroll-effect" data-toggle="collapse" role="button" href="#menu-mobile" aria-expanded="true" aria-controls="menu-mobile" style="float: right; text-decoration: none; margin: 5px;">x</a>
                                </li>
                            </ul>
                            <ul class="nav-personalizada mt-4">
                                <li>
                                    <a  href="home">Home</a>
                                </li>
                                <li>
                                    <a href="carrinho">Carrinho</a>
                                </li>
                                <li>
                                    <a href="compras">Minhas Compras</a>
                                </li>
                                <li>
                                    <a href="sobre">Sobre a empresa</a>
                                </li>
                                <li>
                                    <a href="contato">Entre em contato</a>
                                </li>
                            </ul>

                            <ul class="nav-personalizada my-4">
                                @if (Auth::guest())
                                <li>
                                    <a href='login'class='btn btn-rounded btn-primary scroll-effect'><i class='fas fa-sign-in-alt'></i> Entrar </a>
                                </li>
                                <li>
                                    <a href='contato' class='btn btn-sm btn-rounded btn-secondary mt-2 scroll-effect'>Ajuda</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{ route('logout') }}" class='btn btn-rounded btn-primary mt-2' onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"> Sair</a>    
                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li>
                                    <a href='contato' class='btn btn-sm btn-rounded btn-secondary mt-2 scroll-effect'>Ajuda</a>
                                </li>
                                @endif 
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Modal Menu -->
            <section class="mobile-nav" id="menu-desk" style="width: 25%;">
                <div class="container">
                    <div class="row">
                        <div style="width: 100%; padding: 20px;">
                            <ul class="nav-personalizada">
                                <li>
                                    <a class="toggle-menu scroll-effect" data-toggle="collapse" role="button" href="#menu-desk" aria-expanded="true" aria-controls="menu-mobile" style="float: right; text-decoration: none;">x</a>
                                </li>
                            </ul>
                            <ul class="nav-personalizada mt-4" style="margin-left: 10px;">
                                <li>
                                    <a  href="home">Home</a>
                                </li>
                                <li>
                                    <a href="carrinho">Carrinho</a>
                                </li>
                                <li>
                                    <a href="compras">Minhas Compras</a>
                                </li>
                                <li>
                                    <a href="sobre">Sobre a empresa</a>
                                </li>
                                <li>
                                    <a href="contato">Entre em contato</a>
                                </li>
                            </ul>
                            <ul class="nav-personalizada my-4">
                                @if (Auth::guest())
                                <li>
                                    <a href='login'class='btn btn-rounded btn-primary scroll-effect'><i class='fas fa-sign-in-alt'></i> Entrar </a>
                                </li>
                                <li>
                                    <a href='contato' class='btn btn-sm btn-rounded btn-secondary mt-2 scroll-effect'>Ajuda</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{ route('logout') }}" class='btn btn-rounded btn-primary mt-2' onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"> Sair</a>    
                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li>
                                    <a href='contato' class='btn btn-sm btn-rounded btn-secondary mt-2 scroll-effect'>Ajuda</a>
                                </li>
                                @endif 
                            </ul>
                        </div>
                    </div>
                </div>
            </section>            