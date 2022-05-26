<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoAtividadeTeste
 * 
 * @property int $co_atividade
 * @property string $ds_atividade
 * @property int $co_tipo_usuario
 *
 * @package App\Models\Entities
 */
class CaoAtividadeTeste extends Model
{
	protected $table = 'cao_atividade_teste';
	protected $primaryKey = 'co_atividade';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_tipo_usuario' => 'int'
	];

	protected $fillable = [
		'ds_atividade',
		'co_tipo_usuario'
	];
}
