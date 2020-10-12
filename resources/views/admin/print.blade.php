@extends('templates.master-admin')

@section('conteudo-view')
<section class="section-principal py-3">
  <div class="container">
   <div class="eventos-lista py-3"></div>
  </div>
  <div class="container print">
    <h5 class="my-5 pb-2 border-bottom"><i class="fas fa-print"></i>  IMPRESSÃO DE INGRESSOS IMPRESSORAS NÃO FISCAIS </h5>
    <div class="input-group my-2">
      <div class="input-group-prepend">
        <div class="input-group-text"> Seleciona o Evento</div>
      </div>
      <select id="id_evento_diversos" class="form-control" onchange="print_ev_diversos()">
        <option value="#">- Selecione -</option>
        <option value="4">3 Delícias - A Festa</option>
        <option value="3">Color Sound Fest</option>
        <option value="2">AR LIVRE - Capital Inicial</option>
      </select>
    </div>
    <div id="mostrar_setores_diversos">
      <form method="post" action="impressora/make_print_ev_diversos.php">
        <input type="hidden" name="id_evento" value="4">
        <div class="input-group my-2">
          <div class="input-group-prepend">
            <div class="input-group-text"> Setor do Evento </div>
          </div>
          <select name="id_setor" class="form-control"></select>
        </div>
        <h5 class="my-5 pb-2 border-bottom"> TIPO DE INGRESSO </h5>
        <div class="row border-bottom my-2">
          <div class="col-md-1">
            <input type="radio" class="form-control" name="r" checked="" value="i">
          </div>
          <div class="col-md-11">Inteira R$ </div>
        </div>
        <div class="row border-bottom my-2">
          <div class="col-md-1">
            <input type="radio" class="form-control" name="r" value="m">
          </div>
          <div class="col-md-11">Meia Entrada R$ </div>
        </div>
        <div class="row border-bottom my-2">
          <div class="col-md-1">
            <input type="radio" class="form-control" name="r" value="masc">
          </div>
          <div class="col-md-11">Masculino R$ </div>
        </div>
        <div class="row my-2">
          <div class="col-md-1">
            <input type="radio" class="form-control" name="r" value="femini">
          </div>
          <div class="col-md-11">Feminino R$ </div>
        </div>
        <div class="input-group my-2">
          <div class="input-group-prepend">
            <div class="input-group-text bigger"> Quantidade de Ingressos </div>
          </div>
          <input type="number" class="form-control" name="qtd" style="width:30%;" min="1" value="1" placeholder="*Nº" required="">
        </div>
        <button class="btn btn-primary my-3"> Criar lote </button>
      </form>
    </div>
  </div>
</section></div>
@endsection