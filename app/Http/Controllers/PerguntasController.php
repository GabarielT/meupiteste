<?php

namespace App\Http\Controllers;

use App\Perguntas;
use Illuminate\Http\Request;
use App\Categoria;
use Exception;

class PerguntasController extends Controller
{
	public function index(){
		$categorias = Categoria::all();
		return view('pages.users.questions.create_questions', compact('categorias'));
	}

	//Dentro da página perguntaView.blade, irá salvar as perguntas e suas categorias
    public function create(Request $request)
    {
		if(!empty($request->set_question) && !empty($request->set_category_question)){
		$perguntas=new Perguntas();
		$perguntas->pss_pergunta=$request->set_question;
		$perguntas->pss_id_categoria = $request->set_category_question;
		$perguntas->pss_habilitado=1;
		$perguntas->save();
		return redirect()->route('listQuestions');
		}else{
			 echo 'Inválido';
		}

    }

    public function store(Request $request)
    {

    }

	//Dentro da página pesquisaView.blade,é o botão responsável por realizar a pesquisa.
	//Irá redirecionar para perguntaSearch.blade onde tem a lista do resultado da pesquisa.
	public function acaoPesquisar(Request $request){
		$categoria=$request->set_option_search;
		$pesquisa=Perguntas::join('pss_categorias', 'pss_perguntas.pss_id_categoria', '=', 'pss_categorias.pss_id_categoria')
							->select('pss_perguntas.*','pss_categorias.pss_nome')
							->where([
									['pss_categorias.pss_id_categoria','=',"$categoria"],
									['pss_perguntas.pss_habilitado','=','1']
									])
							->get();
		return view('pages.users.questions.search_questions',compact('pesquisa'));

	}

	//Vai para a página pesquisaView, mostrando as categoria para o usuário escolher
	public function pesquisar(Request $request){
		$categorias = Categoria::all();
        return view('pages.users.questions.search_questions', compact('categorias'));
	}


	//Mostra a lista com todas as peguntas e categoiras
    public function show(Request $request)
    {
        $pesquisa=Perguntas::join('pss_categorias', 'pss_perguntas.pss_id_categoria', '=', 'pss_categorias.pss_id_categoria')
                            ->select('pss_perguntas.*', 'pss_categorias.pss_categoria')
                            ->get();
		return view('pages.users.questions.list_questions')->with('resultado', $pesquisa);
    }

	//retorna para a página uptade_perguntas para editar uma pergunta
    public function edit($id)
    {

        $atualizar=Perguntas::where('pss_id_pergunta','=',"$id")->get();
		$categorias=Categoria::all();
		return view('pages.users.questions.edit_questions')->with('categorias',$categorias)->with('atualizar',$atualizar);
    }

	//ação de atualizar a pergunta
    public function update(Request $request, $id)
    {
		//caso ele deseja desabilitar a pergunta
		try{
		if(isset($_POST['desabilitar'])){

			Perguntas::where('pss_id_pergunta',$id)->update(['pss_pergunta'=>$request->pergunta,'pss_habilitado'=>$request->desabilitar]);
			return redirect()->route('listQuestions');

		//se não ele vai atualizar a pergunta
		}else{
Perguntas::where('pss_id_pergunta',$id)->update(['pss_pergunta'=>$request->pergunta,'pss_habilitado'=>$request->enviar]);
		return redirect()->route('listQuestions');
		}
		}catch (Exception $e){
			echo $e -> getMessage();
		}
    }
}
