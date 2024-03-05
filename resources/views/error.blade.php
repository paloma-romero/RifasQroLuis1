
@extends('layouts.plantilla2')
@section('content')

<div class="car-body container mt-10 col-md-10">

    <div class="fondo-con-imagen ">
        <div class="container mt-10 col-md-10 texto-opaco text-center">
            <div class="text-center mb-3 p-3">
                <div class="text-center">
                    <img src="{!! url('imagen/logo.png') !!}" width="350" height="350">
                </div> 
                <h3 class="text-center" style="color: #6b0000; font-family: 'Arial Black';">
                Lamentamos informarte que la página que estás buscando no ha sido encontrada. 
                </h3>
                <br>
                <h5 class="text-center" style=" font-family: 'Arial';">
                Por favor, revisa la dirección URL e intenta nuevamente, o busca lo que necesitas en nuestra página principal.
                </h5>
                 
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


