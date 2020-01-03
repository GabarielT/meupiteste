@include('layout._includes.header')

<body>
    <div class="container">
        <fieldset class="space_field">
            <legend class="edit_legend"><h4>Editar cargo</h4></legend>
            <form action="{{route('updatePositions')}}">
                <div class="row">
                    <div class="input-field col s5 center_one_col edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">work</i>
                        <input id="set_position" type="text" class="validate" value="{{$caminho->pss_cargo}}" name="set_position">
                        <label for="set_position">Cargo</label>
                    </div>

                    <div class="input-field col s3  edit_input">
                        <i class="material-icons prefix iconColor blue_senac_icon">priority_high
                        </i>
                        <select id="set_access_level" name="set_access_level">
                        <option value="{{$caminho->pss_id_permissao}}" disabled selected>{{$caminho->pss_permissao}}</option>
                                @foreach ($permissoes as $colocar)
                                    <option value="{{$colocar->pss_id_permissao}}">{{$colocar->pss_permissao}}</option>
                                @endforeach

                            {{-- <option value="2">Auxiliar</option>
                            <option value="3">Estagiario</option> --}}
                        </select>
                    <label >Permissão</label>
                </div>


            </div>
            <div class=" center_div_button space_btn">

                <button class="btn waves-effect waves-light blue_senac
                " type="submit" name="action">Atualizar
                <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </fieldset>
</div>

</body>
@include('layout._includes.footer')
