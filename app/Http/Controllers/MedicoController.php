<?php

namespace App\Http\Controllers;


use App\Medico;
use App\Especialidade;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Redirect;
use Auth;

class MedicoController extends Controller
{
	private $medico, $especialidade;

	public function __construct(Medico $medico, Especialidade $especialidade)
	{
	
		$this->medico = $medico;
        $this->especialidade = $especialidade;
	}

	public function adicionarMedico(Request $request)
	{
        $tamanho = count($request->get('especialidades'));
      
        if($tamanho<2){
           return redirect()->back();
        }
    else{
        //salvar médico
        $medico = new Medico([
        'nome' => $request->get('nome'),
        'crm'=> $request->get('crm'),
        'telefone'=> $request->get('telefone')
        ]);
      $verificar = $medico->save();
        
        
        if($verificar){
        //salvar especialidades        
        $especialidades = $request->get('especialidades');
        $tamanho = count($request->get('especialidades'));
        
       for ($i = 0; $i < $tamanho; $i++) {
            $especialidade = new Especialidade([
                 'nome' => $especialidades[$i],
                 'crm'=> $request->get('crm')]);
                  $especialidade->save();
           
       }
        }
        

            
       
    
        
      return redirect('/')->with('success', 'Medico adicionado!');
    }
        
	}

	public function procurarMedico($crm, Request $request)
	{
        $especialidades = Especialidade::where('crm', $crm)->get();

		$medico = $this->medico->find($crm);
		return view('atualizar', compact('medico','especialidades'));

	}

	public function gerenciador()
	{
		$medicos = Medico::all();
		$especialidades = Especialidade::all();
		return view('tabela', compact('medicos','especialidades'));
	}

	public function atualizarMedico(Request $request, $crm)
	{
        $tamanho = count($request->get('especialidades'));
      
        if($tamanho<2){
           return redirect()->back();
        }
      //atualizar especializações
        DB::beginTransaction();
        $especialidade = Especialidade::find($crm);
        
      try {
            $this->especialidade->where('crm', $crm)->delete();
			DB::commit();
          
          
          $especialidades = $request->get('especialidades');
        $tamanho = count($request->get('especialidades'));
        
       for ($i = 0; $i < $tamanho; $i++) {
            $especialidade = new Especialidade([
                 'nome' => $especialidades[$i],
                 'crm'=> $request->get('crm')]);
                  $especialidade->save();
           
       }
          
		} catch (Exception $e) {
			DB::rollback();
		}
        
        
        //atualizar medico

		try {
			$medico = Medico::find($crm);

			DB::transaction(function () use ($request, $medico) {
				$medico->update($request->all());
			});

			return redirect('/');
		} catch (Exception $e) {

		}
	}

	public function deletarMedico($crm)
	{
		
		DB::beginTransaction();
		$medico = Medico::find($crm);
        $especialidade = Especialidade::find($crm);
        
		try {
            $this->especialidade->where('crm', $crm)->delete();
			$this->medico->where('crm', $crm)->delete();
			DB::commit();
		} catch (Exception $e) {
			DB::rollback();

		}
		 return redirect('/');
	}
}