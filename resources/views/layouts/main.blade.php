<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Travela</title>
  
  </head>
  <body>
   <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
  <div class="container md-1">
    <a class="navbar-brand" href="/"><i class="bi bi-cloud-haze2-fill"></i> SunsetTravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/">Dashboard</a></li>
            <li><a class="dropdown-item" href="/">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Log Out</a></li>
          </ul>
        </li>
        @endauth
        @guest
         
        @endguest
        </ul>
        </div>
  </div>
  </nav>
  <div class="container mt-4">
        @yield('container')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  
</html>