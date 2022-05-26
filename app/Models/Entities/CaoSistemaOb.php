<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoSistemaOb
 * 
 * @property int $co_obs
 * @property string|null $descricao
 * @property int|null $co_sistema
 * @property string|null $co_usuario
 * @property Carbon|null $dt_obs
 *
 * @package App\Models\Entities
 */
class CaoSistemaOb extends Model
{
	protected $table = 'cao_sistema_obs';
	protected $primaryKey = 'co_obs';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_sistema' => 'int'
	];

	protected $dates = [
		'dt_obs'
	];

	protected $fillable = [
		'descricao',
		'co_sistema',
		'co_usuario',
		'dt_obs'
	];
}
