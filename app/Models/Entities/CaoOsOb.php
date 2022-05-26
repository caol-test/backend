<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsOb
 * 
 * @property int $co_obs
 * @property int|null $co_os
 * @property string|null $co_usuario
 * @property string|null $descricao
 * @property Carbon|null $dt_obs
 *
 * @package App\Models\Entities
 */
class CaoOsOb extends Model
{
	protected $table = 'cao_os_obs';
	protected $primaryKey = 'co_obs';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_os' => 'int'
	];

	protected $dates = [
		'dt_obs'
	];

	protected $fillable = [
		'co_os',
		'co_usuario',
		'descricao',
		'dt_obs'
	];
}
