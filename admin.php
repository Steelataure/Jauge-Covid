<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: php/login-pdo-format.php");
    exit;
}
?>
 
 
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Jauge Covid</title>
  <link rel="icon" href="assets/IT logo.png" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bungee&display=swap');
</style>
</head>

  
<body>
<nav class="navbar navbar-light bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="assets/IT logo.png" alt="IT" width="70" height="58" class="d-1-inline-block align-text">
              <FONT color="white" face="Play, aria-label"> L'informatique à petit prix</FONT>
            </a>
  
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link active" href="dashboard.php">Tableau de bord</a>
              <li class="nav-item">
                <a class="nav-link active" href="logout.php">Se déconnecter</a>
              </li>

        </nav>


  <div class="Section covid">

     <div id="bar_covid" class="progress border border-dark example z-depth-3 animated pulse slow infinite" style="width: 40%; height: 200px;">
      <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 65%" aria-valuenow="0" aria-valuemin="50" aria-valuemax="100">
       <Font face="Play" size='5'>150 clients</Font></div>
       </div>
       
       
  </div>
  <h2>Nombre de clients en temps réel</h2>
  <div>
  
  <footer class="contact">
      
  <section id="contact" class="py-5" style="background-color: #eee;">
  
    <div class="container">
  
        <h2 class="h1-responsive text-center mb-5">Contact</h2>
        <p class="text-center w-responsive mx-auto mb-5">
          adresse@gmail.com
          <br>
        </p>
    </div>
  
  </section>
  </footer>

  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
