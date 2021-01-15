<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site - Fabio Vige</title>

    <!--FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" crossorigin="anonymous" />
</head>
<body>

    <!-- HEADER -->
    <div id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/logo.svg')}}" class="img-fluid" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.sobre')}}">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfólio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- //HEADER -->

    <!-- SLIDER -->
    <div id="slider" class="block">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-4 align-self-center mb-md-0 mb-4">
                    <h1>Lorem Ipsum is simply dummy</h1>
                    <h4 class="mb-4">Lorem ipsum dolor sit amet, consectetur.</h4>
                    <a href="#" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">Saiba mais</a>
                    <a href="#" class="btn button-primay-outline btn-outline-primary button d-md-inline-block d-block">Contato</a>
                </div>
                <div class="col-md-8 col-md-6 align-self-center text-center">
                    <img src="{{asset('img/slider.svg')}}" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
    <!-- //SLIDER -->

    <!-- SOBRE -->
    <div id="sobre" class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center text-center order-md-1 order-2">
                    <img src="{{asset('img/sobre.svg')}}" class="img-fluid" />
                </div>
                <div class="col-md-6 align-self-center mb-md-0 mb-4 order-md-2 order-1">
                    <h2 class="title">Lorem Ipsum is simply dummy</h2>
                    <h4 class="subtitle">Lorem ipsum dolor sit amet, consectetur. ipsum dolor sit amet, consecte</h4>
                    <p>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim</p>
                    <a href="#" class="btn button-primay btn-primary button ">Entre em contato</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //SOBRE -->

    @yield('content')

    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
</body>
</html>
