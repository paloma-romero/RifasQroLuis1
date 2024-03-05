@extends('layouts.app-master')

@section('content')

@if(session()->has('confirmacion'))
    {!! "<script> Swal.fire('listo','tu recuerdo llego al controlador','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="close"></button>
    </div>
@endif 

<h3 class="mt-4 display-1 text-center">Editar usuario</h3>
<br>
@if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>Formulario incompleto!</strong>{{$error}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            @endforeach
@endif

    <div class="container mt-5 col-md-6">

        <div>
            <div class="card-header text-center text-primary">
                Correcciones!!! <i class="bi bi-wechat"></i>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('boleto.updateparticipante', $consultaBE->idboleto) }}">
                @csrf 
                {!!method_field('PUT')!!} <!--este metodo es para validar los datos Y aquí mismo se-->
                    <div class="mb-3 p-3">
                        <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;">Fecha Compra</label>
                        <input type="datetime-local"   class="form-control " name="txtFecha" value="{{$consultaBE->fechaCompra}}" >
                        <p class="fw-bold text-danger">{{$errors->first('txtFecha')}}</p> 
                    </div>

                    <div class="mb-3 p-3">
                        <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;">Participante</label>
                        <input type="text"   class="form-control " name="txtParticipante" value="{{$consultaBE->nombre}}"  disabled>
                        
                    </div>

                    <div class="mb-3 p-3">
                        <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;">Boleto</label>
                        <input type="number"   class="form-control " name="txtboleto" value="{{$consultaBE->boleto_id}}"  disabled>
                        
                    </div>

                    <div>
                        <button type="submit" name="btnActualizar">Actualizar</button>
                    </div>
            </form>
        </div>
    </div>

<br>
@stop
                