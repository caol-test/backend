<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoStatusAgendamento
 * 
 * @property int $co_status_agendamento
 * @property string $ds_status_agendamento
 *
 * @package App\Models\Entities
 */
class CaoStatusAgendamento extends Model
{
	protected $table = 'cao_status_agendamento';
	protected $primaryKey = 'co_status_agendamento';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'ds_status_agendamento'
	];
}
