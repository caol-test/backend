<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoBoleto
 * 
 * @property int $co_boleto
 * @property int $co_cliente
 * @property int $co_sistema
 * @property int $co_os
 * @property string $valor
 * @property string $vencimento
 * @property int $status
 * @property string|null $boleto
 * @property string|null $linha_dig
 * @property string|null $parcela
 *
 * @package App\Models\Entities
 */
class CaoBoleto extends Model
{
	protected $table = 'cao_boleto';
	protected $primaryKey = 'co_boleto';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_cliente' => 'int',
		'co_sistema' => 'int',
		'co_os' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'co_cliente',
		'co_sistema',
		'co_os',
		'valor',
		'vencimento',
		'status',
		'boleto',
		'linha_dig',
		'parcela'
	];
}
