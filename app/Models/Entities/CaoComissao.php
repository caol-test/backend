<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoComissao
 * 
 * @property int $co_comissao
 * @property int $co_fatura
 * @property Carbon $dt_efetuado
 *
 * @package App\Models\Entities
 */
class CaoComissao extends Model
{
	protected $table = 'cao_comissao';
	protected $primaryKey = 'co_comissao';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_fatura' => 'int'
	];

	protected $dates = [
		'dt_efetuado'
	];

	protected $fillable = [
		'co_fatura',
		'dt_efetuado'
	];
}
