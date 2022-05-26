<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHistOcorrenciasO
 * 
 * @property int $idocorrencia
 * @property int|null $co_os
 * @property string|null $co_usuario
 * @property Carbon|null $data
 * @property string $tipo
 * @property string $descricao
 * @property string $responsavel
 * @property Carbon|null $data_fechamento
 * 
 * @property CaoUsuario|null $cao_usuario
 * @property CaoO|null $cao_o
 *
 * @package App\Models\Entities
 */
class CaoHistOcorrenciasO extends Model
{
	protected $table = 'cao_hist_ocorrencias_os';
	protected $primaryKey = 'idocorrencia';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_os' => 'int'
	];

	protected $dates = [
		'data',
		'data_fechamento'
	];

	protected $fillable = [
		'co_os',
		'co_usuario',
		'data',
		'tipo',
		'descricao',
		'responsavel',
		'data_fechamento'
	];

	public function cao_usuario()
	{
		return $this->belongsTo(CaoUsuario::class, 'co_usuario');
	}

	public function cao_o()
	{
		return $this->belongsTo(CaoO::class, 'co_os');
	}
}
