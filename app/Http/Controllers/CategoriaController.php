<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
		return view('pages.users.categories.create_categories');
    }

    public function create(Request $request)
    {
		$categoria=new Categoria();
		$categoria->pss_nome=$request-> set_category;
		$categoria->save();
		return view('welcome');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
      $categoria=Categoria::all();
	return view('pages.users.categories.list_categories',compact('categoria'));
    }

	public function pesquisarView(){
		return view('pages.users.category.search_categories');
	}

	public function acao_cat_pesq(Request $request){
		$search=$request->set_option_search;
		$categoria=Categoria::where('pss_nome','LIKE',"%$search%")
							->paginate(5);
		return view('pages.users.category.search_categories_view',compact('categoria'));
	}
    public function edit(Categoria $categoria)
    {
        //
    }

    public function update(Request $request, Categoria $categoria)
    {
        //
    }
    public function destroy(Categoria $categoria)
    {
        //
    }
}
