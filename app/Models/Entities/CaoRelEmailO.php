<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoRelEmailO
 * 
 * @property int $id
 * @property int $co_email
 * @property int $co_os
 *
 * @package App\Models\Entities
 */
class CaoRelEmailO extends Model
{
	protected $table = 'cao_rel_email_os';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_email' => 'int',
		'co_os' => 'int'
	];

	protected $fillable = [
		'co_email',
		'co_os'
	];
}
