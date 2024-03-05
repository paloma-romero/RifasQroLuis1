@extends('layouts.app-master')

@section('content')

@if(session()->has('confirmacion'))
    {!! "<script> Swal.fire('listo','tu recuerdo llego al controlador','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="close"></button>
    </div>
@endif 

<h1 class="mt-4 display-1 text-center">Editar usuario</h1>
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

    <form method="post" action="{{ route('usuario.update', $usuarioid->id) }}">
        @csrf 
        {!!method_field('PUT')!!} <!--este metodo es para validar los datos Y aquí mismo se-->
            <div>
                <label class="form-label" name="labelTitulo">Nombre:</label>
                <input type="text" class="form-control" name="txtNombre" value="{{$usuarioid->name}}">
                <p class="fw-bold text-danger">{{$errors->first('txtNombre')}}</p>
            </div>
            <div>
                <label class="form-label" name="labelRecuerdo">Email:</label>
                <input type="text" class="form-control" name="txtEmail"  value="{{$usuarioid->email}}">
                <p class="fw-bold text-danger">{{$errors->first('txtEmail')}}</p>
            </div>
            <div>
                <label class="form-label" name="labelTiempo">Usuario:</label>
                <input type="text" class="form-control" name="txtUsuario" value="{{$usuarioid->username}}">
                <p class="fw-bold text-danger">{{$errors->first('txtUsuario')}}</p>
            </div>
            
    </div>
        <div>
            <button type="submit" name="btnActualizar">Actualizar</button>
        </div>
        </form>
</div>
    </div>
</div>
<br>
@stop