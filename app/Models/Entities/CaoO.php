<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoO
 * 
 * @property int $co_os
 * @property int|null $nu_os
 * @property int|null $co_sistema
 * @property string|null $co_usuario
 * @property int|null $co_arquitetura
 * @property string|null $ds_os
 * @property string|null $ds_caracteristica
 * @property string|null $ds_requisito
 * @property Carbon|null $dt_inicio
 * @property Carbon|null $dt_fim
 * @property int|null $co_status
 * @property string|null $diretoria_sol
 * @property Carbon|null $dt_sol
 * @property string|null $nu_tel_sol
 * @property string|null $ddd_tel_sol
 * @property string|null $nu_tel_sol2
 * @property string|null $ddd_tel_sol2
 * @property string|null $usuario_sol
 * @property Carbon|null $dt_imp
 * @property Carbon|null $dt_garantia
 * @property int|null $co_email
 * @property int|null $co_os_prospect_rel
 * 
 * @property Collection|CaoHistOcorrenciasO[] $cao_hist_ocorrencias_os
 *
 * @package App\Models\Entities
 */
class CaoO extends Model
{
	protected $table = 'cao_os';
	protected $primaryKey = 'co_os';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'nu_os' => 'int',
		'co_sistema' => 'int',
		'co_arquitetura' => 'int',
		'co_status' => 'int',
		'co_email' => 'int',
		'co_os_prospect_rel' => 'int'
	];

	protected $dates = [
		'dt_inicio',
		'dt_fim',
		'dt_sol',
		'dt_imp',
		'dt_garantia'
	];

	protected $fillable = [
		'nu_os',
		'co_sistema',
		'co_usuario',
		'co_arquitetura',
		'ds_os',
		'ds_caracteristica',
		'ds_requisito',
		'dt_inicio',
		'dt_fim',
		'co_status',
		'diretoria_sol',
		'dt_sol',
		'nu_tel_sol',
		'ddd_tel_sol',
		'nu_tel_sol2',
		'ddd_tel_sol2',
		'usuario_sol',
		'dt_imp',
		'dt_garantia',
		'co_email',
		'co_os_prospect_rel'
	];

	public function cao_hist_ocorrencias_os()
	{
		return $this->hasMany(CaoHistOcorrenciasO::class, 'co_os');
	}
}
