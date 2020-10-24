@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3 p-4 justify-content-center mobile-top-login">
        <div class="col-xl-6 mb-5">
            <div class="web-div-box">
                <div class="box-div-info">
                    <hr>
                    <form id="login-form" class="form-login" method="POST">
                        <form id="form" method="POST" class="formStyleWidth" action="">
                            <div id="modalPage1">
                                <div class="form-group">
                                    <p><img src="img/icone-homem.png"> Nome:</p>
                                    <input class="form-control" type="text" name="registration" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <p><img src="img/icone-email.png"> Email:</p>
                                    <input class="form-control" type="number" name="password" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <p><img src="img/icone-telefone.png"> Telefone:</p>
                                    <input class="form-control" type="number" name="password" placeholder="" required>
                                </div>

                                <button type="button" class="btn btn-style-1" onclick="nextPage()">Próximo</button>
                            </div>

                            <div id="modalPage2" style="display: none">
                                <div class="form-group">
                                    <p><img src="img/icone-nome.png"> Usuário:</p>
                                    <input class="form-control" type="number" name="password" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <p><img src="img/icone-senha.png"> Senha:</p>
                                    <input class="form-control" type="number" name="password" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <p><img src="img/icone-senha.png"> Confirmar senha:</p>
                                    <input class="form-control" type="number" name="password" placeholder="" required>
                                </div>

                                <button type="button" class="btn btn-style-2" onclick="lastPage(1)">Anterior</button>
                                <button type="submit" class="btn btn-style-1">Cadastrar</button>
                            </div>
                        </form>

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
