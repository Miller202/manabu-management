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
                            <input type="text" class="form-control login-input" id="registration" name="registration" title="Matrícula" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <p><img src="img/icone-senha.png"> Senha:</p>
                            <input type="password" class="form-control login-input" id="password" name="password" title="Senha" placeholder="" required>
                        </div>

                        <a class="login-create-account" href="{{route('register')}}">Cadastrar uma conta</a>

                        <button type="submit" class="btn btn-style-1 mt-3" onclick="submitForm()">Acessar</button>

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

@endsection
