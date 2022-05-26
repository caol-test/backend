<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHelpAutor
 * 
 * @property int $co_autor
 * @property string $no_autor
 * @property int $co_filial
 * @property string|null $nu_ddd1
 * @property string|null $nu_tel1
 * @property string|null $nu_ramal1
 * @property string|null $nu_ddd2
 * @property string|null $nu_tel2
 * @property string|null $nu_ramal2
 * @property string|null $ds_email
 * @property string $ds_funcao
 *
 * @package App\Models\Entities
 */
class CaoHelpAutor extends Model
{
	protected $table = 'cao_help_autor';
	protected $primaryKey = 'co_autor';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_filial' => 'int'
	];

	protected $fillable = [
		'no_autor',
		'co_filial',
		'nu_ddd1',
		'nu_tel1',
		'nu_ramal1',
		'nu_ddd2',
		'nu_tel2',
		'nu_ramal2',
		'ds_email',
		'ds_funcao'
	];
}
