<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: php/login-pdo-format.php");
    exit;
}


require_once "config.php";
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
<nav class="navbar navbar-light navbar-dark black">
          <div class="container-fluid ">
            <a class="navbar-brand my-auto" href="admin.php">
              <FONT color="white" face="Segoe UI Black" size=6><i>/TARGUS</i>
            </a></FONT>

            <div class="nav navbar-nav mx-auto">
              <div class="nav-item">
              <div class="navbar-brand"><FONT color="white" face="Segoe UI Black" size=5>Carrefour</div></FONT>
              </div></div>
              
        <div class="nav navbar-nav mx-auto">
              <div class="nav-item">
              <a class="navbar-brand" href="dashboard.php"><FONT color="white" face="Segoe UI Black" size=5>Tableau de bord</FONT>
              </div></div>

            <div class="nav justify-content-end">
              <div class="nav-item">
                <a class="navbar-brand" href="logout.php"><FONT color="white" face="Segoe UI Black" size=5>Se déconnecter</a></FONT>
              </div>

        </nav>


<style>
body {
   overflow-x: hidden;
}</style>

   <?php  
   include("php/stats_card.php");
   
$sqlQuery = 'SELECT * FROM jauge';
$recipesStatement = $pdo->prepare($sqlQuery);
$recipesStatement->execute();
$jauge = $recipesStatement->fetchAll();


$clients_max = 10;
foreach ($jauge as $jauges) {
?>
    <?php $compteur = $jauges['compteur'];
    ?>
    
<?php
}
    $jauge_value = (($compteur/$clients_max)*100);
    $surplus = "Vous ne pouvez pas entrer dans le magasin";
    $passage_possible = "Vous pouvez entrer dans le magasin";
    $jauge_color = "bg-blue";
    
    
    if ($compteur >= $clients_max){
    $jauge_color = "bg-danger";}
    else{
    $jauge_color = "";
  }  
?>
    
    
  <div class="Section covid py-4">

     <div id="bar_covid" class="progress border border-dark example z-depth-3 animated pulse slow infinite" style="width: 45%; height: 200px;">
      <div class="progress-bar progress-bar-striped <?php echo $jauge_color
?> progress-bar-animated" role="progressbar" style="width:<?php echo 
     $jauge_value ?>%" aria-valuenow="0" aria-valuemin="50" aria-valuemax="100">
       <Font face="Play" size='5'><?php echo $compteur ?>/<?php ; echo $clients_max ?></Font></div>
  </div>
  </div>
       
  </div>
  <h2>Nombre de clients en temps réel</h2>
  <div>


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
