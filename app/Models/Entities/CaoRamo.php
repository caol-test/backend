<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoRamo
 * 
 * @property int $co_ramo
 * @property string $ds_ramo
 *
 * @package App\Models\Entities
 */
class CaoRamo extends Model
{
	protected $table = 'cao_ramo';
	protected $primaryKey = 'co_ramo';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_ramo'
	];
}
