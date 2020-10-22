<div class="table-responsive-sm">
     <div class="md-card-content" style="overflow-x: auto;">
    <table class="table table-striped" id="casoPositivos-table">
        <thead>
            <tr>
                <th>Nombre Apellido</th>
        <th>Codigo</th>
        <th>Region</th>
        <th>Codigo Distrito</th>
        <th>Distrito</th>
        <th>Fecha Notificacion</th>
        <th>Medico</th>
        <th>Media Edad</th>
        <th>Residente</th>
        <th>Hospedaje</th>
        <th>Telefono Verificado</th>
        <th>Codigo Departamento</th>
        <th>Departamento</th>
        <th>Zona</th>
        <th>Personal De Blanco</th>
        <th>Albergue</th>
        <th>Lugar Albergue</th>
        <th>Sintomas Fiebre</th>
        <th>Hospitalizado</th>
        <th>Signo Sintoma</th>
        <th>Vacuna Para La Influenza</th>
        <th>Fecha Vacunacion</th>
        <th>Viajo Resiente</th>
        <th>Centro Asistencia Covid</th>
        <th>Centro Asistencia Pais</th>
        <th>Centro Asistencia Ciudad</th>
        <th>Nombre Centro Asistencia</th>
        <th>Fecha Asistida</th>
        <th>Contacto Con Animales</th>
        <th>Contacto Persona</th>
        <th>Tipo Contacto</th>
        <th>Contacto Con Infectado</th>
        <th>Dato De Contacto</th>
        <th>Toma De Muestra</th>
        <th>Laboratorio</th>
        <th>Nro Planilla</th>
        <th>Anho</th>
        <th>Responsable De Carga</th>
        <th>Usuario Lugar</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($casoPositivos as $casoPositivo)
            <tr>
                <td>{{ $casoPositivo->nombre_apellido }}</td>
            <td>{{ $casoPositivo->codigo }}</td>
            <td>{{ $casoPositivo->region }}</td>
            <td>{{ $casoPositivo->codigo_distrito }}</td>
            <td>{{ $casoPositivo->distrito }}</td>
            <td>{{ $casoPositivo->fecha_notificacion }}</td>
            <td>{{ $casoPositivo->medico }}</td>
            <td>{{ $casoPositivo->media_edad }}</td>
            <td>{{ $casoPositivo->residente }}</td>
            <td>{{ $casoPositivo->hospedaje }}</td>
            <td>{{ $casoPositivo->telefono_verificado }}</td>
            <td>{{ $casoPositivo->codigo_departamento }}</td>
            <td>{{ $casoPositivo->departamento }}</td>
            <td>{{ $casoPositivo->zona }}</td>
            <td>{{ $casoPositivo->personal_de_blanco }}</td>
            <td>{{ $casoPositivo->albergue }}</td>
            <td>{{ $casoPositivo->lugar_albergue }}</td>
            <td>{{ $casoPositivo->sintomas_fiebre }}</td>
            <td>{{ $casoPositivo->hospitalizado }}</td>
            <td>{{ $casoPositivo->signo_sintoma }}</td>
            <td>{{ $casoPositivo->vacuna_para_la_influenza }}</td>
            <td>{{ $casoPositivo->fecha_vacunacion }}</td>
            <td>{{ $casoPositivo->viajo_resiente }}</td>
            <td>{{ $casoPositivo->centro_asistencia_covid }}</td>
            <td>{{ $casoPositivo->centro_asistencia_pais }}</td>
            <td>{{ $casoPositivo->centro_asistencia_ciudad }}</td>
            <td>{{ $casoPositivo->nombre_centro_asistencia }}</td>
            <td>{{ $casoPositivo->fecha_asistida }}</td>
            <td>{{ $casoPositivo->contacto_con_animales }}</td>
            <td>{{ $casoPositivo->contacto_persona }}</td>
            <td>{{ $casoPositivo->tipo_contacto }}</td>
            <td>{{ $casoPositivo->contacto_con_infectado }}</td>
            <td>{{ $casoPositivo->dato_de_contacto }}</td>
            <td>{{ $casoPositivo->toma_de_muestra }}</td>
            <td>{{ $casoPositivo->laboratorio }}</td>
            <td>{{ $casoPositivo->nro_planilla }}</td>
            <td>{{ $casoPositivo->anho }}</td>
            <td>{{ $casoPositivo->responsable_de_carga }}</td>
            <td>{{ $casoPositivo->usuario_lugar }}</td>
                <td>
                    {!! Form::open(['route' => ['casoPositivos.destroy', $casoPositivo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('casoPositivos.show', [$casoPositivo->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('casoPositivos.edit', [$casoPositivo->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>