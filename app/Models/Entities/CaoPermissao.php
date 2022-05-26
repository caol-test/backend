<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoPermissao
 * 
 * @property string $co_usuario
 * @property string $permissao_intervalo
 * @property string $permissao_hora_extra
 * 
 * @property CaoUsuario $cao_usuario
 *
 * @package App\Models\Entities
 */
class CaoPermissao extends Model
{
	protected $table = 'cao_permissao';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'co_usuario',
		'permissao_intervalo',
		'permissao_hora_extra'
	];

	public function cao_usuario()
	{
		return $this->belongsTo(CaoUsuario::class, 'co_usuario');
	}
}
