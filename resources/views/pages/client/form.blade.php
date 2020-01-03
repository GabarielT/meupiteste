@include('layout._includes.header') @include('layout._includes.modal.logo_modal')

<div class="titulo center">
    <h4>Pesquisa de satisfação</h4>
</div>


<form action="{{route('createForm')}}" method="POST">

    {{ csrf_field() }}

    <div class="container">
        <div class="row">
            <div class="col s12 center">
                
                <h5>Prezado(a) aluno(a), </h5>
                <p>Nosso objetivo é melhorar os serviços oferecidos, por isso, pedimos que você avalie nosso corpo
                    docente, espaço físico e serviços. Desde já agradecemos sua participação.</p>
            </div>
        </div>
        <fieldset>
            @foreach ($dados as $item)
                <p>Curso: {{$item->pss_curso}}</p>
                <p>Código: {{$item->pss_codigo}}</p>
                <p>Instrutor: {{$item->pss_instrutor}}</p>

                <input type="hidden" name="set_hidden_code" value="{{$item->pss_id_codigo}}"/>
            @endforeach

            <fieldset class="border_field">
              
                <legend class="edit_form_legend">
                    <h5>Didática de Docente (INSTRUTOR)</h5>
                </legend>

                <div class="row">
                    <div class="col s12">
                        <p id="p1">01. Desenvolve aulas criativas, com metodologias dinâmicas que prende a atenção.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r1" type="radio" value="1" />
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r1" type="radio" value="2" />
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r1" type="radio" value="3" />
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r1" type="radio" value="4" />
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p2">02. Demonstra interesse pelo aprendizado dos alunos?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r2" type="radio" value="1" />
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r2" type="radio" value="2" />
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r2" type="radio" value="3" />
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r2" type="radio" value="4" />
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p3">03. Comunica-se adequadamente com os alunos?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r3" type="radio" value="1" />
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r3" type="radio" value="2" />
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r3" type="radio" value="3" />
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r3" type="radio" value="4" />
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p4">04. Discute o Programa do Curso (objetivo, conteúdo, metodológia, instrumentos e
                            critérios de avaliações)?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r4" type="radio" value="1" />
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r4" type="radio" value="2" />
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r4" type="radio" value="3" />
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r4" type="radio" value="4" />
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p5">05. É assíduo, pontual.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r5" type="radio" value="1" />
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r5" type="radio" value="2" />
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r5" type="radio" value="3" />
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r5" type="radio" value="4" />
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p6">06. As avaliações e/ou exercícios adotados no curso são coerentes com os objetivos
                            propostos pelo Senac?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r6" type="radio" value="1" />
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r6" type="radio" value="2" />
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r6" type="radio" value="3" />
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r6" type="radio" value="4" />
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p7">07. Distribui adequadamente as atividades em sala de aula?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r7" type="radio" value="1" />
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r7" type="radio" value="2" />
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r7" type="radio" value="3" />
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r7" type="radio" value="4" />
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p8">08. Utilizou os recursos instrucionais (vídeo, audio, retroprojetor, datashow) de
                            acordo com a necessidade do conteúdo?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r8" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r8" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r8" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r8" type="radio" value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p9">09. Fala sobre a importância do curso para a educação profissional (como os conteúdos
                            contribuirão na atuação prática no mercado de trabalho-Teoría e prática)?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r9" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r9" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r9" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r9" type="radio" value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>
            </fieldset>

            <fieldset class="border_field">
                <legend class="edit_form_legend">
                    <h5>Atendimento</h5>
                </legend>
                <div class="row">
                    <div class="col s12">
                        <p id="p10">10. Como foi o atendimento no ato da matrícula?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r10" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r10" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r10" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r10" type="radio" value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p11">11. Explicou com clareza e objetividade o informativo e pré-requisitos do curso?
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r11" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r11" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r11" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r11" type="radio" value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>
            </fieldset>

            <fieldset class="border_field">
                <legend class="edit_form_legend">
                    <h5>Serviços</h5>
                </legend>
                <div class="row">
                    <div class="col s12">
                        <p id="p12">12. Como foi o atendimento da lanchonete?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r12" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r12" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r12" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r12" type="radio" value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p13">13. O lanche estava satisfatório?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r13" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r13" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r13" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r13" type="radio"  value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p14">14. Como está a limpeza no prédio?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r14" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r14" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r14" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r14" type="radio" value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>
            </fieldset>

            <fieldset class="border_field">
                <legend class="edit_form_legend">
                    <h5>Infraestrutura do Curso</h5>
                </legend>
                <div class="row">
                    <div class="col s12">
                        <p id="p15">15. Carga horário?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r15" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r15" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r15" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="15" type="radio" value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p16">16. Conteúdo do curso?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r16" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r16" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r16" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r16" type="radio" value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p17">17. Exercícios?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r17" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r17" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r17" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r17" type="radio" value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p18">18. Apostilas e/ou Livros?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r18" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r18" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r18" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r18" type="radio" value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>
            </fieldset>

            <fieldset class="border_field">
                <legend class="edit_form_legend">
                    <h5>Atendimento Geral do Senac</h5>
                </legend>

                <div class="row">
                    <div class="col s12">
                        <p id="19">19. Como foi o serviço prestado pelo Senac?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r19" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r19" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r19" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r19" type="radio" value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <p id="p20">20. Recomendaria outras pessoas a fazerem cursos no Senac?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r20" type="radio" value="1"/>
                            <span>Insuficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r20" type="radio" value="2"/>
                            <span>Suficiente</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r20" type="radio" value="3"/>
                            <span>Bom</span>
                        </label>
                    </div>
                    <div class="col s2 edit_col_radio">
                        <label>
                            <input name="r20" type="radio" value="4"/>
                            <span>Ótimo</span>
                        </label>
                    </div>
                </div>
            </fieldset>

            <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <textarea id="textarea1" class="materialize-textarea" name="set_feedback"></textarea>
                          <label for="textarea1">FeedBack</label>
                        </div>
                      </div>
                    </form>
            </div>

        </fieldset>
        <div class="center_div_button">
            <button class="btn waves-effect waves-light orange_senac
        " type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
</form>

@include('layout._includes.footer')
