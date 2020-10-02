<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Auditoria
 * @package App\Models
 * @version October 2, 2020, 8:33 pm UTC
 *
 * @property tex $usuario
 * @property string $operacion
 * @property string $tabla_nombre
 * @property string $fecha_de_operacion
 * @property string $ip
 * @property string $dato_anterior
 * @property string $dato_nuevo
 */
class Auditoria extends Model
{
    

    public $table = 'bd_auditoria';
    

    



    public $fillable = [
        'usuario',
        'operacion',
        'tabla_nombre',
        'fecha_de_operacion',
        'ip',
        'dato_anterior',
        'dato_nuevo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'operacion' => 'string',
        'tabla_nombre' => 'string',
        'fecha_de_operacion' => 'time',
        'ip' => 'string',
        'dato_anterior' => 'hstore',
        'dato_nuevo' => 'hstore'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'usuario' => 'required',
        'operacion' => 'required',
        'tabla_nombre' => 'required',
        'fecha_de_operacion' => 'required',
        'ip' => 'required',
        'dato_anterior' => 'required',
        'dato_nuevo' => 'required'
    ];

    
}
