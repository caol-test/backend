<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoTipoIdiomaUsuario
 * 
 * @property int $co_idioma
 * @property string|null $ds_idioma
 *
 * @package App\Models\Entities
 */
class CaoTipoIdiomaUsuario extends Model
{
	protected $table = 'cao_tipo_idioma_usuario';
	protected $primaryKey = 'co_idioma';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_idioma'
	];
}
