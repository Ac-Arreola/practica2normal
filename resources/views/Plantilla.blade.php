<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Diario Laravel </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-warning ">
    <!-- <body class="bg-primary"> -->

        <!-- Empieza el navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Mi diario Laravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

              <li class="nav-item" >
                <a class="nav-link {{request()->routeIs('apodoHome')? 'text-warning fw-bold':''}}" href={{route('apodoHome')}} >Home</a>
                   <!-- href= {{route('apodoHome')}} -->
              </li>

              <li class="nav-item">
                <a class="nav-link {{request()->routeIs('recuerdo.create')? 'text-warning fw-bold text-decoration-line-through':''}}" 
                  href="recuerdo/create">Registrar Recuerdo</a>
              </li>

              <li class="nav-item ">
                <a class="nav-link {{request()->routeIs('recuerdo.index')? 'text-warning fw-bold':''}}"  
                  
                  href={{route('recuerdo.index')}}>Consultar Recuerdo</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

        <!-- Termina el navbar -->

        
        <!-- Empieza el contenido -->
      @yield('contenido')





        <!-- Pie de página -->
        <footer class="main-footer ">
            <div class="alert alert-warning footer" role="alert">
                Alma Cecilia Arreola B. 2022 CopyRight®
            </div>
        </footer>
       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>