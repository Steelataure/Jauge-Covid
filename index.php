 <!DOCTYPE html>
<html lang="en">

<?php include("php/header.php") ?>
<body>

<style>
body {
   overflow-x: hidden;
}
</style>

    <?php include("php/nav_barre.php");
     include("php/stats_card.php")?>
    
  <div class="Section covid">

     <div id="bar_covid" class="progress border border-dark example z-depth-3 animated pulse slow infinite" style="width: 45%; height: 200px;">
      <div class="progress-bar progress-bar-striped bg-sucess progress-bar-animated" role="progressbar" style="width: 65%" aria-valuenow="0" aria-valuemin="50" aria-valuemax="100">
       <Font face="Play" size='5'>350/<?php echo $clients_max ?></Font></div>
       </div>
      
       
  </div>
  <h2><Font face="Poppins" size='10'>Vous pouvez entrer dans le magazin</Font></h2>
  <div>


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
