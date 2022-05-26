<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoEscritorio
 * 
 * @property int $co_escritorio
 * @property string $local
 *
 * @package App\Models\Entities
 */
class CaoEscritorio extends Model
{
	protected $table = 'cao_escritorio';
	protected $primaryKey = 'co_escritorio';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'local'
	];
}
