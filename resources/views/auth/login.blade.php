@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-3 p-4 justify-content-center mobile-top-login">
        <div class="col-xl-4 mb-5">
            <div class="web-div-box">
                <div class="box-div-info">
                    <hr>
                    <form id="login-form" class="form-login" method="POST">
                        <div class="form-group">
                            <p> <img src="img/icone-identidade.png"> Usuário:</p>
                            <input type="text" class="form-control login-input" id="login" name="login" title="Insira seu login" placeholder="Insira seu login" required>
                        </div>

                        <div class="form-group">
                            <p><img src="img/icone-senha.png"> Senha:</p>
                            <input type="password" class="form-control login-input" id="password" name="password" title="Insira sua senha" placeholder="Insira sua senha" required>
                        </div>

                        <a class="login-create-account" href="{{route('register')}}">Cadastrar uma conta</a>

                        <button type="submit" class="btn btn-style-1 mt-3">Acessar</button>

                        <hr>

                        <div class="col-xl-12 text-center mb-2">
                            <p class="div-date-time"><?= utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today'))) ?></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#login-form').on('submit',(function(e) {
            e.preventDefault();
            $("#loader-div").show();
            let data = new FormData(this);

            $.ajax({
                type:'POST',
                url: "{{route('login')}}",
                data: data,
                cache:false,
                contentType: false,
                processData: false,
                success:function(returnData){
                    $("#loader-div").hide();
                    if(returnData == 1){
                        window.location.href = "{{route('budgets')}}";
                    }else if(returnData == 2){
                        alert('Não há usuários com essa combinação de login e senha.');
                    }else{
                        alert('Houve um erro ao tentar acessar o sistema.');
                    }
                    console.log(returnData);
                },
                error: function(returnData){
                    $("#loader-div").hide();
                    console.log("error");
                    console.log(returnData);
                }
            });
        }));
    });
</script>
@endsection
