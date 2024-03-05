@extends('layouts.app-master')

@section('content')

<h3 class="mt-4 display-1 text-center">Confirmar Eliminación</h3>
<div class="container col-md-6 mb-5 mt-5">
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Seguro que eliminaras este usuario?</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    <div class="card text-center">

      <div class="card-header bg-success">
        <h5 class="text-center text-light">{{$usuarioid->username}}</h5>
      </div>

      <div class="card-body">
        <h5 class="card-title" style="color:black;">{{$usuarioid->name}}</h5>
        <p class="card-text" style="color:black;">{{$usuarioid->email}}</p>
    </div>
    <div class="card-footer text-muted">
        <form action="{{ route('usuario.destroy', $usuarioid->id) }}" method="post">
            {!! method_field('DELETE')!!}
            {!!csrf_field()!!}
            <button type="submit" class="btn btn-outline-danger">Si... Eliminalo!</button>
        </form>
        <a href="/home" class="btn btn-outline-warning">NO... Regresame!</a>
      </div>
    </div>
</div>


@stop