@extends('layouts.app-master')

@section('content')

<div class="car-body container mt-10 col-md-10">
    <h3 class="text-center mb-3 p-3 fw-lighter" > Consulta de usuarios </h3>

    <form action="{{ route('boleto.buscarAdmin') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="buscar" class="form-control" placeholder="Buscar">
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
        </div>
    </form>

    <table class="table table-success">
    <thead>
        <tr class="text-center">
        <th scope="col">Boleto</th>
        <th scope="col">Fecha Apartado</th>
        <th scope="col">Fecha Compra</th>
        <th scope="col">Comprado</th>
        <th scope="col">Participante</th>
        <th scope="col">Fecha Compra</th>
        <th scope="col">Todo</th>
        <th scope="col">Fecha Compra</th>

        </tr>
    </thead>
    <tbody>
       
        @foreach ($consultaB as $bol) 
            @if ( $bol->fechaApartado != null)
            <tr>
            <td class="py-3 px-6">{{ $bol->idboleto }}</td>
            <td class="p-3 text-center">{{ $bol->fechaApartado }}</td>
            <td class="p-3 text-center">{{ $bol->fechaCompra }}</td>
            @if ($bol->comprado == 0)
                <td class="p-3 text-center">no</td>
            @elseif ($bol->comprado == 1)
                <td class="p-3 text-center">si</td>
            @endif
        
            <td class="p-3 text-center">{{ $bol->nombre }}</td>
            <td ><a href="{{ route('boleto.confirmParticipante', $bol->idboleto) }}" class="btn btn-outline-success">Agregar <a></td> 
            <td ><a href="{{ route('boleto.confirmTODO', $bol->idboleto) }}" class="btn btn-outline-danger">Eliminar <a></td>
            <td ><a href="{{ route('boleto.confirmFECHA', $bol->idboleto) }}" class="btn btn-outline-danger">Eliminar <a></td>
            </tr>
            @endif
        @endforeach
        
        
    </tbody>
    </table>
</div>
@endsection