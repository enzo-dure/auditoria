<!-- Usuario Field -->
<div class="form-group">
    {!! Form::label('usuario', 'Usuario:') !!}
    <p>{{ $auditoria->usuario_id }}</p>
</div>

<!-- Operacion Field -->
<div class="form-group">
    {!! Form::label('operacion', 'Operacion:') !!}
    <p>{{ $auditoria->operacion }}</p>
</div>

<!-- Tabla Nombre Field -->
<div class="form-group">
    {!! Form::label('tabla_nombre', 'Tabla Nombre:') !!}
    <p>{{ $auditoria->tabla_nombre }}</p>
</div>

<!-- Fecha De Operacion Field -->
<div class="form-group">
    {!! Form::label('fecha_de_operacion', 'Fecha De Operacion:') !!}
    <p>{{ $auditoria->fecha_de_operacion }}</p>
</div>

<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    <p>{{ $auditoria->ip }}</p>
</div>

<!-- Dato Anterior Field -->
<div class="form-group">
    {!! Form::label('dato_anterior', 'Dato Anterior:') !!}
    <p>{{ $auditoria->dato_anterior }}</p>
</div>

<!-- Dato Nuevo Field -->
<div class="form-group">
    {!! Form::label('dato_nuevo', 'Dato Nuevo:') !!}
    <p>{{ $auditoria->dato_nuevo }}</p>
</div>



