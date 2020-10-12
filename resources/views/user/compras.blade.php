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
                        <h2><i class="fa fa-shopping-cart"></i> Minhas <span>compras</span></h2>
                    </div>
                    <h5 class="my-5 pb-2 border-bottom"> COMPRAS CONCLUÍDAS </h5>        
                    <div class="card-columns">
                        @forelse ($compras as $pedido)
                            @foreach ($pedido->pedido_produtos_itens as $pedido_produto)
                            
                            <form method="POST" action="{{ route('user.cancelar') }}">  
                                {{ csrf_field() }}
                                <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">

                                <div class="card">
                                    <a href="#">
                                        <img class="card-img-top" src="{{ url("storage/{$pedido_produto->evento->image}") }}">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $pedido_produto->evento->name }}</h5>
                                        Valor: 
                                        <span>R$ {{ number_format($pedido_produto->valor, 2, ',', '.') }}</span></br>
                                        Taxa: 
                                        <span>R$ {{ number_format($pedido_produto->taxa, 2, ',', '.') }}</span></br>
                                        Data: 
                                        <span>{{ $pedido_produto->created_at->format('d/m/Y') }}</span></br>
                                        Status:
                                        <span>{{ $pedido_produto->status }}</span></br></br>
                                        @if ($pedido_produto->status == 'PA')
                                            <p class="center">
                                                <input type="checkbox" id="item-{{ $pedido_produto->id }}" name="id[]" value="{{ $pedido_produto->id }}" />
                                                <label for="item-{{ $pedido_produto->id }}">Selecionar</label>
                                            </p>
                                        @else
                                            <span class="info-cancel">CANCELADO</span>
                                        @endif    
                                    </div>
                                    <button type="submit" class="btn btn-primary">Cancelar</button>
                                </div>
                                
                            </form>
                            @endforeach
                        @empty
                            <span>
                                @if ($cancelados->count() > 0)
                                    Neste momento não há compras validas.
                                @else
                                    Você ainda não realizou compras em nossa loja.
                                @endif        
                            </span>
                        @endforelse
                    </div>
                    <h5 class="my-5 pb-2 border-bottom"> COMPRAS CANCELADAS </h5>
                    <div class="card-columns">
                        @forelse ($cancelados as $pedido)
                            @foreach ($pedido->pedido_produtos_itens as $pedido_produto)
                            <div class="card">
                                <a href="#">
                                    <img class="card-img-top" src="{{ url("storage/{$pedido_produto->evento->image}") }}">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $pedido_produto->evento->name }}</h5>
                                    Valor: R$
                                    <span>{{ number_format($pedido_produto->valor, 2, ',', '.') }}</span></br>
                                    Taxa: 
                                    <span>R$ {{ number_format($pedido_produto->taxa, 2, ',', '.') }}</span></br>
                                    Data: 
                                    <span>{{ $pedido_produto->created_at->format('d/m/Y') }}</span></br>
                                    Cancelado: 
                                    <span>{{ $pedido_produto->updated_at->format('d/m/Y') }}</span></br>
                                    Status:
                                    <span>{{ $pedido_produto->status }}</span></br>
                                </div>
                            </div>
                            @endforeach
                        @empty
                            <span>Não há compras canceladas.</span>
                        @endforelse    
                    </div>
                </div>
            </section>
@endsection