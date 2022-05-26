<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoComplemento
 * 
 * @property int $co_complemento
 * @property string|null $ds_complemento
 *
 * @package App\Models\Entities
 */
class CaoComplemento extends Model
{
	protected $table = 'cao_complemento';
	protected $primaryKey = 'co_complemento';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_complemento'
	];
}
