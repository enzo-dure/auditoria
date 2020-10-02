<!-- Operacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('operacion', 'Operacion:') !!}
    {!! Form::text('operacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tabla Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tabla_nombre', 'Tabla Nombre:') !!}
    {!! Form::text('tabla_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha De Operacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_de_operacion', 'Fecha De Operacion:') !!}
    {!! Form::date('fecha_de_operacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip', 'Ip:') !!}
    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Dato Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dato_anterior', 'Dato Anterior:') !!}
    {!! Form::text('dato_anterior', null, ['class' => 'form-control']) !!}
</div>

<!-- Dato Nuevo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dato_nuevo', 'Dato Nuevo:') !!}
    {!! Form::text('dato_nuevo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('auditorias.index') }}" class="btn btn-secondary">Cancel</a>
</div>
