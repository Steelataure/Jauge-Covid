 
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
                <a class="nav-link active" href="">Tableau de bord</a>
              <li class="nav-item">
                <a class="nav-link active" href="logout.php">Se déconnecter</a>
              </li>

        </nav>

 <div class="col-md-5">
  <canvas id="myChart"></canvas>
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
      
  </script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">

var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
      datasets: [{
        label: 'Personnes dans le magasin',
        data: [12, 19, 3, 5, 2, 3, 5],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(25, 159, 164, 0.2)'

        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(25, 159, 164, 0.2)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  </script>