@extends('templates.master-evento')

@section('conteudo-view')
            <section class="section-principal py-3">
                <div class="container">
                    @if (Session::has('mensagem-sucesso'))
                        <div class="card-panel green">
                            <span>{{ Session::get('mensagem-sucesso') }}</span>
                        </div>
                    @endif
                    @if (Session::has('mensagem-falha'))
                        <div class="card-panel red">
                            <span>{{ Session::get('mensagem-falha') }}</span>
                        </div>
                    @endif      
                    <div class="eventos-lista py-3">
                        <div class='heading-title scroll-effect'>
                            <h2 style="margin-left: 0;">{{$evento->name}}</h2> 
                        </div>
                        <div class='row my-5'>
                            <div class='col-md-6'>
                                <a class="toggle-menu scroll-effect" data-toggle="collapse"  role="button" href="#einfo" aria-expanded="false" aria-controls="menu-mobile" style="color: #343a40; border: 2px solid #343a40; border-radius: 25px; padding: 8px 23px; text-decoration: none;">
                                    <i class='fas fa-info-circle'></i>informações do Eventos
                                </a>
                                <div id="einfo" class='collapse'>
                                    <div class='row'>
                                        <div class='col-md-12'>
                                            <div class='row my-5 border-bottom mb-2 pb-2'><div class='col-md-6 border-right show-description' style="text-align: left;">
                                                <i class='fa fa-child'></i> Classificação:  {{$evento->age}}<br />
                                                <i class='fa fa-calendar'></i> Dia:  {{$evento->date}}
                                                <br />
                                                <i class='fa fa-map'></i> Local:  {{$evento->place}}
                                            </div>
                                            <div class='col-md-6 show-description' style="text-align: left;">
                                                <i class='fa fa-clock'></i> Início:  {{$evento->start}}
                                                <br />
                                                <i class='fa fa-clock'></i> Abertura do Portão:  {{$evento->gate_opening}} 
                                                <br />
                                                <i class='fa fa-clock'></i> Horário:  {{$evento->start_time}} - {{$evento->closing_time}}
                                                <br />
                                            </div>
                                        </div>
                                        <div class='my-3 border-bottom mb-3 pb-3' style="text-align: left;">
                                            <i class='fa fa-map'></i> Endereço:  {{$evento->address}}  
                                        </div>
                                        <iframe width="550" class="iframe-mob" height="315" src="{{ url("{$evento->url_video}") }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <div class='my-3 border-bottom mb-3 pb-3' style="text-align: left;">
                                            <i class='fas fa-info-circle'></i> Descrição:  {{$evento->description}}  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='my-4'></div>
                            @if ($evento->image)
                                <img src="{{ url("storage/{$evento->image}") }}" alt="{{$evento->name}}" class="show-image">
                            @endif
                        </div>
                        <div class="col-md-6" style="margin-top: 4%;">
                            
                            <a class="toggle-menu scroll-effect" data-toggle="collapse"  role="button" href="#setor_1" aria-expanded="false">
                                <div class="alert alert-info bottom">
                                    <small class="btn btn-warning btn-lote">Lote {{ $evento->lote }} </small>
                                    <i class="fa fa-ticket fa-lote"></i> {{ $evento->area }} 
                                </div> 
                            </a>

                            <div id="setor_1" class='collapse'>
                                <div class="gapline"></div>

                                {!! Form::open(['route' => 'user.inteira', 'method' => 'post']) !!}
                                    {{ csrf_field() }}

                                    {!!Form::hidden('id', $evento->id) !!}

                                    <div class="row my-3 pb-3 border-bottom tipo">
                                        <div class="col-md-4">
                                            <span class="largeprice">{{ $evento->tipo_a }}</span>
                                        </div>
                                        <div class="col-md-4">
                                            <small>R$</small>
                                            <span class="largeprice">{{ number_format($evento->valor_a , 2, ',', '.') }}</span>
                                        </div>
                                        <div class="col-md-4">{!! Form::submit('ADICIONAR', ['class' => 'btncart btn btn-rounded mt-1']) !!}</div>
                                    </div>
                                    
                                {!! Form::close() !!}

                                {!! Form::open(['route' => 'user.meia', 'method' => 'post']) !!}
                                    {{ csrf_field() }}

                                    {!!Form::hidden('id', $evento->id) !!}


                                        @if($evento->valor_b > 1)

                                        <div class="row my-3 pb-3 border-bottom tipo">
                                            <div class="col-md-4">
                                                <span class="largeprice">{{ $evento->tipo_b }}</span>
                                            </div>
                                            <div class="col-md-4">
                                                <small>R$</small>
                                                <span class="largeprice">{{ number_format($evento->valor_b , 2, ',', '.') }}</span>
                                            </div>
                                            <div class="col-md-4">{!! Form::submit('ADICIONAR', ['class' => 'btncart btn btn-rounded mt-1']) !!}</div>
                                        </div>

                                        @else
                                            <h1></h1>
                                        @endif

                                {!! Form::close() !!}
                            </div>

                            <a class="toggle-menu scroll-effect" data-toggle="collapse"  role="button" href="#setor_2" aria-expanded="false">
                                <div class="alert alert-info bottom">
                                    <small class="btn btn-warning btn-lote">Lote {{ $evento->lote_v }} </small>
                                    <i class="fa fa-ticket fa-lote"></i> {{ $evento->area_v }} 
                                </div> 
                            </a>

                            <div id="setor_2" class='collapse'>
                                <div class="gapline"></div>

                                {!! Form::open(['route' => 'user.vip', 'method' => 'post']) !!}
                                    {{ csrf_field() }}

                                    {!!Form::hidden('id', $evento->id) !!}

                                    <div class="row my-3 pb-3 border-bottom tipo">
                                        <div class="col-md-4">
                                            <span class="largeprice">{{ $evento->tipo_v }}</span>
                                        </div>
                                        <div class="col-md-4">
                                            <small>R$</small>
                                            <span class="largeprice">{{ number_format($evento->valor_v , 2, ',', '.') }}</span>
                                        </div>
                                        <div class="col-md-4">{!! Form::submit('ADICIONAR', ['class' => 'btncart btn btn-rounded mt-1']) !!}</div>
                                    </div>
                                    
                                {!! Form::close() !!}

                                {!! Form::open(['route' => 'user.premium', 'method' => 'post']) !!}
                                    {{ csrf_field() }}

                                    {!!Form::hidden('id', $evento->id) !!}

                                    @if($evento->valor_p > 1)

                                    <div class="row my-3 pb-3 border-bottom tipo">
                                        <div class="col-md-4">
                                            <span class="largeprice">{{ $evento->tipo_p }}</span>
                                        </div>
                                        <div class="col-md-4">
                                            <small>R$</small>
                                            <span class="largeprice">{{ number_format($evento->valor_p , 2, ',', '.') }}</span>
                                        </div>
                                        <div class="col-md-4">{!! Form::submit('ADICIONAR', ['class' => 'btncart btn btn-rounded mt-1']) !!}</div>
                                    </div>

                                    @else
                                        <h1></h1>
                                    @endif
                                    
                                {!! Form::close() !!}
                            </div>    

                            <a href="{{ route('user.carrinho')}}">
                                <div class="alert alert-info">  
                                    <i class="fa fa-shopping-cart"></i> Carrinho de compras  
                                </div>
                            </a>
                            <div class="gapline"></div>
                            <div class="flex">
                                <div class="flex-item bottombor sbg-alt">
                                    @forelse($pedido as $pedidos)

                                    @php
                                        $total_pedido = 0;
                                    @endphp

                                        @foreach ($pedido_produto as $pedido_produto) 
                                            @php
                                                $total_produto = 
                                                    $pedido_produto->taxa + $pedido_produto->valor;
                                                $total_pedido += $total_produto 
                                            @endphp
                                        @endforeach  

                                        <div class="gbor">Total<br> R$ {{ number_format($total_pedido, 2, ',', '.') }}
                                    @empty
                                        <h5></h5>    
                                    @endforelse  
                                        
                                        <span class="largeprice"></span><i class="fa fa-angle-double-right fa-2x" style="margin:0px 0px 0px 50px;color:#585858;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection

<script type="text/javascript">
    function einfo(){
    document.getElementById('einfo').classList.toggle('einfo-show');
    document.querySelector('.angle').classList.toggle('arrow-move');
    }
</script>