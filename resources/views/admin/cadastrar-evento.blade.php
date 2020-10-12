@extends('templates.master-admin')

@section('conteudo-view')

  @if ($errors->any())
  <div class="errors">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>  
  @endif

  <section class="section-principal py-3">
    <div class="container new-event">
      <h5 class="my-5 pb-2 border-bottom"> CADASTRAR EVENTO  </h5>
      {!! Form::open(['route' => 'cadastrar-evento.store', 'method' => 'post','file' => true, 'enctype' => 'multipart/form-data']) !!}
        <div class="row border-bottom my-3">
          <div class="col-md-6">
            <span>Imagem do Evento</span><br>
              {!!Form::file('image',['class' => 'form-control']) !!}
          </div>
          <div class="col-md-6">          
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome do Evento']) !!}
          </div>
          <div class="col-md-4">
            {!!Form::text('age', null, ['class' => 'form-control age', 'placeholder' => 'Idade']) !!}
          </div>
          <div class="col-md-4">
            {!!Form::text('place', null, ['class' => 'form-control', 'placeholder' => 'Local']) !!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            {!!Form::text('name_pos', null, ['class' => 'form-control', 'placeholder' => 'Nome para POS']) !!}
          </div>
          <div class="col-md-4">
            {!!Form::text('date', null, ['class' => 'form-control data', 'placeholder' => 'Data']) !!}
          </div>
          <div class="col-md-4">
            {!!Form::text('gate_opening', null, ['class' => 'form-control hour', 'placeholder' => 'Abertura do Portão']) !!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            {!!Form::text('start', null, ['class' => 'form-control hour', 'placeholder' => 'Início']) !!}
          </div>
          <div class="col-md-4">
            {!!Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Link, Mapa Google do Local']) !!}
          </div>
          <div class="col-md-4">
            {!!Form::text('scaner_password', null, ['class' => 'form-control', 'placeholder' => 'Senha do Scaner']) !!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            {!!Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Endereço']) !!}
          </div>
          <div class="col-md-2">
            {!!Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Cidade']) !!}
          </div>
          <div class="col-md-2">
            {!!Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'Estado']) !!}
          </div>
          <div class="col-md-4">
            <div class="input-group my-3">
              <div class="input-group-prepend">
                <div class="input-group-text"> Horário</div>
              </div>
              {!!Form::text('start_time', null, ['class' => 'form-control hour', 'placeholder' => 'Das']) !!}
              {!!Form::text('closing_time', null, ['class' => 'form-control hour', 'placeholder' => 'Até']) !!}   
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="bmenus">
              <a href="javascript:void();" onclick="return negrito()"><i class="fa fa-bold"></i></a>
              <a href="javascript:void();" onclick="return italico()"><i class="fa fa-italic"></i></a>
              <a href="javascript:void();" onclick="return underline()"><i class="fa fa-underline"></i></a>
            </div>
            {!!Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descrição do evento']) !!}
          </div>
        </div>
        <div class="input-group mt-2">
          <div class="input-group-prepend">
            <div class="input-group-text">URL Vídeo Youtube </div>
          </div>
          {!!Form::text('url_video', null, ['class' => 'form-control urlvideo', 'placeholder' => 'Url do vídeo do evento']) !!}
        </div>
        <h5 class="my-5 pb-2 border-bottom">CADASTRAR SETOR</h5>
        <div class="row mb-3">
            <div class="col-md-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Área </div>
                </div>
                {!!Form::text('area', null, ['class' => 'form-control', 'placeholder' => 'Pista, praça, etc..']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Lote </div>
                </div>
                {!!Form::text('lote', null, ['class' => 'form-control', 'placeholder' => 'Número do lote']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="form-inline ct1"> 
                  <a href="javascript:void();" class="btn btn-primary mx-2 btnz" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="fas fa-minus"></i></a>
                  {!!Form::number('qtd', null, ['class' => 'form-control', 'style' => 'width:80px;', 'min' => '0', 'max' => '9999', 'placeholder' => 'Qtd.']) !!}
                  <a href="javascript:void();" class="btn btn-primary mx-2 btnz" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Tipo </div>
                </div>
                {!!Form::text('tipo_a', null, ['class' => 'form-control', 'placeholder' => 'Inteira, meia, promocional, etc..']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Valor </div>
                </div>
                {!!Form::text('valor_a', null, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Taxa </div>
                </div>
                {!!Form::text('taxa_a', null, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Tipo </div>
                </div>
                {!!Form::text('tipo_b', null, ['class' => 'form-control', 'placeholder' => 'Inteira, meia, promocional, etc..']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Valor </div>
                </div>
                {!!Form::text('valor_b', null, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Taxa </div>
                </div>
                {!!Form::text('taxa_b', null, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>  
          </div>
        <h5 class="my-5 pb-2 border-bottom">CADASTRAR SETOR VIP</h5>
        <div class="row mb-3">
            <div class="col-md-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Área </div>
                </div>
                {!!Form::text('area_v', null, ['class' => 'form-control', 'placeholder' => 'Premium, lounge, camarote, etc..']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Lote </div>
                </div>
                {!!Form::text('lote_v', null, ['class' => 'form-control', 'placeholder' => 'Número do lote']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="form-inline ct1"> 
                  <a href="javascript:void();" class="btn btn-primary mx-2 btnz" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="fas fa-minus"></i></a>
                  {!!Form::number('qtd_v', null, ['class' => 'form-control', 'style' => 'width:80px;', 'min' => '0', 'max' => '9999', 'placeholder' => 'Qtd.']) !!}
                  <a href="javascript:void();" class="btn btn-primary mx-2 btnz" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Tipo </div>
                </div>
                {!!Form::text('tipo_v', null, ['class' => 'form-control', 'placeholder' => 'Inteira, meia, promocional, etc..']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Valor </div>
                </div>
                {!!Form::text('valor_v', null, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Taxa </div>
                </div>
                {!!Form::text('taxa_v', null, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Tipo </div>
                </div>
                {!!Form::text('tipo_p', null, ['class' => 'form-control', 'placeholder' => 'Inteira, meia, promocional, etc..']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Valor </div>
                </div>
                {!!Form::text('valor_p', null, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Taxa </div>
                </div>
                {!!Form::text('taxa_p', null, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>  
          </div>
        <div class="resultvideo my-3"></div>
        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary my-3', 'style' => 'width: 30%;']) !!}
        {!! Form::close() !!}
        </div>
      </div>
    </div>
  </section>
@endsection