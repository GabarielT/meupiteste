<?php

namespace App\Http\Controllers;

use App\Cargos;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissoes = DB::table('pss_permissoes')->get();
        return view('pages.users.positions.create_positions', compact('permissoes'));
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
            $cargos1 = new Cargos();
            $cargos1->pss_cargo = $request->set_position;
            $cargos1->pss_id_permissao = $request->set_access_level;
            $cargos1->pss_habilitado = 1;

            // dd($cargos1);
            $cargos1->save();
            return redirect()->route('listPositions');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $bancoPesquisa = Cargos::join('pss_permissoes' , 'pss_cargos.pss_id_permissao' ,'=' , 'pss_permissoes.pss_id_permissao')->select('pss_cargos.*' , 'pss_permissoes.pss_permissao')->get();

            return view('pages.users.positions.list_positions' , compact('bancoPesquisa'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function edit($pss_id_cargo)
    {
            $permissoes = DB::table('pss_permissoes')->get();
            $caminho = Cargos::where('pss_id_cargo' , '=' , "$pss_id_cargo" )->get();
            return view('pages.users.positions.edit_positions' , compact('caminho' , 'permissoes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $pss_id_cargo)
    {
        // dd($pss_id_cargo);
        try
        {
                Cargos::where('pss_id_cargo', $pss_id_cargo)->update([
                'pss_cargo' => $request->set_position ,
                'pss_permissao' => $request->set_access_level ,
                'pss_habilitado' => $request->habilitado]);


             return redirect()->route('list_cargo');

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargos  $cargos
     * @return \Illuminate\Http\Response
     */
    public function destroy($pss_id_cargo)
    {

            Cargos::where('pss_id_cargo' , '=' , "$pss_id_cargo" )->delete();
           return redirect()->route('list_cargo');

    }
}
