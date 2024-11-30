@extends('layouts/main')

<div class="container mt-4">
    <h2>Agregar nuevo usuario</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store') }}" method="post">
                        @csrf
                        @method ('POST')
                        <label for="name">Escribe el nombre</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                        <button class="btn btn-success mt-3">Agregar</button>
                        <a href="{{ route('usuarios') }}" class="btn btn-danger mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>