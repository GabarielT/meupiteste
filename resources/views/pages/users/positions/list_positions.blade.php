@include('layout._includes.header')

<div class="center">
    <h4>Lista de cargos</h4>
</div>
 <div class="container">
    <div class="row">
        <table class="centered striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cargo</th>
                    <th>Permissões</th>
                    <th>Habilitado?</th>
                </tr>
            </thead>


                @foreach ($bancoPesquisa as $colocar)
                    <tr>
                        <td>{{$colocar->pss_id_cargo}}</td>
                        <td>{{$colocar->pss_cargo}}</td>
                        <td>{{$colocar->pss_permissao}}</td>
                        <td><div class="switch">
                                <label>
                                  Off
                                  <input disabled type="checkbox" @if ($colocar->pss_habilitado ==1): checked='checked'>@endif
                                  <span class="lever"></span>
                                  On
                                </label>
                            </div></td>
                    </tr>
                @endforeach


        </table>
    </div>
 </div>

 @include('layout._includes.footer')
