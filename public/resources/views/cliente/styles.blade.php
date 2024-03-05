User
lo anterior pero con esto:
@extends('layouts.plantilla')
@section('content')


                <html lang="es">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="styles.css">
                    <title>Modal Anidado</title>
                </head>

                <body>

                    <!-- Botón para abrir la Ventana Modal Externa -->
                    <button id="openOuterModalBtn">Maquina de la suerte</button>

                    <!-- Ventana Modal Externa -->
                    <div id="outerModal" class="modal">
                        <div class="modal-content">
                            <span class="close" id="closeOuterModalBtn" style="text-align: right; color: red;">&times;</span>
                            <br>

                            <!-- Contenido de la Ventana Modal Externa -->
                            <!-- Agrega un campo oculto para almacenar los números de boleto -->

                            

                            <script>
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
                            <form method="post" action="{{ route('enviarlista1') }}">
                                @csrf
                                <!-- Input para almacenar los números de boleto -->
                                <input type="text" id="numerosBoleto" name="numerosBoleto" value="{{ json_encode($resultado) }}">
                                
                                <input type="text" id="inputCantidadBoletos" name="inputCantidadBoletos" style="display: block; color: black; font-size: 30px; font-family: Arial Black;" readonly>

                                <!-- Otros campos del formulario si es necesario -->
                                
                                <!-- Botón de envío del formulario -->
                                <button class="boton-vino" type="submit">APARTAR</button>
                            </form>
                                
                                
                                
                           

                        </div>
                    </div>

                    <script src="scripts.js"></script>
                </body>

                </html>


      

            </div>
        </div>
    </div>


</div>
