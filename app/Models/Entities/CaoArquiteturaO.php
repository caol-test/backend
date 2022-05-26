<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoArquiteturaO
 * 
 * @property int $co_arquitetura
 * @property string $ds_arquitetura
 *
 * @package App\Models\Entities
 */
class CaoArquiteturaO extends Model
{
	protected $table = 'cao_arquitetura_os';
	protected $primaryKey = 'co_arquitetura';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_arquitetura' => 'int'
	];

	protected $fillable = [
		'ds_arquitetura'
	];
}
