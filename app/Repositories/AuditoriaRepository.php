<?php

namespace App\Repositories;

use App\Models\Auditoria;
use App\Repositories\BaseRepository;

/**
 * Class AuditoriaRepository
 * @package App\Repositories
 * @version October 2, 2020, 8:33 pm UTC
*/

class AuditoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'usuario',
        'operacion',
        'tabla_nombre',
        'fecha_de_operacion',
        'ip',
        'dato_anterior',
        'dato_nuevo'
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
        return Auditoria::class;
    }
}
