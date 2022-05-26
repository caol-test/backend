<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoBancoHora
 * 
 * @property int $co_banc_horas
 * @property string $co_usuario
 * @property string $periodo
 * @property int $min_mes
 * @property int $min_ferias
 * @property int $min_pago
 * @property int $min_total
 *
 * @package App\Models\Entities
 */
class CaoBancoHora extends Model
{
	protected $table = 'cao_banco_horas';
	protected $primaryKey = 'co_banc_horas';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'min_mes' => 'int',
		'min_ferias' => 'int',
		'min_pago' => 'int',
		'min_total' => 'int'
	];

	protected $fillable = [
		'co_usuario',
		'periodo',
		'min_mes',
		'min_ferias',
		'min_pago',
		'min_total'
	];
}
