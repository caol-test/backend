<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoPermissaoHoraExtra
 * 
 * @property int $id_permissao
 * @property int $co_movimento
 *
 * @package App\Models\Entities
 */
class CaoPermissaoHoraExtra extends Model
{
	protected $table = 'cao_permissao_hora_extra';
	protected $primaryKey = 'id_permissao';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_movimento' => 'int'
	];

	protected $fillable = [
		'co_movimento'
	];
}
