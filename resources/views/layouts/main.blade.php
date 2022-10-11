<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='css/styles.css?version=1' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body style="background-color: black">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="https://seeklogo.com/images/U/umbrella-corporation-logo-59C799E7A5-seeklogo.com.png" alt="Umbrella" width="40" height="40">   UMBRELLA: BIO WEAPON
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/t_virus">T-VIRUS</a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" active href="g_virus">G-VIRUS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/parasite">PARASITE MUTATION</a>
                </li>
              </ul>
          </div>
        </div>
      </nav>

      
      
      <div class="p-3 mb-2 bg-dark text-light">
      <div class="container mt-5">
        @yield('container')
      </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>