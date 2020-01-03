@include('layout._includes.header')

<div class="center">
    <h4>Lista de Usuários</h4>
</div>
 <div class="container">
    <div class="row">
        <table class="centered">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Cpf</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Editar</th>
                </tr>
            </thead>
                @foreach ($bancoPesquisa as $colocar)
                    <tr>
                        <td>{{$colocar->pss_matricula}}</td>
                        <td>{{$colocar->pss_nome}}</td>
                        <td>{{$colocar->pss_cargo}}</td>
                        <td>{{$colocar->pss_cpf}}</td>
                        <td>{{$colocar->pss_celular}}</td>
                        <td>{{$colocar->pss_email}}</td>
                        <td><a href="{{route('editUsers')}},{{$colocar->pss_id_usuario}}" class="btn-floating green waves-effect waves-light btn "><i class="material-icons">edit</i></a></td>
                        {{-- <td><a href="#modal1?=" class="waves-effect waves-light btn-floating modal-trigger red"><i class="material-icons">delete</i></a></td> --}}
                    </tr>
                @endforeach


        </table>
   {{-- {{$cursos->appends(['nome'=>isset($nome) ? $nome : ''])->links()}} --}}
    </div>
 </div>

 @include('layout._includes.footer')
