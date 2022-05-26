<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsFase
 * 
 * @property int $co_fase
 * @property string|null $descricao
 * @property string $descricao_ingl
 * @property int|null $ordem
 *
 * @package App\Models\Entities
 */
class CaoOsFase extends Model
{
	protected $table = 'cao_os_fase';
	protected $primaryKey = 'co_fase';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'ordem' => 'int'
	];

	protected $fillable = [
		'descricao',
		'descricao_ingl',
		'ordem'
	];
}
