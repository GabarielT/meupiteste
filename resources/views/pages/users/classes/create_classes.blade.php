@include('layout._includes.header')

<div class="container">
    <fieldset class="space_field">
        <legend class="edit_legend"><h4>Cadastro de Turmas</h4></legend>
        <form action="{{route('saveClasses')}}" method="post">
            {{ csrf_field() }}
			<div class="row">
			   <div class="input-field col s4 center_one_col edit_input">
				   <label>Digite o código da Turma</label>
				  <input type="text" name="set_hidden_code" id="set_hidden_code" required>
				</div>


			</div>
            <div class="row">
                <div class="input-field col s4 center_one_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">menu</i>
                    <select name="set_course" id="set_course" required>
                        <option value="" disabled selected>Selecione um Curso</option>
                        @foreach($cursos as $curso)
						<option value="{{$curso->pss_id_curso}}">{{$curso->pss_curso}}</option>
						@endforeach
                    </select>
                    <label>Curso</label>
                </div>
                <div class="input-field col s4 center_two_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">schedule</i>
                    <input type="text" name="set_period" id="set_period" required/>
                    <label for="set_period">Horário de Ínicio</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8 center_one_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">account_box</i>
                    <select name="set_teacher" id="set_teacher" required>
                        <option value="" disabled selected>Selecione um Instrutor</option>
						@foreach($instrutores as $instrutor)
						<option value="{{$instrutor->pss_id_instrutor}}">{{$instrutor->pss_instrutor}}</option>
						@endforeach
                    </select>
                    <label>Instrutor</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3 center_one_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">date_range</i>
                    <label for="set_starter_date">Inicio do curso</label>
                    <input type="text" readonly class="datepicker" id="set_starter_date" name="set_starter_date" required>
                </div>

                <div class="input-field col s3 center_inputs_2  edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon ">date_range</i>
                    <label for="set_final_date">Final do curso</label>
                    <input type="text" readonly class="datepicker" id="set_final_date" name="set_final_date" required>
                </div>

                <div class="input-field col s2  edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">account_circle</i>
                    <input id="set_quantity_student" name="set_quantity_student" type="text" required>
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
