<!-- Nombre Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_apellido', 'Nombre Apellido:') !!}
    {!! Form::text('nombre_apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Region Field -->
<div class="form-group col-sm-6">
    {!! Form::label('region', 'Region:') !!}
   {!! Form::select('region',array('Sin eleccion' => 'Sin eleccion','Encarnacion' => 'Encarnacion', 'Alto Verá' => 'Alto Verá','Cambyretá' => 'Cambyretá','Capitán Meza' => 'Capitán Meza','Capitán Miranda' => 'Capitán Miranda','Carmen del Paraná' => 'Carmen del Paraná','Coronel José Félix Bogado' => 'Coronel José Félix Bogado','Edelira' => 'Edelira','    Fram' => '  Fram','San Juan del Paraná' => 'San Juan del Paraná','  General Artigas' => '  General Artigas'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Codigo Distrito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_distrito', 'Codigo Distrito:') !!}
    {!! Form::text('codigo_distrito', null, ['class' => 'form-control']) !!}
</div>

<!-- Distrito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('distrito', 'Distrito:') !!}
    {!! Form::text('distrito', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Notificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_notificacion', 'Fecha Notificacion:') !!}
    {!! Form::text('fecha_notificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Medico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medico', 'Medico:') !!}
    {!! Form::text('medico', null, ['class' => 'form-control']) !!}
</div>

<!-- Media Edad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('media_edad', 'Media Edad:') !!}
    {!! Form::text('media_edad', null, ['class' => 'form-control']) !!}
</div>

<!-- Residente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('residente', 'Residente:') !!}
    {!! Form::text('residente', null, ['class' => 'form-control']) !!}
</div>

<!-- Hospedaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hospedaje', 'Hospedaje:') !!}
    {!! Form::text('hospedaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Verificado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_verificado', 'Telefono Verificado:') !!}
    {!! Form::text('telefono_verificado', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_departamento', 'Codigo Departamento:') !!}
    {!! Form::text('codigo_departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Zona Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zona', 'Zona:') !!}
    {!! Form::text('zona', null, ['class' => 'form-control']) !!}
</div>

<!-- Personal De Blanco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personal_de_blanco', 'Personal De Blanco:') !!}
    {!! Form::text('personal_de_blanco', null, ['class' => 'form-control']) !!}
</div>

<!-- Albergue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('albergue', 'Albergue:') !!}
    {!! Form::text('albergue', null, ['class' => 'form-control']) !!}
</div>

<!-- Lugar Albergue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lugar_albergue', 'Lugar Albergue:') !!}
    {!! Form::text('lugar_albergue', null, ['class' => 'form-control']) !!}
</div>

<!-- Sintomas Fiebre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sintomas_fiebre', 'Sintomas Fiebre:') !!}
    {!! Form::text('sintomas_fiebre', null, ['class' => 'form-control']) !!}
</div>

<!-- Hospitalizado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hospitalizado', 'Hospitalizado:') !!}
    {!! Form::text('hospitalizado', null, ['class' => 'form-control']) !!}
</div>

<!-- Signo Sintoma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('signo_sintoma', 'Signo Sintoma:') !!}
    {!! Form::text('signo_sintoma', null, ['class' => 'form-control']) !!}
</div>

<!-- Vacuna Para La Influenza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vacuna_para_la_influenza', 'Vacuna Para La Influenza:') !!}
    {!! Form::text('vacuna_para_la_influenza', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Vacunacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_vacunacion', 'Fecha Vacunacion:') !!}
    {!! Form::text('fecha_vacunacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Viajo Resiente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('viajo_resiente', 'Viajo Resiente:') !!}
    {!! Form::text('viajo_resiente', null, ['class' => 'form-control']) !!}
</div>

<!-- Centro Asistencia Covid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('centro_asistencia_covid', 'Centro Asistencia Covid:') !!}
    {!! Form::text('centro_asistencia_covid', null, ['class' => 'form-control']) !!}
</div>

<!-- Centro Asistencia Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('centro_asistencia_pais', 'Centro Asistencia Pais:') !!}
    {!! Form::text('centro_asistencia_pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Centro Asistencia Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('centro_asistencia_ciudad', 'Centro Asistencia Ciudad:') !!}
    {!! Form::text('centro_asistencia_ciudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Centro Asistencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_centro_asistencia', 'Nombre Centro Asistencia:') !!}
    {!! Form::text('nombre_centro_asistencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Asistida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_asistida', 'Fecha Asistida:') !!}
    {!! Form::text('fecha_asistida', null, ['class' => 'form-control']) !!}
</div>

<!-- Contacto Con Animales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contacto_con_animales', 'Contacto Con Animales:') !!}
    {!! Form::text('contacto_con_animales', null, ['class' => 'form-control']) !!}
</div>

<!-- Contacto Persona Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contacto_persona', 'Contacto Persona:') !!}
    {!! Form::text('contacto_persona', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_contacto', 'Tipo Contacto:') !!}
    {!! Form::text('tipo_contacto', null, ['class' => 'form-control']) !!}
</div>

<!-- Contacto Con Infectado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contacto_con_infectado', 'Contacto Con Infectado:') !!}
    {!! Form::text('contacto_con_infectado', null, ['class' => 'form-control']) !!}
</div>

<!-- Dato De Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dato_de_contacto', 'Dato De Contacto:') !!}
    {!! Form::text('dato_de_contacto', null, ['class' => 'form-control']) !!}
</div>

<!-- Toma De Muestra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('toma_de_muestra', 'Toma De Muestra:') !!}
    {!! Form::text('toma_de_muestra', null, ['class' => 'form-control']) !!}
</div>

<!-- Laboratorio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('laboratorio', 'Laboratorio:') !!}
    {!! Form::text('laboratorio', null, ['class' => 'form-control']) !!}
</div>

<!-- Nro Planilla Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nro_planilla', 'Nro Planilla:') !!}
    {!! Form::text('nro_planilla', null, ['class' => 'form-control']) !!}
</div>

<!-- Anho Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anho', 'Anho:') !!}
    {!! Form::text('anho', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable De Carga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('responsable_de_carga', 'Responsable De Carga:') !!}
    {!! Form::text('responsable_de_carga', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Lugar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario_lugar', 'Usuario Lugar:') !!}
    {!! Form::number('usuario_lugar', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('casoPositivos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
