<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoEscalaRanking
 * 
 * @property int $idescala
 * @property int $qtd_visual
 * @property int $pontuacao
 * 
 * @property Collection|CaoPontosConhecimento[] $cao_pontos_conhecimentos
 *
 * @package App\Models\Entities
 */
class CaoEscalaRanking extends Model
{
	protected $table = 'cao_escala_ranking';
	protected $primaryKey = 'idescala';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'qtd_visual' => 'int',
		'pontuacao' => 'int'
	];

	protected $fillable = [
		'qtd_visual',
		'pontuacao'
	];

	public function cao_pontos_conhecimentos()
	{
		return $this->hasMany(CaoPontosConhecimento::class, 'pontuacao');
	}
}
