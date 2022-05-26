<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoTipoConhecimentoUsuario
 * 
 * @property int $co_conhecimento
 * @property string|null $ds_conhecimento
 * @property int $co_sistema
 *
 * @package App\Models\Entities
 */
class CaoTipoConhecimentoUsuario extends Model
{
	protected $table = 'cao_tipo_conhecimento_usuario';
	protected $primaryKey = 'co_conhecimento';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_sistema' => 'int'
	];

	protected $fillable = [
		'ds_conhecimento',
		'co_sistema'
	];
}
