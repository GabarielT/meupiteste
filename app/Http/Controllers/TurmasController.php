<?php

namespace App\Http\Controllers;

use App\Instrutores;
use App\Turmas;
use Exception;
use Illuminate\Http\Request;
use App\Cursos;

class TurmasController extends Controller
{
    public function adicionar(){

        $cursos= Cursos::all();

        $instrutores= Instrutores::all();

    return view('pages.users.classes.create_classes')->with('cursos', $cursos)->with('instrutores', $instrutores);
}



    public function create(Request $request){


        $turmasController = new Turmas();

        $turmasController->pss_cod_turma = $request->set_hidden_code;
        $turmasController->pss_id_instrutor = $request->set_teacher;
        $turmasController->pss_id_curso = $request->set_course;
        $turmasController->pss_data_inicio = date('Y-m-d', strtotime($request->set_starter_date));
        $turmasController->pss_data_final = date('Y-m-d', strtotime($request->set_final_date));
        $turmasController->pss_horario = $request->set_period;
        $turmasController->pss_qnt_alunos = $request->set_quantity_student;

        $turmasController->pss_situacao = 0 ;

        $turmasController->save();

        return redirect()->route('listClasses')->with('turmasController',$turmasController);
    }


    public function listar(){
        $turmas = Turmas::join('pss_cursos', 'pss_turmas.pss_id_curso', '=', 'pss_cursos.pss_id_curso')
                        ->join('pss_instrutores', 'pss_turmas.pss_id_instrutor', '=', 'pss_instrutores.pss_id_instrutor')
                        ->select('pss_turmas.*', 'pss_instrutores.pss_instrutor', 'pss_cursos.pss_curso')
                        ->get();

        return view('pages.users.classes.list_classes')->with('turmas', $turmas);
    }

     public function pesquisar($id){
         $get = Turmas::where('id', '=',  "$id")->get();
         return view('pages.users.classes.edit_classes' , compact('get'));
     }

     public function atualizar(Request $request, $id){
         try {
             Turmas::find($id)->update([
                 'pss_id_instrutor'=>$request->set_teacher,
                 'pss_id_curso'=>$request->set_course,
                 'pss_data_inicio'=>$request->set_starter_date,
                 'pss_data_final'=>$request->set_final_date,
                 'pss_horario'=>$request->set_period,
                 'pss_qnt_alunos'=>$request->set_quantity_student,
             ]);
             return view('pages.users.classes.edit_classes');
         }catch(Exception $e){
             echo $e->getmessage();
         }
     }

}
