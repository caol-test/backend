<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoDrAtivComp
 * 
 * @property int $id_ativ_comp
 * @property string $co_usuario
 * @property Carbon $data
 * @property string $assunto
 * @property Carbon $tempo_gasto
 *
 * @package App\Models\Entities
 */
class CaoDrAtivComp extends Model
{
	protected $table = 'cao_dr_ativ_comp';
	protected $primaryKey = 'id_ativ_comp';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $dates = [
		'data',
		'tempo_gasto'
	];

	protected $fillable = [
		'co_usuario',
		'data',
		'assunto',
		'tempo_gasto'
	];
}
