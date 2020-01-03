@include('layout._includes.header')

<div class="container">

        <div class="center">
            <h4>Lista de Perguntas</h4>
        </div>

        <div class="row">
            <table class="striped centered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pergunta</th>
                        <th>Categoria</th>
                        <th>Habilitado?</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($resultado as $colocar)
                    <tr>
                        <td>{{$colocar->pss_id_pergunta}}</td>
                        <td>{{$colocar->pss_pergunta}}</td>
                        <td>{{$colocar->pss_nome}}</td>
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
                </tbody>
            </table>
        </div>
</div>

@include('layout._includes.footer')
 {{-- <td><a href="" class=""><i class="material-icons">Edit</i></a></td> --}}
                        {{-- <td><a href="{{route('editCourses')}}" class="btn-floating green waves-effect waves-light btn "><i class="material-icons">edit</i></a></td> --}}
