<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoDiaryReport
 * 
 * @property int $co_diary_report
 * @property Carbon|null $hr_gasta
 * @property int $co_atividade
 * @property string $ds_assunto
 * @property int $co_movimento
 * @property int|null $nu_os
 * @property int|null $co_sistema
 *
 * @package App\Models\Entities
 */
class CaoDiaryReport extends Model
{
	protected $table = 'cao_diary_report';
	protected $primaryKey = 'co_diary_report';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_atividade' => 'int',
		'co_movimento' => 'int',
		'nu_os' => 'int',
		'co_sistema' => 'int'
	];

	protected $dates = [
		'hr_gasta'
	];

	protected $fillable = [
		'hr_gasta',
		'co_atividade',
		'ds_assunto',
		'co_movimento',
		'nu_os',
		'co_sistema'
	];
}
