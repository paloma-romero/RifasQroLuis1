
@extends('layouts.plantilla')
@section('content')


        <div class="car-body container mt-10 col-md-10">
            
            <div class="fondo-con-imagen ">
                <div class="container mt-10 col-md-10 texto-opaco text-center">
                    <div class="row">
                        <div class="col-md-8 mx-auto cuadro-content">
                            <h2 class="text-center" style="color: #FFFF; font-family: 'Arial Black';">
                                MODELO DE AUTO
                            </h2>
                            
                        </div>
                        <div class=" text-center">
                            <img src="{!! url('imagen/premio.jpg') !!}" width="500" height="350">
                        
                        </div>



                        <div class="col-md-8 mx-auto cuadro-content">
                            
                            <h2 class="text-center " style="color: #FFFF; font-family: 'Arial Black';font-size: 40px;">
                                BOLETOS
                            </h2>
                            <br>
                            <h4 class="text-center" style="font-family:  'Arial Black'; font-size: 20px;  text-align: left;">
                                1 BOLETO POR $10
                            </h4>
                            <h4 class="text-center" style="font-family:  'Arial Black'; font-size: 20px;  text-align: left;">
                                2 BOLETO POR $20
                            </h4>
                            <h4 class="text-center" style="font-family:  'Arial Black'; font-size: 20px;  text-align: left;">
                                3 BOLETO POR $30
                            </h4>
                            <h4 class="text-center" style="font-family:  'Arial Black'; font-size: 20px;  text-align: left;">
                                4 BOLETO POR $40
                            </h4>
                            <h4 class="text-center" style="font-family:  'Arial Black'; font-size: 20px;  text-align: left;">
                                5 BOLETO POR $50
                            </h4>
                            <h4 class="text-center" style="font-family:  'Arial Black'; font-size: 20px;  text-align: left;">
                                10 BOLETO POR $100
                            </h4>
                            
                        </div>

                        <div class="col-md-8 mx-auto ">
                            <br>
                            <h4 class="text-center" style="font-family:  'Arial Black'; font-size: 20px;  text-align: left;">
                            Con tu boleto liquidado participas por:
                            </h4>
                            <h4 class="text-center" style="color: #6b0000; font-family: 'Arial Black'; font-size: 20px; text-align: left;">
                                JETTA GLI - 
                                <span style="color: #000000; font-family: 'Arial Black'; font-size: 20px;">15 MARZO</span>
                            </h4>
                            <h4 class="text-center" style="color: #6b0000; font-family: 'Arial Black'; font-size: 20px; text-align: left;">
                            2DO LUGAR.- $10,000 MXN
                            <br>
                            3ER LUGAR.- $5,000 MXN
                            </h4>
                            <br>
                            <h4 class="text-center" style="color: #6b0000; font-family: 'Arial Black'; font-size: 20px; text-align: left;">
                                BONO:
                                <br>
                                <span style="color: #000000; font-family: 'Arial Black'; font-size: 20px;">
                                COMPANDO ANTES DEL 29 DE FEBRERO
                                <br>
                                TE LLEVAS BONO DE:
                                </span>
                                <br>
                                $10,000 MXN
                            
                            </h4>
                            <br>
                            <h4 class="text-center" style="color: #000000; font-family: 'Arial Black'; font-size: 20px; text-align: left;">
                                SI PAGASTE ANTES DE UNA HORA
                                <br>
                                DE APARTADO Y GANAS EL PREMIO
                                <br>
                                TE LLEVAS BONO DE:
                                <br>
                                <span style="color: #6b0000; font-family: 'Arial Black'; font-size: 20px;">
                                $5,000 MXN
                                </span>
                                
                            </h4>
                            <br>
                        </div>
                        
                    
                        <div class="col-md-8 mx-auto cuadro-content">
                        
                            <h2 class="text-center" style="color: #ffff; font-family: 'Arial Black';">ESCOGE TU NÚMERO DE LA SUERTE</h2>
                        
                            <ul id="lista" class="list-inline" name="lista">
                            
                                <!-- Aquí se mostrará la cantidad de elementos -->
                                <li id="cantidadElementos" style='display: block; color:black;font-size: 25px; font-family: Arial Black;'></li>
                            </ul>
                            <form method="post" action="{{route('enviarlista')}}">
                            @csrf
                            <!-- Input para mostrar los números seleccionados -->
                                <input type="hidden" name="numerosInput" id="numerosInput" style='display: block; color:black;font-size: 30px; font-family: Arial Black;'>
                                <!-- Otros campos del formulario si es necesario -->
                                <!-- Botón de envío del formulario -->
                                <button class="boton-vino" type="submit">APARTAR</button>
                            </form>
                        </div>

                    <div class="col-md-8 mx-auto ">
                        <br>
                    </div>

                    <div class="card-body container mt-10 col-md-10 ">
                        <form action="{{ route('boletos.buscar') }}" method="GET" class="mb-2 form-inline">
                        <div class="input-group">
                            <input type="text" name="buscar" class="form-control" placeholder="Buscar">
                            <div class="input-group-append">
                                <button type="submit" class="boton-vino">Buscar</button>
                            </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="col-md-10 mx-auto">

                        
                    </div>
                    




                    <div class="col-md-8 mx-auto ">
                        <br>
                    </div>
                    
                        <script>
                           
                            // Función para agregar un boleto a la lista y actualizar la cadena de números
                            function agregarElemento(valor, boton) {
                                var nuevoElemento = document.createElement('li');
                                nuevoElemento.className = 'list-inline-item boletos1-content d-inline-block mr-2 mb-2';
                                // Contenido del elemento
                                nuevoElemento.textContent = valor;
                                // Escuchar el clic en el boleto para eliminarlo
                                nuevoElemento.onclick = function () {
                                    this.parentNode.removeChild(this); // Eliminar el boleto al hacer clic en él
                                    boton.disabled = false; // Habilitar el botón nuevamente cuando se elimina el elemento de la lista
                                    contarElementos(); // Actualizar la cantidad de elementos cuando se elimina uno
                                    actualizarNumeros(); // Actualizar la cadena de números
                                };
                                // Agregar el nuevo elemento a la lista
                                document.getElementById('lista').appendChild(nuevoElemento);
                                // Deshabilitar el botón seleccionado
                                boton.disabled = true;
                                contarElementos(); // Actualizar la cantidad de elementos
                                actualizarNumeros(); // Actualizar la cadena de números después de agregar un elemento
                            }

                            // Función para actualizar la cadena de números en el input oculto
                            function cadena() {
                                // Obtener todos los elementos de la lista
                                var elementosLista = lista.getElementsByTagName('li');
                                // Crear un array para almacenar los números
                                var numerosArray = [];

                                // Iterar sobre cada elemento de la lista
                                for (var i = 0; i < elementosLista.length; i++) {
                                    // Obtener el contenido de cada elemento de la lista
                                    var numero = elementosLista[i].textContent.trim();
                                    // Agregar el número al array
                                    numerosArray.push(numero);
                                }

                                // Actualizar el valor del campo oculto con los números separados por comas
                                document.getElementById('numerosInput').value = numerosArray.join(',');
                            }

                            // Función para actualizar la cadena de números
                            function actualizarNumeros() {
                                cadena();
                                // Eliminar el texto no deseado del valor del input
                                var numerosInput = document.getElementById('numerosInput');
                                numerosInput.value = numerosInput.value.replace(/^(.*?,)/, '');
                            }

                            // Función para contar la cantidad de elementos en la lista y mostrarlo en pantalla
                            function contarElementos() {
                                // Obtener la lista por su ID
                                var lista = document.getElementById('lista');
                                var cantidadNumeros = lista.children.length;
                                var textoPrincipal = "";
                                var textoAdicional = "<span style='display: block; color:black;font-size: 15px; font-family: Arial Black;'>Para eliminar haz click en el boleto</span>";
                                if ((cantidadNumeros-1) === 1) {
                                    textoPrincipal = (cantidadNumeros-1) + " BOLETO SELECCIONADO";
                                    document.getElementById('cantidadElementos').innerHTML = textoPrincipal + "<br>" + textoAdicional;
                                } else if (((cantidadNumeros-1)) >= 1) {
                                    textoPrincipal = (cantidadNumeros-1) + " BOLETOS SELECCIONADOS";
                                    document.getElementById('cantidadElementos').innerHTML = textoPrincipal + "<br>" + textoAdicional;
                                } else {
                                    textoPrincipal = "ELIGUE TUS BOLETOS";
                                    document.getElementById('cantidadElementos').innerHTML = textoPrincipal;
                                }
                                
                            }
                            function generarNumerosAleatorios() {
                                        var resultado = JSON.parse(document.getElementById('numerosBoleto').value); // Obtener el array de números de boleto
                                        var boleto = parseInt(document.getElementById('boletos').value); // Obtener la cantidad de números de boleto a generar
                                        var numerosAleatorios = [];

                                        // Generar 'boleto' cantidad de números aleatorios
                                        for (var i = 0; i < boleto; i++) {
                                            // Verificar si aún hay números disponibles en el array 'resultado'
                                            if (resultado.length > 0) {
                                                var indiceAleatorio = Math.floor(Math.random() * resultado.length); // Generar un índice aleatorio
                                                var numeroAleatorio = resultado.splice(indiceAleatorio, 1)[0]; // Eliminar el número seleccionado y obtenerlo
                                                numerosAleatorios.push(numeroAleatorio); // Agregar el número aleatorio al array de números
                                            } else {
                                                break; // Si no hay más números disponibles, salir del bucle
                                            }
                                        }

                                        // Mostrar los números aleatorios en el contenedor
                                        document.getElementById('cantidadBoletos').textContent = numerosAleatorios.join(', ');
                                        // Obtener el contenido del div
                                        var contenidoDiv = document.getElementById('cantidadBoletos').textContent;

                                        // Asignar el contenido del div al valor del input
                                        document.getElementById('inputCantidadBoletos').value = contenidoDiv;
                                        

                                    }

                            
                    </script>
                    <html lang="es">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="styles.css">
                        <title>Modal Anidado</title>
                    </head>

                    <body>
                        <div class="col-md-10 mx-auto ">
                            <button id="openOuterModalBtn"  class="btn btn-outline-light cuadro-content" style="font-family:  'Arial Black'; font-size: 15px;  text-align: center;">
                                MAQUINA DE LA SUERTE
                                
                            </button>
                        </div>
                        <!-- Botón para abrir la Ventana Modal Externa -->
                        

                        <!-- Ventana Modal Externa -->
                        <div id="outerModal" class="modal">
                            <div class="modal-content">
                                <span class="close" id="closeOuterModalBtn" style="text-align: right; color: red;">&times;</span>
                                <br>

                                <!-- Contenido de la Ventana Modal Externa -->
                                <!-- Agrega un campo oculto para almacenar los números de boleto -->

                                

                               

                                
                            

                                <form class="cuadrado1" action="/stylesform" method="post">
                                    <label style="font-family: Arial; font-size: 15px; text-align: left;" for="boletos">BOLETOS A GENERAR:</label>
                                    <select style="font-family: Arial; font-size: 15px; text-align: right;" id="boletos" name="boletos" required>
                                        <option value="0" disabled selected>Selecciona</option>
                                        <option value="1">1 Boleto</option>
                                        <option value="2">2 Boletos</option>
                                        <option value="3">3 Boletos</option>
                                        <option value="4">4 Boletos</option>
                                        <option value="5">5 Boletos</option>
                                        <option value="10">10 Boletos</option>
                                        <option value="20">20 Boletos</option>
                                        <option value="30">30 Boletos</option>
                                        <option value="40">40 Boletos</option>
                                        <option value="50">50 Boletos</option>
                                        <option value="100">100 Boletos</option>
                                    </select>
                                    
                                    <button type="button" onclick="generarNumerosAleatorios()" class="boton-vino">GENERAR</button>
                                </form>
                                   
                                <div class="cuadrado1" id="cantidadBoletos" name="cantidadBoletos" style='display: block; color:black;font-size: 30px; font-family: Arial Black;'></div>
                                <form method="post" action="{{ route('maquina') }}">
                                    @csrf
                                    <!-- Input para almacenar los números de boleto -->
                                    <input type="hidden" id="numerosBoleto" name="numerosBoleto" value="{{ json_encode($resultado) }}">
                                    
                                    <input type="hidden" id="inputCantidadBoletos" name="inputCantidadBoletos" style="display: block; color: black; font-size: 30px; font-family: Arial Black;" readonly>

                                    <!-- Otros campos del formulario si es necesario -->
                                        <DIV>
                                        <br>
                                        </DIV>
                                    <!-- Botón de envío del formulario -->
                                    <button class="boton-vino" type="submit">APARTAR</button>
                                </form>
                                    
                                    
                                    
                            

                            </div>
                        </div>

                        <script src="scripts.js"></script>
                    </body>

                    </html>
                    <DIV>
                        <br>
                    </DIV>

                    <div class="col-md-8 mx-auto">
                        <h4 class="text-center" style="color: #8b0000; font-family: 'Arial Black';">BOLETOS DISPONIBLES</h4>
                    </div>
                    

                    <div class="col-md-10 mx-auto">
                        @foreach ($consulta as $bol) 
                            @if ($bol->fechaApartado == null)
                                <button onclick="agregarElemento('{{ $bol->idboleto }}', this)" class="boletos-content d-inline-block mr-2 mb-2">
                                    {{ $bol->idboleto }}
                                </button>
                            @endif
                        @endforeach
                    </div>


                    </div>
                </div>
            </div>
        </div>
 


  <style>
    .fondo-con-imagen {
        background-image: url('imagen/premio.jpg'); /* Ruta de la imagen de fondo */
        background-size: cover; /* Ajusta la imagen para cubrir completamente el contenedor */
        background-position: center; /* Centra la imagen en el contenedor */
        background-repeat: no-repeat; /* Evita que la imagen se repita */
        padding: 20px; /* Espaciado alrededor del contenido */
        position: relative;
    }

    .linea-verde-oscuro {
        border: none;
        height: 2px;
        background-color: #228B22;
        margin: 10px 0; /* Espacio alrededor de la línea */
    }
    .linea-negra {
        border: none;
        height: 2px;
        background-color: #ffff;
        margin: 10px 0; /* Espacio alrededor de la línea */
    }

    

    .texto-opaco {
        background-color: rgba(255, 255, 255, 0.9); /* Fondo opaco para el texto (color blanco con opacidad) */
        padding: 20px; /* Espaciado interno del texto */
        border-radius: 10px; /* Bordes redondeados para el fondo del texto */
        
    }
    .imagen{
        
        background-position: center; /* Centra la imagen en el contenedor */
        background-repeat: no-repeat; /* Evita que la imagen se repita */
        width: 50px; /* Ancho de la imagen */
        height: auto; 
        position: relative;
    }
    .boletos-content {
        background-color: rgba(34, 139, 34, 0.5); /* Verde con 50% de opacidad */
        margin: 5px auto;
        padding: 5px;
        width: 5px;
        border: 1px solid #888;
        border-radius: 10px;
        width: 10%;
    }
    .boletos1-content {
        background-color: rgba( 139, 0, 0, 0.2); /* Verde con 50% de opacidad */
        margin: 5px auto;
        padding: 5px;
        width: 5px;
        border: 1px solid #8b0000;
        border-radius: 10px;
        width: 10%;
    }
    .cuadro-content {
        background-color: rgba(34, 139, 34, 1); /* Verde con 50% de opacidad */
        margin: 5px auto;
        padding: 20px;
        width: 20px;
        border: 1px solid #888;
        border-radius: 10px;
        width: 100%;
    }
    #openOuterModalBtn1 {
        margin-bottom: 10px; /* Ajusta el valor del margen según sea necesario */
    }
    
    </style>
    <script>
    function openOuterModal1(modalId1) {
        var modal = document.getElementById(modalId1);
        modal.style.display = "block";
    }

    function closeOuterModal1(modalId1) {
        var modal = document.getElementById1(modalId1);
        modal.style.display = "none";
    }
    </script>
   
  
@stop