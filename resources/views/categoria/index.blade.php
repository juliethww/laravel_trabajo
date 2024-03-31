@extends('welcome')

@section('content')

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Agregar
</button>

<div class="table-responsive">
    <br>
    <table class="table table-primary">
        <thead class ="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE </th>
                <th scope="col">DESCRIPCION</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr class="">
                <td scope="row">{{$categoria->id}}</td>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$categoria->id}}">
                    Editar
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$categoria->id}}">
                    Eliminar
                </button>
                </td>
            </tr>
            @include('categoria.info')
            @endforeach
        </tbody>
    </table>
</div>
@include('categoria.create')


@endsection