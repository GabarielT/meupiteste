<?php

namespace App\Http\Controllers;

use App\Codigos;
use App\Turmas;
use Illuminate\Http\Request;

class CodigosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turmas::all();
        return view('pages.users.create_code.create_code', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $bancoPesquisa = Usuarios::join('pss_cargos' , 'pss_usuarios.pss_id_cargo' ,'=' , 'pss_cargos.pss_id_cargo')
        // ->select('pss_usuarios.*' , 'pss_cargos.pss_cargo')
        // ->get();
        $id_turma = $request->set_classe;
        $turma = Turmas::join('pss_cursos', 'pss_turmas.pss_id_curso', '=', 'pss_cursos.pss_id_curso')->where('pss_id_turma', '=', $id_turma)->select('pss_turmas.*', 'pss_cursos.pss_curso')->first();
        $curso = $turma['pss_curso'];
        $aux = preg_split("/[\s,]+/", $curso);
        $codigo = "";
        foreach ($aux as $key) {
            if (strlen($key) > 2) {
                $codigo = $codigo . strtoupper(substr($key, 0, 1));
            }
        }
        date_default_timezone_set('UTC');
        $codigo = $codigo . date('ym');

        $turma = Turmas::where('pss_id_turma', $request->set_classe)->first();
        $usuarios = Codigos::join('pss_codigos', 'pss_usuarios.pss_id_usuario', '=', 'pss_codigos.pss_id_usuario')->select('pss_codigos.*', 'pss_usuarios.pss_id_usuario');
        $codigo1 = new Codigos();
        $codigo1->pss_codigo = $codigo;
        $codigo1->pss_id_usuario = 1;
        $codigo1->pss_id_turma = $request->set_classe;
        $codigo1->pss_uso = $turma['pss_qnt_alunos'];

        $codigo1->save();

        return view('pages.users.create_code.cod_gerado')->with('codigo' ,$codigo );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Codigos  $codigos
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $bancoPesquisa = Codigos::all();

        //     return view('codigos.lista_codigo' , compact('bancoPesquisa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Codigos  $codigos
     * @return \Illuminate\Http\Response
     */
    public function edit($pss_id_codigo)
    {
        // $caminho = Codigos::where('pss_id_codigo' , '=' , "$pss_id_codigo" )->get();
        // return view('codigos.update_codigo_result' , compact('caminho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Codigos  $codigos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pss_id_codigo)
    {
        // try
        // {
        //         Codigos::where('pss_id_codigo', $pss_id_codigo)->update([
        //         'pss_codigo' => $request->codigo ,
        //         'pss_uso' => $request->usos]);


        //      return redirect()->route('list_codigo');

        // }catch(Exception $e){
        //     echo $e->getMessage();
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Codigos  $codigos
     * @return \Illuminate\Http\Response
     */
    public function destroy($pss_id_codigo)
    {
        // Codigos::where('pss_id_codigo' , '=' , "$pss_id_codigo" )->delete();
        //    return redirect()->route('list_codigo');
    }
}
