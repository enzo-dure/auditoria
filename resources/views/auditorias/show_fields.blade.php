<!-- Usuario Field -->
<div class="form-group">
    {!! Form::label('usuario', 'Usuario:') !!}
    <p>{{ $auditorias->id }}</p>
</div>

<!-- Operacion Field -->
<div class="form-group">
    {!! Form::label('operacion', 'Operacion:') !!}
    <p>{{ $auditorias->operacion }}</p>
</div>

<!-- Tabla Nombre Field -->
<div class="form-group">
    {!! Form::label('tabla_nombre', 'Tabla Nombre:') !!}
    <p>{{ $auditorias->tabla_nombre }}</p>
</div>

<!-- Fecha De Operacion Field -->
<div class="form-group">
    {!! Form::label('fecha_de_operacion', 'Fecha De Operacion:') !!}
    <p>{{ $auditorias->fecha_de_operacion }}</p>
</div>

<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    <p>{{ $auditorias->ip }}</p>
</div>

<!-- Dato Anterior Field -->
<div class="form-group">
    {!! Form::label('dato_anterior', 'Dato Anterior:') !!}
    <p>{{ $auditorias->dato_anterior }}</p>
</div>

<!-- Dato Nuevo Field -->
<div class="form-group">
    {!! Form::label('dato_nuevo', 'Dato Nuevo:') !!}
    <p>{{ $auditorias->dato_nuevo }}</p>
</div>



