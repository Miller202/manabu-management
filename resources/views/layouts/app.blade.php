<!doctype html>
<html lang="pt-br">
<head>
    <title>Manabu Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

    @yield('styles')
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" class="fade-in">
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<div id="sticky-wrapper" class="sticky-wrapper is-sticky" style="height: 68px;">
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="{{route('home')}}" class="h2 mb-0"><img style="width: 100%;" src="img/navbar-logo.png"></a></h1>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{route('login')}}" class="nav-link">Login</a></li>
                            <li><a href="{{route('register')}}" class="nav-link">Register</a></li>
                            <li><a href="{{route('budgets')}}" class="nav-link">Orçamentos</a></li>
{{--                            <li class="has-children">--}}
{{--                                <a class="nav-link">Orçamentos</a>--}}
{{--                                <ul class="dropdown">--}}
{{--                                    <li><a href="{{route('createBudget')}}" class="nav-link">Criar</a></li>--}}
{{--                                    <li><a href="{{route('budgets')}}" class="nav-link">Listar</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                        </ul>
                    </nav>
                </div>

                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
            </div>
        </div>
    </header>
</div>


<div id="loader-div" class="loader-div">
    <div class="loader-spin"></div>
</div>

<div class="themeContent">
    @yield('content')
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js" crossorigin="anonymous"></script>
@yield('scripts')
<script>
    $(document).ready(function () {
        $("#loader-div").hide();
    });
</script>
</body>
</html>
