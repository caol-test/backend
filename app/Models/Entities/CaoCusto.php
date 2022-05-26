<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoCusto
 * 
 * @property int $co_custo
 * @property int $co_tipo_custo
 * @property string $descricao
 * @property int $co_escritorio
 * @property Carbon|null $dt_compra
 * @property Carbon|null $dt_pagamento
 * @property string|null $co_boleto
 * @property float $valor
 * @property string|null $parcela
 * @property bool|null $pag
 * @property int $co_custo_high
 *
 * @package App\Models\Entities
 */
class CaoCusto extends Model
{
	protected $table = 'cao_custo';
	protected $primaryKey = 'co_custo';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_tipo_custo' => 'int',
		'co_escritorio' => 'int',
		'valor' => 'float',
		'pag' => 'bool',
		'co_custo_high' => 'int'
	];

	protected $dates = [
		'dt_compra',
		'dt_pagamento'
	];

	protected $fillable = [
		'co_tipo_custo',
		'descricao',
		'co_escritorio',
		'dt_compra',
		'dt_pagamento',
		'co_boleto',
		'valor',
		'parcela',
		'pag',
		'co_custo_high'
	];
}
