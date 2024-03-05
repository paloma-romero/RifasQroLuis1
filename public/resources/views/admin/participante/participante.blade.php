@extends('layouts.app-master')

@section('content')

<div class="car-body container mt-10 col-md-10">
    <h3 class="text-center mb-3 p-3 fw-lighter" > Consulta de Participantes </h3>
        <form action="{{ route('participante.buscar') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="buscar" class="form-control col-md-10" placeholder="Buscar ">
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <div class="input-group-append">
            <a href="{{ route('participante.create') }}" class="btn btn-outline-success me-2">Nuevo</a>
            </div> <!-- Este div vacío añade un espacio -->
            
        </div>

        </form>
        
        <br>
    
    <table class="table table-success">
    <thead>
        <tr class="text-center">
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Usuario</th>
        <th scope="col"></th>
        <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        @foreach ($consultaP as $part)
        <tr>
        <td class="py-3 px-6">{{ $part->idparticipante }}</td>
        <td class="p-3 text-center">{{ $part->nombre }}</td>
        <td class="p-3 text-center">{{ $part->telefono }}</td>
        <td class="p-3 text-center">{{ $part-> name }}</td>
        <td ><a href="{{ route('participante.edit', ['id' => $part->idparticipante]) }}" class="btn btn-outline-success">Modificar<a></td>
        <td ><a href="{{ route('participante.confirm',$part->idparticipante) }}" class="btn btn-outline-danger">Eliminar<a></td>

        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection