<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoLogChamado
 * 
 * @property int $id
 * @property int $co_chamado
 * @property Carbon $dt_chamado
 * @property string $co_usuario
 * @property int $co_daily
 *
 * @package App\Models\Entities
 */
class CaoLogChamado extends Model
{
	protected $table = 'cao_log_chamado';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_chamado' => 'int',
		'co_daily' => 'int'
	];

	protected $dates = [
		'dt_chamado'
	];

	protected $fillable = [
		'co_chamado',
		'dt_chamado',
		'co_usuario',
		'co_daily'
	];
}
