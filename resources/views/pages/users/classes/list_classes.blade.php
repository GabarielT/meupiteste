@include('layout._includes.header')

<div class="center">
    <h4>Lista das turmas</h4>
</div>
<div class="container">


        <div class="row">
            <table class="striped centered">
                <thead>
                    <tr>
						<th>Código da Turma</th>
                        <th>Curso</th>
                        <th>Professor</th>
                        <th>Período</th>
                        <th>Previsão de inicio do curso</th>
                        <th>Previsão de final do curso</th>
                        <th>Qtd.Alunos</th>
                        <th>Situação</th>
                    </tr>
                </thead>
                <tbody>
					@foreach($turmas as $turma)
                    <tr>
						<td>{{$turma->pss_cod_turma}}</td>
						<td>{{$turma->pss_curso}}</td>
						<td>{{$turma->pss_instrutor}}</td>
						<td>{{$turma->pss_horario}}</td>
                        <td>{{$turma->pss_data_inicio}}</td>
                        <td>{{$turma->pss_data_final}}</td>
						<td>{{$turma->pss_qnt_alunos}}</td>
                        <td><div class="switch">
                                <label>
                                  Não finalizado
                                  <input disabled type="checkbox" @if ($turma->pss_habilitado ==1): checked='checked' @endif>
                                  <span class="lever"></span>
                                  Finalizado
                                </label>
                            </div></td>

                    </tr>
					@endforeach
                </tbody>
            </table>
        </div>
</div>

@include('layout._includes.footer')
