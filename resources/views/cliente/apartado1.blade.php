@extends('layouts.plantilla')
@section('content')

<div class="car-body container mt-10 col-md-10">
            
            <div class="fondo-con-imagen ">
                <div class="container mt-10 col-md-10 texto-opaco text-center">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                                    <form class="cuadrado2" action="/apartar1" method="post">
                                    @csrf
                                        
                                            <input type="hidden" name="numerosRecibidos1" value="{{ implode(',', $numeros) }}">
                                          
                                        
                                    
                                        <div style="font-family: Arial; font-size: 20px; text-align: center; font-weight: bold;">
                                            LLENA TUS DATOS Y DA CLICK EN APARTAR
                                        </div>
                                        <div style="font-family: Arial; font-size: 20px; text-align: center; color: #800000; font-weight: bold;">
                                        {{$cantidadNumeros}} BOLETO SELECCIONADO
                                        </div>
                                        <br>

                                        <div class="col-md-8 mx-auto" style="font-family: Arial; font-size: 20px; text-align: center; color: #800000; font-weight: bold;">
                                            <input type="number" class="form-control" id="whatsappInput" name="whatsappInput" placeholder="NÚMERO DE WHATSAPP" required style="margin-bottom: 10px;">
                                            <input type="text" class="form-control" id="nombreInput" name="nombreInput" placeholder="NOMBRE(S)" required style="margin-bottom: 10px;">
                                            <input type="text" class="form-control" id="apellidosInput" name="apellidosInput" placeholder="APELLIDOS" required>
                                        </div>

                                        <br>

                                        <div style="font-family: Arial; font-size: 15px; text-align: center; font-weight: bold; color: #228B22;">
                                            ¡Al finalizar serás redirigido a whatsapp para enviar la información de tu boleto!
                                        </div>
                                        <div style="font-family: Arial; font-size: 15px; text-align: center; color: red; font-weight: bold;">
                                            Tu boleto sólo dura 12 horas apartado
                                        </div>
                                        <br>

                                        <button type="submit" class="boton-vino">APARTAR</button>
                                    </form>
                              
                                <script src="scripts1.js"></script>
                        
                   

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
    
   
  
@stop
