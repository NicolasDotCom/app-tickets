@extends('layouts/main')

<div class="container mt-4">
    <h2>Información de: {{ $item -> name }}</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item ->id }}</td>
                                <td>{{ $item ->name }}</td>
                            </tr>
                        </
                        <tbody>
                    </table>
                    <a href="{{ route('usuarios') }}" class="btn btn-secondary mt-4">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>