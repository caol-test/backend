<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoFormacaoIdiomaUsuario
 * 
 * @property string $co_usuario
 * @property int $co_idioma
 * @property int|null $nv_leitura
 * @property int|null $nv_escrita
 * @property int|null $nv_fala
 *
 * @package App\Models\Entities
 */
class CaoFormacaoIdiomaUsuario extends Model
{
	protected $table = 'cao_formacao_idioma_usuario';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_idioma' => 'int',
		'nv_leitura' => 'int',
		'nv_escrita' => 'int',
		'nv_fala' => 'int'
	];

	protected $fillable = [
		'nv_leitura',
		'nv_escrita',
		'nv_fala'
	];
}
