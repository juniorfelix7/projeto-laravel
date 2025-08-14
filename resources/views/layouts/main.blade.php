<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
  
        <!--Fonts--->
           
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
         <!--CSS-->
        <link rel="stylesheet" href="/css/style.css">  
        
        <!--Script-->
        <script src="/js/scripts.js"></script>
        <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>
        
       

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <!-- Botão toggle para mobile -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <!-- Logo -->
                    <a href="/" class="navbar-brand">
                        <img src="/img/nivelservices.svg" alt="Nivel Services">
                    </a>
                    
                    <!-- Menu -->
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Anúncios</a> 
                            </li>
                            <li class="nav-item">
                                <a href="/anuncios/create" class="nav-link">Criar Anúncio</a> 
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Entrar</a> 
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Cadastrar</a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('success'))
                        <p class ="msg">{{session('success')}}
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>        
        <footer>
            <p>Nivel3 Service &copy; 2025</p>
        </footer>
    </body> 

    
</html>