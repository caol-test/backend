<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoPontosConhecimento
 * 
 * @property int $idpontos
 * @property int $pontuacao
 * @property string $co_coordenador
 * @property int $idconhecimento
 * 
 * @property CaoEscalaRanking $cao_escala_ranking
 * @property CaoUsuario $cao_usuario
 * @property CaoConhecimento $cao_conhecimento
 *
 * @package App\Models\Entities
 */
class CaoPontosConhecimento extends Model
{
	protected $table = 'cao_pontos_conhecimento';
	protected $primaryKey = 'idpontos';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'pontuacao' => 'int',
		'idconhecimento' => 'int'
	];

	protected $fillable = [
		'pontuacao',
		'co_coordenador',
		'idconhecimento'
	];

	public function cao_escala_ranking()
	{
		return $this->belongsTo(CaoEscalaRanking::class, 'pontuacao');
	}

	public function cao_usuario()
	{
		return $this->belongsTo(CaoUsuario::class, 'co_coordenador');
	}

	public function cao_conhecimento()
	{
		return $this->belongsTo(CaoConhecimento::class, 'idconhecimento');
	}
}
