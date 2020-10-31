<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_apellido', 'Nombres y Apellidos:') !!}
    {!! Form::text('nombre_apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genero', 'Genero:') !!}
   {!! Form::select('genero',array('Sin eleccion' => 'Sin eleccion','Masculino' => 'Masculino', 'Femenino' => 'Femenino','Otro' => 'Otro'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Fechanac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechanac', 'Fecha de nacimiento:') !!}
    {!! Form::date('fechanac', null, ['class' => 'form-control','id'=>'fechanac']) !!}
</div>
<!-- Scrpit de calcular edad  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
            $('#fechanac').on('change', calcularEdad);
        });
        
        function calcularEdad() {
            
            fecha = $(this).val();
            var hoy = new Date();
            var cumpleanos = new Date(fecha);
            var edad = hoy.getFullYear() - cumpleanos.getFullYear();
            var m = hoy.getMonth() - cumpleanos.getMonth();

            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                edad--;
            }
            $('#edad').val(edad);
        }
</script>

<!-- Edad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edad', 'Edad:') !!}
    {!! Form::number('edad', null, ['class' => 'form-control']) !!}
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'C.I.:') !!}
    {!! Form::number('ci', null, ['class' => 'form-control']) !!}
</div>

<!-- Barrio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barrio', 'Barrio:') !!}
   {!! Form::select('barrio',array('Sin eleccion' => 'Sin eleccion','Encarnacion' => 'Encarnacion', 'Mboi_Ka_e' => 'Mboi_Ka_e','San_Isidro' => 'San_Isidro','Sagrada_Familia' => 'Sagrada_Familia','Ciudad_Nueva' => 'Ciudad_Nueva','Chaipe' => 'Chaipe','Cambyreta' => 'Cambyreta','Santa_Maria' => 'Santa_Maria','Ita_Paso' => 'Ita_Paso','Buena_Vista' => 'Buena_Vista','Fatima' => 'Fatima'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Grupo Sanguineo Field -->
<div class="form-group col-sm-6">
     {!! Form::label('grupo_sanguineo', 'Grupo Sanguineo:') !!}
   {!! Form::select('grupo_sanguineo',array('Sin eleccion' => 'Sin eleccion','A+' => 'A+', 'A-' => 'A-','B+' => 'B+','B-' => 'B-','AB+' => 'AB+','AB-' => 'AB-','O+' => 'O+','O-' => 'O-'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Enfermedad Referencial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enfermedad_referencial', 'Comorbilidad:') !!}
    {!! Form::textarea('enfermedad_referencial', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Prueba Field -->
<div class="form-group col-sm-6">
     {!! Form::label('tipo_prueba', 'Tipo de prueba:') !!}
    {!! Form::select('tipo_prueba', ['NS1', 'Anticuerpo','Hemograma' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Resultado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resultado', 'Resultado:') !!}
    {!! Form::select('resultado',array('Sin eleccion' => 'Sin eleccion','Positivo' => 'Positivo', 'Negativo' => 'Negativo','Otro' => 'Otro'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
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
<!--IP Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('ip', $ip )     !!}
</div>  

<!-- Submit Field -->
<div class="form-group col-sm-12 pull-left">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pacients.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
