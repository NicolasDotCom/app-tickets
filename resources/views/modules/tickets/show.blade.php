@extends('layouts.template-user')
@section('contenido')

<head>
    <title>Ticket #{{$item->id}}</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;;
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
    
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
    
        table th, table td {
            padding: 10px;
            border: 1px solid #ced4da;
            text-align: center;
            font-size: 14px;
            color: #495057;
        }
    
        table th {
            background-color: #f1f3f5;
            font-weight: 600;
            color: #2c3e50;
        }
    
        table td {
            background-color: #ffffff;
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
    
        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }
    
        .btn-secondary:hover {
            background-color: #5a6268;
        }
    
        .mt-4 {
            margin-top: 24px;
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
            }
    
            table {
                font-size: 12px;
            }
    
            table th, table td {
                padding: 8px;
            }
        }
    </style>
    
</head>


<div class="container mt-4">
    <h2>Ticket #{{$item->id}}</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm text-center">
                        <thead>
                            <tr>
                                <th>Asunto</th>
                                <th>Asignado a</th>
                                <th>Cliente</th>
                                <th>Prioridad</th>
                                <th>Estado</th>
                                <th>Comentarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$item->asunto}}</td>
                                <td>{{$item->asignado_a}}</td>
                                <td>{{$item->cliente}}</td>
                                <td>{{$item->prioridad}}</td>
                                <td>{{$item->estado}}</td>
                                <td>{{$item->comentarios}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('tickets')}}" class="btn btn-secondary mt-4">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection