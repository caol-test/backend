<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoDocumentacaoSistema
 * 
 * @property int $id
 * @property int $co_sistema
 * @property string|null $descricao
 * @property string $pasta
 * @property int|null $sub_grupo
 * @property string $co_usuario
 * @property Carbon $dt_doc
 * @property string $arquivo
 *
 * @package App\Models\Entities
 */
class CaoDocumentacaoSistema extends Model
{
	protected $table = 'cao_documentacao_sistema';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'co_sistema' => 'int',
		'sub_grupo' => 'int'
	];

	protected $dates = [
		'dt_doc'
	];

	protected $fillable = [
		'co_sistema',
		'descricao',
		'pasta',
		'sub_grupo',
		'co_usuario',
		'dt_doc',
		'arquivo'
	];
}
