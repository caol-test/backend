<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoConhecimento
 * 
 * @property int $idconhecimento
 * @property string $assunto
 * @property string $conhecimento
 * @property string $url
 * @property string $tags
 * @property string $usuario
 * @property Carbon $datahora
 * 
 * @property CaoUsuario $cao_usuario
 * @property Collection|CaoConhecimentosFonte[] $cao_conhecimentos_fontes
 * @property Collection|CaoPontosConhecimento[] $cao_pontos_conhecimentos
 *
 * @package App\Models\Entities
 */
class CaoConhecimento extends Model
{
	protected $table = 'cao_conhecimentos';
	protected $primaryKey = 'idconhecimento';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $dates = [
		'datahora'
	];

	protected $fillable = [
		'assunto',
		'conhecimento',
		'url',
		'tags',
		'usuario',
		'datahora'
	];

	public function cao_usuario()
	{
		return $this->belongsTo(CaoUsuario::class, 'usuario');
	}

	public function cao_conhecimentos_fontes()
	{
		return $this->hasMany(CaoConhecimentosFonte::class, 'idconhecimento');
	}

	public function cao_pontos_conhecimentos()
	{
		return $this->hasMany(CaoPontosConhecimento::class, 'idconhecimento');
	}
}
