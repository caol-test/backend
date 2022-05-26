<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoTipoOmbudsman
 * 
 * @property int $idtipo
 * @property string $descricao
 * 
 * @property Collection|CaoOmbudsman[] $cao_ombudsmen
 *
 * @package App\Models\Entities
 */
class CaoTipoOmbudsman extends Model
{
	protected $table = 'cao_tipo_ombudsman';
	protected $primaryKey = 'idtipo';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'descricao'
	];

	public function cao_ombudsmen()
	{
		return $this->hasMany(CaoOmbudsman::class, 'idtipo');
	}
}
