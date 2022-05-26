<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsItemMenu
 * 
 * @property int $co_item
 * @property string $ds_item
 * @property int $co_sistema
 *
 * @package App\Models\Entities
 */
class CaoOsItemMenu extends Model
{
	protected $table = 'cao_os_item_menu';
	protected $primaryKey = 'co_item';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_sistema' => 'int'
	];

	protected $fillable = [
		'ds_item',
		'co_sistema'
	];
}
