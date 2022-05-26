<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoMovimentoO
 * 
 * @property int $co_movimento_os
 * @property int $nu_os
 * @property int $co_sistema
 * @property int|null $co_tipo_movimento
 * @property int|null $nu_valor
 * @property string|null $ds_valor
 * @property string|null $usuario_obs
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fim
 *
 * @package App\Models\Entities
 */
class CaoMovimentoO extends Model
{
	protected $table = 'cao_movimento_os';
	protected $primaryKey = 'co_movimento_os';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'nu_os' => 'int',
		'co_sistema' => 'int',
		'co_tipo_movimento' => 'int',
		'nu_valor' => 'int'
	];

	protected $dates = [
		'dt_ini',
		'dt_fim'
	];

	protected $fillable = [
		'nu_os',
		'co_sistema',
		'co_tipo_movimento',
		'nu_valor',
		'ds_valor',
		'usuario_obs',
		'dt_ini',
		'dt_fim'
	];
}
