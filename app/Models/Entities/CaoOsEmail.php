<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsEmail
 * 
 * @property int $co_email
 * @property int|null $co_os
 * @property string|null $email
 * @property string|null $senha
 * @property string $nome
 * @property int $co_cliente
 * @property int $ativo
 * @property string|null $ddd
 * @property string|null $tel
 * @property string|null $cargo
 *
 * @package App\Models\Entities
 */
class CaoOsEmail extends Model
{
	protected $table = 'cao_os_email';
	protected $primaryKey = 'co_email';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_os' => 'int',
		'co_cliente' => 'int',
		'ativo' => 'int'
	];

	protected $fillable = [
		'co_os',
		'email',
		'senha',
		'nome',
		'co_cliente',
		'ativo',
		'ddd',
		'tel',
		'cargo'
	];
}
