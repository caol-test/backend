<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoTipoSistemaUsuario
 * 
 * @property int $co_sistema
 * @property string|null $ds_sistema
 *
 * @package App\Models\Entities
 */
class CaoTipoSistemaUsuario extends Model
{
	protected $table = 'cao_tipo_sistema_usuario';
	protected $primaryKey = 'co_sistema';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_sistema'
	];
}
