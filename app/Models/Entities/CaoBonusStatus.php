<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoBonusStatus
 * 
 * @property int $id
 * @property string $co_usuario
 * @property Carbon $data_solic
 * @property string $mes
 * @property string $valor
 * @property string|null $is_solic
 * @property string|null $is_pg
 * @property string|null $is_horas
 *
 * @package App\Models\Entities
 */
class CaoBonusStatus extends Model
{
	protected $table = 'cao_bonus_status';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $dates = [
		'data_solic'
	];

	protected $fillable = [
		'co_usuario',
		'data_solic',
		'mes',
		'valor',
		'is_solic',
		'is_pg',
		'is_horas'
	];
}
