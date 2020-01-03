@include('layout._includes.header')

<div class="center">
    <h4>Lista dos instrutores</h4>
</div>
<div class="container">
    <div class="row">
        <table class="striped centered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Habilitado?</th>
                </tr>
            </thead>
            <tbody>
                @foreach($instrutores as $intructor)
                <tr>
                    <td>{{$intructor->pss_instrutor}}</td>
                    <td><div class="switch">
                            <label>
                              Off
                              <input disabled type="checkbox" @if ($intructor->pss_habilitado ==1): checked='checked'>@endif
                              <span class="lever"></span>
                              On
                            </label>
                        </div></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('layout._includes.footer')
