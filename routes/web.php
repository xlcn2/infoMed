<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//paineis
Route::get('/index', 'SiteController@index');
Route::get('/contato', 'SiteController@contato');
Route::get('/ativo/cadastro', 'AtivoController@cadastro');
Route::get('/ativo/localizacao', 'AtivoController@localizacao');
Route::get('/contato', 'SiteController@contato');




//CRUDs
//Locais
	Route::get('/', 'MedicoController@gerenciador');
       

		Route::get('/novo', function(){
			return view('cadastro'); 
		});
       
		Route::post('/', 'MedicoController@adicionarMedico')->name('adicionarMedico');
		Route::get('/search/{id}', 'MedicoController@procurarMedico')->name('procurarMedico');
		Route::post('/update/{id}', 'MedicoController@atualizarMedico')->name('atualizarMedico');
		Route::get('/delete/{id}', 'MedicoController@deletarMedico')->name('deletarMedico');