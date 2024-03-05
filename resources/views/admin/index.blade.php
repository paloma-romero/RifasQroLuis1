@extends('layouts.app-master')

@section('content')

<div class="car-body container mt-10 col-md-10">
    <h3 class="text-center mb-3 p-3 fw-lighter" > Consulta de usuarios </h3>
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
        @foreach ($consulta as $row)

        
        <tr>
        <td class="py-3 px-6">{{ $row->id }}</td>
        <td class="p-3 text-center">{{ $row->name }}</td>
        <td class="p-3 text-center">{{ $row->email }}</td>
        <td class="p-3 text-center">{{ $row->username }}</td>
        <td ><a href="{{ route('usuario.edit', $row->id) }}" class="btn btn-outline-success">Modificar<a></td>
        <td ><a href="{{ route('usuario.confirm', $row->id) }}" class="btn btn-outline-danger">Eliminar<a></td>

        

        
        </tr>
        @endforeach
        
    </tbody>
    </table>
</div>
@endsection