@extends('templates.master-admin')

@section('conteudo-view')
  <section class="section-principal py-3">
  <div class="container">
   <div class="eventos-lista py-3"></div>
    <div class="container">
      <h5 class="my-5 pb-2 border-bottom"><i class="fas fa-shopping-cart"></i> CARRINHO DE COMPRAS GERAL </h5>
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
                    </div>
                </div>
                
            </form>
            @endforeach
        @empty
            <span>
                @if ($cancelados->count() > 0)
                    Neste momento não há compras validas.
                @else
                    Você ainda não possui compras em sua loja.
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
                        Taxa: R$
                        <span>{{ number_format($pedido_produto->taxa, 2, ',', '.') }}</span></br>
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
  </div></div>    
</section>
@endsection