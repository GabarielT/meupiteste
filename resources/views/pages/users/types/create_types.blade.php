
@include('layout._includes.header')

<body>
    <div class="container">
        <fieldset class="space_field">
            <legend class="edit_legend"><h4>Cadastro de Nivel Academico</h4></legend>
            <form action="{{route('saveTypes')}}" method="POST">
                    {{ csrf_field() }}
                <div class="row">

                    <div class="input-field col s8 center_one_col edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">work</i>
                        <input id="set_type" type="text" class="validate" name="set_type">
                        <label for="set_type">Nivel acadêmico</label>
                    </div>

                </div>
                <div class="center_div_button space_btn">
                    <button class="btn waves-effect waves-light blue_senac
                    " type="submit" name="action">Cadastrar
                    <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </fieldset>
    </div>

</body>
@include('layout._includes.footer')
