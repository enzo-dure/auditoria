<!-- Nombre Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_apellido', 'Nombre Apellido:') !!}
    {!! Form::text('nombre_apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genero', 'Genero:') !!}
    {!! Form::text('genero', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechanac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechanac', 'Fechanac:') !!}
    {!! Form::text('fechanac', null, ['class' => 'form-control']) !!}
</div>

<!-- Edad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edad', 'Edad:') !!}
    {!! Form::number('edad', null, ['class' => 'form-control']) !!}
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'Ci:') !!}
    {!! Form::number('ci', null, ['class' => 'form-control']) !!}
</div>

<!-- Barrio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barrio', 'Barrio:') !!}
    {!! Form::text('barrio', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Grupo Sanguineo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grupo_sanguineo', 'Grupo Sanguineo:') !!}
    {!! Form::text('grupo_sanguineo', null, ['class' => 'form-control']) !!}
</div>

<!-- Enfermedad Referencial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enfermedad_referencial', 'Enfermedad Referencial:') !!}
    {!! Form::text('enfermedad_referencial', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Prueba Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_prueba', 'Tipo Prueba:') !!}
    {!! Form::text('tipo_prueba', null, ['class' => 'form-control']) !!}
</div>

<!-- Resultado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resultado', 'Resultado:') !!}
    {!! Form::text('resultado', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Latitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitud', 'Latitud:') !!}
    {!! Form::text('latitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitud', 'Longitud:') !!}
    {!! Form::text('longitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    {!! Form::number('usuario_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pacients.index') }}" class="btn btn-secondary">Cancel</a>
</div>
