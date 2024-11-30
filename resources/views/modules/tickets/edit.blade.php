@extends('layouts.template-user')
@section('contenido')

<head>
    <title>Modificar Ticket</title>
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
            border-color: #ffc107;
            box-shadow: 0 0 5px rgba(255, 193, 7, 0.5);
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
    
        .btn-warning {
            background-color: #ffc107;
            color: #fff;
        }
    
        .btn-warning:hover {
            background-color: #e0a800;
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
    <h2>Modificar el Ticket #{{$item->id}}</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update', $item->id)}}" method="POST" class="post">
                        @csrf
                        @method('PUT')
                        <label for="name" class="mt-3">Asunto del caso</label>
                        <select name="asunto" class="form-select" aria-label="Default select example">
                            <option value="" selected disabled>Selecciona una de las opciones</option>
                            <option value="Manchas" {{ $item->asunto == "Manchas" ? 'selected' : '' }}>Manchas</option>
                            <option value="Atascos" {{ $item->asunto == "Atascos" ? 'selected' : '' }}>Atascos</option>
                        </select>

                        <label for="name" class="mt-3">Asignado a</label>
                        <select name="asignado_a" class="form-select" aria-label="Default select example">
                            <option value="..." selected disabled>Selecciona una de las opciones</option>
                            <option value="Daniel" {{ $item->asignado_a == "Daniel" ? 'selected' : '' }}>Daniel</option>
                            <option value="Leandro" {{ $item->asignado_a == "Leandro" ? 'selected' : '' }}>Leandro</option>
                        </select>

                        <label for="name" class="mt-3">Creado por</label>
                        <select name="cliente" class="form-select" aria-label="Default select example">
                            <option value="" selected disabled>Selecciona una de las opciones</option>
                            <option value="Oncologos" {{ $item->cliente == "Oncologos" ? 'selected' : '' }}>Oncologos</option>
                            <option value="Sies Salud" {{ $item->cliente == "Sies Salud" ? 'selected' : '' }}>Sies Salud</option>
                        </select>

                        <label for="name" class="mt-3">Prioridad del caso</label>
                        <select name="prioridad" class="form-select" aria-label="Default select example">
                            <option value="..." selected disabled>Selecciona una de las opciones</option>
                            <option value="Alto" {{ $item->prioridad == "Alto" ? 'selected' : '' }}>Alto</option>
                            <option value="Bajo" {{ $item->prioridad == "Bajo" ? 'selected' : '' }}>Bajo</option>
                        </select>

                        <label for="name" class="mt-3">Estado del ticket</label>
                        <select name="estado" class="form-select" aria-label="Default select example">
                            <option value="Nuevo" selected disabled>Selecciona una de las opciones</option>
                            <option value="Asignado" {{ $item->estado == "Asignado" ? 'selected' : '' }}>Asignado</option>
                            <option value="En progreso" {{ $item->estado == "En progreso" ? 'selected' : '' }}>En Progreso</option>
                            <option value="Cerrado" {{ $item->estado == "Cerrado" ? 'selected' : '' }}>Cerrado</option>
                        </select>

                        <label for="name" class="mt-3">Problema presentado por la máquina</label>
                        <input type="text" name="comentarios" id="name" class="form-control" value="{{$item->comentarios}}">
                        
                        <button class="btn btn-warning mt-3">Guardar</button>
                        <a href="{{ route('tickets') }}" class="btn btn-secondary mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection