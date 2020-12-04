@extends('layouts.app')
@section('content')


 <ol class="breadcrumb">
        <li class="breadcrumb-item">Auditorias</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Auditorias Reportes
                         
                         </div>
                         <div class="card-body">
<div class="table-responsive-sm">
    <table class="table table-striped" id="tabla1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
        <th>Operacion</th>
        <th>Tabla Nombre</th>
        <th>Fecha De Operacion</th>
        <th>Ip</th>
        <th>Dato Anterior</th>
        <th>Dato Nuevo</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reporte as $auditoria)
            <tr>
                <td>{{ $auditoria->id }}</td>
                <td>{{ $auditoria->usuario_id }}</td>
            <td>{{ $auditoria->operacion }}</td>
            <td>{{ $auditoria->tabla_nombre }}</td>
            <td>{{ $auditoria->fecha_de_operacion }}</td>
            <td>{{ $auditoria->ip }}</td>
            <td>{{ $auditoria->dato_anterior }}</td>
            <td>{{ $auditoria->dato_nuevo }}</td>
               
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
 <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection
