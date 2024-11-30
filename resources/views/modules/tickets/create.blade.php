@extends('layouts.template-user')
@section('contenido')

<head>
    <title>Crear Ticket</title>
    <style>
    /* General Styles */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        color: #343a40;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 15px;
    }

    h2 {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 20px;
        text-align: center;
        color: #2c3e50;
    }

    .card {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .card-body {
        padding: 20px;
    }

    label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #495057;
        margin-bottom: 5px;
    }

    .form-control, 
    .form-select {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        background-color: #fff;
        color: #495057;
        transition: border-color 0.3s ease;
    }

    .form-control:focus, 
    .form-select:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn {
        padding: 10px 15px;
        font-size: 14px;
        font-weight: 600;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        display: inline-block;
        transition: background-color 0.3s ease, color 0.3s ease;
        border: none;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .mt-3 {
        margin-top: 16px;
    }

    /* Responsive Design */
    @media (max-width: 576px) {
        .container {
            padding: 10px;
        }

        h2 {
            font-size: 20px;
        }

        .btn {
            width: 100%;
            margin-bottom: 10px;
        }
    }

    </style>
</head>
<div class="container mt-4">
    <h2>Crear Ticket</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    
                    <form action="{{ route('store') }}" method="POST" class="post">
                        @csrf
                        <label for="name" class="mt-3">Asunto del caso</label>
                        <select name="asunto" class="form-select" aria-label="Default select example" required>
                            <option value="" selected disabled>Selecciona una de las opciones</option>
                            <option value="Manchas">Manchas</option>
                            <option value="Atascos">Atascos</option>
                        </select>

                        <label for="name" class="mt-3">Asignado a</label>
                        <select name="asignado_a" class="form-select" aria-label="Default select example" required>
                            <option value="" selected disabled>Selecciona una de las opciones</option>
                            <option value="Daniel">Daniel</option>
                            <option value="Leandro">Leandro</option>
                        </select>
                        
                        <label for="name" class="mt-3">Creado por</label>
                        <select name="cliente" class="form-select" aria-label="Default select example" required>
                            <option value="" selected disabled>Selecciona una de las opciones</option>
                            <option value="Oncologos">Oncologos</option>
                            <option value="Sies Salud">Sies Salud</option>
                        </select>

                        <label for="name" class="mt-3">Prioridad del caso</label>
                        <select name="prioridad" class="form-select" aria-label="Default select example" required>
                            <option value="" selected disabled>Selecciona una de las opciones</option>
                            <option value="Alto">Alto</option>
                            <option value="Bajo">Bajo</option>
                        </select>

                        <label for="name" class="mt-3">Estado del ticket</label>
                        <select name="estado" class="form-select" aria-label="Default select example" required>
                            <option value="Nuevo" selected disabled>Nuevo</option>
                            <option value="Asignado">Asignado</option>
                            <option value="En progreso">En Progreso</option>
                            <option value="Cerrado">Cerrado</option>
                        </select>

                        <label for="name" class="mt-3" >Problema presentado por la máquina</label>
                        <input type="text" name="comentarios" id="name" class="form-control" required>

                        <button type="submit" class="btn btn-primary mt-3">Crear</button>
                        <a href="{{ route('tickets') }}" class="btn btn-secondary mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection