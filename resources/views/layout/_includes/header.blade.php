<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="Author" content="Senac - Cora Coralina">
    {{-- <meta name="Equipe" content="Alunos do curso tecnico em informatica"> --}}
    <meta name="description" content="Projeto Integrador dos alunos do curso de tecnico em informatica wue se iniciou em 2018">
    <meta >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}" />
    <link rel="stylesheet" href="{{asset('css/meucss.css')}}">
    <link rel="stylesheet" href="{{asset('css/meucss_responsive.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Senac Feedback</title>

</head>



    <body class="background_body_user">

    <header>
        <nav>
            <div class="nav-wrapper ">

                <a href="#!" class="brand-logo"><img src="{{asset('asset/img/logo/senac_logo_branco.png')}}" class="logo_user_edit"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="waves-effect waves-light" href="{{route('createCode')}}">Gerar Cód.</a></li>
                    <li><a class='dropdown-trigger' href='#' data-target='dropdown1'>Cadastros</a></li>
                    <li><a class='dropdown-trigger' href='#' data-target='dropdown2'>Lista</a></li>
                    <li><a class='dropdown-trigger' href='#' data-target='dropdown3'>Pesquisa</a></li>
                    <li><a class="waves-effect waves-light" href="#!">Sair</a></li>
                </ul>
            </div>
        </nav>


        {{-- mobile adaptation --}}
        <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
    </header>
        <!-- Dropdown Structure 1 -->
        <ul id='dropdown1' class='dropdown-content'>
          <li><a href="{{route('createCourses')}}">Cursos</a></li>
          <li><a href="{{route('createInstructor')}}">Instrutor</a></li>
          <li><a href="{{route('createClasses')}}">Turmas</a></li>
          <li><a href="{{route('createUsers')}}">Usuários</a></li>
          <li><a href="{{route('createPositions')}}">Cargos</a></li>
          <li><a href="{{route('createSegments')}}">Segmentos</a></li>
          <li><a href="{{route('createTypes')}}">Tipos</a></li>
          <li><a href="{{route('createQuestions')}}">Perguntas</a></li>
          <li><a href="{{route('createCategories')}}">Categorias</a></li>
        </ul>

        <!-- Dropdown Structure 2 -->
        <ul id='dropdown2' class='dropdown-content'>
          <li><a href="{{route('listCourses')}}">Cursos</a></li>
          <li><a href="{{route('listInstructor')}}">Instrutor</a></li>
          <li><a href="{{route('listClasses')}}">Turmas</a></li>
          <li><a href="{{route('listUsers')}}">Usuários</a></li>
          <li><a href="{{route('listPositions')}}">Cargos</a></li>
          <li><a href="{{route('listSegments')}}">Segmentos</a></li>
          <li><a href="{{route('listTypes')}}">Tipos</a></li>
          <li><a href="{{route('listQuestions')}}">Perguntas</a></li>
          <li><a href="{{route('listCategories')}}">Categorias</a></li>
        </ul>

        <!-- Dropdown Structure 3 -->
        <ul id='dropdown3' class='dropdown-content'>
          <li><a href="{{route('searchCourses')}}">Cursos</a></li>
          <li><a href="{{route('searchInstructor')}}">Instrutor</a></li>
          <li><a href="{{route('searchClasses')}}">Turmas</a></li>
          <li><a href="{{route('searchUsers')}}">Usuários</a></li>
          <li><a href="{{route('searchPositions')}}">Cargos</a></li>
          <li><a href="{{route('searchSegments')}}">Segmentos</a></li>
          <li><a href="{{route('searchTypes')}}">Tipos</a></li>
          <li><a href="{{route('searchQuestions')}}">Perguntas</a></li>
        </ul>
    <body >
