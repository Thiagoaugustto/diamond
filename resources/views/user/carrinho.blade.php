@extends('templates.master')

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
                        <div class="heading-title">
                            <h2><i class="fa fa-shopping-cart"></i> CARRINHO <span>de compras</span></h2>
                        </div>
                        @forelse($pedidos as $pedido)

                            @php
                                $total_pedido = 0;
                            @endphp

                            @foreach ($pedido_produto as $pedido_produto) 
                                <div class="flex under">
                                    <div class="flex-item imgcart">
                                        <img src="{{ url("storage/{$pedido_produto->evento->image}") }}">
                                    </div>
                                                                    
                                    <div class="flex-item">
                                        <span>{{$pedido_produto->area}}</span><br>
                                        <span class="mini-texto"> {{$pedido_produto->tipo}}
                                        
                                        R$ {{ number_format($pedido_produto->valor, 2, ',', '.') }}
                                        </span></br>
                                    </div>
                                    <div class="flex-item">
                                        @php
                                            $total_produto = 
                                                $pedido_produto->taxa + $pedido_produto->valor;
                                            $total_pedido += $total_produto 
                                        @endphp
                                        <span >Taxa</span><br><span class="mini-texto">R$ {{ number_format($pedido_produto->taxa, 2, ',', '.') }}</span>
                                    </div>
                                    <div class="flex-item">
                                        <span >Total</span><br><span class="largeprice">R$ {{ number_format($total_produto, 2, ',', '.') }}</span>
                                    </div>
                                    <div class="flex-item">

                                        <a href="#" class="btn btn-rounded btn-danger remove-car" onclick="carrinhoRemoverEvento( {{ $pedido->id }}, {{ $pedido_produto->evento_id }}, 1)">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                    </div>
                                </div>
                            @endforeach    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="flex">
                                    <div class="flex-item bottombor sbg-alt">

                                        @forelse($pedidos as $pedido)
                                            <div class="gbor">Total<br> R$ {{ number_format($total_pedido, 2, ',', '.') }}
                                        @empty
                                            <h5></h5>    
                                        @endforelse    
                                            <span class="largeprice"></span><i class="fa fa-angle-double-right fa-2x" style="margin:0px 0px 0px 50px;color:#585858;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 btn-car">
                                <a href="{{ route('user.home') }}" class="btn btn-rounded btn-primary mt-4" style="height: 38px"></i> Continuar comprando </a>
                                <form method="POST" action="{{ route('user.concluir') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
                                    <button type="submit" class="btn btn-rounded btn-primary mt-4">Finalizar compra</button>
                                </form>
                            </div>
                        </div>
                        @empty
                            <h5>Não há compras no seu carrinho.</h5>    
                        @endforelse
                    </div>
                </div>
            </section>

<form id="form-remover-evento" method="POST" action="{{ route('user.remover') }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="hidden" name="pedido_id">
    <input type="hidden" name="evento_id">
    <input type="hidden" name="item">
</form>

<form id="form-adicionar-evento" method="POST" action="{{ route('user.inteira') }}">
    {{ csrf_field() }}
    <input type="hidden" name="id">
</form>

<form id="form-adicionar-evento" method="POST" action="{{ route('user.meia') }}">
    {{ csrf_field() }}
    <input type="hidden" name="id">
</form>

<form id="form-adicionar-evento" method="POST" action="{{ route('user.vip') }}">
    {{ csrf_field() }}
    <input type="hidden" name="id">
</form>

<form id="form-adicionar-evento" method="POST" action="{{ route('user.premium') }}">
    {{ csrf_field() }}
    <input type="hidden" name="id">
</form>

@push('scripts')
    <script type="text/javascript" src="js/carrinho.js"></script>
@endpush

@endsection
