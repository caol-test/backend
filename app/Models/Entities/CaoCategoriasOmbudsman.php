<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoCategoriasOmbudsman
 * 
 * @property int $idcategoria
 * @property string $descricao
 * 
 * @property Collection|CaoOmbudsman[] $cao_ombudsmen
 *
 * @package App\Models\Entities
 */
class CaoCategoriasOmbudsman extends Model
{
	protected $table = 'cao_categorias_ombudsman';
	protected $primaryKey = 'idcategoria';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'descricao'
	];

	public function cao_ombudsmen()
	{
		return $this->hasMany(CaoOmbudsman::class, 'idcategoria');
	}
}
