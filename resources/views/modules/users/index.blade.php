@extends('layouts/main')

@section('index')
    <div class="container mt-4">
        <div class="h2">Usuarios</div>
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('create') }}" class="btn btn-success">
                            <i class="fa-solid fa-plus"></i> Agregar usuario
                        </a>
                        <hr>
                        <table class="table table-sm table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item -> id }}</th>
                                    <td>{{ $item -> name }}</th>
                                    <td>
                                        <form action="{{ route('destroy', $item ->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('show', $item ->id) }}" class="btn btn-primary">
                                                <i class="fa-solid fa-list-ul"></i> Mostrar
                                            </a>
                                            <a href="{{ route('edit', $item ->id) }}" class="btn btn-warning">
                                                <i class="fa-solid fa-pen-to-square"></i> Editar
                                            </a>
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i> Borrar
                                            </button>
                                        </form>
                                    </th>
                                </tr>
                                @empty
                                    <tr>
                                        <td>
                                            No hay datos en la tabla.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            {{ $items -> links() }}
                        </div>
                </div>

            </div>
        </div>
    </div>
@endsection