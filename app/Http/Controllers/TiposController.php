<?php

namespace App\Http\Controllers;

use App\Tipos;
use Exception;
use Illuminate\Http\Request;

class TiposController extends Controller
{

    public function index(){
        return view('pages.users.types.create_types');
    }

    public function show(){

        $tipoCursos=Tipos::all();
        return view('pages.users.types.list_types')->with('tipoCursos', $tipoCursos);

    }


    public function create(Request $request){

        try{

            $tCurso = new Tipos();

            $tCurso ->pss_tipo = $request ->set_type;
            $tCurso ->save();

            return redirect()->route('listTypes');

        }catch(Exception $e){

            echo $e->getMessage();

        }
    }

    public function noSelect()
    {
        //
    }



    public function actionSearch(Request $request)

    {

        try{

        $tCurso = $request->tipoCurso;
        $tCurso = Tipos::where('tipoCurso', 'LIKE', "%$tCurso%")->get();

        return redirect()->route('');

        }catch(Exception $e){

            echo $e->getMessage();

        }
    }




    public function listViwer(Tipos $tipos)
    {
        //
    }


    public function update(Request $request)

    {

        try{

            Tipos::where('pss_id_tipos')->update(['pss_tipo'=>$request->set_type]);

            return view('pages.users.types.search_edit');

        }catch(Exception $e){

            echo $e->getMessage();
        }
    }


    public function destroy(Tipos $tipos)

    {
        //
    }
}
