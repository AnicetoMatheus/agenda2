<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\cadastrarTarefaModel;//Importar a classe que eu quero utilizar
 
class cadastrarTarefa extends Controller
{
    public function index(){
        $dados = cadastrarTarefaModel::all();
        return view('paginas.adicionar')->With('dados', $dados);
    }//fim do metodo
 
 
public function store(Request $request)
    {
    $tarefanome = $request->input('tarefa');
    $descricaonome = $request->input('descricao');
 
    $model = new cadastrarTarefaModel();
    $model->tarefa = $tarefanome;
    $model->descricao = $descricaonome;
    $model->save();//Armazenar os dados no DB
 
    return redirect('/adicionar');
 
}//fim do método store
}//fim da classe