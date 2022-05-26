<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoConhecimentosFonte
 * 
 * @property int $idfonte
 * @property int $idconhecimento
 * @property Carbon $datahora
 * @property string $arquivo
 * @property string $caminho
 * 
 * @property CaoConhecimento $cao_conhecimento
 *
 * @package App\Models\Entities
 */
class CaoConhecimentosFonte extends Model
{
	protected $table = 'cao_conhecimentos_fontes';
	protected $primaryKey = 'idfonte';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'idconhecimento' => 'int'
	];

	protected $dates = [
		'datahora'
	];

	protected $fillable = [
		'idconhecimento',
		'datahora',
		'arquivo',
		'caminho'
	];

	public function cao_conhecimento()
	{
		return $this->belongsTo(CaoConhecimento::class, 'idconhecimento');
	}
}
