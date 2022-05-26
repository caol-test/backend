<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoMenu
 * 
 * @property int $co_menu
 * @property string $ds_menu
 * @property string $ds_pagina
 * @property string|null $ds_imagem
 *
 * @package App\Models\Entities
 */
class CaoMenu extends Model
{
	protected $table = 'cao_menu';
	protected $primaryKey = 'co_menu';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_menu',
		'ds_pagina',
		'ds_imagem'
	];
}
