<?php

namespace App\Http\Controllers;

use App\Cargos;
use App\Usuarios;
use Exception;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargos::all();
            return view('pages.users.users.create_users' , compact('cargos'));

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
            $usuarios1 = new Usuarios();
            $usuarios1->pss_nome = $request->set_user_name.' '.$request->set_last_name;
            $usuarios1->pss_matricula = $request->set_matricula;
            $usuarios1->pss_cpf = $request->set_cpf;
            $usuarios1->pss_id_cargo = $request->set_position;
            if(!empty($request->set_phone)){
                $usuarios1->pss_telefone = $request->set_phone;
            }else{
                $usuarios1->pss_telefone = NULL;
            }
            $usuarios1->pss_celular = $request->set_cell;
            $usuarios1->pss_email = $request->set_email;
            $usuarios1->pss_usuario = $request->set_nick_user;
            $usuarios1->pss_senha = bcrypt($request->set_password);
            $usuarios1->pss_habilitado = 1;
            $usuarios1->save();
            return redirect()->route('listUsers');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
           $bancoPesquisa = Usuarios::join('pss_cargos' , 'pss_usuarios.pss_id_cargo' ,'=' , 'pss_cargos.pss_id_cargo')->select('pss_usuarios.*' , 'pss_cargos.pss_cargo')->get();

            return view('pages.users.users.list_users' , compact('bancoPesquisa'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($pss_id_usuario)
    {
            $cargos = Cargos::all();
            $caminho = Usuarios::join('pss_cargos' , "pss_usuarios.pss_id_cargo" , '=' , "pss_cargos.pss_id_cargo" )->select('pss_usuarios.*' , 'pss_cargos.pss_cargo' )->where('pss_id_usuario' , '=' , "$pss_id_usuario")->get();
            // dd($pss_id_usuario);
            return view('pages.users.users.edit_users' , compact('caminho' , 'cargos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $pss_id_usuario)
    {
        // dd($pss_id_usuario);
        try
        {
                Usuarios::where('pss_id_usuario', $pss_id_usuario)->update([
                'pss_nome' => $request->set_user_name ,
                'pss_matricula' => $request->set_matricula ,
                'pss_cpf' => $request->set_cpf ,
                'pss_id_cargo' => $request->set_position,
                'pss_telefone' => $request->set_phone ,
                'pss_celular' => $request->set_cell ,
                'pss_email' => $request->set_email ,
                'pss_usuario' => $request->set_nick_user ,
                'pss_senha' => $request->set_password]);



$bancoPesquisa = Usuarios::join('pss_cargos' , 'pss_usuarios.pss_id_cargo' ,'=' , 'pss_cargos.pss_id_cargo')->select('pss_usuarios.*' , 'pss_cargos.pss_cargo')->get();

             return view('pages.users.users.list_users' , compact('bancoPesquisa'));

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($pss_id_usuario)
    {

            Usuarios::where('pss_id_usuario' , '=' , "$pss_id_usuario" )->delete();
           return redirect()->route('list_usuario');

    }
}
