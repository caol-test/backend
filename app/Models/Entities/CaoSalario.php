<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoSalario
 * 
 * @property string $co_usuario
 * @property Carbon $dt_alteracao
 * @property float $brut_salario
 * @property float $liq_salario
 *
 * @package App\Models\Entities
 */
class CaoSalario extends Model
{
	protected $table = 'cao_salario';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'brut_salario' => 'float',
		'liq_salario' => 'float'
	];

	protected $dates = [
		'dt_alteracao'
	];

	protected $fillable = [
		'brut_salario',
		'liq_salario'
	];
}
