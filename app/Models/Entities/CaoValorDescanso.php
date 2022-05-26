<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoValorDescanso
 * 
 * @property int $id
 * @property string $co_usuario
 * @property string $segundos
 * @property string $mes_referencia
 *
 * @package App\Models\Entities
 */
class CaoValorDescanso extends Model
{
	protected $table = 'cao_valor_descanso';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'co_usuario',
		'segundos',
		'mes_referencia'
	];
}
