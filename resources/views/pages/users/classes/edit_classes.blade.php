@include('layout._includes.header')

<div class="container">
    <fieldset class="space_field">
        <legend class="edit_legend"><h4>Editar Turma</h4></legend>
        <form>
            <div class="row">
                <div class="input-field col s4 center_one_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">menu</i>
                    <select name="set_course" id="set_course">
                        <option value="" disabled selected>Curso</option>
                        <option value="1">Curso 1</option>
                        <option value="2">Curso 2</option>
                        <option value="3">Curso 3</option>
                    </select>
                    <label>Selecione um curso</label>
                </div>
                <div class="input-field col s4 center_two_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">schedule</i>
                    <select name="set_period" id="set_period">
                        <option value="" disabled selected>Períodos</option>
                        <option value="1">Matutino</option>
                        <option value="2">Vespertino</option>
                        <option value="3">Noturno</option>
                    </select>
                    <label >Selecione um periodo</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8 center_one_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">account_box</i>
                    <select name="set_teacher" id="set_teacher">
                        <option value="" disabled selected>Professores</option>
                        <option value="1">OP1</option>
                        <option value="2">OP2</option>
                        <option value="3">OP3</option>
                    </select>
                    <label>Selecione um Instrutor</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3 center_one_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">date_range</i>
                    <label for="set_starter_date">Inicio do curso</label>
                    <input type="text" readonly class="datepicker" id="set_starter_date" name="set_starter_date">
                </div>

                <div class="input-field col s3 center_inputs_2  edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon ">date_range</i>
                    <label for="set_final_date">Final do curso</label>
                    <input type="text" readonly class="datepicker" id="set_final_date" name="set_final_date">
                </div>

                <div class="input-field col s2  edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">account_circle</i>
                    <input id="set_quantity_student" name="set_quantity_student" type="number" class="">
                    <label for="set_quantity_student">Qtd.Alunos</label>
                </div>
            </div>

            <div class="center_div_button">
                <button class="btn waves-effect waves-light blue_senac space_btn" type="submit" name="action">Cadastrar
                    <i class="material-icons right">send</i>
                </button>
            </div>

        </form>
    </fieldset>

</div>

@include('layout._includes.footer')
