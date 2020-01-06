<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
	public $timestamps = false;
	protected $table = 'medico';
	protected $primaryKey = 'crm';
	public $incrementing = true;

	protected $fillable = [
		'crm',
		'telefone',
		'nome',
	];

	public function ativo()
	{
		return $this->hasMany('App\Medico', 'crm');
	}

	public function pesquisa() {
		return $this->hasMany('App\Pesquisa', 'crm');
	}
}