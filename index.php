<?php include 'conexion.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="css/style.css" class="css">
    <link rel="stylesheet" href="css/stylefooter.css">
    <title>MHINSA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body >

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"> <img src="Resources/logopng.png" alt="" width="100"> </a>
      <button class="navbar-toggler" 
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" 
      aria-expanded="false" 
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
          <li class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tipos de Mangueras</a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="Mangueras.html">Baja Presion</a></li>
              <li><a class="dropdown-item" href="Mangueras.html">Media Presion</a></li>
              <li><a class="dropdown-item" href="Mangueras.html">Alta Presion</a></li>
          </li>
        </ul>
        <li class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tipos de Conexiones</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="Conexiones.html">Conexiónes a Presion</a></li>
			  <li><a class="dropdown-item" href="Conexiones.html">Conexión para tubing</a></li>
              <!-- <li><hr class="dropdown-divider"></li> -->                 <!-- Dividivir dentro del submenu -->
        </li>
            </ul>
          <li class="nav-item"><a class="nav-link" href="Catálogo.html">Catalogo</a></li>
          

        </ul>
      </div>
    </div>
  </nav>

    <main class="container">
        <header>
            <h1>Mangueras y Conexiones, MHINSA</h1>
        </header>
    </main> 

    <div  id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Resources/icono1.jpg" class="d-block w-100" alt="img3">
          <div class="carousel-caption d-none d-md-block">
            <p>Descripcion.</p>      <!-- Descripcion del articulo -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="Resources/icono2.jpg" class="d-block w-100" alt="img1">
          <div class="carousel-caption d-none d-md-block">
            <p>Descripcion.</p>      <!-- Descripcion del articulo -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="Resources/Manguera1.jpg" class="d-block w-50" alt="img2">
          <div class="carousel-caption d-none d-md-block">
            <p>Descripcion.</p>      <!-- Descripcion del articulo -->
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

