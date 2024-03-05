@extends('layouts.plantilla')
@section('content')

<div class="car-body container mt-auto col-md-10">
    
    <div class="fondo-con-imagen ">
        <div class="container mt-auto col-md-10 texto-opaco ">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h2 class="text-center" style="color: #228B22; font-family: 'Arial Black';">PREGUNTAS FRECUENTES</h2>
                    <br>
                    <h4 style="color: #6b0000;font-family: 'Arial Black';">¿CÓMO SE ELIGE A LOS GANADORES?</h4>
                    <h5 style="font-family: Arial;"> Todos los sorteos organizados por RIFAS QUERÉTARO se basan en los resultados de la
                    <a href="https://www.loterianacional.gob.mx">Lotería Nacional para la Asistencia Pública de México.</a>
                    El participante que posea un boleto con números que coincidan con las últimas cifras del
                        primer premio otorgado por la Lotería Nacional será declarado ganador (las fechas correspondientes
                        se publicarán en nuestra página oficial).</h5>
                </div>
               
                <div class="col-md-10 mx-auto">
                <br>
                    <h4 style="color: #6b0000;font-family: 'Arial Black';">¿QUÉ SUCEDE CUANDO EL NÚMERO GANADOR ES UN BOLETO NO VENDIDO?</h4>
                    <h5 style="font-family: Arial;"> En caso de que el número ganador esté asociado a un boleto no vendido, se realizará un nuevo
                        sorteo en una fecha próxima (la nueva fecha se anunciará oportunamente).</h5>
                    <h5 style="font-family: Arial;">Esta dinámica brinda a los participantes una segunda oportunidad de ganar con el mismo
                        boleto.</h5>
                </div>
                
                <div class="col-md-10 mx-auto">
                <br>
                
                    <h4 style="color: #6b0000;font-family: 'Arial Black';">¿DÓNDE SE PUBLICA A LOS GANADORES?</h4>
                    <h5 style="font-family: Arial;"> La información sobre los ganadores se publica en nuestra página oficial de Facebook,
                    <span style="color: #228B22; font-family: 'Arial BLACK';"> RIFAS
                        QUERÉTARO. </span>
                        Allí encontrarás detalles de todos nuestros sorteos anteriores, transmisiones en vivo
                        con la Lotería Nacional y la entrega de premios a los afortunados ganadores.
                    </h5>
                    <br>
                </div>
                <!-- Línea verde -->
                <div class="col-md-8 mx-auto">
                    <div class="linea-verde-oscuro"></div>
                </div>
                    <div class="col-md-10 mx-auto">
                    <br>
                    <h5 style="font-family: Arial;">Encuentra transmisión en vivo de los sorteos en nuestra página de Facebook en las fechas
                        indicadas a las 20:00 hrs CDMX. ¡No te lo pierdas!
                    </h5>
                    <br>
                    <h5 style="font-family: Arial Black;"> Envíanos tus preguntas a
                    </h5>
                    <a href='https://api.whatsapp.com/send/?phone=4424604517' >
                  
                    <img src="{!! url('imagen/whatsapp.png') !!}" alt="" class="imagen">
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61555258127981&locale=es_LA">
                    <img src="{!! url('imagen/facebook.png') !!}"  alt=""class="imagen">
                    </a>

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
        padding: 50px; /* Espaciado alrededor del contenido */
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
</style>
  
@stop