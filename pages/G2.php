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
    <div class="page-header min-vh-75 relative" style="background-image: url('https://images.pexels.com/photos/6074935/pexels-photo-6074935.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">GASOMETRÍA ARTERIAL (AGB)</h1>
            <p class="lead text-white mt-3" style="text-align:center">Te invitamos a aprender con nosotros sobre la Gasometría arterial (AGB) </p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

    <section class="my-5 py-5">
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es la gasometría arterial (AGB)?</h2>
              <p class="lead text-justify">Es una técnica de monitorización respiratoria invasiva que nos permite analizar en una muestra de sangre arterial, el contenido y saturación del oxígeno, determinar el pH, las presiones arteriales de oxígeno y dióxido de carbono y la concentración de bicarbonato. Sirve para evaluar el estado del equilibrio ácido-base o el equilibrio del pH en sangre (se utiliza preferentemente la sangre venosa periférica) y para conocer la situación de la función respiratoria (sangre arterial), también es útil para evaluar la respuesta a las intervenciones terapéuticas, farmacológicas y no farmacológicas. Así como es de ayuda en la interpretación clínica de las condiciones que afectan el sistema circulatorio, respiratorio y metabólico. </p>
            </div>
            <br>
            <div class="card-header z-index-2">
              <a class="d-block blur-shadow-image">
                <center>
                  <img src="../assets/img/G2/1.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                </center>
              </a>
            </div>
            <br>
            <h2 class="text-dark mb-0">Tipo de Arterias usadas:</h2>
            <div class="card-header z-index-2">
              <a class="d-block blur-shadow-image">
                <center>
                  <img src="../assets/img/G2/2.png" alt="img-colored-shadow" class="img-fluid border-radius-lg" style="width:700px">
                </center>
              </a>
              <p>Arteria Radial</p>
              <br>
            </div>
            <div class="card-header z-index-2">
              <a class="d-block blur-shadow-image">
                <center>
                  <img src="../assets/img/G2/3.png" alt="img-colored-shadow" class="img-fluid border-radius-lg" style="width:400px">
                </center>
              </a>
              <p>Arteria Braquial/humeral</p>
              <br>
            </div>
            <div class="card-header z-index-2">
              <a class="d-block blur-shadow-image">
                <center>
                  <img src="../assets/img/G2/4.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                </center>
              </a>
            </div>
            <p>Arteria Femoral</p>
            <br>
            <hr><br>
            <h4 class="text-dark mb-0">Instrucciones para el paciente previo a la toma de la muestra:</h4>
            <div class="row text-justify">
              <div class="col-1"></div>
              <div class="col-11">
                <ol class="list lead mb-3 ">
                  <li> El paciente debe evitar realizar ejercicio intenso antes del procedimiento.</li>
                  <li> El paciente debe evitar fumar al menos 2 horas antes de la prueba.</li>
                  <li> No se requiere de ayuno para la toma de la muestra.</li>
                  <li> No debe suspender medicación de base.</li>
                  <li> El paciente debe estar hemodinámicamente estable.</li>
                </ol>
              </div>
            </div>
            <br>
            <hr><br>
            <h2 class="text-dark mb-0">Reporte de gasometría</h2>
            <h4 class="text-dark mb-0">El reporte básico debe incluir los siguientes componentes:</h4>
            <div class="row text-justify">
              <div class="col-1"></div>
              <div class="col-11">
                <ol class="list lead mb-3 ">
                  <li> El paciente debe evitar realizar ejercicio intenso antes del procedimiento.</li>
                  <li> El paciente debe evitar fumar al menos 2 horas antes de la prueba.</li>
                  <li> No se requiere de ayuno para la toma de la muestra.</li>
                  <li> No debe suspender medicación de base.</li>
                  <li> El paciente debe estar hemodinámicamente estable.</li>
                </ol>
              </div>
            </div>
            <br>
            <hr>
          </div>
        </div>
      </div>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>TOMA DE LA MUESTRA</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G2/5.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ol class="list lead mb-3 ">
                      <li> Observar la zona de punción.</li>
                      <li> Ponerse los guantes y seleccionar la zona de punción por medio de palpaciones.</li>
                      <li> Limpiar la zona con algodón o gasa impregnada con alcohol isopropílico.</li>
                      <li> Hacer la extracción de la muestra (Disponer de una jeringa precargada con heparina de litio liofilizada, con aguja y tapón).</li>
                      <li> Asegurar extraer 2 a 3 ml de sangre.</li>
                      <li> Se retira la aguja y se comprime la zona de punción durante 5 min.</li>
                    </ol>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <hr>
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>INTERPRETA-CIÓN</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  El resultado de la prueba AGB orienta el manejo de enfermedades agudas y crónicas, dando la respuesta del equilibrio del pH y el estado ventilatorio del paciente. Sin embargo, la interpretación no solo se basa en el resultado de la prueba de gases en sangre arterial, por lo que se deben tener en cuenta los diferentes hallazgos clínicos. Entre las diferentes medidas que se tienen en cuenta para la interpretación se encuentran; pH, presión parcial de dióxido de carbono (PaCO2) y de oxígeno (PaO2) el bicarbonato (HCO3-) en sangre arterial.
                </p>
                <h4 class="text-dark mb-0">Valores de referencia gasometría venosa:</h4>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li> pH: 7.32 a 7.43.</li>
                      <li> PvCO2: 41 a 50mmHg.</li>
                      <li> HCO3- : 23 a 27 mmol/L.</li>
                    </ul>
                  </div>
                </div>
                <h4 class="text-dark mb-0">Valores de referencia gasometría arterial:</h4>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li> pH: De 7,35 a 7,45.</li>
                      <li> PO2: De 80 a 100 mmHg.</li>
                      <li> PCO2: De 35 a 45 mmHg.</li>
                      <li> HCO3-: De 22 a 26 mEq/l.</li>
                      <li> Saturación de O2: De 95 a 100%.</li>
                      <li> Exceso de bases: Margen +/- 2</li>
                    </ul>
                  </div>
                </div>
                <h4 class="text-dark mb-0">Interpretación resultada de la prueba:</h4>
                <br>
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G2/6.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
                <p class="lead mb-0" style="margin-top: 10px;">
                  pH: Determina presencia de alcalemia o acidemia guiando desequilibrios metabólicos o respiratorios.
                </p>
                <table style="border-width:1px; padding: 100px; margin-top: 10px;">
                  <tr>
                    <td style="border-width:1px">pH disminuido</td>
                    <td style="border-width:1px">Acidosis respiratoria/acidosis metabólica</td>
                  </tr>
                  <tr>
                    <td style="border-width:1px">pH aumentado</td>
                    <td style="border-width:1px">Alcalosis respiratoria/ alcalosis metabólica</td>
                  </tr>
                </table>
                <p class="lead mb-0" style="margin-top: 10px;">
                  PaCO2: orienta estado de ventilación alveolar.
                </p>
                <table style="border-width:1px; padding: 100px; margin-top: 10px;">
                  <tr>
                    <td style="border-width:1px">PaCO2 elevada</td>
                    <td style="border-width:1px">Hipoventilación alveolar </td>
                  </tr>
                  <tr>
                    <td style="border-width:1px">PaCO2 disminuida</td>
                    <td style="border-width:1px">Hiperventilación alveolar</td>
                  </tr>
                </table>
                <div class="col-1"></div>
                <div class="col-11">
                  <ul class="list lead mb-3 ">
                    <li> En caso de que pH esté aumentado y PaCO2 disminuido podría sugerir acidosis respiratoria.</li>
                    <li> Si el pH está disminuido y el PaCO2 aumentado podría sugerir acidosis metabólica.</li>
                    <li> Si tanto pH como PaCO2 están aumentadas podría sugerir alcalosis metabólica compensada, en caso de que PaCO2 este normal indica no compensación.</li>
                    <li> Si tanto pH como PaCO2 están disminuidas podría sugerir acidosis metabólica compensada, en caso de que PaCO2 este normal indica no compensación. Si tanto pH como PaCO2 están disminuidas podría sugerir acidosis metabólica compensada, en caso de que PaCO2 este normal indica no compensación. </li>
                  </ul>
                </div>
                <p class="lead mb-0">
                  PaO2
                </p>
                <table style="border-width:1px; text-align: -webkit-center;">
                  <tr style="border-width:1px">
                    <th style="border-width:1px">Medición </th>
                    <th style="border-width:1px">Interpretación</th>
                    <th style="border-width:1px">Posibles causas</th>
                  </tr>
                  <tr style="border-width:1px">
                    <td style="border-width:1px">PaO2_ disminuida</td>
                    <td style="border-width:1px">Hipoxemia</td>
                    <td style="border-width:1px">Hipoventilación o desajuste de la ventilación y la perfusión </td>
                  </tr>
                  <tr style="border-width:1px">
                    <td style="border-width:1px">PaO2_ disminuida y PaCO2 normal</td>
                    <td style="border-width:1px">Hipoxemia</td>
                    <td style="border-width:1px">Alteración ventilación-perfusión </td>
                  </tr>
                  <tr style="border-width:1px">
                    <td style="border-width:1px">PaO2_ disminuida y PaCO2 aumentada</td>
                    <td style="border-width:1px">Hipoxemia</td>
                    <td style="border-width:1px">Hipoventilación o alteración en la ventilación-perfusión o ambas</td>
                  </tr>
                </table>
                <p class="lead mb-0">
                  HCO3-: indica el componente metabólico de la sangre arterial. Se deben tener en cuenta los resultados de PaCO2 y pH. La compensación respiratoria puede ocurrir instantáneamente para mantener la homeostasis.
                </p>
                <table style="border-width:1px; text-align: -webkit-center; margin-top: 10px;">
                  <tr style="border-width:1px">
                    <td style="border-width:1px">HCO3- disminuido</td>
                    <td style="border-width:1px">Acidosis metabólica o acidosis respiratoria</td>
                  </tr>
                  <tr style="border-width:1px">
                    <td style="border-width:1px">HCO3- aumentado</td>
                    <td style="border-width:1px">Alcalosis metabólica o alcalosis respiratoria no compensado</td>
                  </tr>
                  <tr style="border-width:1px">
                    <td style="border-width:1px">HCO3 normal</td>
                    <td style="border-width:1px">Acidosis o alcalosis respiratoria no compensado</td>
                  </tr>
                </table>
                <p class="lead mb-0">
                  Exceso de base: equilibrio ácido-base. Su valor deriva teniendo en cuenta las mediciones del pH y la PaCO2.
                </p>
                <table style="border-width:1px; text-align: -webkit-center; margin-top: 10px;">
                  <tr style="border-width:1px">
                    <td style="border-width:1px">Exceso de base aumentado</td>
                    <td style="border-width:1px">Alcalosis metabólica o acidosis respiratoria</td>
                  </tr>
                  <tr style="border-width:1px">
                    <td style="border-width:1px">Exceso de base disminuido</td>
                    <td style="border-width:1px">Acidosis metabólica o alcalosis respiratoria</td>
                  </tr>
                </table>
                <h3 class="text-dark mb-0">Complicaciones:</h3>
                <br>
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G2/7.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
                <p class="lead mb-0">
                  La invasión de la luz arterial puede provocar espasmo, formación de un trombo o aparición de un hematoma periarterial, lo cual puede implicar una isquemia distal. De ahí la importancia de comprobar el estado de la circulación colateral.
                </p>
                <h4 class="text-dark mb-0">Dolor por daño de nervios o zonas tendinosas.</h4>
                <p class="lead mb-0">
                  Observaciones:
                </p>
                <div class="col-1"></div>
                <div class="col-11">
                  <ul class="list lead mb-3 ">
                    <li> La gasometría arterial basal es la que se realiza en un paciente en reposo (al menos 15 minutos), respirando aire ambiente.</li>
                    <li> Si el paciente es portador de oxigenoterapia, ésta se debe retirar 20 minutos antes de la extracción de la muestra.</li>
                    <li> En el caso de que la extracción se actúe con oxigenoterapia, se debe indicar la concentración de oxígeno y flujo.</li>
                    <li> Causas de error en la lectura de la gasometría arterial. </li>
                  </ul>
                </div>
                <p class="lead mb-0">
                  La invasión de la luz arterial puede provocar espasmo, formación de un trombo o aparición de un hematoma periarterial, lo cual puede implicar una isquemia distal. De ahí la importancia de comprobar el estado de la circulación colateral.
                </p>
                <h4 class="text-dark mb-0">Punción venosa</h4>
                <br>
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G2/8.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
                <div class="col-1"></div>
                <div class="col-11">
                  <ul class="list lead mb-3 ">
                    <li> Exceso de heparina en la jeringa de extracción.</li>
                    <li> Muestra en contacto con el aire o con burbujas.</li>
                    <li> Muestra expuesta a calor (no guardada en frío).</li>
                    <li> Tiempo superior a 15 minutos entre la extracción y el análisis de la muestra. </li>
                    <li> Desconocimiento de la FiO2 de la oxigenoterapia del paciente en el momento de la extracción. </li>
                    <li> Tiempo superior a 15 minutos entre la extracción y el análisis de la muestra. </li>
                    <li> Leucocitosis mayor de 50.000 leucocitos/ml. </li>
                  </ul>
                </div>

                <div class="row text-justify" style="margin-top: 10px;">

                  <iframe width="560" height="444" src="https://www.youtube.com/embed/0OFTZ3_s3d4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

              </div>
            </div>
          </div>

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
                    <p class="lead mb-0">
                      Las aplicaciones esenciales de la gasometría arterial incluyen la evaluación de la difusión de gases en la sangre y el equilibrio ácido-base en el líquido extracelular. En líneas generales, es de gran utilidad para conocer el origen de una insuficiencia respiratoria. Una insuficiencia respiratoria puede producirse por una hipoventilación como consecuencia de un fallo en el aparato de la respiración; una alteración de la relación ventilación-perfusión (V/Q), es decir, el cociente que mide el renovado de aire con cada inspiración y espiración y la difusión de gases dentro de la barrera hematogaseosa, que puede alcanzar valores más altos o más bajos de lo normal.
                    </p>
                    <div class="card-header z-index-2">
                      <a class="d-block blur-shadow-image">
                        <center>
                          <img src="../assets/img/G2/9.png" alt="img-colored-shadow" class="img-fluid border-radius-lg" style="width:700px">
                        </center>
                      </a>
                    </div>
                    <div class="card-header z-index-2">
                      <a class="d-block blur-shadow-image">
                        <center>
                          <img src="../assets/img/G2/10.png" alt="img-colored-shadow" class="img-fluid border-radius-lg" style="width:700px">
                        </center>
                      </a>
                    </div>
                    <div class="card-header z-index-2">
                      <a class="d-block blur-shadow-image">
                        <center>
                          <img src="../assets/img/G2/11.png" alt="img-colored-shadow" class="img-fluid border-radius-lg" style="width:700px">
                        </center>
                      </a>
                    </div>
                    <div class="row text-justify">
                      <div class="col-1"></div>
                      <div class="col-11">
                        <ul class="list lead mb-3 ">
                          <li>Parada cardiorrespiratoria</li>
                          <li>Coma de cualquier origen</li>
                          <li>Broncoespasmo con signos de insuficiencia respiratoria</li>
                          <li>EPOC agudizada</li>
                          <li>Tromboembolismo pulmonar</li>
                          <li>Neumonía con signos de insuficiencia respiratoria</li>
                          <li>Insuficiencia cardiaca congestiva con signos de insuficiencia respiratoria</li>
                          <li>Shock de cualquier etiología</li>
                          <li>Descompensación diabética</li>
                          <li>Intoxicaciones agudas</li>
                        </ul>
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
                        <h3 class="text-white">Juegos INTERACTIVOS</h3>
                        <p class="text-white opacity-8">Juega hasta 5 diferentes juegos, como persecución en laberinto, concursos, etc.</p>
                      </div>
                    </div>
                    <div class="back back-background" style="background-image: url(https://images.pexels.com/photos/3800795/pexels-photo-3800795.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260); background-size: cover;">
                      <div class="card-body pt-7 text-center">
                        <h3 class="text-white"> Realiza estos juegos sobre la gasometría arterial!</h3>
                        <a href="https://wordwall.net/es/resource/32073500" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">A jugar!</a>
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