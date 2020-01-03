@include('layout._includes.header')
<div class="container">
    <fieldset class="space_field">
        <legend class="edit_legend"><h4>Cadastro de Cursos</h4></legend>
        <form action="{{route('saveCourses')}}" method="post">
            {{ csrf_field() }}
         <div class="row">
             <div class="input-field col s8 center_one_col edit_input">
                <i class="material-icons prefix iconColor blue_senac_icon">account_circle</i>
                <input id="set_name" type="text" name="set_name" placeholder="Digite nome do curso" required>
                <label for="set_name">Nome</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4 center_one_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">timelapse</i>
                    <input id="set_up_time" type="text" placeholder="Digite em horas" name="set_up_time" required>
                    <label for="set_up_time">Carga Horaria</label>
            </div>
            <div class="input-field col s4 center_two_col edit_input">
                <i class="material-icons prefix iconColor blue_senac_icon">date_range</i>
                <select class="icons" name="set_level_course" id="set_level_course" required>
                    <option value="" disabled selected>Selecione um Grau Academico</option>
                    @foreach ($tipoCursos as $colocar)
                        <option value="{{$colocar->pss_id_tipo}}" >{{$colocar->pss_tipo}}</option>

                    @endforeach

                </select>
                <label for="id_segmento">Grau Academico</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4 center_one_col edit_input">
                <i class="material-icons prefix iconColor blue_senac_icon">date_range</i>
                <select class="icons" name="set_state" id="set_state" required>
                        <option value="" disabled selected>Selecione um Estado</option>
                        @foreach ($estados as $colocar)
                            <option value="{{$colocar->pss_id_estado}}">{{$colocar->pss_estado}}</option>
                        @endforeach
                      </select>
                <label>Estado</label>
            </div>

            <div class="input-field col s4 center_two_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">home</i>
                    <select class="icons" name="set_city" id="set_city" required>
                            <option value="" disabled selected>Selecione uma Cidade</option>
                            @foreach ($cidades as $colocar)
                                <option value="{{$colocar->pss_id_cidade}}" >{{$colocar->pss_cidade}}</option>
                            @endforeach
                          </select>
                    <label>Cidade</label>
                </div>

        </div>
        <div class="row">
                <div class="input-field col s4 center_one_col edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">home</i>
                        <select class="icons" name="set_segments" id="set_segments" required>
                                <option value="" disabled selected>Selecione um Segmento</option>
                                @foreach ($segCursos as $colocar)
                                    <option value="{{$colocar->pss_id_segmento}}">{{$colocar->pss_segmento}}</option>
                                @endforeach
                              </select>
                        <label>Segmento do curso</label>
                    </div>
                    <div class="input-field col s2 offset-s1 edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">home</i>
                        <input type="text" name="set_hidden_code" id="set_hidden_code" required>
                        <label for="set_hidden_code">codigo</label>
                    </div>
        </div>



        <div class="center_div_button space_btn">
            <button class="btn waves-effect waves-light blue_senac " type="submit" name="action">Cadastrar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</fieldset>
</div>
@include('layout._includes.footer')
