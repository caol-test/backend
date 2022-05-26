<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoDiaryReportConsultor
 * 
 * @property int $co_diary_report_consultor
 * @property int $co_movimento
 * @property int $co_atividade
 * @property string $ds_empresa
 * @property string $ds_assunto
 * @property Carbon $dt_agendamento
 * @property Carbon|null $dt_agendamento_fim
 * @property float $vl_fechamento
 * @property int|null $co_cliente
 *
 * @package App\Models\Entities
 */
class CaoDiaryReportConsultor extends Model
{
	protected $table = 'cao_diary_report_consultor';
	protected $primaryKey = 'co_diary_report_consultor';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_movimento' => 'int',
		'co_atividade' => 'int',
		'vl_fechamento' => 'float',
		'co_cliente' => 'int'
	];

	protected $dates = [
		'dt_agendamento',
		'dt_agendamento_fim'
	];

	protected $fillable = [
		'co_movimento',
		'co_atividade',
		'ds_empresa',
		'ds_assunto',
		'dt_agendamento',
		'dt_agendamento_fim',
		'vl_fechamento',
		'co_cliente'
	];
}
