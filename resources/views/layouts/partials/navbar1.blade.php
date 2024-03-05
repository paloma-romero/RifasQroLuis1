<header>
  <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/preguntas" class="nav-link px-2 text-white">
                        <img src="{!! url('imagen/preguntas.png') !!}" width="50" height="50">
                    </a></li>
                    <li><a href="/boletos" class="nav-link px-2 text-white">
                        <img src="{!! url('imagen/boletos1.png') !!}" width="50" height="50">
                    </a></li>
                    <li><a href="/pagos" class="nav-link px-2 text-white">
                        <img src="{!! url('imagen/tarjeta1.png') !!}" width="50" height="50">
                    </a></li>
        </ul>

        <div class="text-end">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <img src="{!! url('imagen/logo.png') !!}" alt="Logo" class="logo">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>
        </div>
    </div>
  </div>
</header>

    <!-- Contenido -->
    <div class="contenido">
        <!-- Aquí va el contenido de tu página -->
        <br>
    </div>
    <body>
    <!-- Imagen móvil -->
    
    
    <a href="https://api.whatsapp.com/send/?phone=4424604517 ">
      <img src= "{!! url('imagen/whatsapp.png') !!}" alt="" class="imagen-movil">
    </a>
    
  </body>

<style>
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px 20px;
            background-color: #228B22; /* Color de fondo del header */
            z-index: 1000; /* Para asegurar que el header esté por encima del contenido */
            display: flex;
            justify-content: space-between;
            align-items: center;
            overflow: visible; /* Asegura que la imagen pueda sobresalir del header */
        }

        /* Estilos para el logo */
        .logo {
            width: 200px; /* Tamaño del logo */
            height: auto;
            position: absolute;
            right: 30px; /* Valor negativo para que sobresalga */
            border-top: 70px solid #ffffff;
           
        }

        /* Estilos para el contenido */
        .contenido {
            margin-top: 60px; /* Margen superior para que el contenido no se solape con el header */
            padding: 20px;
        }
        .imagen-movil {
            position: fixed; /* Fija la posición de la imagen */
            bottom: 20px; /* Ajusta la distancia desde la parte inferior */
            right: 20px; /* Ajusta la distancia desde la derecha */
            z-index: 1000; /* Asegura que la imagen esté encima del contenido */
            width: 75px; /* Tamaño de la imagen */
            height: auto; /* Altura automática para mantener la proporción */
            border-radius: 50%; /* Borde redondeado para la imagen circular */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para resaltar la imagen */
        }
    </style>