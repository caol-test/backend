<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHelpTelaChamado
 * 
 * @property int $co_tela
 * @property int $co_cliente
 * @property int $co_sistema
 * @property string $ds_tela
 *
 * @package App\Models\Entities
 */
class CaoHelpTelaChamado extends Model
{
	protected $table = 'cao_help_tela_chamado';
	protected $primaryKey = 'co_tela';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_cliente' => 'int',
		'co_sistema' => 'int'
	];

	protected $fillable = [
		'co_cliente',
		'co_sistema',
		'ds_tela'
	];
}
