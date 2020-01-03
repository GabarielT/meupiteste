@include('layout._includes.header')

    <div class="container">
        <fieldset class="space_field">
            <legend class="edit_legend"><h4>Gerar Questionário</h4></legend>
            <form action="{{route('saveCode')}}" method="post">
                    {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s4 center_one_col edit_input">
                    <select name="set_classe" id="set_classe">
                            <option value="" disabled selected>Selecione uma Turma</option>
                            @foreach ($turmas as $colocar)
                                <option value="{{$colocar->pss_id_turma}}">{{$colocar->pss_cod_turma}}</option>
                            @endforeach
                            {{-- <option value="2">Option 2</option>
                            <option value="3">Option 3</option> --}}
                          </select>
                          <label>Selecione uma Turma</label>
                    </div>

                    <div class="input-field col s2 center_one_col edit_input">
                        <label>
                            <input type="checkbox" class="filled-in" name="set_status" id="set_status" />
                            <span>Curso sera finalizado?</span>
                        </label>
                    </div>
                </div>
                <div class="row " hidden>
                    <div class="input-field col s8">
                        <input type="text" name="set_user" id="set_user">
                        <label for="set_user">Usuario</label>
                    </div>
                </div>
                <div class="center_div_button space_btn">
                    <button type="submit" class="btn waves-effect waves-light blue_senac "><i class="material-icons right">cloud</i>gerar</button>
                </div>
            </form>
        </fieldset>
    </div>


@include('layout._includes.footer')
