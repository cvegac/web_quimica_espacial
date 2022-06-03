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
            <h1 class="text-white pt-3 mt-n5">PÁNCREAS EXOCRINO</h1>
            <p class="lead text-white mt-3" style="text-align:center">Te invitamos a aprender con nosotros sobre el páncreas exocrino</p>
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
              <h2 class="text-dark mb-0">¿Qué es el Páncreas?</h2>
              <p class="lead">El páncreas es una glándula mixta compuesta por 2 tipos de tejido, endocrino y exocrino. </p>
              <h2 class="text-dark mb-0">Función General</h2>
              <p class="lead">Liberar hormonas, incluida la insulina, para ayudar a que el cuerpo procese el azúcar de los alimentos que consume. Y produce jugos digestivos para ayudar al cuerpo a digerir los alimentos y absorber los nutrientes.
              </p>
              <br>
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G5/1.JPG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-3">
            <div class="col-lg-8">
              <h2 class="text-dark mb-0">Qué es el Páncreas Exocrino?</h2>
              <p class="lead">Es una glándula serosa pura que está compuesta por adenómero tubulocinosos (acino) y un sistema de conductos excretores extensos. </p>
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G5/2.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <h2 class="text-dark mb-0">Función exocrina</h2>
              <p class="lead">Secreta enzimas (las más conocidas la amilasa y lipasa) cuya función consiste en descomponer químicamente las grasas y proteínas ingeridas en pequeñas porciones que pueden ser absorbidas por el intestino.

              </p>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>FISIOLOGÍA Y PATOLOGÍAS ASOCIADAS</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  “Las células secretoras exocrinas del páncreas se reúnen en acinos, los cuales drenan en conductos intercalados,a su vez drenan en conductos interlobulares, y éstos lo hacen a su vez en los conductos extralobulares, que a su vez lo hacen en conductos colectores mayores, hasta llegar al principal o conducto de Wirsung, el cual se une normalmente al Colédoco o conducto biliar, formando la ampolla de vater, la cual se abre a la luz duodenal mediante el esfínter de Oddi. Estas células secretoras surgen embriológicamente del endodermo a diferencia de las células endocrinas que lo hacen de la cresta neural. Las células de los conductos y las centroacinares son las responsables de la secreción acuosa rica en sodio y bicarbonato” (Serra R, 2022).

                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/3.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                Su contenido principal son las enzimas que degradan prácticamente todos los principios nutritivos y que son sintetizados y almacenados en las células acinares. Así hay:
                </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li> Proteasas. Tripsinógeno, quimotripsinógeno y procarboxipeptidasas.</li>
                      <li> Amilasa.</li>
                      <li> Lipasas. Lipasa que degrada triglicéridos, fosfolipasa, colesterol-ester-hidrolasa, etc. </li>
                      <li> Ribonucleasa y desoxirribonucleasa.</li>
                      <li> Proelastasa. </li>
                      <li> Procolagenasa. </li>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="me-auto">
                  <h3 class="text-dark pt-1 mb-0">Regulación</h3>
                  <h4 class="text-dark pt-1 mb-0">- Fase cefálica</h4>
                </div>
                <p class="lead mb-0">
                  Los estímulos sensoriales, psíquicos e incluso mecánicos esofágicos activan vía vagal la secreción enzimática a un 50% del total.Se produce un incremento en la secreción.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Fase gástrica</h4>
                </div>
                <p class="lead mb-0">
                  Resulta de la distensión gástrica que activa reflejos vago vagales que favorecen la secreción enzimática pero no la alcalina. La liberación de gastrina en la mucosa gástrica tiene efecto sobre las células glandulares pancreáticas incrementando la secreción.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Fase intestinal</h4>
                </div>
                <p class="lead mb-0">
                  Es la más importante de las tres y la que da lugar al máximo ritmo de secreción . La presencia de quimo en el duodeno es un estímulo para las células endocrinas de la mucosa duodenal; estas células liberan secretina, que a nivel del páncreas actúa sobre las células ductales incrementando su secreción de bicarbonato. También liberan colecistoquinina-pancreocimina (CCK-PZ) que actúa sobre las células acinares incrementando la secreción de enzimas al jugo pancreático. Otras hormonas como la somatostatina o el polipéptido pancreático disminuyen la secreción.
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/4.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <hr>
                <div class="me-auto">
                  <h3 class="text-dark pt-1 mb-0">Enfermedades del páncreas Exocrino</h3>
                  <h4 class="text-dark pt-1 mb-0">- Pancreatitis aguda</h4>
                </div>
                <p class="lead mb-0">
                  La pancreatitis aguda es una patología que se produce por inflamación y autodigestión destructiva aguda del páncreas y de tejidos peripancreáticos. En esta enfermedad desde hace mucho tiempo se ha centrado en la activación abundante de tripsinógeno y otras enzimas dentro de los acinos pancreáticos, por lo cual causa autodigestión y una gran respuesta inflamatoria sistémica.
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/5.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Pancreatitis crónica</h4>
                </div>
                <p class="lead mb-0">
                  Es una enfermedad con recaídas que causa dolor intenso de abdomen, insuficiencia pancreática, exocrina y endocrina, anormalidades graves de conducto, y calcificaciones pancreáticas, cuando se habla de la pancreatitis aguda, el páncreas es normal antes del ataque, y los cambios anatomopatológicos son reversibles si el paciente sobrevive, mientras que en la pancreatitis crónica la glándula es anormal antes del ataque, y los cambios anatomopatológicos son irreversibles. Así, la principal causa de la pancreatitis crónica es el alcoholismo crónico, que explica alrededor de 70 a 80% de los casos.
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/6.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                  <p class="pe-3"><b>A</b>: En la pancreatitis crónica temprana hay hiperactividad de células acinares y secreción de un jugo pancreático hiperviscoso. <br> <b>B</b>: En la pancreatitis crónica avanzada, hay atrofia de las células acinares, estrecheces y ectasias ductales, y cálculos intraductales.</p>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Adenocarcinoma ductal</h4>
                </div>
                <p class="lead mb-0">
                  El adenocarcinoma pancreático ductal, se refiere a un tipo de cáncer de páncreas exocrino, se desarrolla a partir de las células que recubren los pequeños tubos, denominados conductos, en el páncreas. Estos tubos transportan los jugos digestivos, que contienen enzimas, hacia el conducto pancreático principal y luego hacia la primera parte del intestino delgado, el duodeno. Por lo general se da en la cabeza del páncreas.
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/7.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Fibrosis quística</h4>
                </div>
                <p class="lead mb-0">
                  La fibrosis quística es la causa más frecuente de insuficiencia pancreática exocrina en la infancia y como consecuencia, una digestión incompleta de los nutrientes, especialmente de grasas y vitaminas liposolubles. Dada la gran capacidad de reserva del páncreas, los signos y síntomas de la insuficiencia pancreática no se manifiestan hasta que la función está ya muy alterada. La esteatorrea es la manifestación clínica más importante y es consecuencia de la falta de lipasa en la luz intestinal, interviniendo también el pH ácido en el duodeno y la alteración de la constante de disociación de las sales biliares.
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/8.webp" alt="img-colored-shadow" class="img-fluid border-radius-lg" style="">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Insuficiencia pancreática exocrina</h4>
                </div>
                <p class="lead mb-0">
                  Es la incapacidad del páncreas de producir y/o transportar suficientes enzimas digestivas para la fragmentación de los alimentos en el intestino y permitir su posterior absorción. Normalmente cursa con síntomas de malabsorción, malnutrición, deficiencias vitamínicas y se suelen necesitar pruebas de laboratorio para poder diagnosticar la insuficiencia pancreática, ya que los signos y síntomas son muy inespecíficos y podrían ser causados por muchas enfermedades gastrointestinales.Al carecer de estas enzimas no se pueden absorber los nutrientes de manera adecuada conllevando a un déficit nutricional severo que ocasiona graves perjuicios para el individuo y resulta fatal
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/9.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
              <h3>DIAGNÓSTICO</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Pancreatitis aguda</h4>
                </div>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/10.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <p class="lead mb-0">
                  El diagnóstico de pancreatitis aguda tiene tres pilares básicos:
                </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li> El más importante es que los síntomas coinciden con los descritos, por lo que la experiencia del médico es fundamental para orientar hacia un diagnóstico certero.</li>
                      <li> El segundo pilar es el aumento en la sangre de algunas enzimas que segrega el páncreas, como la amilasa y la lipasa.</li>
                      <li> El último pilar es demostrar por alguna técnica de imagen (ecografía o escaner) que existen cambios en la forma y/o tamaño del páncreas o alteraciones en su vecindad.</li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Pancreatitis crónica</h4>
                  <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <center>
                        <img src="../assets/img/G5/11.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      </center>
                    </a>
                  </div>
                </div>
                <p class="lead mb-0">
                  En la pancreatitis crónica, el primer dato que hay que tener en cuenta para sospecharla debe ser una historia clínica sugestiva (ingesta crónica de alcohol, dolor abdominal crónico o episódico, perdida de peso, diarrea, diabetes...).
                  </br>
                  Para un diagnóstico de certeza debe existir por lo menos alguno de los dos datos siguientes:
                </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Alteración morfológica del páncreas, demostrada mediante estudio endoscópico de la vía pancreática, escáner o ecoendoscopia.</li>
                      <li> Deterioro de la función pancreática demostrada mediante pruebas especiales de función pancreática.</li>
                    </ul>
                  </div>
                </div>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/12.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Adenocarcinoma ductal</h4>
                </div>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/13.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <p class="lead mb-0">
                  Pruebas de imágenes que crean imágenes de los órganos internos. Las técnicas utilizadas para diagnosticar incluyen ecografía, tomografía computarizada, resonancia magnética y, algunas veces, tomografía por emisión de positrones.
                </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Uso de un endoscopio para obtener imágenes ecográficas del páncreas.</li>
                      <li>Extracción de una muestra de tejido para su análisis (biopsia).</li>
                      <li>Análisis de sangre. El médico puede analizar tu sangre en busca de proteínas específicas (marcadores tumorales) secretadas por las células cancerosas del páncreas. Una prueba de marcadores tumorales utilizada en es CA19-9.</li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Fibrosis quística</h4>
                </div>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/14.jpeg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <p class="lead mb-0">
                  Para diagnosticar la fibrosis quística, los médicos sacan una muestra de sangre para hacer análisis genéticos o realizan una prueba del sudor. La prueba del sudor mide la cantidad de sal en la sudoración de una persona. Un nivel alto de sal en la sudoración puede indicar la presencia de fibrosis quística.
                </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Exploración por tomografía computerizada (TC) abdominal o del tórax.</li>
                      <li>Radiografía del tórax.</li>
                      <li>Imagen por resonancia magnética nuclear (RMN) abdominal o del tórax.</li>
                      <li>Ecografía abdominal.</li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Insuficiencia pancreática exocrina</h4>
                </div>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/15.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <p class="lead mb-0">
                  Para detectar una insuficiencia pancreática exocrina existen dos grupos de tests, los que analizan la función pancreática de forma directa y los que la analizan de forma indirecta. Los test directos implican la estimulación del páncreas mediante comida u hormonas para posteriormente analizar el jugo duodenal y cuantificar el contenido dependiente de la secreción pancreática. Los tests indirectos miden las consecuencias de la insuficiencia pancreática y son más fáciles de efectuar.
                  </br>
                  Pruebas directas:
                </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Test de secretina-CCK</li>
                    </ul>
                  </div>
                </div>
                <p class="lead mb-0">
                  Pruebas indirectas:
                </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Tripsinógeno sérico</li>
                      <li>Cuantificación de grasa en heces</li>
                      <li>Medición de quimotripsina y elastasa en heces</li>
                      <li>Test de pancreolauril</li>
                      <li>Test de aliento</li>
                    </ul>
                  </div>
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
              <h2 class="text-dark mb-0">Tratamientos</h2>
            </div>
          </div>
          <div class="card-header align-items-center p-0 position-relative mt-n0 mx-3 z-index-2">
            <a class="d-block blur-shadow-image">
              <center>
                <img src="../assets/img/G5/17.png" alt="img-colored-shadow" class="img-fluid border-radius-lg" style="text-align: center; height:400px">
              </center>
            </a>
          </div>
        </div>
      </div>
      <hr>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Pancreatitis aguda</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Enfermedad Leve (80% de los casos ):</h4>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li> Hidratación parenteral: Sol. Fisiológica 3-5L/día, debido a la depleción del espacio intravascular, generado por el 3er espacio intraabdominal.</li>
                      <li> Analgésicos parenterales según necesidad.</li>
                      <li> Sonda Nasogástrica.</li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Tratamiento Pancreatitis Grave (20% de los casos): UCI</h4>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li> Control estricto de líquidos. Sonda Foley y SNG.</li>
                      <li> Nutrición: Enteral por SNY (NE):</li>
                      <ul>
                        <li>Previene desarrollo de atrofia intestinal.</li>
                        <li>Poco riesgo y bajo costo.</li>
                      </ul>
                      <li> Nutrición Parenteral Total (NPT): En caso de íleo paralítico.</li>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="me-auto">
                  <h3 class="text-dark pt-1 mb-0">Antibiótico</h3>
                </div>
                <p class="lead mb-0">
                  Desde un inicio si hay:
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Colangitis asociada (menos 5%):</h4>
                </div>
                <p class="lead mb-0">
                  Ampicilina + Gentamicina o Ampicilina + Sulbactam.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Pacientes con necrosis infectada o abscesos pancreáticos:</h4>
                </div>
                <p class="lead mb-0">
                  1° se toma muestra por punción y se inicia Imipenem hasta obtener resultados de cultivo.
                </p>
                <hr>
                <div class="me-auto">
                  <h3 class="text-dark pt-1 mb-0">Cirugía</h3>
                </div>
                <p class="lead mb-0">
                  Tratamiento de complicaciones locales:
                </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li> Pseudoquistes.</li>
                      <li> Abscesos.</li>
                      <li> Tratamiento adecuado de la patología biliar para evitar recurrencias (CPRE + Colecistectomía).</li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">- Material de Apoyo:</h4>
                </div>
                <p class="lead mb-0">
                  Para profundar:
                </p>
                <iframe width="560" height="444" src="https://www.youtube.com/embed/F4Awt6mwcCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="container mt-sm-5 mt-3">
          <div class="row">
            <div class="col-lg-3">
              <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                <h3>Pancreatitis crónica</h3>
              </div>
            </div>
            <div class="col-lg-9" style="text-align: justify">
              <div class="row mt-3">

                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G5/18.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="row py-3 align-items-center">
                  <p class="lead mb-0">
                    Manejo de dolor:
                  </p>
                  <div class="row">
                    <div class="col-1"></div>
                    <div class="col-11">
                      <ul class="list lead mb-3 ">
                        <li> Cesar el habito alcoholico.</li>
                        <li> Suplementos de enzimas pancreáticas.</li>
                        <li> Bloqueo de nervios celiacos.</li>
                        <li> ERCP (stent o esfinterotomía).</li>
                        <li> Litotripsia.</li>
                      </ul>
                    </div>
                  </div>
                  <div class="me-auto">
                    <h4 class="text-dark pt-1 mb-0">- Material de Apoyo:</h4>
                  </div>
                  <p class="lead mb-0">
                    Para profundar:
                  </p>
                  <iframe width="560" height="444" src="https://www.youtube.com/embed/kUsbWJydhK0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                <h3>Adenoma carcinoma ductal</h3>
                <h6 class="text-secondary font-weight-normal pe-3">Las opciones quirúrgicas se basan en su caso específico, y podrían incluir las siguientes:</h6>
              </div>
            </div>
            <div class="col-lg-9" style="text-align: justify">
              <div class="row mt-3">
                <div class="row py-3 align-items-center">

                  <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <center>
                        <img src="../assets/img/G5/19.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      </center>
                    </a>
                  </div>
                  <div class="me-auto">
                    <h3 class="text-dark pt-1 mb-0">Cirugía</h3>
                    <h4 class="text-dark pt-1 mb-0">- Procedimiento de Whipple:</h4>
                  </div>
                  <p class="lead mb-0">
                    El procedimiento de Whipple es la cirugía habitual para extirpar el cáncer de páncreas exocrino y la primera sección del intestino delgado.
                  </p>
                  <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <center>
                        <img src="../assets/img/G5/20.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      </center>

                    </a>
                  </div>
                  <div class="me-auto">
                    <h4 class="text-dark pt-1 mb-0">- Pancreatectomía distal:</h4>
                  </div>
                  <p class="lead mb-0">
                    Se extirpan la cola del páncreas y el bazo.
                  </p>
                  <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <center>
                        <img src="../assets/img/G5/21.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      </center>
                    </a>
                  </div>
                  <h4 class="text-dark pt-1 mb-0">- Pancreatectomía total:</h4>
                  <p class="lead mb-0">
                    Se extirpa todo el páncreas, la vesícula biliar, el bazo y parte del estómago y el intestino delgado.
                  </p>
                  <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <center>
                        <img src="../assets/img/G5/22.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      </center>

                    </a>
                  </div>
                  <h4 class="text-dark pt-1 mb-0">- Cirugía pancreática paliativa:</h4>
                  <p class="lead mb-0">
                    Cuando el cáncer se extiende se procede a extirpar por completo.
                  </p>
                  <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <center>
                        <img src="../assets/img/G5/23.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      </center>
                    </a>
                  </div>
                  <hr>
                  <div class="me-auto">
                    <h3 class="text-dark pt-1 mb-0">Radioterapia</h3>
                  </div>
                  <p class="lead mb-0">
                    En esta terapia, el médico dirige la radiación de manera segura hacia las células cancerosas con una precisión exacta. El objetivo es eliminar o reducir el tamaño de un tumor, ya sea que se utiliza sola o junto con cirugía o quimioterapia.
                  </p>
                  <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <center>
                        <img src="../assets/img/G5/24.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      </center>
                    </a>
                  </div>
                  <hr>
                  <div class="me-auto">
                    <h3 class="text-dark pt-1 mb-0">Quimioterapia</h3>
                  </div>
                  <p class="lead mb-0">
                    En la quimioterapia, los medicamentos se administran por vía intravenosa o a través de una píldora oral para eliminar las células cancerosas o detener su crecimiento.
                  </p>
                  <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <center>
                        <img src="../assets/img/G5/25.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      </center>
                    </a>
                  </div>
                  <hr>
                  <div class="me-auto">
                    <h3 class="text-dark pt-1 mb-0">Insuficiencia pancreática</h3>
                  </div>
                  <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <center>
                        <img src="../assets/img/G5/26.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      </center>
                    </a>
                  </div>
                  <p class="lead mb-0">
                    El tratamiento para la insuficiencia pancreática incluye:
                  </p>
                  <div class="row">
                    <div class="col-1"></div>
                    <div class="col-11">
                      <ul class="list lead mb-3 ">
                        <li> Administración de suplementos de las enzimas pancreáticas vía oral con la finalidad de facilitar la digestión.</li>
                        <li> Suplementos vitamínicos, especialmente las vitaminas liposolubles A, D, E, y K puesto que la pancreatitis crónica se asocia a una disminución de la absorción de grasas.</li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <center>
                        <img src="../assets/img/G5/27.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      </center>
                    </a>
                  </div>
                  <div class="me-auto">
                    <h4 class="text-dark pt-1 mb-0">¡Con estos videos podrás profundizar más en el tema visto!</h4>
                  </div>
                  <iframe width="560" height="444" src="https://www.youtube.com/embed/31we231gQoU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                  <iframe width="560" height="444" src="https://www.youtube.com/embed/TXlvoxAjhMA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          </hr>
        </div>
        <hr>
      </div>
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
                    <h3 class="text-white">Sopa de letras</h3>
                    <p class="text-white opacity-8">Es un juego que consiste en descubrir un número determinado de palabras enlazando estas letras de forma horizontal, vertical o diagonal.</p>
                  </div>
                </div>
                <div class="back back-background" style="background-image: url(https://images.pexels.com/photos/3800795/pexels-photo-3800795.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260); background-size: cover;">
                  <div class="card-body pt-7 text-center">
                    <h3 class="text-white"> Realiza esta sopa de letras identificando las palabras claves sobre el páncreas exocrino!</h3>
                    <a href="https://buscapalabras.com.ar/sopa-de-letras-de-pancreas-exocrino.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">A jugar!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
            <div class="rotating-card-container">
              <div class="card card-rotate card-background shadow-primary mt-md-0 mt-5">
                <div class="front front-background" style="background-image: url(https://images.pexels.com/photos/3800795/pexels-photo-3800795.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260); background-size: cover;">
                  <div class="card-body py-7 text-center">
                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                    <h3 class="text-white">Completa las frases</h3>
                    <p class="text-white opacity-8">Este juego trata de completar los huecos que faltan con una palabra que dé sentido y coherencia a las frases.</p>
                  </div>
                </div>
                <div class="back back-background" style="background-image: url(https://images.pexels.com/photos/3800795/pexels-photo-3800795.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260); background-size: cover;">
                  <div class="card-body pt-7 text-center">
                    <h3 class="text-white">Completa las siguientes frases, reforzarás lo visto anteriormente! </h3>
                    <a href="https://es.educaplay.com/recursos-educativos/12044659-pancreas_exocrino.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">A jugar!</a>
                  </div>
                </div>
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