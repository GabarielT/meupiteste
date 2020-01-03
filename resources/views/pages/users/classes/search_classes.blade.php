@include('layout._includes.header')

<div class="container">
    <fieldset class="space_field">
        <legend class="edit_legend">
            <h4>Pesquisar Turmas</h4>
        </legend>
        <div class="row">
            <form action="" method="POST">
                <div class="input-field col s3 center_one_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">schedule</i>
                    <select name="set_option_search" id="set_option_search">
                            <option value="" disabled selected></option>
                            <option value="1">Código</option>
                            <option value="2">Instrutor</option>
                            <option value="3">Curso</option>
                    </select>
                    <label>Pesquisar por:</label>
                </div>
                <div class="input-field col s5  edit_input ">
                    <i class="material-icons prefix iconColor blue_senac_icon">search</i>
                    <input type="text" class="" name="set_the_search" id="set_the_search" />
                    <label for="set_the_search">Pesquise aqui</label>
                </div>
            </form>
        </div>
        <div class="center_div_button">
            <button type="submit" class="btn ">Pesquisar</button>
        </div>
    </fieldset>
</div>

@include('layout._includes.footer')
