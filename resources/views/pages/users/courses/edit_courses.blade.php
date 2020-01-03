@include('layout._includes.header')
<div class="container">
    <fieldset class="space_field">
        <legend class="edit_legend"><h4>Editar Curso</h4></legend>
        <form>
         <div class="row">
             <div class="input-field col s8 center_one_col edit_input">
                <i class="material-icons prefix iconColor blue_senac_icon">account_circle</i>
                <input id="set_name" type="text" name="set_name">
                <label for="set_name">Nome</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4 center_one_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">timelapse</i>
                    <input id="set_up_time" type="text"  name="set_up_time">
                    <label for="set_up_time">Carga Horaria</label>
            </div>
            <div class="input-field col s4 center_two_col edit_input">
                <i class="material-icons prefix iconColor blue_senac_icon">date_range</i>
                <select class="icons" name="set_level_course" id="set_level_course">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="" >example 1</option>
                    <option value="" >example 2</option>
                    <option value="" >example 3</option>
                </select>
                <label for="id_segmento">Grau Academico</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4 center_one_col edit_input">
                <i class="material-icons prefix iconColor blue_senac_icon">date_range</i>
                <select class="icons" name="set_state" id="set_state">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="">example 1</option>
                        <option value="">example 2</option>
                        <option value="">example 3</option>
                      </select>
                <label>Estado</label>
            </div>

            <div class="input-field col s4 center_two_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">home</i>
                    <select class="icons" name="set_city" id="set_city">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="" data-icon="images/sample-1.jpg">example 1</option>
                            <option value="" data-icon="images/office.jpg">example 2</option>
                            <option value="" data-icon="images/yuna.jpg">example 3</option>
                          </select>
                    <label>Cidade</label>
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
