<html lang="en"><head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <title>Web MVC</title>
  </head>
  <body style="display:flex;min-height:100vh;flex-direction:column;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi Codigo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active d-flex" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?Controller=page&amp;action=showCreacion">Africa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?Controller=page&amp;action=showCreacion">Asia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?Controller=page&amp;action=showCreacion">America</a>
        </li>
        
      </ul>
   
    </div>
  </div>
</nav>

<div class="container mb-3">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Img/img1.jpg" class="d-block w-100" style="height: 400px;">
      </div>
      <div class="carousel-item">
      <img src="Img/img2.jpg" class="d-block w-100" style="height: 400px;">
      </div>
      <div class="carousel-item">
      <img src="Img/img3.jpg" class="d-block w-100" style="height: 400px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div><div class="container ">
    <div class="row justify-content-end">
        <div class="col col-md-3 align-self-end">
            <form class="row g-3" method="POST" action="src/redireccion.php">
                <div class=" col align-self-end ">
                    <select name="op" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected="">Seleccione una especie. </option>
                    <option value="1">Mamifero</option>
                    <option value="2">Aves</option>
                    <option value="3">Reptiles</option>
                    <option value="4">Peces</option>
                    </select>
                </div>
                <div class="colalign-self-end">
                    <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                </div>
            </form>
              
            
        </div>
        
    </div>
   
</div>





<div class="container ">
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
    <div class="col">
        <div class="card h-100">
        <img src="Img/torogoz.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">Torogoz</h5>
            <p class="card-text">El momoto cejiazul​ es una especie de ave coraciforme de la familia Momotidae. Habita en Centroamérica desde la península de Yucatán hasta Panamá. Esta ave es también observada en América del Sur. En Colombia se le conoce como Barranquero. Es común y no se considera amenazado de extinción</p>
            <audio src="sonidos/torogoz.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="Img/delphine.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">Delphine</h5>
            <p class="card-text">Los delfines, llamados también delfines oceánicos para distinguirlos de los platanistoideos o delfines de río, son una familia de cetáceos odontocetos muy heterogénea, que comprende 37 especies actuales.</p>
            <audio src="sonidos/delphine.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="Img/perro.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">Perro</h5>
            <p class="card-text">El perro, ​​​ llamado perro doméstico o can, ​ y en algunos lugares coloquialmente llamado chucho, ​ tuso, ​ choco, ​ entre otros; es un mamífero carnívoro de la familia de los cánidos, que constituye una especie del género Canis.</p>
            <audio src="sonidos/perro.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="Img/anaconda.jpg" class="card-img-top" style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">Anaconda</h5>
            <p class="card-text">La anaconda verde o común es una especie de serpiente constrictora de la familia de las boas. Es endémica de los ríos del trópico de Sudamérica.</p>
            <audio src="sonidos/anaconda.mp3" controls=""></audio>
        </div>
        </div>
    </div>
    </div>
</div>
  
  <footer class="bg-light text-center text-lg-start " style="margin-top: auto;">
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright: Gabriel Castillo 
      
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </footer>
  
  </body></html>