<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoBonu
 * 
 * @property int $bon_categoria
 * @property int $bon_inicio
 * @property int $bon_fim
 * @property float|null $bon_valor_sem
 * @property float|null $bon_valor_fimsem
 *
 * @package App\Models\Entities
 */
class CaoBonu extends Model
{
	protected $table = 'cao_bonus';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'bon_categoria' => 'int',
		'bon_inicio' => 'int',
		'bon_fim' => 'int',
		'bon_valor_sem' => 'float',
		'bon_valor_fimsem' => 'float'
	];

	protected $fillable = [
		'bon_valor_sem',
		'bon_valor_fimsem'
	];
}
