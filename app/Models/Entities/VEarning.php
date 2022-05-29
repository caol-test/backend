<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VEarning
 * 
 * @property string|null $year_month
 * @property string|null $month_year
 * @property string|null $user
 * @property float|null $net_earnings
 * @property float $fixed_cost
 * @property float|null $comission
 * @property float|null $lucro
 *
 * @package App\Models\Entities
 */
class VEarning extends Model
{
	protected $table = 'v_earnings';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'net_earnings' => 'float',
		'fixed_cost' => 'float',
		'comission' => 'float',
		'lucro' => 'float'
	];

	protected $fillable = [
		'year_month',
		'month_year',
		'user',
		'net_earnings',
		'fixed_cost',
		'comission',
		'lucro'
	];
}
