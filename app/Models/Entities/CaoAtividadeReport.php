<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoAtividadeReport
 * 
 * @property int $id
 * @property int $co_cliente
 * @property string|null $inicio
 * @property string|null $fim
 * @property string|null $lembrete
 * @property int $co_atividade
 * @property int $co_os
 * @property string|null $assunto
 * @property string|null $conteudo
 * @property string $status
 * @property string|null $tempo
 * @property string $co_usuario
 * @property Carbon $data_ativ
 * @property string $retorno
 * @property int|null $co_fase
 *
 * @package App\Models\Entities
 */
class CaoAtividadeReport extends Model
{
	protected $table = 'cao_atividade_report';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_cliente' => 'int',
		'co_atividade' => 'int',
		'co_os' => 'int',
		'co_fase' => 'int'
	];

	protected $dates = [
		'data_ativ'
	];

	protected $fillable = [
		'co_cliente',
		'inicio',
		'fim',
		'lembrete',
		'co_atividade',
		'co_os',
		'assunto',
		'conteudo',
		'status',
		'tempo',
		'co_usuario',
		'data_ativ',
		'retorno',
		'co_fase'
	];
}
