@extends('templates.master-admin')

@section('conteudo-view')
<section class="section-principal py-3">
  <div class="container">
   <div class="eventos-lista py-3">
      <div class="heading-title">
        <h5 class="my-5 pb-2 border-bottom"><i class="fas fa-lock"></i>  ADMINISTRAÇÃO DO SISTEMA  </h5>
      </div>
    </div>
    <div class="row my-5">

  <div class="col-md-2 border-right text-center">
    <div class="perc1 mx-4" data-percent="48">
      <div>
        <div class="ab">
          <div class="cir">
            <span class="perc">48%</span>
          </div>
        </div>
      </div>
    </div>
    Ingressos
  </div>

  <div class="col-md-2 border-right text-center">
    <div class="perc2 mx-4" data-percent="28">
      <div>
        <div class="ab">
          <div class="cir">
            <span class="perc">28%</span>
          </div>
        </div>
      </div>
    </div>
    Lotes
  </div>
  <div class="col-md-2 border-right text-center">
    <div class="perc3 mx-4" data-percent="68">
      <div>
        <div class="ab"  >
          <div class="cir"  >
            <span class="perc"  >68%</span>
          </div>
        </div>
      </div>
    </div>
    Vendidos
  </div>
  <div class="col-md-2 border-right text-center">
    <div class="perc4 mx-4" data-percent="28">
      <div>
        <div class="ab"  >
          <div class="cir"  >
            <span class="perc"  >28%</span>
          </div>
        </div>
      </div>
    </div>
    Cancelados
  </div>
  <div class="col-md-2 border-right text-center">
    <div class="perc5 mx-4" data-percent="58">
      <div>
        <div class="ab"  >
          <div class="cir"  >
            <span class="perc"  >58%</span>
          </div>
        </div>
      </div>
    </div>
    Impressões
  </div>
  <div class="col-md-2 text-center">
    <div class="perc6 mx-4" data-percent="98">
      <div>
        <div class="ab"  >
          <div class="cir"  >
            <span class="perc"  >98%</span>
          </div>
        </div>
      </div>
    </div>
    Total
  </div>

</div>

<div class="card-columns mt-5" style="margin-top: 5rem !important;">
  
  <div class="card card-admin">
    <div class="card-header text-center">POS/PDV Móvel</div>
    <img src="../images/c680.jpg" class="card-img-top">

    <div class="card-body">
      Imprima Ingressos em sua POS/PDV Móvel em qualquer PDV 
    </div>
  </div>

  <div class="card card-admin">
    <div class="card-header text-center">Impressora Não Fiscal</div>
    <img src="../images/epson.png" class="card-img-top">

    <div class="card-body">
      Imprima Ingressos em sua impressora não fiscal preferida
    </div>
  </div>

  <div class="card card-admin">
    <div class="card-header text-center">Mobile Voucher QR</div>
    <img src="../images/mobilevoucherqr.png" class="card-img-top">

    <div class="card-body">
      Facilidade para seus clientes na entrada do evento com Mobile Voucher QR
    </div>
  </div>

  <div class="card card-admin">
    <div class="card-header text-center">Scanner Móvel</div>
    <img src="../images/mobilescanner.png" class="card-img-top">

    <div class="card-body">
      Facilidade para seus clientes na entrada do evento, você usa o Scanner de mão e verifica o Ingresso
    </div>
  </div>

</div>
    
  </div></div>
</section>
@endsection