<section>
        <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible"> MHINSABOT
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>
        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container-->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages-->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="bosStarterMessage" class="botText"><span>Hola! soy MHINSABot. Estoy para responder preguntas relacionadas con la empresa.
                            Espero poder ayudarte.</span></p>

                            <?php
                                if(!empty($_POST)){
                                    $manguera = explode(" ", $_POST['PalabraClave']);
                                    $bandas = explode(" ", $_POST['PalabraClave']);
                                    $adaptadores = explode(" ", $_POST['PalabraClave']);
                                    $conexiones = explode(" ", $_POST['PalabraClave']);

                                    switch ($manguera){
                                        case ($manguera):
                                        $query = "SELECT clasificacion, descripcion FROM manguera WHERE clasificacion like '%" . $manguera[0] . "%'";
                                        for($i = 1; $i < count($manguera); $i++) {
                                            if(!empty($manguera[$i])) {
                                                $query .= "WHERE clasificacion like '%" . $manguera[$i] . "%'";
                                            }
                                        }
                                        $result = $db->query($query);
                                        echo "<p class='userText'><span> ". $_POST['PalabraClave']."</span></p>";
                                        echo "<p class='botText'><span> Tenemos algunas de estas cosas: </span></p>";
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $field1name = $row["clasificacion"];
                                                $field2name = $row["descripcion"];
                                                echo "<table class='botText'>";
                                                echo "<tr>
                                                     <td width='130px'><span>".$field1name.":</span></td><td width='200px'><span>". $field2name . "</span></td>
                                                     </tr>";
                                                echo "</table>";                                                
                                            }
                                            echo "<br>";
                                        }   
                                        else {
                                        echo "<p class='botText'><span>Resultados encontrados: Ninguno</span></p>";                       
                                        }
                                        break;
                                    }
                
                
                
                                    switch ($adaptadores){
                                        case ($adaptadores):
                                        $query = "SELECT clasificacion, descripcion FROM adaptadores WHERE clasificacion like '%" . $adaptadores[0] . "%'";
                                        for($i = 1; $i < count($adaptadores); $i++) {
                                            if(!empty($adaptadores[$i])) {
                                                $query .= "WHERE clasificacion like '%" . $adaptadores[$i] . "%'";
                                            }
                                        }
                                        $result = $db->query($query);
                                        echo "<p class='userText'> <span>". $_POST['PalabraClave']."<span></p>";
                                        echo "<p class='botText'><span> Tenemos algunas de estas cosas: </span></p>";                        
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $field1name = $row["clasificacion"];
                                                $field2name = $row["descripcion"];
                                                echo "<table class='botText' border>";
                                                echo "<tr>
                                                <td width='130px'>".$field1name."</td>
                                                <td width='200px'>".$field2name."</td>
                                                </tr>";
                                                echo "</table>";
                                            }
                                            echo "<br>";
                                        }   
                                        else{
                                        echo "<p class='botText'><span>Resultados encontrados: Ninguno</span></p>";
                                        }
                                        break;
                                    }

                                    switch ($conexiones){
                                        case ($conexiones):
                                        $query = "SELECT clasificacion, descripcion FROM conexiones WHERE clasificacion like '%" . $conexiones[0] . "%'";
                                        for($i = 1; $i < count($conexiones); $i++) {
                                            if(!empty($conexiones[$i])) {
                                                $query .= "WHERE clasificacion like '%" . $conexiones[$i] . "%'";
                                            }
                                        }
                                        $result = $db->query($query);
                                        echo "<p class='userText'> <span>". $_POST['PalabraClave']."</span></p>";
                                        echo "<p class='botText'><span> Tenemos algunas de estas cosas: </span></p>";
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $field1name = $row["clasificacion"];
                                                $field2name = $row["descripcion"];
                                                echo "<table class='botText' border>";
                                                echo "<tr>
                                                <td width='130px'>".$field1name."</td>
                                                <td width='200px'>".$field2name."</td>
                                                </tr>";
                                                echo "</table>";
                                            }
                                            echo "<br>";
                                        }   
                                        else {
                                        echo "<p class='botText'><span>Resultados encontrados: Ninguno</span></p>";
                                        }
                                        break;
                                    }
                
                    
                                    switch ($bandas){
                                        case ($bandas):
                                        $query = "SELECT clasificacion, descripcion FROM bandas WHERE clasificacion like '%" . $bandas[0] . "%'";
                                        for($i = 1; $i < count($bandas); $i++) {
                                            if(!empty($bandas[$i])) {
                                                $query .= "WHERE clasificacion like '%" . $bandas[$i] . "%'";
                                            }
                                        }
                                        $result = $db->query($query);
                                        echo "<p class='userText'><span>". $_POST['PalabraClave']."</span></p>";
                                        echo "<p class='botText'><span> Tenemos algunas de estas cosas: </span></p>";
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $field1name = $row["clasificacion"];
                                                $field2name = $row["descripcion"];
                                                echo "<table class='botText' border>";
                                                echo "<tr>
                                                <td width='130px'>".$field1name."</td>
                                                <td width='200px'>".$field2name."</td>
                                                </tr>";
                                                echo "</table>";
                                            }
                                            echo "<br>";
                                        }   
                                        else {
                                        echo "<p class='botText'><span>Resultados encontrados: Ninguno</span></p>";
                                        }
                                        break;
                                    }                     
                                }
                                ?>
                                
                            </div>
                            
                            <!-- User input box-->
                            <form method="post" autocomplete="off">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormInput"></label>
                                        <input required name="PalabraClave" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese tu busqueda">
                                        <input name="buscar" type="hidden" id="btn" value="Enviar">
                                    </div>                                
                                    <p></p>
                                </div>                         
                                <button class="fa fa-fw fa-send" type="hidden"></button>

                            </form>
                        </div>                    
                    </div>
                </div
            </div>
        </div>
    </section>

  <footer class="footer">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="Resources/logopng.png">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>Contacto</h2>
            <p> Tel: 818-253-2344 </p>
            <p> Tel: 83-54-69-02 </p>
        </div>
        <div class="box">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14380.076319046488!2d-100.281073!3d25.7037923!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf11f19049f63a001!2sMANGUERAS%20HIDRAULICAS%20Y%20NEUMATICAS%20SA%20DE%20CV%20(MHINSA)!5e0!3m2!1ses-419!2smx!4v1652049444730!5m2!1ses-419!2smx" 
          width="80%" 
          height="100%" 
          style="border:0;"
           allowfullscreen="" 
           loading="lazy" 
           referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

    </div>
    <div class="grupo-2">
        <small>&copy;2022 <b>MC</b> -a Todos los Derechos Reservados</small>
    </div>

</footer>

</body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>
    <script src="responses.js"></script>
    <script src="chat.js"></script> 
   
</html>
