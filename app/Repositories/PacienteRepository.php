<?php

namespace App\Repositories;

use App\Models\Paciente;
use App\Repositories\BaseRepository;

/**
 * Class PacienteRepository
 * @package App\Repositories
 * @version October 13, 2020, 6:28 pm UTC
*/

class PacienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'ci'
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
        return Paciente::class;
    }
}
