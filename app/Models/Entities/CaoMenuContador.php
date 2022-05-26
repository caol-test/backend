<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoMenuContador
 * 
 * @property string $co_usuario
 * @property int $co_menu
 * @property int $nu_pontos
 * @property bool $in_processado
 *
 * @package App\Models\Entities
 */
class CaoMenuContador extends Model
{
	protected $table = 'cao_menu_contador';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_menu' => 'int',
		'nu_pontos' => 'int',
		'in_processado' => 'bool'
	];

	protected $fillable = [
		'nu_pontos',
		'in_processado'
	];
}
