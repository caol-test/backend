<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsAnalistum
 * 
 * @property int $co_analista
 * @property int|null $co_os
 * @property string|null $co_usuario
 *
 * @package App\Models\Entities
 */
class CaoOsAnalistum extends Model
{
	protected $table = 'cao_os_analista';
	protected $primaryKey = 'co_analista';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_os' => 'int'
	];

	protected $fillable = [
		'co_os',
		'co_usuario'
	];
}
