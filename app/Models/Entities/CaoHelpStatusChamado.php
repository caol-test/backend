<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHelpStatusChamado
 * 
 * @property int $co_status
 * @property string $ds_status
 *
 * @package App\Models\Entities
 */
class CaoHelpStatusChamado extends Model
{
	protected $table = 'cao_help_status_chamado';
	protected $primaryKey = 'co_status';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_status'
	];
}
