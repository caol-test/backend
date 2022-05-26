<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoCliente
 * 
 * @property int $co_cliente
 * @property string|null $no_razao
 * @property string|null $no_fantasia
 * @property string|null $no_contato
 * @property string|null $nu_telefone
 * @property string|null $nu_ramal
 * @property string|null $nu_cnpj
 * @property string|null $ds_endereco
 * @property int|null $nu_numero
 * @property string|null $ds_complemento
 * @property string $no_bairro
 * @property string|null $nu_cep
 * @property string|null $no_pais
 * @property int|null $co_ramo
 * @property int $co_cidade
 * @property int|null $co_status
 * @property string|null $ds_site
 * @property string|null $ds_email
 * @property string|null $ds_cargo_contato
 * @property string|null $tp_cliente
 * @property string|null $ds_referencia
 * @property int|null $co_complemento_status
 * @property string|null $nu_fax
 * @property string|null $ddd2
 * @property string|null $telefone2
 *
 * @package App\Models\Entities
 */
class CaoCliente extends Model
{
	protected $table = 'cao_cliente';
	protected $primaryKey = 'co_cliente';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'nu_numero' => 'int',
		'co_ramo' => 'int',
		'co_cidade' => 'int',
		'co_status' => 'int',
		'co_complemento_status' => 'int'
	];

	protected $fillable = [
		'no_razao',
		'no_fantasia',
		'no_contato',
		'nu_telefone',
		'nu_ramal',
		'nu_cnpj',
		'ds_endereco',
		'nu_numero',
		'ds_complemento',
		'no_bairro',
		'nu_cep',
		'no_pais',
		'co_ramo',
		'co_cidade',
		'co_status',
		'ds_site',
		'ds_email',
		'ds_cargo_contato',
		'tp_cliente',
		'ds_referencia',
		'co_complemento_status',
		'nu_fax',
		'ddd2',
		'telefone2'
	];
}
