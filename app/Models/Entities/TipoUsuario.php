<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoUsuario
 * 
 * @property int $co_tipo_usuario
 * @property string $ds_tipo_usuario
 * @property int $co_sistema
 *
 * @package App\Models\Entities
 */
class TipoUsuario extends Model
{
	protected $table = 'tipo_usuario';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_tipo_usuario' => 'int',
		'co_sistema' => 'int'
	];

	protected $fillable = [
		'ds_tipo_usuario'
	];
}
