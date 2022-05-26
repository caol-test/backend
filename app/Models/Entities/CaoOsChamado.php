<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsChamado
 * 
 * @property int $co_chamado
 * @property int $co_sistema
 * @property int $co_os
 * @property string $ds_chamado
 * @property int $co_tipo
 * @property int $co_prioridade
 * @property int $co_item
 * @property string $descricao
 * @property string $ds_solucao
 * @property string $tempo
 * @property Carbon $dt_chamado
 * @property int $status
 * @property string $co_usuario
 * @property string $co_analista
 * @property string|null $email
 *
 * @package App\Models\Entities
 */
class CaoOsChamado extends Model
{
	protected $table = 'cao_os_chamado';
	protected $primaryKey = 'co_chamado';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_sistema' => 'int',
		'co_os' => 'int',
		'co_tipo' => 'int',
		'co_prioridade' => 'int',
		'co_item' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'dt_chamado'
	];

	protected $fillable = [
		'co_sistema',
		'co_os',
		'ds_chamado',
		'co_tipo',
		'co_prioridade',
		'co_item',
		'descricao',
		'ds_solucao',
		'tempo',
		'dt_chamado',
		'status',
		'co_usuario',
		'co_analista',
		'email'
	];
}
