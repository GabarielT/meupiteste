@include('layout._includes.header')


    <form action="" method="POST">

        <div class="container">
            <fieldset class="space_field">
            <legend class="edit_legend"><h4>Editar Usuário</h4></legend>
            <form action="#!">
                <div class="row">
                    <div class="input-field col s8 center_one_col edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">person</i>
                        <input id="set_user_name" type="text" class="validate" value="{{$caminho->pss_nome}}" name="set_user_name">
                        <label for="set_user_name">Nome completo</label>
                    </div>
                    {{-- <div class="input-field col s4 center_two_col edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">person_pin</i>
                        <input id="set_last_name" type="text" class="validate" name="set_last_name">
                        <label for="set_last_name">Sobrenome</label>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="input-field col s4 center_one_col edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">assignment_ind</i>
                        <input id="set_matricula" type="text" class="validate"  value="{{$caminho->pss_matricula}}" name="set_matricula">
                        <label for="set_matricula">Matricula</label>
                    </div>

                    <div class="input-field col s4 center_two_col edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">reorder</i>
                        <input id="set_cpf" type="text" class="validate" name="set_cpf" value="{{$caminho->pss_cpf}}">
                        <label for="set_cpf">Cpf</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8 center_one_col edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">work</i>
                        <select id="set_position" name="set_position">
                            <option value="{{$caminho->pss_cargo}}" disabled selected>{{$caminho->pss_cargo}}</option>
                                @foreach ($cargos as $colocar)
                                    <option value="{{$colocar->pss_id_cargos}}">{{$colocar->pss_cargo}}</option>
                                @endforeach

                                {{-- <option value="2">Gerente</option>
                                <option value="3">Estágiario</option> --}}
                            </select>
                            <label >Cargo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4 center_one_col edit_input">
                            <i class="material-icons prefix iconColor blue_senac_icon">phone</i>
                            <input id="set_phone" type="text" class="validate" name="set_phone" value="{{$caminho->pss_telefone}}">
                            <label for="set_phone">Telefone</label>
                        </div>

                        <div class="input-field col s4 center_two_col edit_input">
                            <i class="material-icons prefix iconColor blue_senac_icon">phone_iphone</i>
                            <input id="set_cell" type="text" class="validate" name="set_cell" value="{{$caminho->pss_celular}}">
                            <label for="set_cell">Celular</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8 center_one_col edit_input">
                            <i class="material-icons prefix iconColor blue_senac_icon">mail</i>
                            <input id="set_email" name="set_email"type="email" class="validate" value="{{$caminho->pss_email}}">
                            <label for="set_email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8 center_one_col edit_input">
                            <i class="material-icons prefix iconColor blue_senac_icon">account_circle</i>
                            <input id="set_nick_user" type="text" class="validate" name="set_nick_user" value="{{$caminho->pss_email}}">
                            <label for="set_nick_user">Usuario</label>
                        </div>
                    </div>
                    <div class="row " hidden>

                        <div class="input-field col s4 center_one_col edit_input">
                            <i class="material-icons prefix iconColor blue_senac_icon">lock</i>
                            <input id="set_password" type="password" class="validate" name="set_password" readonly value="{{$caminho->pss_senha}}">
                            <label for="set_password">Senha</label>
                        </div>
                    {{-- <div class="input-field col s4 center_two_col edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">lock</i>
                        <input id="confsenha" type="password" class="validate" name="confsenha">
                        <label for="confsenha">Confirmar senha</label>
                    </div> --}}
                </div>
                <div class="center_div_button">
                    <button class="btn waves-effect waves-light blue_senac space_btn
                    " type="submit" name="action">Cadastrar
                    <i class="material-icons right">send</i>
                </button>
            </div>

            </fieldset>
</div>
</form>


@include('layout._includes.footer')
