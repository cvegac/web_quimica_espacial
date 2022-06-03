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
            <h1 class="text-white pt-3 mt-n5">HIPOGLUCEMIA</h1>
            <p class="lead text-white mt-3" style="text-align:center">Te invitamos a aprender con nosotros sobre la Hipoglucemia</p>
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
              <h2 class="text-dark mb-0">¿Qué es la Hipoglucemia?</h2>
              <p class="lead">Hipoglucemia significa “azúcar/glucemia baja en sangre”. Actualmente, se considera que una persona tiene hipoglucemia cuando su nivel de azúcar en sangre es menor de 70 mg/dl. </p>
              <br>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Manifestaciones clínicas</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">Se pueden dividir en cuatro grupos: </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Neuroglucopénicos</li>
                      <li>Mioglucopénicos</li>
                      <li>Adrenérgicos</li>
                      <li>Colinérgicos</li>
                    </ul>
                  </div>
                </div>
                <p class="lead mb-0">Sin embargo, dentro de los síntomas generales podemos encontrar: </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Sensación de ansiedad, debilidad o cansancio</li>
                      <li>Temblor</li>
                      <li>Palidez</li>
                      <li>Pulso acelerado</li>
                      <li>Mareos</li>
                      <li>Dolor de cabeza</li>
                      <li>Sudoración</li>
                      <li>Confusión</li>
                      <li>Hambre</li>
                      <li>Dificultad para hablar</li>
                      <li>Visión doble o borrosa</li>
                      <li>Irritabilidad alteración de la conducta</li>
                    </ul>
                  </div>
                </div>

                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G7/Imagen 1.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <hr>
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
              <h3>Causas</h3>
              <h6 class="text-secondary font-weight-normal pe-3">La hipoglucemia es la complicación aguda de la diabetes más frecuente. Pude aparecer en multitud de circunstancias:</h6>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Dosis de insulina excesiva.</li>
                      <li>Insuficientes hidratos de carbono en las comidas.</li>
                      <li>Comidas atrasadas en el tiempo.</li>
                      <li>Ejercicio extra para la dosis de insulina administrada.</li>
                      <li>Algunos antidiabéticos orales también pueden causar hipoglucemia.</li>
                      <li>Administración de la insulina en músculo en lugar de en tejido subcutáneo.</li>
                      <li>Bañarse o ducharse con agua muy caliente poco después de haberse pinchado la insulina.</li>
                      <li>Errores en la administración de insulina (administrar insulina rápida en lugar de retardada, o errores de dosis).</li>
                    </ul>
                  </div>
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
              <h3>Factores de riesgo</h3>
              <h6 class="text-secondary font-weight-normal pe-3">Los factores de riesgo de hipoglucemia más importantes son los siguientes:</h6>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">La hipoglucemia es la complicación aguda de la diabetes más frecuente. Pude aparecer en multitud de circunstancias:</p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Dosis de insulina excesiva.</li>
                      <li>Insuficientes hidratos de carbono en las comidas.</li>
                      <li>Comidas atrasadas en el tiempo.</li>
                      <li>Ejercicio extra para la dosis de insulina administrada.</li>
                      <li>Algunos antidiabéticos orales también pueden causar hipoglucemia.</li>
                      <li>Administración de la insulina en músculo en lugar de en tejido subcutáneo.</li>
                      <li>Bañarse o ducharse con agua muy caliente poco después de haberse pinchado la insulina.</li>
                      <li>Errores en la administración de insulina (administrar insulina rápida en lugar de retardada, o errores de dosis).</li>
                    </ul>
                  </div>
                </div>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G7/Imagen 2.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      <p>Tomado de: Gómez P, Castro-Martínez M. Hipoglucemia en pacientes con diabetes mellitus 2. Sx Cardiometabolico.2014;2:55-62.</p>
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
              <h3>Fisiopato-logía</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">La insulina frena la producción hepática de glucosa y aumenta la utilización de la glucosa por parte de los tejidos periféricos (músculo). Por todo ello, la secreción de insulina baja las cifras de glucemia.</p>
                <br>
                <p class="lead mb-0">Cuando por cualquier mecanismo aparece hipoglucemia, se aumenta la producción de una serie de hormonas de contrarregulación, tales como: Glucagón y epinefrina. Estas hormonas producirían un aumento en la glucogenólisis, de forma que intentarían elevar las cifras de glucemia hasta niveles normales. La hormona de crecimiento y el cortisol serían otras hormonas de contrarregulación que vendrían en una segunda fase evolutiva, una vez pasada la fase más aguda.</p>
                <br>
                <p class="lead mb-0">Aunque las catecolaminas son unas hormonas muy importantes en el proceso de contrarregulación de la hipoglucemia, no juegan un papel fundamental en caso de secreción adecuada de glucagón. En caso de déficit en la producción de glucagón, como sería el caso de diabéticos de larga evolución o sujetos que han sido sometidos a pancreatectomías totales, es cuando las catecolaminas tomarían el papel principal como hormonas contrarreguladoras. En sujetos con una diabetes de muy larga evolución, incluso la producción de catecolaminas estaría afectada, por lo que los mecanismos compensadores de la hipoglucemia estarían deteriorados.</p>
                <br>
                <p class="lead mb-0">Los síntomas que ocurren durante una hipoglucemia se deben a:</p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>La descarga producida por el sistema nervioso simpático - descarga adrenérgica - </li>
                      <li>Causados por la neuroglucopenia.</li>
                    </ul>
                  </div>
                </div>
                <br>
                <p class="lead mb-0">La hipoglucemia activa células del hipotálamo responsables de la descarga del sistema nervioso simpático, está activación produciría síntomas tales como: sudoración, palpitaciones, ansiedad; y la activación del sistema nervioso parasimpático produciría manifestaciones tales como: cambios en el tamaño pupilar y aumento en la secreción de saliva por la parótida. Tanto hipotermia como hipertermia pueden observarse en la hipoglucemia. La hipotermia se debería a la pérdida de calor causada por la sudoración excesiva y la vasodilatación periférica.</p>
                <br>
                <p class="lead mb-0">Cuando se desarrollan síntomas por neuroglucopenia es aproximadamente 36 mg/dl, por debajo de estas cifras de glucemia pueden demostrarse cambios en el electroencefalograma y en la conciencia. La corteza cerebral es la más susceptible a los efectos de la hipoglucemia, seguida por el cerebelo, los ganglios de la base, tálamo, hipotálamo, troncoencéfalo, médula espinal y finalmente los nervios periféricos. Las convulsiones pueden producirse durante la hipoglucemia, siendo este síntoma más frecuente en los niños; las convulsiones pueden producir hipertermia.</p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G7/Imagen 3.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
              <h3>Tipos de hipoglucemia</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G7/Imagen 4.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Clasificación de la hipoglucemia según los cuerpos cetónicos </h4>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ol class="list lead mb-3 ">
                      <li><b>Normocetosica:</b> Cuando existe una deficiencia de glucógeno-sintetasa o un defecto en la glucogenólisis y/o gluconeogénesis. Es decir, que el organismo es capaz de metabolizar los ácidos grasos para sintetizar carbohidratos y utilizarlos, pero no puede sintetizar glucosa.</li>
                      <li><b>Hipocetósica:</b> Cuando hay carencia de enzimas de acetil-coA. En este tipo de hipoglicemias hay alteraciones en el transporte y/o B oxidación de FFA, complejo 2 de la CR; síntesis de carbohidratos a partir del acetil CoA.</li>
                      <li><b>Hipercetosica:</b> Cuando hay un defecto en la cetolisis, y ocurre una deficiencia en los complejos 3 y 4 de la cadena respiratoria.</li>
                    </ol>
                  </div>
                </div>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G7/Imagen 5.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
              <h3>Diagnóstico</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">El diagnóstico de hipoglucemia se basa en la tríada de Whipple: baja concentración de glucosa en sangre, síntomas de hipoglucemia y mejoría de los síntomas una vez se normaliza la glucemia.</p>
                <br>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G7/Imagen 6.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <p class="lead mb-0">Por otra parte, en individuos sanos que no padecen diabetes, el diagnóstico de hipoglucemia se basa en los síntomas, en la historia clínica, en una exploración física y en algunos análisis sencillos.</p>
                <br>

                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Protocolo de diagnóstico </h4>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ol class="list lead mb-3 ">
                      <li>Relacionar episodios con</li>

                      <ul class="list lead mb-3 ">
                        <li>Ingesta de alimentos (Fructosa, galactosa)</li>
                        <li>Tiempo de ayuno</li>
                        <li>Edad de inicio</li>
                        <li>Ejercicio Muscular</li>
                        <li>Administración de medicamentos</li>
                        <li>Antecedentes familiares</li>
                      </ul>
                      <li>Determinar</li>
                      <ul class="list lead mb-3 ">
                        <li>Presencia o no de organomegalias</li>
                        <li>Alteraciones de ritmo cardiaco</li>
                        <li>Alteraciones neurológicas</li>
                        <li>Alteraciones retinianas</li>
                      </ul>
                    </ol>
                  </div>
                </div>
                <br>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Protocolo en niños </h4>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Hacer exploraciones inmediatamente</li>
                      <li>Medición de la glicemia con glucómetro</li>
                      <li>Extraer muestras de vía venosa a ser posible sin torniquete</li>
                      <li>Otros sitios de toma de muestra: Femoral, yugular, arteria</li>
                      <li>Inmediato (15 minutos): Realizar medición de glucemia, lactato, amonio</li>
                      <li>24-48 horas: FFA, 3 OH, butirato, acetoacetato, carnitina, aminoácidos, acilcarnitina, ácidos orgánicos</li>
                      <li>Otros exámenes: Insulina, péptido C, hormona de crecimiento, cortisol.</li>
                    </ul>
                  </div>
                </div>
                <br>
                <div class="me-auto">
                  <h5 class="text-dark pt-1 mb-0">Tiempo de ayuno en niños </h5>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li><b>
                          < 6 meses: </b>6h máximo 8h</li>
                      <li><b>
                          < 12 meses:</b> 8h máximo 12h</li>
                      <li><b>
                          < 2 años: </b>14h máximo 20h</li>
                      <li><b>> 6 años: </b>Maximo 24h</li>
                      <li><b>> 10 años: </b>El que tolere sin cetonuria y sin hipoglicemia</li>
                    </ul>
                  </div>
                </div>
                <br>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Protocolo en el adulto </h4>
                  <h5 class="text-dark pt-1 mb-0">Pruebas obligatorias </h5>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Glucosa capilar</li>
                      <li>Glucosa basal</li>
                      <li>Insulina</li>
                      <li>Peptido C</li>
                      <li><b>Reactiva:</b> Determinar el alimento problema</li>
                    </ul>
                  </div>
                </div>
                <br>
                <div class="me-auto">
                  <h5 class="text-dark pt-1 mb-0">Pruebas complementarias </h5>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Acs contra insulina</li>
                      <li>Valoración de insulina en el ayuno</li>
                      <li>TAC, RM</li>
                      <li>Cirugía exploratoria</li>
                    </ul>
                  </div>
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
              <h3>Glicemia basal</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0"><b>Muestra:</b> Suero recogido en tubos estándar de muestra o tubos con gel de separación. <br>
                  <b>Volumen de la muestra:</b> 2 mL. <br>
                  <b>Técnica:</b> Enzimática Colorimétrica.
                </p>
                <br>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Condiciones de almacenamiento:</h4>
                </div>
                <br>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Temperatura ambiente ( 18 a 25 ° C): Puede permanecer estable por 8 horas.</li>
                      <li>Refrigeración (2-8°C): Puede permanecer estable por 72 horas.</li>
                      <li>Esta estabilidad está medida en muestras sin hemólisis.</li>
                    </ul>
                  </div>
                </div>
                <br>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Condiciones del paciente:</h4>
                </div>
                <br>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Acudir al laboratorio con ayuno de 8-10 horas</li>
                      <li>No fumar ni beber alcohol el día 72 horas antes a la toma del examen</li>
                      <li>La noche anterior ingerir una comida normal, 8-10 horas antes de presentarse al laboratorio.</li>
                      <li>El paciente no debe realizarse el examen realizado más de 12 horas sin haber comido.</li>
                      <li>Procurar no hacer ninguna clase de ejercicio físico 24 horas antes del examen.</li>
                      <li>Indique al laboratorio los medicamentos que se encuentra tomando y su dosis. Se sugiere tomarlos con un vaso mediano de agua pura a la hora acostumbrada. No se deben suspender medicamentos, a menos que tenga la indicación de su médico, en tal caso informe al laboratorio.</li>
                      <li>Para la medición de la insulina específicamente se debe suspender la ingesta de biotina y/o multivitamínico 8 horas antes de la toma del examen.</li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Valores de referencia</h4>
                </div>
                <br>
                <p class="lead mb-0">Los valores de referencia están ajustados a la edad del paciente:</p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>0-2 Días: 40 - 60 mg./dl</li>
                      <li>2-30 Días: 50 - 80 mg/dl</li>
                      <li>31 Días - 15 años: 70 - 100 mg/dl</li>
                      <li>15-70 años : 70 - 100 mg/dl</li>
                    </ul>
                  </div>
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
              <h3>Prueba de ayuno</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  Deprivación de alimentos que se lleva a cabo, con fines diagnósticos, en la investigación de los síndromes hipoglucémicos. Requiere determinaciones periódicas de los niveles plasmáticos de glucosa e insulina a fin de evaluar la existencia de hiperinsulinismo endógeno.
                </p>
                <br>
                <p class="lead mb-0">La medición de los niveles de azúcar en sangre capilar (“en el dedo”) solo es orientativa, y no sirve para hacer un diagnóstico claro y con certeza de las bajadas de azúcar (hipoglucemia). Para ello, es necesario demostrar valores de azúcar por debajo de lo normal en sangre venosa. Con esta prueba se busca facilitar que bajen los niveles de azúcar en sangre mediante un ayuno prolongado, que puede durar hasta 72 horas (3 días). Finalmente, se valorará la respuesta de las cifras de azúcar a la administración de Glucagón, que es una sustancia que eleva los valores de glucosa en sangre.</p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G7/Imagen 7.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Procedimiento</h4>
                </div>
                <p class="lead mb-0">
                  Para este examen normalmente el paciente deberá estar hospitalizado, La prueba tiene dos fases, la primera consiste en medir el nivel de glucosa, péptido C y betahidroxibutirato, se dejará al paciente sin tomar alimentos (calorías) durante 72 horas, y medir la cantidad de glucosa e insulina en la sangre regularmente (cada 6 horas). Cuando note los síntomas de una bajada de azúcar, se medirán los valores de glucosa en sangre venosa para confirmarlo; si no son inferiores a 45-55 mg/dl, no se suspenderá la prueba hasta pasadas las 72 horas. Junto a las determinaciones de sangre venosa cada 1-2 horas, se realizarán mediciones del azúcar en sangre capilar, con una frecuencia que puede ser superior a 4 veces al día, incluso cada 5 o 10 minutos si el paciente nota síntomas de una bajada de azúcar. Posteriormente, y una vez confirmada la bajada de azúcar con la muestra de sangre venosa, se administra de forma intravenosa una pequeña cantidad de Glucagón, y se observará la respuesta del organismo.
                </p>
                <br>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Condiciones del paciente:</h4>
                </div>
                <br>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Durante la duración de la prueba, no podrá comer ningún tipo de alimento, podrá tomar líquidos, aunque sin calorías, es decir, agua o infusiones (no café ni té) con edulcorantes. </li>
                      <li>Mantener al paciente activo.</li>
                      <li>Podrá ejecutar actividad física de intensidad leve (caminar) durante la duración de la prueba.</li>
                      <li>No se permite fumar.</li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Valores esperados</h4>
                </div>
                <p class="lead mb-0">
                  En sujetos normales el ayuno prolongado origina una supresión completa de la insulina con aumento de hormonas contrarreguladoras, ello permite mantener los niveles de glucemia por encima de 40 mg/dL.
                </p>
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
              <h3>Tratamiento</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Tratamiento inmediato</h4>
                </div>
                <br>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li><b>Comer o beber de 10 a 15 g de hidratos de carbono de acción rápida.</b> Son alimentos azucarados sin proteína ni grasa que se convierten fácilmente en azúcar en el cuerpo </li>
                      <ul class="list lead mb-3 ">
                        <li>Pastillas o gel de glucosa</li>
                        <li>Jugo de frutas</li>
                        <li>Refrescos regulares (no de dieta)</li>
                        <li>Miel </li>
                        <li>Caramelos dulces</li>

                      </ul>
                      <li><b>Volver a controlar los niveles de azúcar en la sangre 15 minutos después del tratamiento.</b> Si el nivel de azúcar en sangre permanece debajo de los 70 mg/dL (3,9 mmol/L), consumir otros 10 a 15 gramos de hidratos de carbono de acción rápida y volver a controlar el nivel de azúcar en la sangre en 15 minutos. Repetir estos pasos hasta que el azúcar en sangre esté por encima de los 70 mg/dL (3,9 mmol/L).</li>
                      <li><b>Comer un refrigerio o una comida.</b> Una vez que el azúcar en sangre esté a un nivel normal, comer un refrigerio o una comida puede ayudar a estabilizar y a reponer el glucógeno que se almacena en el cuerpo.</li>
                    </ul>
                  </div>
                </div>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G7/Imagen 8.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Tratamiento inmediato de la hipoglucemia de gravedad</h4>
                </div>
                <p class="lead mb-0">
                  Importante tener glucagón siempre a mano. Esta es una hormona pancreática con efectos inversos a la insulina. Se debe poner solamente en casos de inconsciencia o cuando la hipoglucemia es muy grave y el paciente no puede tomar nada vía oral.
                </p>
                <br>
                <p class="lead mb-0">
                  Debe guardarse en la nevera y vigilar la fecha de caducidad. Si se inyecta se debe poner el total de la ampolla a mayores de 5 años y a menores la mitad. El efecto que produce es una glucogenólisis, sacando las reservas hepáticas y musculares de glucosa. A los 10 minutos aproximadamente el paciente sale de la inconsciencia y no debemos olvidar dar azúcar (10 gr) y después una pieza de fruta o 40 gr de pan o 6 galletas para reponer las reservas hepáticas.
                </p>
                <br>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Tratamiento de una afección subyacente</h4>
                </div>
                <p class="lead mb-0">
                  La prevención de la hipoglucemia recurrente requiere que el médico identifique el trastorno subyacente y lo trate. Según la causa subyacente, el tratamiento puede implicar:
                </p>
                <br>

                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li><b>Medicamentos.</b> Si la causa de la hipoglucemia es un medicamento, es probable que el médico sugiera cambiar o suspender el medicamento o ajustar la dosis.</li>
                      <li><b>Tratamiento para el tumor.</b> El tratamiento para un tumor en el páncreas es extirparlo con cirugía. En algunos casos, se necesita extirpar parte del páncreas.</li>
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
                    <p class="text-white opacity-8">Juega hasta 5 diferentes juegos, como aplasta topos, anagrama, etc.</p>
                  </div>
                </div>
                <div class="back back-background" style="background-image: url(https://images.pexels.com/photos/3800795/pexels-photo-3800795.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260); background-size: cover;">
                  <div class="card-body pt-7 text-center">
                    <h3 class="text-white"> Realiza estos juegos sobre la Hipoglucemia!</h3>
                    <a href="https://wordwall.net/es/resource/32305544" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">A jugar!</a>
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

              <a href="https://www.fundaciondiabetes.org/infantil/188/hipoglucemia-ninos#:~:text=Hipoglucemia%20significa%20%E2%80%9Caz%C3%BAcar%2F%20glucemia%20baja,menor%20de%2070%20mg%2Fdl" target="_blank" class="btn bg-gradient-success w-auto me-1 mb-2">www.fundaciondiabetes.org</a>
              <a href="https://labgetafe.com/index.php?option=com_content&view=article&id=1756:prueba-de-supresion-de-renina-y-aldosterona-con-captopril&catid=164:exploracion-del-eje-renina-angiotensina-aldosterona-para-el-diagnostico-de-hiperaldosteronismo&Itemid=665&lang=es#prueba-dinamica" target="_blank" class="btn bg-gradient-success w-auto me-1 mb-2">labgetafe.com</a>
              <a href="https://www.lifeder.com/triada-de-whipple/" target="_blank" class="btn bg-gradient-success w-auto me-1 mb-2">www.lifeder.com</a>
              <a href="http://www.scielo.edu.uy/scielo.php?script=sci_arttext&pid=S2393-67972017000300051" target="_blank" class="btn bg-gradient-success w-auto me-1 mb-2">www.scielo.edu.uy</a>
              <a href="https://atencionprimaria.almirallmed.es/cientificos/riesgo-de-hipoglucemia-en-los-pacientes-con-diabetes-de-tipo-2-y-estrategias-de-prevencion/" target="_blank" class="btn bg-gradient-success w-auto me-1 mb-2">atencionprimaria.almirallmed.es</a>
              <a href="https://uninet.edu/tratado/c050603.html#:~:text=Hipoglucemia&text=Se%20define%20la%20hipoglucemia%20en,incluso%20en%20ausencia%20de%20s%C3%ADntomas.&text=La%20insulina%20frena%20la%20producci%C3%B3n,perif%C3%A9ricos%20(fundamentalmente%20el%20m%C3%BAsculo)" target="_blank" class="btn bg-gradient-success w-auto me-1 mb-2">uninet.edu</a>
              <a href="https://www.chospab.es/cursos_on_line/insulino/pagina_23.htm" target="_blank" class="btn bg-gradient-success w-auto me-1 mb-2">www.chospab.es</a>
              <a href="https://www.msdmanuals.com/es-co/professional/trastornos-endocrinol%C3%B3gicos-y-metab%C3%B3licos/diabetes-mellitus-y-trastornos-del-metabolismo-de-los-hidratos-de-carbono/hipoglucemia" target="_blank" class="btn bg-gradient-success w-auto me-1 mb-2">www.msdmanuals.com</a>
              <a href="http://zeus.colsanitas.com/manual_referencia/parametros_referencia2.php?prueba=168" target="_blank" class="btn bg-gradient-success w-auto me-1 mb-2">zeus.colsanitas.com</a>
              <a href="http://www.hgucr.es/wp-content/uploads/2011/05/test-de-ayuno.pdf" target="_blank" class="btn bg-gradient-success w-auto me-1 mb-2">www.hgucr.es</a>

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