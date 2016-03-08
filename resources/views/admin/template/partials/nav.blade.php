<!--
  Esta plantila la sacamos de Bootstrap
  mirar aquí: http://getbootstrap.com/components/#navbar
-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <img src="{{ asset('images/estudio.png') }}" alt="Agenda desarrollador" class="admin-logo-nav" width="40px">

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::user())
        <ul class="nav navbar-nav">
          <li><a href="{{ route('admin.index') }}">Inicio </a></li>
          @if(Auth::user()->admin())
            <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
          @endif
          <li><a href="{{ route('admin.contactos.index') }}">Contactos</a></li>
          <li><a href="{{ route('admin.zonaestudiogratis.index') }}">Zona de Estudio (gratis)</a></li>
          <li><a href="{{ route('admin.zonaestudiopago.index') }}">Zona de Estudio (pago)</a></li>
          <li><a href="{{ route('admin.categorias.index') }}">Categorías</a></li>
          <li><a href="{{ route('admin.proyectos.index') }}">Proyectos</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('front.index') }}" target="_blank">Página Principal</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->nombre }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('admin.auth.logout') }}">Salir</a></li>
            </ul>
          </li>

        </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>
