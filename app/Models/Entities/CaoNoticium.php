<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoNoticium
 * 
 * @property int $co_noticia
 * @property string $assunto
 * @property string $descricao
 * @property string $foto
 * @property string $co_usuario
 * @property Carbon $dt_noticia
 *
 * @package App\Models\Entities
 */
class CaoNoticium extends Model
{
	protected $table = 'cao_noticia';
	protected $primaryKey = 'co_noticia';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $dates = [
		'dt_noticia'
	];

	protected $fillable = [
		'assunto',
		'descricao',
		'foto',
		'co_usuario',
		'dt_noticia'
	];
}
