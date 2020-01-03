
@include('layout._includes.header')

<div class="container">
        <fieldset class="space_field">
                <legend class="edit_legend"><h4>Cadastro de categorias</h4></legend>
                <form action="{{route('saveCategories')}}" method="POST">
                    {{ csrf_field() }}
    <div class="row">
        <div class="input-field col s8 center_one_col edit_input">
            <input type="text"  name="set_category" id="set_category" required>
            <label for="set_category">Nome da categoria</label>
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