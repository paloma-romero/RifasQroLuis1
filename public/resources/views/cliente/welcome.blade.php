@extends('layouts.plantilla')
@section('content')

<div class="car-body container mt-10 col-md-10">

    <div class="fondo-con-imagen ">
        <div class="container mt-10 col-md-10 texto-opaco text-center">
            <div class="text-center mb-3 p-3">
                <FONT FACE="courier new" SIZE=10  class="text-center mb-3 p-3">Bienvenido a Rifas Querétaro </FONT>
            
            
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                
                    <h4 class="text-center"style="color: #228B22; font-family: 'Arial Black';">FECHA DE LA RIFA</h4>
                    </h6>
                    <h6 style="font-family: Arial Black;"> 14 de febrero
                    </h6>
                </div>
               
                
                <!-- Línea verde -->
                <div class="col-md-8 mx-auto">
                    <div class="linea-verde-oscuro"></div>
                </div>

                    <div class="col-md-8 mx-auto">
                        <div class="text-center">
                            <img src="{!! url('imagen/premio.jpg') !!}" width="350" height="200">
                        <br>
                        </div>
                        
                        <div class="text-center">
                            <br>
                            <h4 class="text-center"style="color: #228B22; font-family: 'Arial Black';">PREMIOS</h4>
                            <br>
                            <h4 style="font-family: Arial;">Premio Principal:</h4>
                            <h6 style="font-family: Arial Black;color: #228B22;"> CARRO
                            </h6>
                            <h4 style="font-family: Arial;">Segundo Lugar:</h4>
                            <h6 style="font-family: Arial Black;color: #228B22;"> $10,000 MXN
                            </h6>
                            <h4 style="font-family: Arial;">Tercer Lugar: </h4>
                            <h6 style="font-family: Arial Black;color: #228B22;"> $5,000 MXN
                            </h6>
                        </div>
                    </div>
                        
                        <div class="col-md-8 mx-auto">
                            <div class="linea-verde-oscuro"></div>
                        </div>
                    <div class="col-md-8 mx-auto">
                        <div class="text-right">
                            <h4 style="font-family: Arial Black;color: #00000;">BONO ESPECIAL:</h4>
                            <h6 style="font-family: Arial;"> 
                            Si completas tu pago antes de 
                            <span style="font-family: Arial Black; font-size: 15px; color: #228B22;">
                            14 de febrero
                            </span>
                            y 
                            ganas el premio, recibirás un bono adicional de 
                            <span style="font-family: Arial Black; font-size: 15px; color: #228B22;">
                            $10,000 MXN.
                            </span>
                            </h6>
                            <h4 style="font-family: Arial Black;color: #00000;">BONO RÁPIDA ACCIÓN:</h4>
                            <h6 style="font-family: Arial;"> 
                            Si completas tu pago antes de 
                            <span style="font-family: Arial Black; font-size: 15px; color: #228B22;">
                            14 de febrero
                            </span>y 
                            ganas el premio, recibirás un bono adicional de 
                            <span style="font-family: Arial Black; font-size: 15px; color: #228B22;">
                            $5,000 MXN.
                            </span>
                            </h6>
                        </div>
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
        width: 400px; /* Ancho de la imagen */
        height: auto; 
        position: relative;
        
    }
</style>
  
@stop

