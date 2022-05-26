<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoAviso
 * 
 * @property int $co_aviso
 * @property string $ds_aviso
 *
 * @package App\Models\Entities
 */
class CaoAviso extends Model
{
	protected $table = 'cao_aviso';
	protected $primaryKey = 'co_aviso';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_aviso'
	];
}
