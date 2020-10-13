<!-- id persona Field -->
<div class="form-group">
    {!! Form::label('Paciente Id', 'Paciente Id') !!}
    <p>{{ $paciente->id_persona }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $paciente->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $paciente->apellido }}</p>
</div>

<!-- Ci Field -->
<div class="form-group">
    {!! Form::label('ci', 'Ci:') !!}
    <p>{{ $paciente->ci }}</p>
</div>


