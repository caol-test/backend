<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoAcompanhamentoSistema
 * 
 * @property int $co_acompanhamento
 * @property string|null $email
 * @property string|null $senha
 * @property int|null $co_sistema
 * @property string|null $status
 *
 * @package App\Models\Entities
 */
class CaoAcompanhamentoSistema extends Model
{
	protected $table = 'cao_acompanhamento_sistema';
	protected $primaryKey = 'co_acompanhamento';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_sistema' => 'int'
	];

	protected $fillable = [
		'email',
		'senha',
		'co_sistema',
		'status'
	];
}
