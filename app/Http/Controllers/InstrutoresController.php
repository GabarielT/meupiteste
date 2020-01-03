<?php

namespace App\Http\Controllers;

use App\Instrutores;
use Illuminate\Http\Request;

class InstrutoresController extends Controller
{

    public function adicionar(){
        return view('pages.users.instructor.create_instructor');
    }

    public function salvar(Request $request){

        $instrutCurso = new Instrutores();

        $instrutCurso->pss_instrutor = $request->set_name;
        $instrutCurso->pss_habilitado = 1;
        $instrutCurso->save();

        return redirect()->route('listInstructor');

    }

    public function lista(){
            $instrutores = Instrutores::all();
            return view('pages.users.instructor.list_instructor')->with('instrutores', $instrutores);
    }


    public function pagina_pesquisar(Request $request){
		$searchInstrutor = Instrutores::all();
        return view('pages.users.instructor.search_instructor', compact('searchInstrutor'));
	}

    public function update(Request $request, $id ){

       Instrutores::find($id)->update([
       'pss_instrutor'=>$request->set_teacher,]);
    return view('pages.users.instructor.search_instructor');

}

}
