@include('layout._includes.header')

<div class="container">
    <fieldset class="space_field">
        <legend class="edit_legend">
            <h4>Pesquisar Perguntas</h4>
        </legend>
        <div class="row">
            <form action="" id="categoria" method="POST">
                <div class="input-field col s3 center_one_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">schedule</i>
                    <select>
                            <option value="" disabled selected>Turmas</option>
                            <option value="1">T.Informatica</option>
                            <option value="2">WEB</option>
                            <option value="3">Libras</option>
                            <option value="4">Redes</option>
                        </select>
                    <label>Selecione uma categoria de pergunta</label>
                </div>
                <div class="input-field col s5 center_two_col ">
                    <input type="text" class="" name="" id="pergunta" />
                    <label>Qual a pergunta</label>
                </div>
            </form>
        </div>
        <div class="center_div_button">
            <button type="submit" class="btn ">Pesquisar</button>
        </div>
    </fieldset>
</div>

@include('layout._includes.footer')
