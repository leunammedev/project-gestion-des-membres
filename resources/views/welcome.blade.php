<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ChriBase</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
	    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
	    <script src="https://kit.fontawesome.com/a11a3e1228.js" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/style.css" />

        
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                    {{-- @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-green hover">Register</a>
                        @endif
     
               @endauth --}}
                {{-- </div>
            @endif
        </div> --}}

        {{-- page accueil --}}
        <section class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand base" >ChristBase</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto text-right ">
                            <li class="nav-item ">
                                <a class="nav-link active-home" href="#">ACCUEIL </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ACTUALITES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ESPACE MEDIA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">CONTACT</a>
                            </li>
                           
                        </ul>
                        <ul class="navbar-nav text-right ">
                            <li class="nav-item">
                                @if (Route::has('login'))
                                            @auth
                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                @else
                                <li class="nav-item">       
                                    <a href="{{ route('login') }}" class="btn btn-primary ">Se Connecter</a>
                                </li>
                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="btn   hover">S'inscrire</a>
                                    </li>
                                    @endif
                                @endauth
                                @endif
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="row banner">
                    <div class="col-md-6">
                        <h1> All Nation For God </h1>
                        <p>Vous désirez grandir dans votre foi
                            et progresser dans votre marche avec Dieu ?</p>
                        <a href="#" class="express-btn">REJOINDRE</a>
                        <a href="#">EXPLORE PLUS</a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="/images/bg4.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- service debut -->
        <section class="service">
            <div class="container">
                <h2 class="title">NOTRE VISION </h2>
                <p class="subtitle">Construire des hommes et des femmes qui inspirent et influencent positivement leur
                    environnement <br> pour la gloire de Dieu et pour l’avancement de l’humanité.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="service-box">
                            <img src="/images/osee.jpg">
                            <h6>TEMOIGNAGES </h6>
                            <P>Découvrez les histoires extraordinaires
                                de ceux qui ont expérimenté Jésus !</P>
    
                            <i class="fa fa-arrow-right"></i> 
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="service-box active-service">
                            <img src="/images/formation.jpg">
                            <h6>NOS FORMATIONS </h6>
                            <P>Notre désir, vous accompagner dans votre
                                parcours pour faire de vous de véritables disciples de Christ.</P>
    
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="service-box active-service">
                            <img src="/images/reve.jpg">
                            <h6>NOTRE REVE </h6>
                            <P>Ensemble, Découvrez ce que
                                ChristBase veut faire à travers vous. </P>
    
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-box">
                            <img src="images/service.jpg">
                            <h6>NOS SERVICES </h6>
                            <P>Rejoignez nos différentes plateformes
                                 destinées à vous aider et prendre soin de vous. </P>
    
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service fin -->
    
        <section class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>La transformation vient par l’information et
                             nous ne pouvons pas opérer au-delà de ce que 
                             nous ne connaissons pas.
                             </h2>
                             <p> un endroit dans le monde où vous pouvez
                                 vous rassembler avec la famille de Dieu </p>
                                 <a href=""> REGARDER ICI</a>
                    </div>
                    <div class="col-md-6">
                        <img src="/images/worship.jpg" alt="">
                    </div>
                </div>
            </div>
    
        </section>
        <section class="footer text-center">
            <div class="container">
                <h2>Abonnez vous a notre Newsletter</h2>
                <form action="">
                    <input type="email" placeholder="Entrer Votre Email..." required>
                    <button type="submit">S'abonné</button>
                    <small>&copy; 2022 , Leunammedev</small>
                </form>
            </div>
        </section>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

</html>
