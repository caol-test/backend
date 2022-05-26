<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoCidade
 * 
 * @property int $co_cidade
 * @property string $no_cidade
 * @property int $co_uf
 *
 * @package App\Models\Entities
 */
class CaoCidade extends Model
{
	protected $table = 'cao_cidade';
	protected $primaryKey = 'co_cidade';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_uf' => 'int'
	];

	protected $fillable = [
		'no_cidade',
		'co_uf'
	];
}
