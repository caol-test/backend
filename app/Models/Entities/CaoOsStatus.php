<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsStatus
 * 
 * @property int $co_status_atual
 * @property string $ds_status
 *
 * @package App\Models\Entities
 */
class CaoOsStatus extends Model
{
	protected $table = 'cao_os_status';
	protected $primaryKey = 'co_status_atual';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_status'
	];
}
