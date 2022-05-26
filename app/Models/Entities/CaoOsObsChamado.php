<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsObsChamado
 * 
 * @property int $co_obs
 * @property int|null $co_chamado
 * @property string|null $co_usuario
 * @property string|null $descricao
 * @property Carbon|null $dt_obs
 * @property string|null $email
 * @property string|null $arquivo_obs
 *
 * @package App\Models\Entities
 */
class CaoOsObsChamado extends Model
{
	protected $table = 'cao_os_obs_chamado';
	protected $primaryKey = 'co_obs';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_chamado' => 'int'
	];

	protected $dates = [
		'dt_obs'
	];

	protected $fillable = [
		'co_chamado',
		'co_usuario',
		'descricao',
		'dt_obs',
		'email',
		'arquivo_obs'
	];
}
