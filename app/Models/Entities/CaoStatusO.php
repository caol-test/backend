<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoStatusO
 * 
 * @property int $co_status_atual
 * @property string $ds_status
 *
 * @package App\Models\Entities
 */
class CaoStatusO extends Model
{
	protected $table = 'cao_status_os';
	protected $primaryKey = 'co_status_atual';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_status'
	];
}
