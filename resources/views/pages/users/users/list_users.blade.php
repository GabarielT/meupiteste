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
                    <th>Habilitado?</th>
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
                        <td><div class="switch">
                                <label>
                                  Off
                                  <input disabled type="checkbox" @if ($colocar->pss_habilitado ==1): checked='checked'>@endif
                                  <span class="lever"></span>
                                  On
                                </label>
                            </div></td>
                    </tr>
                @endforeach


        </table>
   {{-- {{$cursos->appends(['nome'=>isset($nome) ? $nome : ''])->links()}} --}}
    </div>
 </div>

 @include('layout._includes.footer')
