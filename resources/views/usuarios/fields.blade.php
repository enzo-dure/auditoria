<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo_electronico', 'correo_electronico:') !!}
    {!! Form::text('correo_electronico', null, ['class' => 'form-control']) !!}
</div>

<!-- Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contraseña', 'contraseña:') !!}
    {!! Form::text('contraseña', null, ['class' => 'form-control']) !!}
</div> 
 <!--IP Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('ip', $ip )	 !!}
</div> 
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
