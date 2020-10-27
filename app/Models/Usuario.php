<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * @package App\Models
 * @version October 13, 2020, 5:30 pm UTC
 *
 * @property string $nombre
 * @property string $correo electronico
 * @property string $contraseña
 */
class Usuario extends Model
{
    

    public $table = 'usuario';
    
    public $timestamps = false;
   



    public $fillable = [
        'id',
        'nombre',
        'correo_electronico',
        'contraseña',
        'ip'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'correo_electronico' => 'string',
        'contraseña' => 'string',
        'ip' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'correo_electronico' => 'required',
        'contraseña' => 'required'
    ];

    
}
