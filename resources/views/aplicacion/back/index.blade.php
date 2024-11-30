@extends('layouts.template-user')
@section('contenido')
<main>
    <div class="header">
        <div class="left">
            <h1>Panel</h1>
            <ul class="breadcrumb">
                <li><a href="#">
                        Tickets
                    </a></li>
                /
                <li><a href="#" class="active">Informe de Tickets</a></li>
            </ul>
        </div>
        {{-- Aqui se quita el descargar reportes
        <a href="#" class="report">
            <i class='bx bx-cloud-download'></i>
            <span>Download CSV</span>
        </a>
        --}}
    </div>

    <!-- Insights -->
    <ul class="insights">
        <li>
            <i class='bx bx-user-plus'></i>
            <span class="info">
                <h3>
                    174
                </h3>
                <p>Tickets Asignados</p>
            </span>
        </li>
        <li><i class='bx bx-run'></i>
            <span class="info">
                <h3>
                    44
                </h3>
                <p>Tickets en Progreso</p>
            </span>
        </li>
        <li><i class='bx bxs-user-check'></i>
            <span class="info">
                <h3>
                    21
                </h3>
                <p>Tickets Cerrados</p>
            </span>
        </li>
        <li><i class='bx bx-group'></i>
            <span class="info">
                <h3>
                    742
                </h3>
                <p>Total de Tickets</p>
            </span>
        </li>
    </ul>
    <!-- End of Insights -->

    <div class="bottom-data">
        <div class="orders">
            <div class="header">
                <i class='bx bx-receipt'></i>
                <h3>Tickets Recientes</h3>
                <i class='bx bx-filter'></i>
                <i class='bx bx-search'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>fecha del ticket</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="{{ asset('/assets/back/assets/img/profile-1.jpg') }}">
                            <p>Jesús Rendón</p>
                        </td>
                        <td>14-08-2023</td>
                        <td><span class="status process">Asignado</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('/assets/back/assets/img/profile-1.jpg') }}">
                            <p>Jesús Rendón</p>
                        </td>
                        <td>14-08-2023</td>
                        <td><span class="status pending">En Progreso</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('/assets/back/assets/img/profile-1.jpg') }}">
                            <p>Jesús Rendón</p>
                        </td>
                        <td>14-08-2023</td>
                        <td><span class="status completed">Cerrado</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Inicio de los Recordatorios -->
        <div class="reminders">
            <div class="header">
                <i class='bx bx-note'></i>
                <h3>Recordatorios</h3>
                <i class='bx bx-filter'></i>
                <i class='bx bx-plus'></i>
            </div>
            <ul class="task-list">
                <li class="completed">
                    <div class="task-title">
                        <i class='bx bx-check-circle'></i>
                        <p>Reunión el Sábado a las 8 A.M</p>
                    </div>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="completed">
                    <div class="task-title">
                        <i class='bx bx-check-circle'></i>
                        <p>Analizar la mesa de ayuda</p>
                    </div>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="not-completed">
                    <div class="task-title">
                        <i class='bx bx-x-circle'></i>
                        <p>Jugar fútbol</p>
                    </div>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
            </ul>
        </div>

        <!-- Final de los Recordatorios-->

    </div>

</main>
@endsection