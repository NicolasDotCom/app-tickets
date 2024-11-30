@extends('layouts.template-user')

@section('contenido')
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Estilos internos -->
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #343a40;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px;
        }

        h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
            color: #2c3e50;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-info {
            background-color: #17a2b8;
            color: #fff;
        }

        .btn-info:hover {
            background-color: #117a8b;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #a71d2a;
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

        hr {
            border: 0;
            border-top: 1px solid #dee2e6;
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px;
        }

        table th,
        table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #dee2e6;
        }

        table th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #495057;
        }

        table tr:nth-child(even) {
            background-color: #f1f3f5;
        }

        table tr:hover {
            background-color: #e9ecef;
        }

        .d-flex {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .mt-4 {
            margin-top: 16px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            table th,
            table td {
                font-size: 12px;
                padding: 8px;
            }

            .btn {
                font-size: 12px;
                padding: 8px 16px;
            }

            .container {
                padding: 10px;
            }
        }

        @media (max-width: 576px) {
            table,
            thead {
                display: none;
            }

            table tbody tr {
                display: block;
                margin-bottom: 15px;
                border: 1px solid #dee2e6;
                border-radius: 8px;
                overflow: hidden;
            }

            table tbody td {
                display: block;
                text-align: left;
                padding: 10px;
                font-size: 12px;
            }

            table tbody td:before {
                content: attr(data-label);
                font-weight: 600;
                color: #495057;
                display: block;
                margin-bottom: 5px;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
    
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('create')}}" class="btn btn-primary">
                            <i class="fa fa-plus" aria-hidden="true"></i></i> Crear Ticket
                        </a>
    
                        <hr>
                        <table class="table table-sm tm table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Asunto</th>
                                    <th>Asignado a</th>
                                    <th>Cliente</th>
                                    <th>Prioridad</th>
                                    <th>Estado</th>
                                    <th>Comentarios</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->asunto}}</td>
                                    <td>{{$item->asignado_a}}</td>
                                    <td>{{$item->cliente}}</td>
                                    <td>{{$item->prioridad}}</td>
                                    <td>{{$item->estado}}</td>
                                    <td>{{$item->comentarios}}</td>
    
                                    <td>
                                        <form action="{{route('destroy', $item->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('show', $item->id)}}" class="btn btn-info">
                                                <i class="fa-solid fa-list"></i> Mostrar</a>
                                            <a href="{{route('edit', $item->id)}}}" class="btn btn-warning">
                                                <i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                                
                                            <!-- Boton para eliminar un ticket
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i> Eliminar</button>
                                            --> 
                                                
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td>No hay datos en la tabla...</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            {{$items->links()}}
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</body>

</html>

@endsection