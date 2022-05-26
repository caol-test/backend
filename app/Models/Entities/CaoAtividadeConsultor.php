<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoAtividadeConsultor
 * 
 * @property int $co_atividade
 * @property string $ds_atividade
 * @property string|null $ativo
 *
 * @package App\Models\Entities
 */
class CaoAtividadeConsultor extends Model
{
	protected $table = 'cao_atividade_consultor';
	protected $primaryKey = 'co_atividade';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_atividade',
		'ativo'
	];
}
