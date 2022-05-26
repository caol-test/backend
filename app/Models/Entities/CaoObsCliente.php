<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoObsCliente
 * 
 * @property int $co_obs
 * @property string $descricao
 * @property int $co_cliente
 * @property string|null $co_usuario
 * @property Carbon|null $dt_obs
 *
 * @package App\Models\Entities
 */
class CaoObsCliente extends Model
{
	protected $table = 'cao_obs_cliente';
	protected $primaryKey = 'co_obs';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_cliente' => 'int'
	];

	protected $dates = [
		'dt_obs'
	];

	protected $fillable = [
		'descricao',
		'co_cliente',
		'co_usuario',
		'dt_obs'
	];
}
