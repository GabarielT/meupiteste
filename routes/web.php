<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use Symfony\Component\Routing\Annotation\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/senac', ['as' => 'index', 'uses' => 'Admin\LoginController@welcome']);

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/senac/sair' , ['as' => 'off' , 'uses' => 'Admin\LoginController@loginOffPage']);
// });
// Route::get('/', ['as' => 'welcome', 'uses' =>'Controller@welcome']);
Route::post('/senac/logado',['as' => 'validated', 'uses' => 'Auth\LoginController@loginValidate']);

// Rota do formulario

Route::post('/senac/formulario',['as' => 'form', 'uses' => 'QuestionariosController@index']);
Route::post('/senac/salvar-formulario',['as' => 'createForm', 'uses' => 'QuestionariosController@create']);


//  Pagina de Cadastro

Route::get('/senac/criacao-usuarios',['as' => 'createUsers', 'uses' => 'UsuariosController@index']);
Route::get('/senac/criacao-cargos',['as' => 'createPositions', 'uses' => 'CargosController@index']);
Route::get('/senac/criacao-segmentos',['as' => 'createSegments', 'uses' => 'SegmentosController@index']);
Route::get('/senac/criacao-tipos',['as' => 'createTypes', 'uses' => 'TiposController@index']);
Route::get('/senac/criacao-cursos',['as' => 'createCourses', 'uses' => 'CursosController@index']);
Route::get('/senac/criacao-turmas',['as' => 'createClasses', 'uses' => 'TurmasController@adicionar']);
Route::get('/senac/criacao-instrutor',['as' => 'createInstructor', 'uses' => 'InstrutoresController@adicionar']);
Route::get('/senac/criacao-Codigos',['as' => 'createCode', 'uses' => 'CodigosController@index']);
Route::get('/senac/criacao-perguntas',['as' => 'createQuestions', 'uses' => 'PerguntasController@index']);
Route::get('/senac/criacao-categorias',['as' => 'createCategories', 'uses' => 'CategoriaController@index']);

// Salvar

Route::post('/senac/salvar-usuarios',['as' => 'saveUsers', 'uses' => 'UsuariosController@store']);
Route::post('/senac/salvar-cargos',['as' => 'savePositions', 'uses' => 'CargosController@store']);
Route::post('/senac/salvar-segmentos',['as' => 'saveSegments', 'uses' => 'SegmentosController@create']);
Route::post('/senac/salvar-tipos',['as' => 'saveTypes', 'uses' => 'TiposController@create']);
Route::post('/senac/salvar-cursos',['as' => 'saveCourses', 'uses' => 'CursosController@create']);
Route::post('/senac/salvar-turmas',['as' => 'saveClasses', 'uses' => 'TurmasController@create']);
Route::post('/senac/salvar-instrutor',['as' => 'saveInstructor', 'uses' => 'InstrutoresController@salvar']);
Route::post('/senac/salvar-codigos',['as' => 'saveCode', 'uses' => 'CodigosController@store']);
Route::post('/senac/salvar-perguntas',['as' => 'saveQuestions', 'uses' => 'PerguntasController@create']);
Route::post('/senac/salvar-categorias',['as' => 'saveCategories', 'uses' => 'CategoriaController@create']);

// Listas

Route::get('/senac/listar-usuarios',['as' => 'listUsers', 'uses' => 'UsuariosController@show']);
Route::get('/senac/listar-cargos',['as' => 'listPositions', 'uses' => 'CargosController@show']);
Route::get('/senac/listar-segmentos',['as' => 'listSegments', 'uses' => 'SegmentosController@show']);
Route::get('/senac/listar-tipos',['as' => 'listTypes', 'uses' => 'TiposController@show']);
Route::get('/senac/listar-cursos',['as' => 'listCourses', 'uses' => 'CursosController@show']);
Route::get('/senac/listar-turmas',['as' => 'listClasses', 'uses' => 'TurmasController@listar']);
Route::get('/senac/listar-instrutor',['as' => 'listInstructor', 'uses' => 'InstrutoresController@lista']);
Route::get('/senac/listar-perguntas',['as' => 'listQuestions', 'uses' => 'PerguntasController@show']);
// Route::get('/senac/listar-codigos',['as' => 'listCode', 'uses' => 'CodigosController@show']);
Route::get('/senac/listar-categorias',['as' => 'listCategories', 'uses' => 'CategoriaController@show']);


// Pesquisas

Route::get('/senac/pesquisa-usuarios',['as' => 'searchUsers', 'uses' => 'CursosController@searchUsers']);
Route::get('/senac/pesquisa-cargos',['as' => 'searchPositions', 'uses' => 'CursosController@searchPositions']);
Route::get('/senac/pesquisa-segmentos',['as' => 'searchSegments', 'uses' => 'CursosController@searchSegments']);
Route::get('/senac/pesquisa-tipos',['as' => 'searchTypes', 'uses' => 'TiposController@actionSearch ']);
Route::get('/senac/pesquisa-cursos',['as' => 'searchCourses', 'uses' => 'CursosController@actionSearch']);
Route::get('/senac/pesquisa-cursos2',['as' => 'searchCourses2', 'uses' => 'CursosController@searchCurso']);
Route::get('/senac/pesquisa-turmas',['as' => 'searchClasses', 'uses' => 'CursosController@searchClasses']);
Route::get('/senac/pesquisa-instrutor',['as' => 'searchInstructor', 'uses' => 'InstrutoresController@pagina_pesquisar']);
Route::get('/senac/pesquisa-perguntas',['as' => 'searchQuestions', 'uses' => 'PerguntasController@acaoPesquisar']);



// Edição

Route::get('/senac/editar-usuarios',['as' => 'editUsers', 'uses' => 'UsuariosController@edit']);
Route::get('/senac/editar-cargos',['as' => 'editPositions', 'uses' => 'CargosController@edit']);
Route::get('/senac/editar-segmentos',['as' => 'editSegments', 'uses' => 'CursosController@editSegments']);
Route::get('/senac/editar-tipos',['as' => 'editTypes', 'uses' => 'CursosController@editTypes']);
Route::get('/senac/editar-cursos',['as' => 'editCourses', 'uses' => 'CursosController@editCourses']);
Route::get('/senac/editar-turmas',['as' => 'editClasses', 'uses' => 'CursosController@editClasses']);
Route::get('/senac/editar-instrutor',['as' => 'editInstructor', 'uses' => 'CursosController@editInstructor']);
Route::get('/senac/editar-perguntas',['as' => 'editQuestions', 'uses' => 'PerguntasController@edit']);



// Atualização

Route::post('/senac/atualizar-usuarios',['as' => 'upadateUsers', 'uses' => 'UsuariosController@update']);
Route::post('/senac/atualizar-cargos',['as' => 'upadatePositions', 'uses' => 'CargosController@update']);
Route::post('/senac/atualizar-segmentos',['as' => 'upadateSegments', 'uses' => 'SegmentosController@update']);
Route::post('/senac/atualizar-tipos',['as' => 'upadateTypes', 'uses' => 'TiposController@update']);
Route::post('/senac/atualizar-cursos',['as' => 'upadateCourses', 'uses' => 'CursosController@update']);
Route::post('/senac/atualizar-perguntas',['as' => 'upadateQuestions', 'uses' => 'PerguntasController@update']);


