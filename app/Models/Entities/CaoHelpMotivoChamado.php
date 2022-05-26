<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHelpMotivoChamado
 * 
 * @property int $co_motivo
 * @property string $ds_motivo
 *
 * @package App\Models\Entities
 */
class CaoHelpMotivoChamado extends Model
{
	protected $table = 'cao_help_motivo_chamado';
	protected $primaryKey = 'co_motivo';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_motivo'
	];
}
