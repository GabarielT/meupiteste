@include('layout._includes.header')


<div  class="center">
    <img src="{{asset('asset/img/logo/senac-new-logo.jpg')}}" class="img_senac_edit">
</div>
<div class="container ">
    <div class="row">
        <div class="col s12">
            <ul class="tabs ">
                <li class="tab col s3 active"><a href="#alunos">Alunos</a></li>
                <li class="tab col s3 "><a  href="#usuarios">Usuarios</a></li>

            </ul>
        </div>

        <div id="alunos" class="col s12 center">
            <form action="{{route('form')}}" method="POST">
                {{ csrf_field() }}
                <div>
                    <h5>Valide o codigo</h5>
                </div>
                <div class="input-field input_new">
                    <input type="text" name="code" id="code">
                    <label for="code">Codigo</label>
                </div>
                <div>
                    <button type="submit" class="waves-effect waves-green btn orange_senac">Entrar</button>
                </div>
            </form>
        </div>

        <div id="usuarios" class="col s12 center">
            <form action="{{route('validated')}}" method="POST">
                {{ csrf_field() }}
                    <div>
                        <h5>Login</h5>
                    </div>

                    <div class="input-field   input_new">
                        <input type="email" name="email" id="email">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field  input_new ">
                        <input type="password" id="password" name="password">
                        <label for="password">Senha</label>
                    </div>
                    <div>
                        <button type="submit" class="waves-effect waves-green btn blue_senac ">Entrar</button>
                    </div>
            </form>
        </div>

    </div>







    {{-- <div class="row center">
        <a class="btn blue_senac  modal-trigger none_btn" href="#modal1">Equipe_S</a>
        <a class="btn orange_senac  modal-trigger none_btn" href="#modal2">Aluno_S</a>
    </div>
</div> --}}

<!-- Modal Structure (Login Senac) -->
{{-- <div id="modal1" class="modal style_modal_edit modal_user">
    @include('layout/_includes/modal/logo_modal')
    <form action="{{route('validated')}}" method="POST">
            @csrf
            <div class="modal-content">
            <div class="center">
                <h5>Login</h5>
            </div>

            <div class="row">
                <div class="input-field col s4  offset-s2">
                    <input type="email" name="email" id="email">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s4 ">
                    <input type="password" id="password" name="password">
                    <label for="password">Senha</label>
                </div>
            </div>
        </div>

        <div class="modal-footer center_modal_button">
            <button type="submit" class="waves-effect waves-green btn blue_senac ">Entrar</button>
        </div>
    </form>
</div> --}}

<!-- Modal Structure (Verificação do Aluno) -->
{{-- <div id="modal2" class="modal style_modal_edit modal_aluno">
    @include('layout/_includes/modal/logo_modal')
    <form action="#!" method="POST">
        <div class="modal-content ">
            <div class="center">
                <h5>Valide o codigo</h5>
            </div>
            <div class="row">
                <div class="input-field col s4 offset-s4">
                    <input type="text" name="code" id="code">
                    <label for="code">Codigo</label>
                </div>
            </div>

        </div>
        <div class="modal-footer center_modal_button">
            <button type="submit" class="waves-effect waves-green btn orange_senac">Entrar</button>
        </div>
    </form>
</div> --}}

  @include('layout._includes.footer')

