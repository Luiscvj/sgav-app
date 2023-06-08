<?php

include_once 'app.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/Bootstrap/bootstrap.min.js" defer></script>
    <script src="js/jquery-3.7.0.slim.min.js" defer></script>
    <script src="js/app.js" type="module" defer></script>
    
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img  id="imgCompany"src="images\building.jpg" alt="ArriendoCompany" width="100"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page"  href="#">Persons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  data-verocultar='["#containerFormHouse",["#containerFormCountries"]]' href="#">House types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-verocultar='["#containerFormCountries",["#containerFormHouse"]]' href="#">Countries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">regions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Living places</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- SECCION  HOUSE TYPE    ///////////////////////////////////////// -->
<div id="containerFormHouse" style="display:none">
    <div class="card" style="width: 20rem;">   
        <div class="card-body">           
            <form id="myFormHouse" class="row g-3">
                <div class="col">            
                            <div>
                                <label value="tipo de casa" class="form-label"> Ingresar Tipo de casa</label>
                                <input type="text" class="form-control" name="name_house_type">      
                                <input type="submit"  class="btn btn-primary btnSubmit" value="Enviar">
                            </div>
                </div> 
            </form>
        </div>
    </div>
</div>
<!-- /////////////////////////////////////////////////////////////////////////// -->

<!-- SECCION COUNTRIES ///////////////////////////////////////////////////////// -->
<div id="containerFormCountries" style="display:none">
    <div class="card" style="width: 20rem;">   
        <div class="card-body">           
            <form id="myFormCountries" class="row g-3">
                <div class="col">            
                            <div>
                                <label value="tipo de casa" class="form-label"> Ingresar Pais</label>
                                <input type="text" class="form-control" name="name_country">      
                                <input type="submit"  class="btn btn-primary btnSubmit" value="Enviar">
                            </div>
                </div> 
            </form>
        </div>
    </div>
</div>

<!-- //////////////////////////////////////////////////////////////////////////// -->

</body>
</html>