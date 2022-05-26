<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoBancoDeHora
 * 
 * @property int $id
 * @property string $co_usuario
 * @property Carbon $data_cadastro
 * @property int $segundos
 * @property string $tipo
 *
 * @package App\Models\Entities
 */
class CaoBancoDeHora extends Model
{
	protected $table = 'cao_banco_de_horas';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'segundos' => 'int'
	];

	protected $dates = [
		'data_cadastro'
	];

	protected $fillable = [
		'co_usuario',
		'data_cadastro',
		'segundos',
		'tipo'
	];
}
