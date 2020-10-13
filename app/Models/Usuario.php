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
 * @property string $apellido
 * @property string $cargo
 */
class Usuario extends Model
{
    

    public $table = 'usuario';
    
    public $timestamps = false;
   



    public $fillable = [
        'id',
        'nombre',
        'apellido',
        'cargo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'cargo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'cargo' => 'required'
    ];

    
}
