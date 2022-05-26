<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoFaturaPag
 * 
 * @property int $id_fatura_pag
 * @property int $co_fatura
 * @property Carbon $dt_efetuado
 * @property float $valor_pago
 *
 * @package App\Models\Entities
 */
class CaoFaturaPag extends Model
{
	protected $table = 'cao_fatura_pag';
	protected $primaryKey = 'id_fatura_pag';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_fatura' => 'int',
		'valor_pago' => 'float'
	];

	protected $dates = [
		'dt_efetuado'
	];

	protected $fillable = [
		'co_fatura',
		'dt_efetuado',
		'valor_pago'
	];
}
