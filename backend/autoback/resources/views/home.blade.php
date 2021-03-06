<!DOCTYPE html>
<html>
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
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
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
    

    <div class="col-sm-12">
        <div id="carouselExampleIndicators"  class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Slike/Mercedes.jpg" class="d-block w-100 " alt="Mercedes" id="carouselimages" >
            </div>
            <div class="carousel-item">
                <img src="Slike/Audi.jpg" class="d-block w-100 " alt="Audi" id="carouselimages">
            </div>
            <div class="carousel-item">
                <img src="Slike/Bmw.jpg" class="d-block w-100 " alt="Bmw" id="carouselimages">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <hr class="featurret devider">

    <div class="container">
      <div class="col-sm-12 pb-5">
          <div class="row text-center" >
              <div class="col-lg-4 mx-auto p-2" id="tuning">
                  <img class="MERCEDES" src="Slike/mercedes.png" width="170px" height="150px">
              </div>
              <div class="col-lg-4 mx-auto p-2" id="tuning">
                  <img class="AUDI" src="Slike/audi.png" width="190px" height="150px">
              </div>
              <div class="col-lg-4 mx-auto p-2" id="tuning">
                  <img class="BMW" src="Slike/bmw.png" width="160px" height="150px">
              </div>
          </div>
      </div>
      <div class="row pb-5 text-center">
          <div class="col-lg-6 p-2" id="tuning">
              <img src="Slike/Auspuh.png" class="auspuh" width="150px" height="150px">
          </div>
          <div class="col-lg-6 p-2" id="tuning">
              <img src="Slike/felge.png" class="felga" width="150px" height="150px">
          </div>
      </div>
    </div>

    <hr class="featurret devider">

    <div class="p-3 mb-2 bg-dark bg-gradient-info text-light">  
      <h1 class=" d-flex justify-content-center mb-2">Tehnologije koje smo koristili</h1>
      <div class="row text-center">
        <div class="col-lg-4 mx-auto" id="tehnologije">
          <a href="https://html.com/"><img width="120"  height="95" src="Slike/html.png"  style="margin-top: 2rem;" ></a>
        </div>
        <div class="col-lg-4 mx-auto" id="tehnologije">
          <a href="https://www.w3schools.com/css/"><img width="120" height="95" src="Slike/css.png" style="margin-top: 2rem;"></a>
        </div>
        <div class="col-lg-4 mx-auto" id="tehnologije">
          <a href="https://getbootstrap.com/"><img width="120" height="95" src="Slike/bootstrap.png" style="margin-top: 2rem;"></a> 
        </div>  
      </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>