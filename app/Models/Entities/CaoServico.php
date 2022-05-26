<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoServico
 * 
 * @property int $co_servico
 * @property string $ds_servico
 *
 * @package App\Models\Entities
 */
class CaoServico extends Model
{
	protected $table = 'cao_servico';
	protected $primaryKey = 'co_servico';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_servico'
	];
}
