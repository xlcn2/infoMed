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







//CRUDs
	Route::get('/', 'MedicoController@gerenciador');
       

		Route::get('/novo', function(){
			return view('paineis.cadastro'); 
		});
       
		Route::post('/', 'MedicoController@adicionarMedico')->name('adicionarMedico');
		Route::get('/search/{id}', 'MedicoController@procurarMedico')->name('procurarMedico');
		Route::post('/update/{id}', 'MedicoController@atualizarMedico')->name('atualizarMedico');
		Route::get('/delete/{id}', 'MedicoController@deletarMedico')->name('deletarMedico');