<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoMovimento
 * 
 * @property int $co_movimento
 * @property string $co_usuario
 * @property Carbon $dt_entrada
 * @property Carbon $dt_saida_almoco
 * @property Carbon $dt_volta_almoco
 * @property Carbon $dt_saida
 * @property bool $is_encerrado
 *
 * @package App\Models\Entities
 */
class CaoMovimento extends Model
{
	protected $table = 'cao_movimento';
	protected $primaryKey = 'co_movimento';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'is_encerrado' => 'bool'
	];

	protected $dates = [
		'dt_entrada',
		'dt_saida_almoco',
		'dt_volta_almoco',
		'dt_saida'
	];

	protected $fillable = [
		'co_usuario',
		'dt_entrada',
		'dt_saida_almoco',
		'dt_volta_almoco',
		'dt_saida',
		'is_encerrado'
	];
}
