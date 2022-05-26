<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoMovimentoJustificativa
 * 
 * @property int $co_movimento_justificativa
 * @property int $co_movimento
 * @property int $nu_os
 * @property string $ds_justificativa
 *
 * @package App\Models\Entities
 */
class CaoMovimentoJustificativa extends Model
{
	protected $table = 'cao_movimento_justificativa';
	protected $primaryKey = 'co_movimento_justificativa';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_movimento' => 'int',
		'nu_os' => 'int'
	];

	protected $fillable = [
		'co_movimento',
		'nu_os',
		'ds_justificativa'
	];
}
