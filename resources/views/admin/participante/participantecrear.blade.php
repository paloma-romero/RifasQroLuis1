@extends('layouts.app-master')

@section('content')

@if(session()->has('confirmacion'))
    {!! "<script> Swal.fire('listo','tu recuerdo llego al controlador','success')</script>" !!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="close"></button>
    </div>
@endif

<br>

    <div class="car-body container mt-10 col-md-6">
        <div>
             @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                        <strong>Formulario incompleto!</strong>{{$error}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                @endforeach
            @endif
        </div>
        <form class= "bg-light text-center" method="post" action="{{route('participante.store')}}">
        <h3 FACE="courier new" SIZE=10 COLOR="black" class="text-center mb-3 p-3">Registro Participante</h2>

            @csrf 
                
            <div class="mb-3 p-3">
            <label for="disabledTextInput" class="form-label fw-lighter" style="color:black;">Nombre</label>
            <input type="text"  class="form-control " name="txtNombre" value="{{old ('txtNombre')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtNombre')}}</p>
            </div>
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Telefono</label>
            <input type="number"  class="form-control" name="txtTelefono" value="{{old ('txtTelefono')}}" >
            <p class="fw-bold text-danger">{{$errors->first('txtTelefono')}}</p>
            </div>
           
            <div class="mb-3 p-3 ">
            <label for="disabledSelect" class="form-label fw-lighter" style="color:black;">Administrador</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="txtUser">
                <option selected>Selecciona uno</option>
                @foreach ($consulta as $user)
                <option   value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>

            </div>
        
          
           
            
            
            <div class="p-3 mb-2">
            <button type="submit" class="btn btn btn-outline-success btn-lg text-center">Guardar</button>
            </div>
        
        </form>
    </div>
<br>
@stop