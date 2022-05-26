<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHelpChamado
 * 
 * @property int $co_chamado
 * @property string $ds_chamado
 * @property string|null $ds_solucao
 * @property int $co_status
 * @property int $co_motivo
 * @property int $co_tela
 * @property int $co_autor
 * @property int $co_filial
 * @property int $co_sistema
 * @property Carbon $dt_chamado
 * @property Carbon|null $dt_solucao
 *
 * @package App\Models\Entities
 */
class CaoHelpChamado extends Model
{
	protected $table = 'cao_help_chamado';
	protected $primaryKey = 'co_chamado';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_status' => 'int',
		'co_motivo' => 'int',
		'co_tela' => 'int',
		'co_autor' => 'int',
		'co_filial' => 'int',
		'co_sistema' => 'int'
	];

	protected $dates = [
		'dt_chamado',
		'dt_solucao'
	];

	protected $fillable = [
		'ds_chamado',
		'ds_solucao',
		'co_status',
		'co_motivo',
		'co_tela',
		'co_autor',
		'co_filial',
		'co_sistema',
		'dt_chamado',
		'dt_solucao'
	];
}
