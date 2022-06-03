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
            <h1 class="text-white pt-3 mt-n5">ESTEATOSIS Y ESTEATOHEPATITIS NO ALCOHÓLICA</h1>
            <p class="lead text-white mt-3" style="text-align:center">Te invitamos a aprender con nosotros sobre la Esteatosis Y Esteatohepatitis No Alcohólica</p>
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
              <h2 class="text-dark mb-0">¿Qué es la Esteatosis Y Esteatohepatitis No Alcohólica?</h2>
              <p class="lead">El cuerpo puede padecer una alteración en el metabolismo de lípidos, generando así un desequilibrio de lípidos en el hígado, generando la llamada esteatosis, que posteriormente puede desencadenar esteatohepatitis, la acumulación de lípidos puede deberse al consumo excesivo de alcohol o puede no estar relacionado con este, cuando no tiene relación con el consumo de alcohol se llama Esteatosis y Esteatohepatitis no alcohólica. </p>
              <br>
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G4/Imagen 1.jfif" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Esteatosis</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  La esteatosis es la acumulación de gotas de lípidos dentro de los hepatocitos y se considera patológica cuando afecta a más del 5% de los hepatocitos, es la enfermedad hepática más común. La grasa que se acumula es principalmente triglicéridos y puede atribuirse a los efectos del metabolismo del alcohol sobre la síntesis de ácidos grasos en el hígado. </p>

                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G4/Imagen 2.PNG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <p class="lead mb-0">La esteatosis es un problema grave a la salud, pues puede desencadenar una cascada de afectaciones:
                </p>
                <h5 class="text-dark pt-1 mb-0">Esteatosis ➜ Esteatohepatitis ➜ Cirrosis ➜ Cáncer ➜ hepático</h5>
                <h3 class="text-dark pt-1 mb-0">Síntomas:</h3>
                <p class="lead mb-0">Cabe destacar que la mayoría de pacientes son asintomáticos; sin embargo, estos son algunos de los síntomas posibles:
                </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Debilidad</li>
                      <li>Pérdida de apetito</li>
                      <li>Náuseas</li>
                      <li>Ictericia </li>
                      <li>Picazón</li>
                      <li>Confusión mental</li>
                      <li>Sangrado gastrointestinal </li>
                      <li>Acumulación de líquidos en piernas</li>
                  </div>
                </div>
                <hr>
                <div class="me-auto">
                  <h3 class="text-dark pt-1 mb-0">Factores de riesgo</h3>
                </div>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G4/Imagen 3.webp" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Fisiopatología</h4>
                </div>
                <p class="lead mb-0">
                  Se desarrolla por la suma de múltiples afecciones, a su paso compromete diversos mecanismos bioquímicos y células hepáticas. La grasa se acumula y aumenta la producción de triglicéridos y la disminución de lipoproteínas de baja densidad, posteriormente si no es controlada se produce la inflamación (esteatohepatitis) causando un daño en la membrana celular de los hepatocitos, esta inflamación prolifera la producción de fibroblastos causando fibrosis.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">➜ Patogénesis</h4>
                </div>
                <p class="lead mb-0">
                  Principalmente, se basa en el aumento de los triglicéridos en el hígado y su dificultad para eliminarlos, por otro lado, se ha evidenciado que los pacientes con esteatosis también presentan resistencia a la insulina; sin embargo, no se ha logrado hacer una correlación entre ambos, pues no se sabe a certeza si la esteatosis produce la resistencia insulínica o al contrario. La enfermedad se produce por dos impactos importantes:
                </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>El primero se basa en el cambio metabólico producido por la insulina, resistencia que conlleva al aumento de la lipólisis aumentando el flujo de ácidos grasos en el hígado, esto provoca aumento de triglicéridos y disminución de VLDL.</li>
                      <li>El segundo impacto se causa cuando la acumulación de lípidos es tóxica e induce una respuesta inmune, causando inflamación y aumentando el estrés oxidativo, causando daño en los hepatocitos.</li>
                  </div>
                </div>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G4/Imagen 4.PNG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Esteatohepatitis</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  Es un tipo de enfermedad del hígado graso, que ocurre después de existir una esteatosis y se caracteriza por la inflamación del hígado con acumulación simultánea de grasa en el hígado. Podría decirse que la esteatohepatitis es una manifestación de la esteatosis, a diferencia de la esteatosis, presenta características específicas como: inflamación lobulillar (inflamación del parénquima hepático) , balonización (aumento del tamaño de las células) e infiltración inflamatoria aguda o crónica.
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G4/Imagen 5.PNG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Síntomas: </h4>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Hinchazón abdominal</li>
                      <li>Vasos agrandados en la superficie de la piel</li>
                      <li>Esplenomegalia</li>
                      <li>Palmas rojas</li>
                      <li>Ictericia </li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Fisiopatología: </h4>
                </div>
                <p class="lead mb-0">
                  El primer cambio en la EHGNA es una acumulación de lípidos, en especial triglicéridos en los hepatocitos. El estrés oxidativo resultante de la oxidación mitocondrial de los ácidos grasos provenientes del metabolismo de los triglicéridos y el aumento de citoquinas inflamatorias son considerados factores causales de inflamación, fibrosis y daño hepático. Dado que la mayoría de los pacientes con EHGNA tienen además síndrome metabólico (SM), algunos autores consideran a la EHGNA como un componente del SM; ambos están estrechamente asociados con elevados niveles de insulina. Como se observa en la imagen.
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G4/Imagen 6.jfif" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h3 class="text-dark pt-1 mb-0">DIAGNÓSTICO: </h3>
                  <h4 class="text-dark pt-1 mb-0">➥ Esteatosis </h4>
                </div>
                <p class="lead mb-0">
                  Algoritmo de diagnóstico de esteatosis NO alcohólica.
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G4/Imagen 7.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">➥ Esteatohepatitis </h4>
                </div>
                <p class="lead mb-0">
                  Algoritmo de diagnóstico de esteatohepatitis NO alcohólica.
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G4/Imagen 8.jpeg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h3 class="text-dark pt-1 mb-0">EXÁMENES CLAVES: </h3>
                  <h4 class="text-dark pt-1 mb-0">➥ Datos relevantes del paciente </h4>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Ingesta de alcohol < 20g/día en mujeres y < 30g/día en hombres.</li>
                      <li>Historia personal y familiar de diabetes, hipertensión y enfermedades cardiovasculares.</li>
                      <li>Infección por hepatitis B y/o hepatitis C.</li>
                      <li>Ingesta de fármacos asociados a esteatosis.</li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">➥ Examen físico </h4>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>IMC, circunferencia de cintura, cambios en el peso corporal.</li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">➥ Estudios complementarios </h4>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Enzimas hepáticas (TGO, TGP, GGT).</li>
                      <li>Glucemia de ayuno, HBA1c, PTOG, insulina de ayuno, índice HOMA.</li>
                      <li>Hemograma.</li>
                      <li>Colesterol total, colesterol, HDL, triglicéridos, ácido úrico.</li>
                      <li>Ecografía hepática.</li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h3 class="text-dark pt-1 mb-0">TRATAMIENTO </h3>
                </div>
                <p class="lead mb-0">
                  No existe ninguna cura científica para la mejoría de las lesiones causadas en el páncreas los tratamientos se basan en tratar las comorbilidades que causaron las enfermedad, el abordaje terapéutico se basa en cambios del estilo de vida, cambios en la dieta, hacer ejercicio físico, medicamentos y en algunos casos específicos los pacientes requieren cirugías, esto se debe a que en muchos casos los cambios en el estilo de vida son difíciles para los pacientes.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">➥ Medidas de tratamiento </h4>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Disminución de peso, con dietas bajas en carbohidratos y grasas</li>
                      <li>Aumento significativo de la actividad física </li>
                      <li>Medicamentos como: Metformina, Estatinas, Ácido ursodesoxicólico, Vitamina E, Probióticos, Pentoxifilina y Losartan</li>
                    </ul>
                  </div>
                </div>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G4/imagen 9.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-3">
            <div class="col-lg-8">
              <h2 class="text-dark mb-0">ACTIVIDAD DE APRENDIZAJE:</h2>
              <p class="lead">Pongamos a prueba lo aprendido.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
            <div class="rotating-card-container">
              <div class="card card-rotate card-background shadow-primary mt-md-0 mt-5">
                <div class="front front-background" style="background-image: url(https://images.pexels.com/photos/3800795/pexels-photo-3800795.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260); background-size: cover;">
                  <div class="card-body py-7 text-center">
                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                    <h3 class="text-white">Quiz</h3>
                    <p class="text-white opacity-8">Desafiate a ti mismo y a tus amigos con este espectacular quiz.</p>
                  </div>
                </div>
                <div class="back back-background" style="background-image: url(https://images.pexels.com/photos/3800795/pexels-photo-3800795.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260); background-size: cover;">
                  <div class="card-body pt-7 text-center">
                    <h3 class="text-white"> Realiza este quiz para reforsar tus conocimietnos sobre la Esteatosis Y Esteatohepatitis No Alcohólica!</h3>
                    <a href="https://quizizz.com/join/quiz/628993cad0ee13001e6e46a7/start?studentShare=true" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">A jugar!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-3">
            <div class="col-lg-8">
              <h2 class="text-dark mb-0">Referencias:</h2>
              <p class="lead">Graffigna M, Catoira N, Soutelo J, Azpelicueta A, Berg G, Perel C, et al. Diagnóstico de esteatosis hepática por métodos clínicos, bioquímicos y por imágenes. Rev Argent Endocrinol Metab 2017 /01/01;54(1):37-46.</p>
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