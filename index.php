 <!DOCTYPE html>
<html lang="en">

<?php
include("php/header.php"); 


require_once "config.php";
?>
<head> 
  <meta http-equiv="refresh" content="1.7">
</head>
<body>
<style>
body {
   overflow-y: hidden;
}</style>

<?php 
include("php/nav_barre.php");
    
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
  

  <div class="test" >
  <h2><Font face="Poppins" size='10'><?php
  if ($compteur >= $clients_max){
  echo $surplus;
  }
  else{echo $passage_possible;
  } ?></Font></h2>
  
  
  </div>
<div class="distbarre py-5">
     <?php include("php/footer.php") ?>
</div>
  
</body>
</html>
