 
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


        <div class="container my-5 py-4">


<!-- Section: Block Content -->
<section>

  <!--Grid row-->
  <div class="row">



      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4">
      <div class="media white z-depth-1 rounded">
        <i class="fas fa-city fa-lg teal z-depth-1 p-4 rounded-left text-white mr-3"></i>
        <div class="media-body p-1">
          <p class="text-uppercase text-muted mb-1"><small>Nom du magasin</small></p>
          <h5 class="font-weight-bold mb-0">Carrefour</h5>
        </div>
      </div>

    </div>

    <div class="col-lg-3 col-md-6 mb-4">

      <div class="media white z-depth-1 rounded">
        <i class="fas fa-equals blue z-depth-1 p-4 rounded-left text-white mr-3"></i>
        <div class="media-body p-1">
          <p class="text-uppercase text-muted mb-1"><small>Superficie du magasin</small></p>
          <h5 class="font-weight-bold mb-0"><?php $superficie = 1800; 
          echo($superficie); ?> m²</h5>
        </div>
      </div>
</div>

    <div class="col-lg-3 col-md-6 mb-4">

      <div class="media white z-depth-1 rounded">
        <i class="fas fa-chart-bar fa-lg deep-purple z-depth-1 p-4 rounded-left text-white mr-3"></i>
        <div class="media-body p-1">
          <p class="text-uppercase text-muted mb-1"><small>Clients max du magasin</small></p>
          <h5 class="font-weight-bold mb-0"><?php $clients_max = $superficie /4; echo($clients_max); ?></h5>
        </div>
      </div>


    </div>


    <div class="col-lg-3 col-md-6 mb-4">

      <div class="media white z-depth-1 rounded">
        <i class="fas far fa-eye fa-lg pink z-depth-1 p-4 rounded-left text-white mr-3"></i>
        <div class="media-body p-1">
          <p class="text-uppercase text-muted mb-1"><small>NB visiteurs du site/J</small></p>
          <h5 class="font-weight-bold mb-0">13 540</h5>
        </div>
      </div>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</section>
<!-- Section: Block Content -->


</div>





<!-- Grid container -->
<div class="container">

 <!--Grid row-->
 <div class="row d-flex justify-content-center">

<!--Grid column-->
<div class="col-md-6">

  <canvas id="lineChart"></canvas>

</div>
<!--Grid column-->
 </div>
 <!--Grid column-->

</div>
<!--Grid row-->

</div>


        
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js">
      
  </script>

  
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js">
      
  </script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js">
//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
      label: "My First dataset",
      data: [65, 59, 80, 81, 56, 55, 40],
      backgroundColor: [
        'rgba(105, 0, 132, .2)',
      ],
      borderColor: [
        'rgba(200, 99, 132, .7)',
      ],
      borderWidth: 2
    },
    {
      label: "My Second dataset",
      data: [28, 48, 40, 19, 86, 27, 90],
      backgroundColor: [
        'rgba(0, 137, 132, .2)',
      ],
      borderColor: [
        'rgba(0, 10, 130, .7)',
      ],
      borderWidth: 2
    }
    ]
  },
  options: {
    responsive: true
  }
});
</script>