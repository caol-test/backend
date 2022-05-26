<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoClienteContato
 * 
 * @property int $co_cliente
 * @property Carbon|null $dt_contato
 * @property int|null $fg_agendado
 * @property Carbon|null $hr_ini
 * @property Carbon|null $hr_end
 *
 * @package App\Models\Entities
 */
class CaoClienteContato extends Model
{
	protected $table = 'cao_cliente_contato';
	protected $primaryKey = 'co_cliente';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_cliente' => 'int',
		'fg_agendado' => 'int'
	];

	protected $dates = [
		'dt_contato',
		'hr_ini',
		'hr_end'
	];

	protected $fillable = [
		'dt_contato',
		'fg_agendado',
		'hr_ini',
		'hr_end'
	];
}
