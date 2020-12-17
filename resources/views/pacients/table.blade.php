<div class="table-responsive-sm">
    <div class="md-card-content" style="overflow-x: auto;">
    <table class="table table-striped" id="pacients-table">
        <thead>
            <tr>
                <th>Nombre Apellido</th>
        <th>Genero</th>
        <th>Fechanac</th>
        <th>Edad</th>
        <th>Ci</th>
        <th>Barrio</th>
        <th>Telefono</th>
        <th>Grupo Sanguineo</th>
        <th>Enfermedad Referencial</th>
        <th>Tipo Prueba</th>
        <th>Resultado</th>
        <th>Email</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Usuario Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pacients as $pacient)
            <tr>
                <td>{{ $pacient->nombre_apellido }}</td>
            <td>{{ $pacient->genero }}</td>
            <td>{{ $pacient->fechanac }}</td>
            <td>{{ $pacient->edad }}</td>
            <td>{{ $pacient->ci }}</td>
            <td>{{ $pacient->barrio }}</td>
            <td>{{ $pacient->telefono }}</td>
            <td>{{ $pacient->grupo_sanguineo }}</td>
            <td>{{ $pacient->enfermedad_referencial }}</td>
           
            <td>{{ $pacient->resultado }}</td>
            <td>{{ $pacient->email }}</td>
            <td>{{ $pacient->latitud }}</td>
            <td>{{ $pacient->longitud }}</td>
           
                <td>
                    {!! Form::open(['route' => ['pacients.destroy', $pacient->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pacients.show', [$pacient->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('pacients.edit', [$pacient->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
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