@include('layout._includes.header')

<div class="container">
    <fieldset class="space_field">
        <legend class="edit_legend">
            <h4>Pesquisar Cursos</h4>
        </legend>
        <div class="row">
            <form action="" method="POST">
                    {{ csrf_field() }}
                <div class="input-field col s8 center_one_col ">
                    <input type="text" class="" name="set_the_search" id="set_the_search" placeholder="Digite um nome" />
                    <label for="set_the_search" >Pesquise um instrutor </label>
                </div>
            </form>
        </div>
        <div class="center_div_button">
            <button type="submit" class="btn blue_senac">Pesquisar<i class="material-icons right">send</i></button>

        </div>
    </fieldset>
</div>

@include('layout._includes.footer')
