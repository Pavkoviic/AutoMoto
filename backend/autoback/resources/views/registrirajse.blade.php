<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AutoMoto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{url('css/style.css')}}">
    <script src='index.js'></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container">
              <img src="Slike/slikazanavbar.png" width="100" height="50" class="d-inline-block align-top" alt="AutoMoto">
              <a class="navbar-brand" href="index.html">AutoMoto</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link" href="onama.html">O nama</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="kontaktirajtenas.html">Kontaktirajte nas</a>
                  </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="prijavise.html"> Prijavi se</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="registrirajse.html"> Registriraj se</a>
                    </li>
                  </ul>
              </div>
            </div>
        </nav>
    </header>

    <div class="register-form">
        <form action="/examples/actions/confirmation.php" method="post">
            <h2 class="text-center mb-3">Register</h2>       
            <div class="form-group mb-3">
                <input type="text" class="form-control" placeholder="E-mail" required="required">
            </div>
            <div class="form-group mb-4">
                <input type="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group mb-4">
                <input type="password" class="form-control" placeholder="Confirm Password" required="required">
            </div>
            <div class="form-group mb-4">
                <button type="submit" class="btn btn-dark btn-block">Prijavi se</button>
            </div>      
        </form>
    </div>

    <footer>
      <nav class="navbar navbar-dark fixed-bottom bg-dark text-light">
        <div class="container ">
          <p1 class="center">AutoMoto</p1>
        </div>
        </nav>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>