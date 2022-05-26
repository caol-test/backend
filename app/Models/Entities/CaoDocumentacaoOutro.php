<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoDocumentacaoOutro
 * 
 * @property int $id
 * @property string $nome
 * @property int $co_sistema
 *
 * @package App\Models\Entities
 */
class CaoDocumentacaoOutro extends Model
{
	protected $table = 'cao_documentacao_outros';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_sistema' => 'int'
	];

	protected $fillable = [
		'nome',
		'co_sistema'
	];
}
