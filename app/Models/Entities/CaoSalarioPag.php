<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoSalarioPag
 * 
 * @property int $id_pagamento
 * @property string $co_usuario
 * @property Carbon $dt_efetuado
 * @property string $status
 * @property string|null $observacao
 * 
 * @property CaoUsuario $cao_usuario
 *
 * @package App\Models\Entities
 */
class CaoSalarioPag extends Model
{
	protected $table = 'cao_salario_pag';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'id_pagamento' => 'int'
	];

	protected $dates = [
		'dt_efetuado'
	];

	protected $fillable = [
		'id_pagamento',
		'status',
		'observacao'
	];

	public function cao_usuario()
	{
		return $this->belongsTo(CaoUsuario::class, 'co_usuario');
	}
}
