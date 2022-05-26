<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoStatusClienteComplemento
 * 
 * @property int $co_complemento_status
 * @property string|null $ds_status
 * @property int|null $co_status
 *
 * @package App\Models\Entities
 */
class CaoStatusClienteComplemento extends Model
{
	protected $table = 'cao_status_cliente_complemento';
	protected $primaryKey = 'co_complemento_status';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_status' => 'int'
	];

	protected $fillable = [
		'ds_status',
		'co_status'
	];
}
