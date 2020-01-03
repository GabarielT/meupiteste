@include('layout._includes.header')

<div class="center">
    <h4>Lista dos Cursos</h4>
</div>
<div class="container">

        <div class="row">
            <table class="striped centered">
                <thead>
                    <tr>
                        <th>Código do Curso</th>
                        <th>Nome</th>
                        <th>Carga Horaria</th>
                        <th>Grau Academico</th>
                        <th>Segmento</th>
                        <th>Municipio</th> 
                        <th>Habilitado?</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cCourses as $colocar)
                        <tr>
                            <td>{{$colocar->pss_cod_curso}}</td>
                            <td>{{$colocar->pss_curso}}</td>
                            <td>{{$colocar->pss_duracao}}</td>
                            <td>{{$colocar->pss_tipo}}</td>
                            <td>{{$colocar->pss_segmento}}</td>
                            <td>{{$colocar->pss_cidade}}</td>
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
