<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHelpFilial
 * 
 * @property int $co_filial
 * @property string $no_filial
 * @property int $co_cliente
 * @property string $estado
 *
 * @package App\Models\Entities
 */
class CaoHelpFilial extends Model
{
	protected $table = 'cao_help_filial';
	protected $primaryKey = 'co_filial';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_cliente' => 'int'
	];

	protected $fillable = [
		'no_filial',
		'co_cliente',
		'estado'
	];
}
