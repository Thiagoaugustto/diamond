@extends('templates.master-admin')

@section('conteudo-view')
  <section class="section-principal py-3">
    <div class="container">
      <div class="eventos-lista py-3"></div>
    </div>
    <div class="container">
      <h5 class="my-5 pb-2 border-bottom"><i class="fas fa-database"></i> BANCO DE DADOS (DB) DO SISTEMA </h5>
      @forelse ($compras as $pedido)

        @foreach ($pedido->pedido_produtos_itens as $pedido_produto)        
            <div class="row border-bottom p-3 m-3">
              <div class="col-md-1">
                <img class="card-img-top img-db" src="{{ url("storage/{$pedido_produto->evento->image}") }}">
              </div>
              <div class="col-md-6">{{ $pedido_produto->evento->name }}<br>{{$pedido_produto->area}}<br>
                <span class="mini-texto">Qtd. 1 | {{$pedido_produto->tipo}} | R$ {{ number_format($pedido_produto->valor, 2, ',', '.') }} | Taxa: R$ {{ number_format($pedido_produto->taxa, 2, ',', '.') }}<br></span>
              </div>
              <div class="col-md-4">
                <small class="badge badge-success">Pagto.Confirmado</small><br>PDV: Site<br><small>{{ $pedido_produto->created_at->format('d/m/Y H:i:s') }}</small>
              </div>
            </div> 
        @endforeach
      @empty
        <span>Não há dados de compras para serem exibidos.</span>
      @endforelse 
    </div>
  </section>
</div>
@endsection