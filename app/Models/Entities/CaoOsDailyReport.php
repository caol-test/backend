<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsDailyReport
 * 
 * @property int $co_daily
 * @property int|null $co_os
 * @property int|null $co_fase
 * @property string|null $co_usuario
 * @property string|null $ds_assunto
 * @property Carbon|null $tempo_gasto
 * @property Carbon|null $data
 * @property int|null $co_status_atual
 * @property int|null $co_chamado
 * @property int|null $co_atividade
 *
 * @package App\Models\Entities
 */
class CaoOsDailyReport extends Model
{
	protected $table = 'cao_os_daily_report';
	protected $primaryKey = 'co_daily';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_os' => 'int',
		'co_fase' => 'int',
		'co_status_atual' => 'int',
		'co_chamado' => 'int',
		'co_atividade' => 'int'
	];

	protected $dates = [
		'tempo_gasto',
		'data'
	];

	protected $fillable = [
		'co_os',
		'co_fase',
		'co_usuario',
		'ds_assunto',
		'tempo_gasto',
		'data',
		'co_status_atual',
		'co_chamado',
		'co_atividade'
	];
}
