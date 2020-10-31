<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pacient
 * @package App\Models
 * @version October 22, 2020, 7:27 pm UTC
 *
 * @property string $nombre_apellido
 * @property string $genero
 * @property string $fechanac
 * @property integer $edad
 * @property integer $ci
 * @property string $barrio
 * @property string $telefono
 * @property string $grupo_sanguineo
 * @property string $enfermedad_referencial
 * @property string $tipo_prueba
 * @property string $resultado
 * @property string $email
 * @property string $latitud
 * @property string $longitud
 * @property integer $usuario_id
 */
class Pacient extends Model
{
    use SoftDeletes;

    public $table = 'pacients';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_apellido' => 'string',
        'genero' => 'string',
        'fechanac' => 'string',
        'edad' => 'integer',
        'ci' => 'integer',
        'barrio' => 'string',
        'telefono' => 'string',
        'grupo_sanguineo' => 'string',
        'enfermedad_referencial' => 'string',
        'tipo_prueba' => 'string',
        'resultado' => 'string',
        'email' => 'string',
        'latitud' => 'string',
        'longitud' => 'string',
        'usuario_id' => 'integer',
        'ip' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_apellido' => 'required',
        'genero' => 'required',
        'fechanac' => 'required',
        'edad' => 'required',
        'ci' => 'required',
        'barrio' => 'required',
        'telefono' => 'required',
        'grupo_sanguineo' => 'required',
        'enfermedad_referencial' => 'required',
        'tipo_prueba' => 'required',
        'resultado' => 'required',
        'email' => 'required',
        'latitud' => 'required',
        'longitud' => 'required',
        'usuario_id' => 'required'
    ];

    
}
