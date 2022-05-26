<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoConhecimentoUsuario
 * 
 * @property string $co_usuario
 * @property int $co_conhecimento
 * @property int|null $nv_conhecimento
 * @property bool|null $is_certificado
 *
 * @package App\Models\Entities
 */
class CaoConhecimentoUsuario extends Model
{
	protected $table = 'cao_conhecimento_usuario';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_conhecimento' => 'int',
		'nv_conhecimento' => 'int',
		'is_certificado' => 'bool'
	];

	protected $fillable = [
		'nv_conhecimento',
		'is_certificado'
	];
}
