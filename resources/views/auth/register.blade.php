@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3 p-4 justify-content-center mobile-top-login">
        <div class="col-xl-6 mb-5">
            <div class="web-div-box">
                <div class="box-div-info">
                    <hr>
                    <form id="register-form" class="form-login" method="POST">
                        @csrf
                        <div id="modalPage1">
                            <div class="form-group">
                                <p><img src="img/icone-homem.png"> Nome:</p>
                                <input class="form-control" type="text" name="name" placeholder="Insira seu nome" required>
                            </div>

                            <div class="form-group">
                                <p><img src="img/icone-email.png"> Email:</p>
                                <input class="form-control" type="email" name="email" placeholder="Insira seu email" required>
                            </div>

                            <div class="form-group">
                                <p><img src="img/icone-telefone.png"> Telefone:</p>
                                <input class="form-control" type="number" name="phone" placeholder="Insira seu telefone" required>
                            </div>

                            <button type="button" class="btn btn-style-1" onclick="nextPage()">Próximo</button>
                        </div>

                        <div id="modalPage2" style="display: none">
                            <div class="form-group">
                                <p><img src="img/icone-nome.png"> Usuário:</p>
                                <input class="form-control" type="text" name="login" placeholder="Insira seu login" required>
                            </div>

                            <div class="form-group">
                                <p><img src="img/icone-senha.png"> Senha:</p>
                                <input class="form-control" type="text" name="password" placeholder="Insira sua senha" required>
                            </div>

                            <div class="form-group">
                                <p><img src="img/icone-senha.png"> Confirmar senha:</p>
                                <input class="form-control" type="password" name="confirmPassword" placeholder="Insira novamente sua senha" required>
                            </div>

                            <button type="button" class="btn btn-style-2" onclick="lastPage(1)">Anterior</button>
                            <button type="submit" class="btn btn-style-1">Cadastrar</button>
                        </div>
                    </form>

                    <hr>

                    <div class="col-xl-12 text-center mb-2">
                        <p class="div-date-time"><?= utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today'))) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#register-form').on('submit',(function(e) {
            e.preventDefault();
            $("#loader-div").show();
            let data = new FormData(this);

            $.ajax({
                type:'POST',
                url: "{{route('register')}}",
                data: data,
                cache:false,
                contentType: false,
                processData: false,
                success:function(returnData){
                    $("#loader-div").hide();
                    if(returnData == 1){
                        alert('Cadastro realizado com sucesso.');
                    }else{
                        alert('Houve um erro ao tentar se cadastrar.');
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

    function nextPage() {
        $("#modalPage1").animate({opacity: 0}, "fast", function(){
            document.getElementById('modalPage1').style.display = 'none';
            $("#modalPage2").animate({opacity: 1}, "fast", function(){
                document.getElementById('modalPage2').style.display = 'block';
            });
        });
    }

    function lastPage() {
        $("#modalPage2").animate({opacity: 0}, "fast", function(){
            document.getElementById('modalPage2').style.display = 'none';
            $("#modalPage1").animate({opacity: 1}, "fast", function(){
                document.getElementById('modalPage1').style.display = 'block';
            });
        });
    }
</script>
@endsection
