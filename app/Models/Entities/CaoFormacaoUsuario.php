<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoFormacaoUsuario
 * 
 * @property string $co_usuario
 * @property string $tp_curso
 * @property string|null $ds_curso
 * @property string|null $ds_instituicao
 * @property Carbon|null $dt_conclusao
 *
 * @package App\Models\Entities
 */
class CaoFormacaoUsuario extends Model
{
	protected $table = 'cao_formacao_usuario';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $dates = [
		'dt_conclusao'
	];

	protected $fillable = [
		'ds_curso',
		'ds_instituicao',
		'dt_conclusao'
	];
}
