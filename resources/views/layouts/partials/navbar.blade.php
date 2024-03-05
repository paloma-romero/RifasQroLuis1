<header class="p-3 text-white" style="background-color:#228B22">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/home" class="nav-link px-2 text-white">Usuarios</a></li>
        <li><a href="/participante" class="nav-link px-2 text-white">Participantes</a></li>
        <li><a href="/boleto" class="nav-link px-2 text-white">Boletos</a></li>
        
      </ul>

      

      @auth
        {{auth()->user()->name}}
        <div class="text-end px-2">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>