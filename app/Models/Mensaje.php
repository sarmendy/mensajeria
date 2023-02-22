<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mensaje
 *
 * @property $id
 * @property $from_user_id
 * @property $to_user_id
 * @property $created_at
 * @property $updated_at
 * @property $contenido
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mensaje extends Model
{
    
    static $rules = [
		'from_user_id' => 'required',
		'to_user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['from_user_id','to_user_id','contenido'];



}
