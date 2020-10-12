<!DOCTYPE html>

<html>
<head>
  <title>DIAMOND</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <meta charset="utf-8" />
  <meta name="keywords" content="keywords" />
  <meta name="description" content="descrição" />
  <meta name="robots" content="index, follow">
  <meta name="classification" content="descrição" />
  <meta name="distribution" content="Global" />
  <meta name="rating" content="General" />
  <meta name="robots" content="index, follow" />
  <meta name="revisit-after" content="7 days" />
  <meta name="author" content="" />
  <meta name="reply-to" content="" />
  <meta name="category" content="keywords" />
  <meta name="url" content=https://diamondingressos.com.br />
  <meta name="coverage" content="Worldwide" />
  <meta name="abstract" content="keywords" />

  <link rel="shortcut icon" type="image/x-icon" media="all" href="../images/d6aab292c408f137109c640640df9458.png" />

  <!--Font Awesome-->
  <link rel="stylesheet" href="/../use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

  <!--Google icons-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- bootstrap -->
  <link rel="stylesheet" href="../stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Folhas de estilo -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Ubuntu:400,700" rel="stylesheet">
  <link rel="stylesheet" href="/../node_modules/owl.carousel/dist/assets/owl.carousel.min.css" media="all" type="text/css"  />
  <link rel="stylesheet" href="/../css/site.css" media="all" type="text/css"  />

  <!-- Tooltipster-master -->
  <link rel="stylesheet" type="text/css" href="/../js/tooltipster-master/css/tooltipster.bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="/../js/tooltipster-master/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-shadow.min.css" />

  <style type="text/css">

      button:hover > .material-icons, 
      a:hover > .material-icons, 
      a:hover > .fa, 
      a:hover > .fas, 
      a:hover > .fab,
      a:hover > .far,
      button:hover > .fa, 
      button:hover > .fas, 
      button:hover > .fab,
      button:hover > .far
      {
      -webkit-transform:rotateZ(360deg);
      transition: 0.5s;
      }

      .card:hover{ border:1px solid #585858; }

      .card-columns { column-count: 4; }
      
  </style>

  <style type="text/css">
    /*
    * utilizando unicode no blade;
    */
    input.icon{
        font-family: "FontAwesome";
    }
  </style>

  @yield('css-view')

  <script src="/../code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="/../cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="/../stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="/../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/tooltipster-master/js/tooltipster.bundle.min.js"></script>
  <script type="text/javascript" language="javascript" src="/../cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" charset="UTF-8" ></script>
  <script type="text/javascript" language="javascript" src="/../node_modules/bootstrap/dist/js/bootstrap.min.js" charset="UTF-8" ></script>
  <script type="text/javascript" language="javascript" src="/../node_modules/scrollreveal/dist/scrollreveal.min.js" charset="UTF-8" ></script>
  <script type="text/javascript" language="javascript" src="/../node_modules/owl.carousel/dist/owl.carousel.min.js" charset="UTF-8" ></script>
  <script type="text/javascript" language="javascript" src="/../js/js/custom.js" charset="UTF-8" ></script>
  <script src="/../js/jquery.kinetic.min.js" type="text/javascript"></script>
  <script src="/../js/jquery.mousewheel.min.js"></script>
  <script src="/../js/imagepanner.js"></script>
  <script src="/../js/mask.js"></script>
  <script src="/../js/jquery.mask.js"></script>

  <script type="text/javascript">
  function g(idc,idg){ 
      if(document.getElementById(''+idg).checked){
          //alert('IDC: '+idc+' IDG: '+idg);
          var g1 = "g1";
          $.post('ajax.html',{ g1:g1, idg:idg, idc:idc });
        }else{
          //alert('IDC: '+idc+'IDG: '+idg);
          var g2 = "g2";
          $.post('ajax.html',{ g2:g2, idg:idg, idc:idc });

      }  
  }   
  </script>
  @yield('js-view')
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
      <button class="navbar-toggler" data-toggle="collapse" data-target=".vNav">
        <i class="material-icons">reorder</i>
      </button>
      <div class="collapse navbar-collapse vNav">
        <ul class="navbar-nav" style="margin: 0 auto;">
          <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="material-icons">build</i> SISTEMA </a>
            <div class="dropdown-menu shadow">
              <a class="dropdown-item" href="{{ route('admin.clientes')}}"><i class="fas fa-user"></i>  Clientes</a>
              <a class="dropdown-item " href="{{ route('admin.carrinho')}}" onclick="carrinho()"><i class="fas fa-shopping-cart"></i> Compras</a>
              <a href="{{ route('admin.db')}}" class="dropdown-item "><i class="fas fa-database"></i> Banco de dados</a>
              <a href="{{ route('admin.print')}}" class="dropdown-item "><i class="fas fa-print"></i> Print </a>      
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <i class="material-icons">accessibility</i> EVENTOS </a>
              <div class="dropdown-menu shadow">
                <a href="{{ route('cadastrar-evento.store')}}" class="sub-item dropdown-item"><i class="fas fa-microphone"></i> Cadastrar </a>
                <a href="{{ route('admin.administrar-eventos')}}" class="sub-item dropdown-item"><i class="fas fa-cog"></i> Administrar </a>      
              </div>
          </li>
          <li class="nav-item">
              <a href="../config" class="nav-link prm">
              <i class="material-icons">settings</i> CONFIGURAÇÕES </a>
          </li>
        </ul> 
        <ul class="navbar-nav">
        <li class="nav-item">
          <a href="{{ route('admin.home')}}" class="btn btn-primary btn-rounded mr-2 adm">
          <i class="fas fa-arrow-left"></i> 
          </a> 
            <div>Início</div>
        </li>
        <li class="nav-item">
          <a href="../home" class="btn btn-primary btn-rounded mr-2 adm">
          <i class="fas fa-home"></i></i> 
          </a> 
            <div>Store</div>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.logout') }}" class="btn btn-danger btn-rounded adm" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
              <i class="fas fa-sign-out"></i>
          </a>    
          <form id="frm-logout" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form> 
          <div>Sair</div>
        </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="container" style="min-height: 583px; padding-top: 50px;">	
<section class="section-principal py-3">
 	<div class="container new-event">
    	<h5 class="my-5 pb-2 border-bottom">EDITAR EVENTO - {{ $evento->name }}</h5>
	    {!! Form::open(['route' => ['evento.update', $evento->id], 'method' => 'POST','file' => true, 'enctype' => 'multipart/form-data']) !!}
	    @method('PUT')
        <div class="row">
          <div class="col-md-4">
            {!!Form::text('name', $evento->name, ['class' => 'form-control', 'placeholder' => '*Nome do Eventos']) !!}
          </div>
          <div class="col-md-4">
            {!!Form::text('age', $evento->age, ['class' => 'form-control age', 'placeholder' => '*Idade']) !!}
          </div>
          <div class="col-md-4">
            {!!Form::text('place', $evento->place, ['class' => 'form-control', 'placeholder' => '*Local']) !!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            {!!Form::text('name_pos', $evento->name_pos, ['class' => 'form-control', 'placeholder' => '*Nome para POS']) !!}
          </div>
          <div class="col-md-4">
            {!!Form::text('date', $evento->date, ['class' => 'form-control data', 'placeholder' => '*Data']) !!}
          </div>
          <div class="col-md-4">
            {!!Form::text('gate_opening', $evento->gate_opening, ['class' => 'form-control hour', 'placeholder' => '*Abertura do Portão']) !!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            {!!Form::text('start', $evento->start, ['class' => 'form-control hour', 'placeholder' => '*Início']) !!}
          </div>
          <div class="col-md-4">
            {!!Form::text('link', $evento->link, ['class' => 'form-control', 'placeholder' => 'Link, Mapa Google do Local']) !!}
          </div>
          <div class="col-md-4">
            {!!Form::text('scaner_password', $evento->scaner_password, ['class' => 'form-control', 'placeholder' => '*Senha do Scaner']) !!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            {!!Form::text('address', $evento->address, ['class' => 'form-control', 'placeholder' => '*Endereço']) !!}
          </div>
          <div class="col-md-2">
            {!!Form::text('city', $evento->city, ['class' => 'form-control', 'placeholder' => 'Cidade']) !!}
          </div>
          <div class="col-md-2">
            {!!Form::text('state', $evento->state, ['class' => 'form-control', 'placeholder' => 'Estado']) !!}
          </div>
          <div class="col-md-4">
            <div class="input-group my-3">
              <div class="input-group-prepend">
                <div class="input-group-text"> Horário</div>
              </div>
              {!!Form::text('start_time', $evento->start_time, ['class' => 'form-control hour', 'placeholder' => '*Das']) !!}
              {!!Form::text('closing_time', $evento->closing_time, ['class' => 'form-control hour', 'placeholder' => '*Até']) !!}   
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
            {!!Form::textarea('description', $evento->description, ['class' => 'form-control', 'placeholder' => 'Descrição do evento']) !!}
          </div>
        </div>
        <div class="input-group mt-2">
          <div class="input-group-prepend">
            <div class="input-group-text">URL Vídeo Youtube </div>
          </div>
          {!!Form::text('url_video', $evento->url_video, ['class' => 'form-control urlvideo', 'placeholder' => 'Url do vídeo do evento']) !!}
        </div>
        <div class="resultvideo my-3"></div>
                <h5 class="my-5 pb-2 border-bottom">CADASTRAR SETOR</h5>
        <div class="row mb-3">
            <div class="col-md-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Área </div>
                </div>
                {!!Form::text('area', $evento->area, ['class' => 'form-control', 'placeholder' => 'Pista, praça, etc..']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Lote </div>
                </div>
                {!!Form::text('lote', $evento->lote, ['class' => 'form-control', 'placeholder' => 'Número do lote']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="form-inline ct1"> 
                  <a href="javascript:void();" class="btn btn-primary mx-2 btnz" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="fas fa-minus"></i></a>
                  {!!Form::number('qtd', $evento->qtd, ['class' => 'form-control', 'style' => 'width:80px;', 'min' => '0', 'max' => '9999', 'placeholder' => 'Qtd.']) !!}
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
                {!!Form::text('tipo_a', $evento->tipo_a, ['class' => 'form-control', 'placeholder' => 'Inteira, meia, promocional, etc..']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Valor </div>
                </div>
                {!!Form::text('valor_a', $evento->valor_a, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Taxa </div>
                </div>
                {!!Form::text('taxa_a', $evento->taxa_a, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Tipo </div>
                </div>
                {!!Form::text('tipo_b', $evento->tipo_b, ['class' => 'form-control', 'placeholder' => 'Inteira, meia, promocional, etc..']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Valor </div>
                </div>
                {!!Form::text('valor_b', $evento->valor_b, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Taxa </div>
                </div>
                {!!Form::text('taxa_b', $evento->taxa_b, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
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
                {!!Form::text('area_v', $evento->area_v, ['class' => 'form-control', 'placeholder' => 'Premium, lounge, camarote, etc..']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Lote </div>
                </div>
                {!!Form::text('lote_v', $evento->lote_v, ['class' => 'form-control', 'placeholder' => 'Número do lote']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="form-inline ct1"> 
                  <a href="javascript:void();" class="btn btn-primary mx-2 btnz" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="fas fa-minus"></i></a>
                  {!!Form::number('qtd_v', $evento->qtd_v, ['class' => 'form-control', 'style' => 'width:80px;', 'min' => '0', 'max' => '9999', 'placeholder' => 'Qtd.']) !!}
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
                {!!Form::text('tipo_v', $evento->tipo_v, ['class' => 'form-control', 'placeholder' => 'Inteira, meia, promocional, etc..']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Valor </div>
                </div>
                {!!Form::text('valor_v', $evento->valor_v, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Taxa </div>
                </div>
                {!!Form::text('taxa_v', $evento->taxa_v, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>  
          </div>
          <div class="row mb-3">
            <div class="col-md-5">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Tipo </div>
                </div>
                {!!Form::text('tipo_p', $evento->tipo_p, ['class' => 'form-control', 'placeholder' => 'Inteira, meia, promocional, etc..']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Valor </div>
                </div>
                {!!Form::text('valor_p', $evento->valor_p, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text input-type"> Taxa </div>
                </div>
                {!!Form::text('taxa_p', $evento->taxa_p, ['class' => 'form-control', 'placeholder' => 'R$']) !!}
              </div>
            </div>  
          </div>
        <div class="resultvideo my-3"></div>
            {!! Form::submit('Atualizar', ['class' => 'btn btn-rounded btn-primary']) !!}
          {!! Form::close() !!}
        </div>
      </div>
</section>
    <footer class="footer-secundaria">
        <div class="container">
            <div class="row">
            © DIAMOND 2020
            <a href="#" class="alogar" data-toggle="modal" data-target="#alogar">.</a>
        </div>
        </div>
    </footer>
    <div class="direitos"></div>
  </body>
</html>