@include('layout._includes.header')

<div class="container">
    <fieldset class="space_field">
        <legend class="edit_legend">
            <h4>Pesquisar Tipos</h4>
        </legend>
        <div class="row">
            <form action="" method="POST">
                    {{ csrf_field() }}
                <div class="input-field col s3 center_one_col edit_input">


                </div>
                <div class="input-field col s12 center_two_col ">
                    <input type="text" class="" name="" id="" />
                    <label>Pesquisa</label>
                </div>
            </form>
        </div>
        <div class="center_div_button">
            <button type="submit" class="btn ">Pesquisar</button>
        </div>
    </fieldset>
</div>

@include('layout._includes.footer')
