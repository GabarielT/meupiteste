@include('layout._includes.header')
<div class="container">

        <legend class="edit_legend">
            <h4>Lista de Categoria</h4>
        </legend>
        <div class="row">
            <table class="striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Habilitado?</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categoria as $categorias)
                        <tr>

                        <td>{{$categorias->pss_id_categoria}}</td>
                        <td>{{$categorias->pss_categoria}}</td>
                        <td><div class="switch">
                                <label>
                                  Off
                                  <input disabled type="checkbox" @if ($categorias->pss_habilitado == 1) checked='checked' @endif>
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
