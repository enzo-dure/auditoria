<?php

namespace App\Repositories;

use App\Models\Pacient;
use App\Repositories\BaseRepository;

/**
 * Class PacientRepository
 * @package App\Repositories
 * @version October 22, 2020, 7:27 pm UTC
*/

class PacientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_apellido',
        'genero',
        'fechanac',
        'edad',
        'ci',
        'barrio',
        'telefono',
        'grupo_sanguineo',
        'enfermedad_referencial',
        'tipo_prueba',
        'resultado',
        'email',
        'latitud',
        'longitud',
        'usuario_id',
        'ip'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pacient::class;
    }
}
