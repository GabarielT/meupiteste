@include('layout._includes.header')

<div class="container">
    <fieldset class="space_field">
        <legend class="edit_legend">
            <h4>Pesquisar Cargos</h4>
        </legend>
        <div class="row">
            <form action="" method="POST">
                    {{ csrf_field() }}
                    <div class="input-field col s3 center_one_col  edit_input">
                            <i class="material-icons prefix iconColor blue_senac_icon">priority_high
                            </i>
                            <select id="set_option_search" name="set_option_search">
                                <option value="" disabled selected>
                                <option value="">Permissão</option>
                                <option value="">Nome</option>
                            </select>
                        <label>Pesquisar por:</label>
                    </div>
                <div class="input-field col s5  edit_input ">
                        <i class="material-icons prefix iconColor blue_senac_icon">search
                            </i>
                    <input type="text"  name="set_the_search" id="set_the_search" />
                    <label for="set_the_search">Pesquise aqui</label>
                </div>
            </form>
        </div>
        <div class="center_div_button">
            <button type="submit" class="btn blue_senac ">Pesquisar <i class="material-icons right">send</i></button>
        </div>
    </fieldset>
</div>

@include('layout._includes.footer')
