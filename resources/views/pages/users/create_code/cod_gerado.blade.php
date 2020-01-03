@include('layout._includes.header')

<div class="titulo center">
        <form action="" method="post">
        {{ csrf_field() }}
        <h3>O codígo gerado foi:</h3>
            <h2 style="color:red">{{$codigo}}</h2>


    <div class="center_div_button">
        <button class="btn waves-effect waves-light orange_senac
    " type="submit" name="action">Voltar
            <i class="material-icons right">send</i>
    </div>
        </form>
</div>

@include('layout._includes.footer')
