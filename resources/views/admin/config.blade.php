@extends('templates.master-admin')

@section('conteudo-view')
<section class="section-principal py-3">
  <div class="container">
    <h5 class="my-5 pb-2 border-bottom"><i class="fas fa-cog"></i> CONFIGURAÇÕES  </h5>

    @foreach ($config as $configs)  
      {!! Form::open(['route' => ['config.update', $configs->id], 'method' => 'POST', 'file' => true, 'enctype' => 'multipart/form-data']) !!}
    @endforeach  
      @method('PUT')
        <div class="alert alert-info" style="margin-top: 15px;"> Logo </div>
        <div class="row border-bottom my-3">
          <div class="col-md-6 my-5">
            {!!Form::file('logo',['class' => 'form-control']) !!}
          </div>
          <div class="col-md-6 my-3">
            @foreach ($config as $configs)
              @if ($configs->logo)
                <img src="{{ url("storage/{$configs->logo}") }}" class="imgs-config">
              @endif
            @endforeach
          </div>
        </div>
        <div class="alert alert-info"> Icon </div>
        <div class="row border-bottom my-3">
          <div class="col-md-6 my-5">
            {!!Form::file('icon',['class' => 'form-control']) !!}
          </div>
          <div class="col-md-6 my-5">
            @foreach ($config as $configs)
              @if ($configs->icon)
                <img src="{{ url("storage/{$configs->icon}") }}" class="imgs-config icons">
              @endif
            @endforeach
          </div>
        </div>
        <div class="alert alert-info"> Banners </div>
        <div class="row border-bottom my-3">
          <div class="col-md-6 my-5">
            {!!Form::file('banner1',['class' => 'form-control']) !!}
          </div>
          <div class="col-md-6 my-3">
            @foreach ($config as $configs)
              @if ($configs->banner1)
                <img src="{{ url("storage/{$configs->banner1}") }}" class="imgs-config banner">
              @endif
            @endforeach
          </div>
        </div> 
        <div class="row border-bottom my-3">
          <div class="col-md-6 my-5">
            {!!Form::file('banner2',['class' => 'form-control']) !!}
          </div>
          <div class="col-md-6 my-3">
            @foreach ($config as $configs)
              @if ($configs->banner2)
                <img src="{{ url("storage/{$configs->banner2}") }}" class="imgs-config banner">
              @endif
            @endforeach
          </div>
        </div>
        <div class="row border-bottom my-3">
          <div class="col-md-6 my-5">
            {!!Form::file('banner3',['class' => 'form-control']) !!}
          </div>
          <div class="col-md-6 my-3">
            @foreach ($config as $configs)
              @if ($configs->banner3)
                <img src="{{ url("storage/{$configs->banner3}") }}" class="imgs-config banner">
              @endif
            @endforeach
          </div>
        </div>    
        <div class="alert alert-info"> Banner - Newsletter </div>
        <div class="row border-bottom my-3">
          <div class="col-md-6 my-5">
            {!!Form::file('newsletter',['class' => 'form-control']) !!}
          </div>
          <div class="col-md-6 my-3">
            @foreach ($config as $configs)
              @if ($configs->newsletter)
                <img src="{{ url("storage/{$configs->newsletter}") }}" class="imgs-config banner">
              @endif
            @endforeach
          </div>
        </div>
        <div class="alert alert-info"> Formas de Pagamento </div>
        <div class="row border-bottom my-3">
          <div class="col-md-6 my-5">
            {!!Form::file('payment',['class' => 'form-control']) !!}
          </div>
          <div class="col-md-6 my-3">
            @foreach ($config as $configs)
              @if ($configs->payment)
                <img src="{{ url("storage/{$configs->payment}") }}" class="imgs-config">
              @endif
            @endforeach
          </div>
        </div>
        <div class="alert alert-info"> Outras </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-whatsapp"></i></div>
          </div>
          {!!Form::text('whatsapp', $configs->whatsapp, ['class' => 'form-control', 'placeholder' => 'https://whats.link/']) !!}
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-facebook"></i></div>
          </div>
          {!!Form::text('facelink', $configs->facelink, ['class' => 'form-control', 'placeholder' => 'https://www.facebook.com/']) !!}
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-instagram"></i></div>
          </div>
          {!!Form::text('instalink', $configs->instalink, ['class' => 'form-control', 'placeholder' => 'https://www.instagram.com/']) !!}
        </div>  
      {!! Form::submit('Atualizar', ['class' => 'btn btn-primary my-3', 'style' => 'width: 100%;']) !!}
      {!! Form::close() !!}
  </div>
</section></div>
@endsection