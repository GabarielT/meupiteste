@include('layout._includes.header')
<form action="" method="POST">

    <div class="container">
        <fieldset class="space_field">
            <legend class="edit_legend">
                <h4>Pesquisar Perguntas</h4>
            </legend>
            <div class="row">
                <form action="" id="categoria" method="POST">
                        {{ csrf_field() }}
                    <div class="input-field col s8 center_one_col edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">schedule</i>
                        <select id="set_option_search" name="set_option_search">
                            <option value="" disabled selected>Turmas</option>
                            <option value="1">T.Informatica</option>
                            <option value="2">WEB</option>
                            <option value="3">Libras</option>
                            <option value="4">Redes</option>
                        </select>
                        <label>Selecione uma categoria de pergunta</label>
                    </div>
                    {{-- <div class="input-field col s5 center_two_col ">
                        <input type="text" class="" name="" id="pergunta" />
                        <label>Qual a pergunta</label>
                    </div> --}}
                </form>
            </div>
            <div class="center_div_button">
                <button type="submit" class="btn blue_senac ">Pesquisar</button>
            </div>
        </fieldset>
    </div>
</form>

@include('layout._includes.footer')
