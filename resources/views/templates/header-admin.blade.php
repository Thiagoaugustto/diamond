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
              <a href="config" class="nav-link prm">
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