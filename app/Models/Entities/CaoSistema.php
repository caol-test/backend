<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoSistema
 * 
 * @property int $co_sistema
 * @property int|null $co_cliente
 * @property string|null $co_usuario
 * @property int|null $co_arquitetura
 * @property string|null $no_sistema
 * @property string|null $ds_sistema_resumo
 * @property string|null $ds_caracteristica
 * @property string|null $ds_requisito
 * @property string|null $no_diretoria_solic
 * @property string|null $ddd_telefone_solic
 * @property string|null $nu_telefone_solic
 * @property string|null $no_usuario_solic
 * @property Carbon|null $dt_solicitacao
 * @property Carbon|null $dt_entrega
 * @property int|null $co_email
 *
 * @package App\Models\Entities
 */
class CaoSistema extends Model
{
	protected $table = 'cao_sistema';
	protected $primaryKey = 'co_sistema';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_cliente' => 'int',
		'co_arquitetura' => 'int',
		'co_email' => 'int'
	];

	protected $dates = [
		'dt_solicitacao',
		'dt_entrega'
	];

	protected $fillable = [
		'co_cliente',
		'co_usuario',
		'co_arquitetura',
		'no_sistema',
		'ds_sistema_resumo',
		'ds_caracteristica',
		'ds_requisito',
		'no_diretoria_solic',
		'ddd_telefone_solic',
		'nu_telefone_solic',
		'no_usuario_solic',
		'dt_solicitacao',
		'dt_entrega',
		'co_email'
	];
}
