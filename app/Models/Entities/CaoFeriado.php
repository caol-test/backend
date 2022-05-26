<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoFeriado
 * 
 * @property int|null $dia
 * @property int|null $mes
 * @property int|null $ano
 *
 * @package App\Models\Entities
 */
class CaoFeriado extends Model
{
	protected $table = 'cao_feriados';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'dia' => 'int',
		'mes' => 'int',
		'ano' => 'int'
	];

	protected $fillable = [
		'dia',
		'mes',
		'ano'
	];
}
