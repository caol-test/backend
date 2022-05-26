<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoTipoCusto
 * 
 * @property int $co_tipo_custo
 * @property string $descricao
 *
 * @package App\Models\Entities
 */
class CaoTipoCusto extends Model
{
	protected $table = 'cao_tipo_custo';
	protected $primaryKey = 'co_tipo_custo';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'descricao'
	];
}
