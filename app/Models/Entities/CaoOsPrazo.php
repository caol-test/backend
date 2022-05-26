<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsPrazo
 * 
 * @property int $co_prazo
 * @property int|null $co_os
 * @property int|null $co_fase
 * @property int|null $total_analista
 * @property int|null $total_hora
 *
 * @package App\Models\Entities
 */
class CaoOsPrazo extends Model
{
	protected $table = 'cao_os_prazo';
	protected $primaryKey = 'co_prazo';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_os' => 'int',
		'co_fase' => 'int',
		'total_analista' => 'int',
		'total_hora' => 'int'
	];

	protected $fillable = [
		'co_os',
		'co_fase',
		'total_analista',
		'total_hora'
	];
}
