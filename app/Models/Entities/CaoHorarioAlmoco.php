<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHorarioAlmoco
 * 
 * @property string $co_usuario
 * @property string $almoco_saida_hora
 * @property string $almoco_volta_hora
 *
 * @package App\Models\Entities
 */
class CaoHorarioAlmoco extends Model
{
	protected $table = 'cao_horario_almoco';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'co_usuario',
		'almoco_saida_hora',
		'almoco_volta_hora'
	];
}
