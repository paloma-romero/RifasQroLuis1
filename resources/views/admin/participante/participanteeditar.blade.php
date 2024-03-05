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

    <form method="post" action="{{ route('participante.update', $consultaPE->idparticipante) }}">
        @csrf 
        {!!method_field('PUT')!!} <!--este metodo es para validar los datos Y aquí mismo se-->
            <div class="mb-3 p-3">
            <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;">Nombre</label>
            <input type="text"  class="form-control " name="txtNombre" value="{{$consultaPE->nombre}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtNombre')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Telefono</label>
            <input type="number"  class="form-control" name="txtTelefono" value="{{$consultaPE->telefono}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtTelefono')}}</p>
            </div>
           
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Administrador</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="txtUser">
                <option value="{{ $consultaPE->user_id }}" selected>{{$consultaPE->name}}</option>
                @foreach ($consulta as $user)
                <option   value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>

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