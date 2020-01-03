<?php

namespace App\Http\Controllers;

use App\Questionarios;
use App\Codigos;
use App\Items;
use Illuminate\Http\Request;

class QuestionariosController extends Controller
{
    public function index(Request $request) {
        // Redirecionar para a página de responder o Questionário
        $code = trim(strtoupper($request->code));
        if(Codigos::where('pss_codigo', $code)):
            $dados = Codigos::join('pss_turmas', 'pss_codigos.pss_id_turma', '=', 'pss_turmas.pss_id_turma')
                            ->join('pss_instrutores', 'pss_turmas.pss_id_instrutor', '=', 'pss_instrutores.pss_id_instrutor')
                            ->join('pss_cursos', 'pss_turmas.pss_id_curso', '=', 'pss_cursos.pss_id_curso')
                            ->select('pss_codigos.*', 'pss_instrutores.pss_instrutor', 'pss_cursos.pss_curso')
                            ->where('pss_codigos.pss_codigo', $code)
                            ->limit(1)
                            ->get();
            return view('pages.client.form')->with('dados', $dados);
        else:
            return view('welcome');
        endif;
    }

    public function create(Request $request)
    {
        // Salvando um novo questionário no banco
        $quest = [
            'pss_id_codigo' => $request->set_hidden_code, 'pss_feedback' => $request->set_feedback
        ];
        $idQuest = Questionarios::insertGetId($quest);

        // Salvando as perguntas e respostas
        $pageData = $request->all();
        for ($i = 1; $i <= 20; $i++){
            $items = new Items();
            $items->pss_id_quest = $idQuest;
            $items->pss_id_pergunta = $i;
            $items->pss_id_resposta = $pageData['r' . $i];
            $items->save();
        }

        // Redirecionando para a página de agradecimento
        return view('pages.client.agradc');
    }

    public function show(Questionarios $questionarios)
    {
        // Listando os questionários
        $quests = Questionarios::join('pss_codigos', 'pss_questionarios.pss_id_codigo', '=', 'pss_codigos.pss_id_codigo')
            ->join('pss_turmas', 'pss_codigos.pss_id_turma', '=', 'pss_turmas.pss_id_turma')
            ->join('pss_instrutores', 'pss_turmas.pss_id_turma', '=', 'pss_instrutores.pss_id_instrutor')
            ->join('pss_cursos', 'pss_turmas.pss_id_curso', '=', 'pss_cursos.pss_id_curso')
            ->select('pss_questionarios.*', 'pss_turmas.*', 'pss_instrutores.pss_instrutor', 'pss_cursos.*')
            ->get();
        return view('list', compact('quests'));
    }
}
