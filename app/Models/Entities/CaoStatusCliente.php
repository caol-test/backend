<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoStatusCliente
 * 
 * @property int $co_status
 * @property string $ds_status
 *
 * @package App\Models\Entities
 */
class CaoStatusCliente extends Model
{
	protected $table = 'cao_status_cliente';
	protected $primaryKey = 'co_status';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_status'
	];
}
