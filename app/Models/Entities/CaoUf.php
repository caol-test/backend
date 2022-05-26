<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoUf
 * 
 * @property int $co_uf
 * @property string $ds_uf
 *
 * @package App\Models\Entities
 */
class CaoUf extends Model
{
	protected $table = 'cao_uf';
	protected $primaryKey = 'co_uf';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_uf'
	];
}
