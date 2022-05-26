<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOmbudsman
 * 
 * @property int $id
 * @property int $idtipo
 * @property int $idcategoria
 * @property Carbon $data
 * @property string $comentario
 * @property int $co_escritorio
 * 
 * @property CaoTipoOmbudsman $cao_tipo_ombudsman
 * @property CaoCategoriasOmbudsman $cao_categorias_ombudsman
 *
 * @package App\Models\Entities
 */
class CaoOmbudsman extends Model
{
	protected $table = 'cao_ombudsman';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'idtipo' => 'int',
		'idcategoria' => 'int',
		'co_escritorio' => 'int'
	];

	protected $dates = [
		'data'
	];

	protected $fillable = [
		'idtipo',
		'idcategoria',
		'data',
		'comentario',
		'co_escritorio'
	];

	public function cao_tipo_ombudsman()
	{
		return $this->belongsTo(CaoTipoOmbudsman::class, 'idtipo');
	}

	public function cao_categorias_ombudsman()
	{
		return $this->belongsTo(CaoCategoriasOmbudsman::class, 'idcategoria');
	}
}
