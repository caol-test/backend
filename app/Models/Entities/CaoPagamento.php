<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoPagamento
 * 
 * @property int $co_pagamento
 * @property string $co_usuario
 * @property string $tp_pagamento
 * @property Carbon $dt_pagamento
 * @property float $vl_pagamento
 * @property Carbon $dt_referencia_pagamento
 *
 * @package App\Models\Entities
 */
class CaoPagamento extends Model
{
	protected $table = 'cao_pagamento';
	protected $primaryKey = 'co_pagamento';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'vl_pagamento' => 'float'
	];

	protected $dates = [
		'dt_pagamento',
		'dt_referencia_pagamento'
	];

	protected $fillable = [
		'co_usuario',
		'tp_pagamento',
		'dt_pagamento',
		'vl_pagamento',
		'dt_referencia_pagamento'
	];
}
