@extends('layouts.plantilla')
@section('content')

<div class="car-body container mt-10 col-md-10">
    
    <div class="fondo-con-imagen ">
        <div class="container mt-10 col-md-10 texto-opaco text-center">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2 class="text-center" style="color: #228B22; font-family: 'Arial Black';">INFORMACION DE PAGO</h2>
                    
                    <div class="col-md-8 mx-auto">
                        <br>
                        <h6 style="font-family: Arial;">
                        El recibo de pago se envía exclusivamente 
                        a la conversación en la que reservaste tus entradas.
                        </h6>
                        <a href="https://wa.me/qr/DRBK67DNXQ7DI1 ">
                            <img src= "{!! url('imagen/whatsapp.png') !!}" alt="" class="imagen">
                        </a>
                    </div>
                </div>
               
                
                <!-- Línea verde -->
                <div class="col-md-8 mx-auto">
                    <div class="linea-verde-oscuro"></div>
                </div>
                <div class="col-md-8 mx-auto">
                    <h4 style="font-family: Arial Black; color: #228B22; text-align: center;">EXCLUSIVO TRANSFERENCIAS Y CAJERO</h4>
                    <br>
                    <h6 style="font-family: Arial Black; text-align: center;">
                        EN CONCEPTO DE PAGO: 
                        <span style="font-family: Arial Black; font-size: 15px; color: #228B22;">
                        TU NOMBRE
                        </span>
                    </h6>
                    
                    <h6 style="font-family: Arial; text-align: left;">
                        BANCO: 
                        <span style="font-family: Arial Black; font-size: 15px;color: #228B22;">
                            <img src= "{!! url('imagen/BBVA.png') !!}" alt="" class="imagenbbva">
                        
                        </span>
                    </h6>

                    <h6 style="font-family: Arial; text-align: left;">
                        NOMBRE: 
                        <span style="font-family: Arial Black; font-size: 15px; color: #228B22;">
                        LUIS ROMERO
                        </span>
                    </h6>
                    <h6 style="font-family: Arial; text-align: left;">
                        NÚMERO DE TARJETA: 
                        <span style="font-family: Arial Black; font-size: 15px; color: #228B22;">
                        000000000000000
                        </span>
                    </h6>
                    <h6 style="font-family: Arial; text-align: left;">
                        CLABE:
                        <span style="font-family: Arial Black;font-size: 15px;color: #228B22;">
                        000000000000000
                        </span>
                    </h6>
                    <h6 style="font-family: Arial; text-align: left;">
                        CUENTA: 
                        <span style="font-family: Arial Black; font-size: 15px; color: #228B22;">
                        0000000000
                        </span>
                    </h6>
                </div>


                <!-- Línea verde -->
                <div class="col-md-8 mx-auto">
                    <div class="linea-verde-oscuro"></div>
                </div>
                <div class="col-md-8 mx-auto">
                    <h4 style="font-family: Arial Black; color: #228B22; text-align: center;">PAGO EN OXXO, 7-ELEVEN, FARMACIAS</h4>
                    <br>
          
                    <h6 style="font-family: Arial; text-align: left;">
                        BANCO: 
                        <span style="font-family: Arial Black; font-size: 15px;color: #228B22;">
                            <img src= "{!! url('imagen/spin.png') !!}" alt="" class="imagenbbva">
                        </span>
                    </h6>

                    <h6 style="font-family: Arial; text-align: left;">
                        NÚMERO DE TARJETA: 
                        <span style="font-family: Arial Black; font-size: 15px; color: #228B22;">
                        000000000000000
                        </span>
                    </h6>
                    
                    <h6 style="font-family: Arial; text-align: left;">
                        NOMBRE: 
                        <span style="font-family: Arial Black; font-size: 15px; color: #228B22;">
                        LUIS ROMERO
                        </span>
                    </h6>
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
    .imagenbbva{
        
        background-position: center; /* Centra la imagen en el contenedor */
        background-repeat: no-repeat; /* Evita que la imagen se repita */
        
        width: 75px; /* Ancho de la imagen */
        height: auto; 
        position: relative;
    }
</style>
  
@stop