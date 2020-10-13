<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paciente
 * @package App\Models
 * @version October 13, 2020, 6:28 pm UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property string $ci
 */
class Paciente extends Model
{
    

    public $table = 'paciente';
    public $timestamps = false;
    protected $primaryKey = 'id_persona';

    



    public $fillable = [
        'nombre',
        'apellido',
        'ci'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_persona' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'ci' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'ci' => 'required'
    ];

    
}
