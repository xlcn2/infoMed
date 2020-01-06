<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
	public $timestamps = false;
	protected $table = 'especialidade';
    protected $primaryKey = 'crm';
	public $incrementing = true;

	protected $fillable = [
		'nome',
		'crm',
		
	];

	public function ativo()
	{
		return $this->hasMany('App\Especialidade', 'crm');
	}

	public function pesquisa() {
		return $this->hasMany('App\Pesquisa', 'crm');
	}
}