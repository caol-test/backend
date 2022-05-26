<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PermissaoSistema
 * 
 * @property string $co_usuario
 * @property int $co_tipo_usuario
 * @property int $co_sistema
 * @property string $in_ativo
 * @property string|null $co_usuario_atualizacao
 * @property Carbon $dt_atualizacao
 *
 * @package App\Models\Entities
 */
class PermissaoSistema extends Model
{
	protected $table = 'permissao_sistema';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_tipo_usuario' => 'int',
		'co_sistema' => 'int'
	];

	protected $dates = [
		'dt_atualizacao'
	];

	protected $fillable = [
		'in_ativo',
		'co_usuario_atualizacao',
		'dt_atualizacao'
	];
}
