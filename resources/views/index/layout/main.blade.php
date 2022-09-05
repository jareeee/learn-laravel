<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    
    <title>Recomme | {{ $title }} </title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container ">
    <a class="navbar-brand" href="#">Recomme</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title == 'galery') || ($title == 'galeries') ? 'active' : '' }}" href="/galeries">Galery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about')? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      @guest
        <li class="nav-item"> 
          <a href="/login {{ ($title == 'login') ? 'active' : '' }}" class="nav-link">Login</a>
        </li>
      @else 
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Wellcome, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item">Log Out</button>
            </form>
          </ul>
        </li>  
      @endguest
      </ul>
    </div>
  </div>
</nav>

    <div class="container mt-4">
        <!-- Content here -->
        @yield("container")
    </div>

  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>