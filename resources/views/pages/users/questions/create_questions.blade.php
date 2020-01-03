@include('layout._includes.header')
<form action="{{route('saveQuestions')}}" method="POST">

    <div class="container">
        <fieldset class="space_field">
            <legend class="edit_legend">
                <h4>Cadastro de Perguntas</h4>
            </legend>
            <div class="row">
                <form action=""  method="POST">
                        {{ csrf_field() }}
                    <div class="input-field col s3 center_one_col edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">schedule</i>
                        <select name="set_category_question" id="set_category_question">
                            <option value="" disabled selected>Categorias</option>
                            @foreach ($categorias as $colocar)
                            <option value="{{$colocar->pss_id_categoria}}">{{$colocar->pss_nome}}</option>

                            @endforeach
                                {{-- <option value="2">WEB</option>
                                <option value="3">Libras</option>
                                <option value="4">Redes</option> --}}
                        </select>
                        <label>Selecione categoria de pergunta</label>
                    </div>
                    <div class="input-field col s5 center_two_col ">
                        <input type="text" class="" name="set_question" id="set_question" />
                        <label for="set_question">Qual a pergunta</label>
                    </div>
                </form>
            </div>
            <div class="center_div_button">
                <button type="submit" class="btn ">Cadastrar</button>
            </div>
        </fieldset>
    </form>
</div>

@include('layout._includes.footer')
