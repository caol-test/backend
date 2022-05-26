<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoAgendamento
 * 
 * @property int $co_agendamento
 * @property Carbon $dt_hr_inicio
 * @property Carbon|null $dt_hr_fim
 * @property int $co_status_agendamento
 * @property int $co_diary_report_consultor
 * @property int $co_complemento
 *
 * @package App\Models\Entities
 */
class CaoAgendamento extends Model
{
	protected $table = 'cao_agendamento';
	protected $primaryKey = 'co_agendamento';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_status_agendamento' => 'int',
		'co_diary_report_consultor' => 'int',
		'co_complemento' => 'int'
	];

	protected $dates = [
		'dt_hr_inicio',
		'dt_hr_fim'
	];

	protected $fillable = [
		'dt_hr_inicio',
		'dt_hr_fim',
		'co_status_agendamento',
		'co_diary_report_consultor',
		'co_complemento'
	];
}
