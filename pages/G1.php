<!--
=========================================================
* Material Kit 2 - v3.0.2
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<?php
session_start();

$mysqli = mysqli_connect("acw2033ndw0at1t7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "tfyzpqdq6g79p08e", "c3mo9vc983wlfxdg", "ywqt4t61mteo6bmu");

if (!$mysqli) {
  echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
  echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
  echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

function getIPAddress()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}
$ip = getIPAddress();
$ip = '172.67.139.79';

$result = $mysqli->query("INSERT INTO `session` (`session_ip`) VALUES ('$ip')");

$result = $mysqli->query("SELECT * FROM `session`");
$countVisitsTotal = count($result->fetch_all(MYSQLI_ASSOC));

$result = $mysqli->query("SELECT * FROM `session` WHERE `session_time` > CURDATE();");
$countVisitsToday = count($result->fetch_all(MYSQLI_ASSOC));
?>

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="../image/png" href="../assets/img/favicon.png">

  <title>

    Tinkerbell Y El Secreto De La Química

  </title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.2" rel="stylesheet" />

</head>

<body class="index-page bg-gray-200">

  <!-- Navbar -->
  <?php include("navbar.php") ?>
  <!-- End Navbar -->

  <header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url(https://images.pexels.com/photos/6074935/pexels-photo-6074935.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
      <span class="mask opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">Líquidos biológicos</h1>
            <p class="lead text-white mt-3" style="text-align:center">Te invitamos a aprender con nosotros sobre los liquidos biologicos</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

    <section class="my-5 py-5">
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-3">
            <div class="col-lg-8">
              <h2 class="text-dark mb-0">¿Qué son los Líquidos Biologicos?</h2>
              <p class="lead">Los líquidos biológicos se encuentran en el interior del organismo y contienen diversos componentes químicos y celulares que interactúan dinámicamente para mantener el equilibrio corporal. Adicionalmente, cumplen funciones de amortiguación y transporte.</p>
              <h2 class="text-dark mb-0">Función General</h2>
              <p class="lead">El análisis de estos líquidos es relevante para el apoyo clínico ya que contribuye al diagnóstico debido a que la información respecto a su examen microbiológico, químico, citológico, macro y microscópico permitirá clasificarlos como normales o patológicos.
              </p>
              <br>
              <h2 class="text-dark mb-0">División</h2>
              <div class="row text-justify">
                <div class="col-1"></div>
                <div class="col-11">
                  <ul class="list lead mb-3 ">
                    <li> Líquido cefalorraquídeo (LCR)</li>
                    <li> Líquido sinovial</li>
                    <li> Líquidos de cavidades serosas:</li>
                    <ul>
                      <li>Líquido pericárdico.</li>
                      <li>Líquido pleural</li>
                      <li>Líquido peritoneal.</li>
                    </ul>
                    <li> Líquido amniótico.</li>
                    <li> Líquido seminal.</li>
                    <li> Orina.</li>
                  </ul>
                </div>
              </div>
              <br>
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G1/1.JPG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <br> <br>
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G1/2.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <br> <br>
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G1/3.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <br> <br>
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G1/4.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <br> <br>
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G1/5.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <br> <br>
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G1/6.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <br> <br>
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G1/7.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <br> <br>
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G1/8.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




  </div>

  <!-- Footer -->
  <?php include("footer.php") ?>
  <!-- End Footer -->

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>

  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="../assets/js/plugins/countup.min.js"></script>
  <script src="../assets/js/plugins/choices.min.js"></script>
  <script src="../assets/js/plugins/prism.min.js"></script>
  <script src="../assets/js/plugins/highlight.min.js"></script>

  <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
  <script src="../assets/js/plugins/rellax.min.js"></script>
  <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
  <script src="../assets/js/plugins/tilt.min.js"></script>
  <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
  <script src="../assets/js/plugins/choices.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>

  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.2" type="text/javascript"></script>

  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }
  </script>

</body>

</html>