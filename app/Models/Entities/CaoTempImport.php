<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoTempImport
 * 
 * @property int $codigo
 * @property string $descricao
 *
 * @package App\Models\Entities
 */
class CaoTempImport extends Model
{
	protected $table = 'cao_temp_import';
	protected $primaryKey = 'codigo';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'descricao'
	];
}
