            <footer class="footer-principal">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-12">
                            <h2>Formas de Pagamento</h2>
                            @foreach ($config as $configs)
                                @if ($configs->payment)
                                <img src="{{ url("storage/{$configs->payment}") }}" class="img-fluid">
                                @endif
                            @endforeach
                        </div>
                        <div class="col-md-3 col-sm-3 col-12">
                            <h2>Institucional</h2>
                            <ul>
                                <li><a href="{{ route('sobre') }}">Sobre nós</a></li>
                                <li><a href="{{ route('gestao') }}">Gestão de Eventos</a></li>
                                <!--<li><a href="servicos.php">Serviços</a></li>-->
                                <li><a href="{{ route('contato') }}">Entre em Contato</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-12">
                            <h2>Políticas</h2>
                            <ul>
                                <li><a href="{{ route('politicas') }}">Políticas de Vendas</a></li>
                                <li><a href="{{ route('politicas') }}">Políticas de Privacidade</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 col-12">
                               <br />
                               <ul class="lista-horizontal mt-3">    
                                <li>
                                    <a href="{{ $configs->facelink }}" class="rede-social-item"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $configs->instalink }}" class="rede-social-item"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $configs->whatsapp }}" class="rede-social-item"><i class="fa fa-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>