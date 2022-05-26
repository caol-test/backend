<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoUsuarioDtDisp
 * 
 * @property int $co_dt_disp
 * @property string|null $co_usuario
 * @property Carbon $dt_disp
 * @property Carbon $dt_alt
 *
 * @package App\Models\Entities
 */
class CaoUsuarioDtDisp extends Model
{
	protected $table = 'cao_usuario_dt_disp';
	protected $primaryKey = 'co_dt_disp';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $dates = [
		'dt_disp',
		'dt_alt'
	];

	protected $fillable = [
		'co_usuario',
		'dt_disp',
		'dt_alt'
	];
}
