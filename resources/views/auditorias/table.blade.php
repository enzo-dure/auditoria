<div class="table-responsive-sm">
    <table class="table table-striped" id="auditorias-table">
        <thead>
            <tr>
                <th>Usuario</th>
        <th>Operacion</th>
        <th>Tabla Nombre</th>
        <th>Fecha De Operacion</th>
        <th>Ip</th>
        <th>Dato Anterior</th>
        <th>Dato Nuevo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($auditorias as $auditoria)
            <tr>
                <td>{{ $auditoria->usuario }}</td>
            <td>{{ $auditoria->operacion }}</td>
            <td>{{ $auditoria->tabla_nombre }}</td>
            <td>{{ $auditoria->fecha_de_operacion }}</td>
            <td>{{ $auditoria->ip }}</td>
            <td>{{ $auditoria->dato_anterior }}</td>
            <td>{{ $auditoria->dato_nuevo }}</td>
                <td>
                    {!! Form::open(['route' => ['auditorias.destroy', $auditoria->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('auditorias.show', [$auditoria->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>