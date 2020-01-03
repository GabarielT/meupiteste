@include('layout._includes.header')
<form action="" method="POST">

    <div class="container">
        <fieldset class="space_field">
        <legend class="edit_legend">
            <h4>Pesquisar Usuário</h4>
        </legend>
        <div class="row">
            <form action="" method="POST">
                {{ csrf_field() }}
                <div class="input-field col s3 center_one_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">schedule</i>
                    <select name="set_option_search" id="set_option_search">
                        <option value="" disabled selected>Usuário</option>
                        <option value="1">Nome</option>
                        <option value="2">Matricula</option>
                        <option value="3">E-mail</option>
                        <option value="4">Usuário</option>
                    </select>
                    <label>Selecione um métedo</label>
                </div>
                <div class="input-field col s5 center_two_col ">
                    <input type="text" class="" name="set_the_search" id="set_the_search" />
                    <label for="set_the_search">Pesquise Aqui</label>
                </div>
            </form>
        </div>
        <div class="center_div_button">
            <button type="submit" class="btn  blue_senac">Pesquisar</button>
        </div>
    </fieldset>
</div>
</form>

@include('layout._includes.footer')
