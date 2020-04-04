<nav class="navbar navbar-expand-lg navbar-light bg-light  navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Vinos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link"  href="{{ url('/') }}">Inicio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gestionar
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('user.index') }}">Usuarios</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('vinos.index') }}">Vinos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Comentarios</a>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Perfil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('perfil.index') }}">Mi Perfil</a>
            </div>
        </li>

        <li class="nav-item">

            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                {{ __('Cerrar Sesión') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </li>


    </ul>

    </div>
  </nav>