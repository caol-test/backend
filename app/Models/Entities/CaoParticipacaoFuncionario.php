<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoParticipacaoFuncionario
 * 
 * @property int $co_part_funcionario
 * @property float $pc_participacao
 * @property string $co_usuario
 * @property int $co_escritorio
 * @property Carbon $dt_referencia
 *
 * @package App\Models\Entities
 */
class CaoParticipacaoFuncionario extends Model
{
	protected $table = 'cao_participacao_funcionario';
	protected $primaryKey = 'co_part_funcionario';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'pc_participacao' => 'float',
		'co_escritorio' => 'int'
	];

	protected $dates = [
		'dt_referencia'
	];

	protected $fillable = [
		'pc_participacao',
		'co_usuario',
		'co_escritorio',
		'dt_referencia'
	];
}
