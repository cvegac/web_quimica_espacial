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
            <h1 class="text-white pt-3 mt-n5">SISTEMA ENDOCRINO</h1>
            <p class="lead text-white mt-3" style="text-align:center">Te invitamos a aprender con nosotros sobre el Sistema Endocrino</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6" style="text-align: justify">

    <section class="my-5 py-5">
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-3">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es el Sistema Endocrino?</h2>
              <p class="lead">
                El sistema endocrino es un sistema del cuerpo que se encarga del buen funcionamiento de los órganos como: corazón, ovarios, riñones, etc.; este proceso lo hace por medio de la producción de hormonas, estas hormonas son secretadas por diversas glándulas y la mayoría son enviadas por torrente sanguíneo y viajan hasta un lugar diana como una glándula endocrinóloga o un órgano para cumplir con la función específica.
              </p>
              <br>
              <div class="card-header p-0 position-relative mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G3/Imagen 1.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
              <h3>Hormonas</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  Sustancia química producida en el cuerpo que controla y regula la actividad de ciertas células u órganos. Por ejemplo, la testosterona, que cumple funciones como el crecimiento muscular de hombres, deseo sexual, entre otras
                  <br>Las hormonas se pueden clasificar según su naturaleza.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Clasificación de hormonas</h4>
                </div>
                <br>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 2.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">¿Qué hace el sistema endocrino?</h4>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Las glándulas endocrinas liberan hormonas en el torrente sanguíneo. Esto permite que las hormonas lleguen a células de otras partes del cuerpo.</li>
                      <li>Las hormonas del sistema endocrino ayudan a controlar el estado de ánimo, el crecimiento y el desarrollo, la forma en que funcionan los órganos, el metabolismo y la reproducción.</li>
                      <li>El sistema endocrino regula qué cantidad se libera de cada una de las hormonas. Esto depende de la concentración de hormonas que ya haya en la sangre, o de la concentración de otras sustancias, como el calcio, en sangre. Hay muchas cosas que afectan a las concentraciones hormonales, como el estrés, las infecciones y los cambios en el equilibrio de líquidos y minerales que hay en la sangre.
                        <br>Una cantidad excesiva o demasiado reducida de cualquier hormona puede ser perjudicial para el cuerpo. Los medicamentos pueden tratar muchos de estos problemas.
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Funciones</h4>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Homeostasis: estimula o inhibe los procesos químicos que se desarrollan en las células, manteniendo el equilibrio químico del organismo.</li>
                      <li>Reproducción: estimula la maduración de los óvulos y la producción de espermatozoides, ambos esenciales para la reproducción humana. En el caso de la mujer, participa activamente en preparar el útero para iniciar la gestación, mantenerla e inducir el parto, además de posibilitar la lactancia materna. </li>
                      <li>Desarrollo corporal: controla e induce el desarrollo del ser humano desde el mismo momento de la concepción, así como el crecimiento y desarrollo del organismo hasta alcanzar la pubertad y la madurez física.</li>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Partes del sistema endocrino</h4>
                </div>
                <p class="lead mb-0">
                  El sistema endocrino incluye el hipotálamo, la glándula pineal, la hipófisis, la glándula tiroidea, las glándulas paratiroides, el timo, las glándulas suprarrenales, gónadas y el páncreas. En los hombres, también incluye los testículos; en las mujeres, incluye los ovarios.
                </p>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 3.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
            <div class="col-lg-10">
              <h1 class="text-dark mb-0">Ejes hormonales</h1>
              <h2 class="text-dark mb-0">¿Qué es el Hormona Antidiurética?</h2>
              <p class="lead">
                La hormona antidiurética (ADH) o también llamada vasopresina (AVP) es una hormona peptídica de 9 aminoácidos producida en el hipotálamo, específicamente en las neuronas magnocelulares de los núcleos supraóptico y paraventricular. La ADH se transporta hasta el lóbulo posterior de la hipófisis (Neurohipófisis), donde se almacena y libera en respuesta a diversos estímulos.
                <br>Tiene una vida media muy corta, de aproximadamente 10-20 minutos y su principal función es regular la osmolaridad corporal junto con la regulación de la presión y el volumen sanguíneo.
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
              <h3>Regulación y control hormonal.</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  La regulación y la contra regulación de la hormona se da principalmente por dos factores fisiológicos.
                  <br><br>El principal estimulante de la secreción de la hormona son los cambios de la osmolaridad plasmática. También como factor estimulante se encuentran los cambios en el volumen sanguíneo y la presión arterial.
                </p>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 4.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      <p>Anatomía del hipotálamo y glándula pituitaria (sección medio sagital). También se muestran las complicadas vías implicadas en la regulación de la secreción de ADH. Las fibras aferentes desde los barorreceptores llegan a los nervios glosofaríngeo y vago. El cuadro presenta una visión extensa del hipotálamo y de la glándula pituitaria.</p>
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Cambios en la osmolaridad</h4>
                </div>
                <br>
                <p class="lead mb-0">
                  En todo momento el cuerpo debe encontrarse en un equilibrio osmolar para su correcto funcionamiento, La osmolalidad plasmática normal se sitúa entre 280-295 mOsm/kg, esto puede verse alterado gracias a diferentes factores, como deshidratación, poca ingesta de agua, diarrea, vómitos o fármacos que intervengan en este equilibrio osmolar.
                  <br><br>La secreción de ADH varía en función a los cambios de la osmolaridad, estos cambios son altamente sensibles y pueden estimular la síntesis de la hormona por variaciones muy pequeñas. Hasta cambios de 1% en la osmolaridad son suficientes para que haya una alteración en la síntesis de la hormona.
                  <br><br>La detección de los cambios osmolares se da por células especializadas denominadas osmorreceptores. Estas células se encuentran en el hipotálamo y son muy sensibles a los cambios en la osmolaridad. Cuando hay un aumento de la osmolaridad plasmática, estas células lo detectan y envían señales a las células encargadas de la síntesis de la hormona para que se produzca y posteriormente se excrete en sangre e induzca la reabsorción de agua en el túbulo colector renal de los riñones, como consecuencia de este proceso la orina se concentra. Sucede todo lo contrario cuándo la osmolaridad plasmática se disminuye, los osmorreceptores detectan este cambio e inhiben la síntesis de ADH. Dado que la ADH se degrada rápidamente en plasma, tras su inhibición se reduce a cero en en cuestión de minutos.
                </p>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 5.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      <p>síntesis de ADH en función a la osmolaridad plasmática.</p>
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Regulación de presión y volumen sanguíneo.</h4>
                </div>
                <br>
                <p class="lead mb-0">
                  Otro estimulante de la secreción de vasopresina es la presión y el volumen sanguíneos, sin embargo, este complejo es mucho menos sensible que el de la osmolaridad, debe haber una reducción de la presión arterial o del volumen sanguíneo de hasta un 5-10% para que haya síntesis de ADH.
                  <br><br>Los receptores sensibles a los cambios son los barorreceptores, estos se encuentran en diferentes vasos y en órganos con alta vascularización. Como el seno aórtico y carotídeo o los vasos pulmonares. Estos receptores son sensibles a la distensión de la pared de la estructura dónde están localizados (pared auricular y pared del arco aórtico) lo que inhibe o estimula la producción de vasopresina.
                  <br><br>Las señales de estos receptores son transmitidas por medio de nervios al tronco cerebral, posteriormente estas señales son transmitidas a las células productoras de ADH que secretan la hormona al torrente sanguíneo y se unen a receptores específicos induciendo una vasoconstricción.
                  <br><br>Existen sustancias que tienen la capacidad de alterar la presión sanguínea induciendo o inhibiendo la secreción de vasopresina, lo que afecta tanto a la presión sanguínea como a la regulación hídrica. Sustancias como la bradiquinina y la histamina que al disminuir la presión estimulan la secreción de vasopresina. Por otro lado, se encuentran sustancias como la
                </p>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 6.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      <p>Efectos de los cambios de volumen y presión sanguínea (osmolalidad plasmática constante) sobre los niveles plasmáticos de ADH.</p>
                    </center>
                  </a>
                </div>
                <p class="lead mb-0">
                  La hormona antidiurética tiene una función específica dependiendo en los receptores a los que estimula y las células en que estos se encuentran. Así mismo, si la hormona realiza una función antidiurética por acción en los receptores que se encuentran en los riñones, se denomina hormona antidiurética (ADH) Sin embargo, si realiza una función de vasoconstricción en las células con receptores específicos para esta función la hormona toma como nombre vasopresina (AVP). Estos receptores son de gran importancia para que se lleve a cabo las funciones descritas anteriormente de manera correcta, un fallo en los receptores puede llevar a graves enfermedades y a la disfuncionalidad de todo el sistema de producción y regulación de la hormona.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Receptores</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  <br><br><b>V1:</b> Tienen efecto de vasoconstricción, además de favorecer funciones plaquetarias y la producción de glucosa en el hígado.
                  <br><br><b>V2:</b> Son los más estudiados. Se encargan de la absorción del agua
                  <br><br><b>V3:</b> Efecto de neuromodulación, liberación de ACTH en respuesta al estrés.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Enfermedades asociadas y su diagnóstico</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Diabetes insípida:</h4>
                </div>
                <p class="lead mb-0">
                  Esta es una fisiopatología relacionada principalmente con la incapacidad del cuerpo de reabsorber el agua originada por un déficit parcial o total en la función de la hormona antidiurética, como consecuencia hay excreción anormal de un volumen exagerado de orina diluida(hipotónica) y sin sabor (insípida), lo que causa una hiperosmolaridad y un aumento del sodio sérico. El paciente con diabetes insípida presenta síntomas tales como: poliuria y orina diluida junto con polidipsia. La diabetes insípida se puede deber a la destrucción o la pérdida de las neuronas magnocelulares de los núcleos supraópticos y paraventriculares encargadas de la síntesis de la hormona, por lo cual la hormona no es producida y no se va a dar la correcta absorción de agua en los riñones (Diabetes insípida central) Sin embargo, también puede producirse por la resistencia a la hormona antidiurética, esto quiere decir que la hormona se está produciendo correctamente en la hipófisis, pero los receptores no tienen la capacidad de ser estimulados por la vasopresina o en contraste, los receptores están completamente destruidos (Diabetes insípida nefrogénica). Este tipo de alteraciones en la producción o la utilización de la hormona puede deberse a 2 principales causas.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Causas congénitas o adquiridas.</h4>
                </div>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ol class="list lead mb-3 ">
                      <li>Causas de diabetes insípida central:</li>
                      <ul class="list lead mb-3 ">
                        Congénitas:
                        <div class="row text-justify">
                          <div class="col-1"></div>
                          <div class="col-11">
                            <li>Diabetes insípida familiar</li>
                            <li>Mutaciones del gen de la vasopresina neurofisina II</li>
                            <li>Síndrome de Wolfram</li>
                            <li>Entre otras causas.</li>
                          </div>
                        </div>
                        Adquiridas:
                        <div class="row text-justify">
                          <div class="col-1"></div>
                          <div class="col-11">
                            <li>Traumatismo craneoencefálico </li>
                            <li>Neoplasias</li>
                            <li>Infiltrativo o autoinmune</li>
                            <li>Drogas/ Fármacos</li>
                            <li>Infecciones (meningitis/encefalitis)</li>
                          </div>
                        </div>
                      </ul>
                      <li>Causas de diabetes insípida nefrogénica.</li>
                      <ul class="list lead mb-3 ">
                        Congénitas:
                        <div class="row text-justify">
                          <div class="col-1"></div>
                          <div class="col-11">
                            <li>Mutaciones en el gen del receptor V2</li>
                            <li> en el gen de la acuaporina 2</li>
                          </div>
                        </div>
                        Adquiridas:
                        <div class="row text-justify">
                          <div class="col-1"></div>
                          <div class="col-11">
                            <li>Fármacos</li>
                            <li>Alteraciones metabólicas</li>
                            <li>Enfermedades renales</li>
                            <li>Granulocitos</li>
                            <li>Neoplasias.</li>
                          </div>
                        </div>
                      </ul>
                    </ol>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Diagnóstico:</h4>
                </div>
                <p class="lead mb-0">
                  Para el diagnóstico de diabetes insípida y su etiología es necesario primero realizar una prueba de producción de orina de 24 horas para determinar si hay una poliuria, posteriormente si los signos y síntomas del paciente descartan otras causas de poliuria se procede a realizar pruebas dinámicas para el diagnóstico de diabetes insípida.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Prueba de deshidratación:</h5>
                </div>
                <p class="lead mb-0">
                  Esta prueba puede ser larga (hasta 17 horas) o puede ser corta (7 horas) en la cual se restringe la ingesta de agua en un ambiente controlado. Se realiza la medición de la osmolaridad plasmática luego del transcurso de la restricción y los resultados permiten identificar si el paciente cursa con Diabetes insípida. Además, se realiza una prueba a la reacción fisiológica del paciente frente a desmopresina (Vasopresina sintética) para valorar la funcionalidad del eje y también para determinar si se trata de diabetes insípida central o nefrogénica.
                  <br><br>Normalmente, la restricción suele ser suficiente entre 7 y 8 horas. Durante la restricción hídrica al paciente se le actúa la medición de la osmolaridad sanguínea y simultáneamente el volumen urinario junto con la osmolaridad urinaria que se correlaciona. Si durante las mediciones de la prueba el volumen urinario se mantiene constante con un aumento significante en la osmolaridad plasmática y un descenso de la osmolaridad urinaria (Osmolaridad plasmática: >295 mOsm/kg. Osmolaridad urinaria <300 mOsm/kg), estamos frente a un paciente con diabetes insípida. Posteriormente, se actúa la prueba de desmopresina en una sola dosis que depende del peso del paciente. Si tras el estímulo de desmopresina el paciente aumenta su osmolaridad urinaria>50% se trata de Diabetes insípida central; sin embargo, si tras la estimulación de desmopresina el paciente aumenta su osmolaridad urinaria < 20% se trata de diabetes insípida nefrogénica. <br><br>La prueba de deshidratación se realiza en un ambiente controlado, por lo cual la prueba debe suspenderse en caso de que suceda alguna de las siguientes situaciones:
                </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Temperatura corporal >38 °C</li>
                      <li>Sed incontrolable</li>
                      <li>Pérdida de peso >5%</li>
                      <li>Osmolaridad urinaria >700-800 mOsm/kg en 2 determinaciones seguida o >100 mOsm/kg en una determinación</li>
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
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es la Oxitocina?</h2>
              <p class="lead">
                La oxitocina se produce en los núcleos supraóptico y paraventricular del hipotálamo, en los núcleos magnocelulares. Se libera principalmente (por exocitosis) de la neurohipófisis y terminaciones nerviosas al igual que la vasopresina, así mismo tiene una estructura química muy similar siendo un nonapéptido, pero en el caso de la oxitocina difiere en tan únicamente en uno de los aminoácidos.
              </p>
              <div class="card-header p-0 position-relative mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G3/Imagen 7.gif" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <div class="row text-justify">
                <ul class="list lead mb-3 ">
                  <li><b>Neurotrasmisor:</b> La oxitocina tiene un papel importante como neurotransmisor, repercutiendo sobre el cerebro en diferentes funciones sensoriales y emocionales, pero como pasa con todos los neurotransmisores, nunca trabaja sola, Trabaja en sinergia con diversas sustancias que dan orden a nuestros pensamientos y actos. Esta hormona tiene relación con el amor y afecto. Un ejemplo es cuando hay que reconocer caras familiares, o cuando estamos en ambientes de confianza o intimidad, se segrega en grandes cantidades en situaciones relacionadas con el amor y apego. Por lo cual influye en gran manera en cómo afrontamos situaciones sociales y la manera en que nos relacionamos entre personas. </li>
                  <li><b>Reguladora de partos y maternidad:</b> Cuando la oxitocina liberada en el torrente sanguíneo desde el cerebro, llega a los receptores de oxitocina presentes en el útero (que se han ido formando durante todo el embarazo gracias a la acción de los estrógenos para permitir un buen trabajo de parto), esta hormona comienza a estimular el músculo liso de este órgano, consiguiendo realizar así su principal función: iniciar las contracciones uterinas que van a permitir la expulsión del bebé.
                    En <b>lactancia</b>, cuando el bebé succiona el pezón, se produce un reflejo estimulando la liberación de oxitocina, la cual llega por la sangre a las mamas, donde provoca la contracción de los conductos de la glándula, permitiendo la salida de leche materna.</li>
                  <li><b>En la sexualidad:</b> Suele haber altos niveles de esta hormona durante el acto sexual y sobre todo durante el orgasmo. También interviene en la aparición de contracciones vaginales favoreciendo la fecundación del óvulo por un espermatozoide. En el caso de los hombres, produce contracciones en la próstata y las vesículas seminales. </li>
                </ul>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-3">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es la Hormona Del Crecimiento?</h2>
              <p class="lead">
                Es una hormona proteica, la cual es secretada por la glándula pituitaria, también se conoce como somatropina. Tiene funciones de vital importancia en el desarrollo humano como el crecimiento, la reproducción celular y la regeneración de tejidos.
                <br><br> Su secreción es episódica, evitando que las células diana se sensibilicen generando resistencia a sí mismas.
              </p>
              <br>
              <div class="row text-justify">
                <ul class="list lead mb-3 ">
                  <li>Se logra observar que en varones se presentan picos más altos e inestables de secreción, en comparación a la estabilidad de mujeres.</li>
                  <li>Se observa que en etapas tempranas de la vida (pubertad) hay picos altos de secreción, en la vejez se ve una disminución de esta. <b>OJO NUNCA SE DEJA DE SECRETAR</b></li>
                </ul>
              </div>
              <div class="card-header p-0 position-relative mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G3/Imagen 26.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
              <h3>CARACTERÍSTICAS</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li><b>Químicas:</b> Es una hormona proteica de 191 aminoácidos unidos en cadena simple </li>
                      <li><b>Secreción:</b> Es secretada por la glándula pituitaria, en específico en la adenohipófisis, esta es la hormona de mayor abundancia en la adenohipófisis.</li>
                      <li><b>Eliminación:</b> Las hormonas libres son eliminadas en el riñón</li>
                      <li><b>Recepción:</b> Es una hormona que utiliza transportadores para llegar a la célula diana, esta hormona actúa únicamente en la membrana</li>
                      <li><b>Secreción:</b> Tiene periodos de secreción durante la vida </li>
                      <div class="row text-justify">
                        <div class="col-1"></div>
                        <div class="col-11">
                          <ul class="list lead mb-3 ">
                            <li><b>Nacimiento:</b> GH elevada hasta el 3 mes de vida, esta disminuye hasta que llega la pubertad.</li>
                            <li><b>Pubertad:</b> La GH tiene un aumento significativo (muy notorio) hasta los 20 a 30 años.</li>
                            <li><b>Adultez:</b> GH con pocas variaciones y disminución de la misma. </li>
                          </ul>
                        </div>
                      </div>
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
              <h3>REGULACIÓN</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="row text-justify">
                  <div class="card-header p-0 position-relative mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <center>
                        <img src="../assets/img/G3/Imagen 27.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      </center>
                    </a>
                  </div>
                  <p class="lead">
                    La controla el hipotálamo mediante dos neurohormonas: una de carácter estimulador, la hormona liberadora de hormona de crecimiento (GHRH) y otra de carácter inhibidor, la somatostatina, las cuales se liberan de forma ritmica y alternante y por ello tenemos una secreción de GH en pricos La secreción de GH está también por otros péptidos, por factores metabólicos y por una serie de sistemas de retroalimentación.
                  </p>
                  <div class="card-header p-0 position-relative mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <center>
                        <img src="../assets/img/G3/Imagen 28.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      </center>
                    </a>
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
              <h3>RECEPTOR Y SU ACCIÓN</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="row text-justify">
                  <p class="lead">
                    Actúa directamente en los receptores del tejido adiposo, músculo y hepatocito. Dichos receptores son JAK/STAT los cuales están asociados a tirosina cinasa.
                  </p>
                  <br>
                  <div class="row text-justify">
                    <div class="col-1"></div>
                    <div class="col-11">
                      <ul class="list lead mb-3 ">
                        <li>En el tejido adiposo estimula la lipólisis e inhibe la captación de glucosa</li>
                        <li>En el músculo estimula la síntesis de proteína e inhibe la captación de glucosa</li>
                        <li>En los hepatocitos causa la liberación de enzimas gluconeogénicas y proteínas transportadoras de IGF-I, las cuales afectan prácticamente a casi todas las células del cuerpo.</li>
                      </ul>
                    </div>
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
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es la Prolactina?</h2>
              <p class="lead">
                La prolactina es una hormona producida por la glándula pituitaria o hipófisis, una glándula pequeña situada en la base del cerebro. La prolactina hace que los senos crezcan y produzcan leche materna durante el embarazo y después del parto (esta es estimulada en el embarazo por lactancia del bebe)
              </p>
              <div class="card-header p-0 position-relative mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G3/Imagen 33.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <p class="lead">
                <b> Es normal que los niveles de prolactina sean altos en las mujeres embarazadas y las madres nuevas. Los niveles son normalmente bajos para las mujeres no embarazadas y los hombres
                </b><br><br> Si los niveles de prolactina están más altos de lo normal, en general puede significar que hay un tumor de la glándula pituitaria conocido como prolactinoma. Este tumor hace que la glándula produzca demasiada prolactina. El exceso de prolactina hace que los hombres y las mujeres que no están embarazadas o no están amamantando produzcan leche. En las mujeres, el exceso de prolactina también puede causar problemas menstruales e infertilidad (imposibilidad de quedar embarazada). En los hombres, puede disminuir el deseo sexual y causar disfunción eréctil, también conocida como impotencia. <b>El análisis de prolactina mide el nivel de esta hormona en la sangre.</b>
              </p>
              <br>
              <div class="card-header p-0 position-relative mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G3/Imagen 34.jpeg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
              <h3>Síntomas en relación</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead">
                  Es posible que los médicos soliciten un análisis de prolactina para ayudar a hacer un diagnóstico o controlar el tratamiento del prolactinoma. Los síntomas del prolactinoma incluyen dolores de cabeza, problemas de la vista (si el crecimiento del tumor presiona el nervio óptico) y galactorrea (producción de leche, aunque no haya embarazo, se esté amamantando, o sea un hombre).
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
              <h3>Para que es usada</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Diagnosticar un prolactinoma (un tipo de tumor de la glándula pituitaria)</li>
                      <li>Averiguar la causa de las irregularidades menstruales o la infertilidad de una mujer</li>
                      <li>Averiguar la causa del bajo deseo sexual o la disfunción eréctil de un hombre</li>
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
              <h3>¿Cómo se hace la prueba?</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead">
                  Es posible que los médicos soliciten un análisis de prolactina para ayudar a hacer un diagnóstico o controlar el tratamiento del prolactinoma. Los síntomas del prolactinoma incluyen dolores de cabeza, problemas de la vista (si el crecimiento del tumor presiona el nervio óptico) y galactorrea (producción de leche, aunque no haya embarazo, se esté amamantando, o sea un hombre).
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-3">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es la Tiroides PTH?</h2>
              <p class="lead">
                La tiroides es una glándula en forma de mariposa ubicada en el cuello, justo arriba de la clavícula. Es una de las glándulas endocrinas que producen hormonas. Las hormonas tiroideas controlan el ritmo de muchas actividades del cuerpo. Estas incluyen la velocidad con la que se queman calorías y cuán rápido late el corazón. Todas estas actividades componen el metabolismo del cuerpo.
              </p>
              <div class="card-header p-0 position-relative mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G3/Imagen 8.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <p class="lead">
                La glándula tiroidea usa yodo de los alimentos para producir dos hormonas tiroideas: triyodotironina (T3) y tiroxina (T4). También almacena estas hormonas y las libera a medida que se las necesita. El hipotálamo y la hipófisis (glándula pituitaria), que se encuentran en el cerebro, ayudan a controlar la glándula tiroidea. El hipotálamo libera hormona liberadora de tirotropina (TRH). Esto estimula la hipófisis para que libere hormona estimulante de la tiroides (TSH). Cuando el hipotálamo y la hipófisis funcionan con normalidad, notan cuando:
              </p>
              <div class="row text-justify">
                <div class="col-1"></div>
                <div class="col-11">
                  <ul class="list lead mb-3 ">
                    <li>Los niveles de hormona tiroidea son bajos, por lo que segregan más TRH y TSH. Esto estimula la tiroides para que produzca más hormonas.</li>
                    <li>Los niveles de hormona tiroidea son demasiado altos, por lo que segregan menos TRH y TSH. Esto reduce la producción de hormonas por parte de la tiroides.</li>
                  </ul>
                </div>
              </div>
              <div class="me-auto">
                <h4 class="text-dark pt-1 mb-0">¿Cómo funcionan las hormonas tiroideas?</h4>
              </div>
              <p class="lead">
                Las hormonas tiroideas afectan todas las células y órganos del cuerpo. Demasiada hormona tiroidea acelera los procesos y demasiado poca hormona desacelera los procesos. Estas hormonas:
              </p>
              <div class="row text-justify">
                <div class="col-1"></div>
                <div class="col-11">
                  <ul class="list lead mb-3 ">
                    <li>Controlan la velocidad a la que el cuerpo quema calorías (su metabolismo). Esto afecta la manera en la que usted engorda o adelgaza.</li>
                    <li>Pueden desacelerar o acelerar los latidos cardíacos.</li>
                    <li>Pueden elevar o bajar la temperatura corporal.</li>
                    <li>Varían la velocidad a la que los alimentos se mueven por el tubo digestivo.</li>
                    <li>Afectan la fuerza muscular.</li>
                    <li>Controlan la velocidad a la que el cuerpo reemplaza las células que mueren.</li>
                  </ul>
                </div>
              </div>
              <p class="lead">
                La glándula tiroidea produce hormonas tiroideas. La glándula tiroidea produce y segrega dos hormonas tiroideas: tiroxina (T4) y triyodotironina (T3).
                <br><br>La glándula tiroidea y la hipófisis (glándula pituitaria) funcionan juntas. La hipófisis (que se encuentra cerca de la base del cerebro) produce, almacena y segrega tirotropina (TSH, por sus siglas en inglés). Cuando la hipófisis segrega TSH, hace que la glándula tiroidea segregue más T3 y T4. Un nivel alto de TSH significa que no hay suficiente hormona tiroidea y un nivel bajo de TSH indica que hay demasiada cantidad de ella.
              </p>
              <div class="card-header p-0 position-relative mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G3/Imagen 9.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-3">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es PTH?</h2>
              <p class="lead">
                La PTH, también conocida como paratohormona, es producida por las glándulas paratiroides, cuatro glándulas del tamaño de una arveja o chícharo ubicadas en el cuello. La PTH controla el nivel de calcio en la sangre. El calcio es un mineral que mantiene los huesos y los dientes sanos y fuertes. También es esencial para el buen funcionamiento de los nervios, los músculos y el corazón.
                <br><br>Si los niveles de calcio en la sangre están demasiado bajos, las glándulas paratiroideas liberan PTH. Esto hace que los niveles de calcio aumenten. Si los niveles de calcio en la sangre están demasiado altos, estas glándulas dejan de producir PTH.
                <br><br>Los niveles de PTH demasiado altos o bajos pueden causar problemas de salud graves.
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
              <h3>Patologías asociadas</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ol class="list lead mb-3 ">
                      <li><b>Hipotiroidismo</b></li>Se produce cuando la glándula tiroides produce menos hormona de la necesaria para el buen funcionamiento del organismo. Es una enfermedad muy frecuente, sobre todo en mujeres de mediana edad y tras el parto. Los síntomas más importantes son cansancio, dificultades para concentrarse, frío y, a veces, hay ganancia de peso. Es de destacar que muchas otras enfermedades pueden dar síntomas parecidos, es por ello que para diagnosticar esta enfermedad hay que hacer una sencilla prueba de sangre.

                      <li><b>Hipertiroidismo</b></li>

                      <p class="lead">
                        Se produce cuando la glándula tiroides produce un exceso de hormona tiroidea. Es menos frecuente que el hipotiroidismo y se caracteriza por: sudoración, taquicardia, cansancio y a veces pérdida de peso.
                        <br> Es posible que los médicos soliciten un análisis de prolactina para ayudar a hacer un diagnóstico o controlar el tratamiento del prolactinoma. Los síntomas del prolactinoma incluyen dolores de cabeza, problemas de la vista (si el crecimiento del tumor presiona el nervio óptico) y galactorrea (producción de leche, aunque no haya embarazo, se esté amamantando, o sea un hombre).
                      </p>
                      <div class="card-header p-0 position-relative mx-3 z-index-2">
                        <a class="d-block blur-shadow-image">
                          <center>
                            <img src="../assets/img/G3/Imagen 10.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                          </center>
                        </a>
                      </div>
                      <li><b>Bocio</b></li>
                      <p class="lead">
                        El bocio es un agrandamiento del tamaño de la glándula tiroides. Puede tener un componente familiar, ser producido por la falta de yodo (raro en la actualidad) pero la mayor parte de las veces la causa no es conocida. En el pasado el bocio se trataba con hormona tiroidea. Este tratamiento, aunque puede ser efectivo, es pocas veces usado en la actualidad debido a que las dosis altas que se deben emplear de hormona tiroidea pueden producir algunos problemas. El bocio se puede asociar a hipotiroidismo, hipertiroidismo o tener la tiroides un funcionamiento normal. El seguimiento se hace con ecografía que permite valorar con gran precisión si ha habido cambios de tamaño. Si el bocio es muy grande y produce molestias al tragar o respirar, el tratamiento es mediante cirugía, extirpando parte o toda la glándula tiroides y reemplazando su función con hormona tiroidea, al igual que en el hipotiroidismo.
                      </p>
                      <li><b>Nódulos tiroideos</b></li>
                      <p class="lead">
                        Dentro de la tiroides se pueden producir pequeños bultos o nódulos. Estos nódulos son casi siempre benignos, pero sí tienen cierto tamaño o ciertas características, en la ecografía a veces se hace necesario hacer una punción con aguja fina para estudiar las células y descartar malignidad. El seguimiento es por ecografía y en caso de que la punción sea sospechosa se pueden eliminar con cirugía. Los nódulos tiroideos son extremadamente frecuentes (hasta un 40 % de la población en ciertos estudios) pero la mayoría son pequeños y benignos.
                      </p>
                      <li><b>Cáncer de tiroides</b></li>
                      <p class="lead">
                        Es un cáncer poco común, aunque su frecuencia ha ido en aumento en los últimos años. En general tiene un buen pronóstico si se trata adecuadamente y a tiempo. A veces es necesario administrar yodo 131 para eliminar restos microscópicos imposibles de eliminar solo con cirugía. La quimioterapia no se emplea habitualmente en este tipo de cáncer.
                      </p>
                    </ol>
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
              <h3>Pruebas de la tiroides</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Hormona estimulante del tiroides (TSH)</h4>
                </div>
                <p class="lead">
                  La TSH es una glicoproteína de PM 28.000 constituida por una unidad α y otra β, codificadas por genes diferentes. El intervalo de referencia es de 0,1 a 4 mU/l aproximadamente, aunque la TSH se segrega en pulsos y tiene concentraciones más altas durante la noche. El principal factor que estimula la síntesis de TSH es la hormona liberadora de tirotropina (TRH) hipotalámica, con la cual la TSH establece un sistema de retroalimentación negativo.
                  <br>Los métodos de análisis más utilizados son radioinmunoanálisis, inmuno luminometría basada en el principio de quimioluminiscencia y otros ensayos inmunoenzimáticos, inmuno radiométricos, etc. Los valores están elevados en el hipotiroidismo primario, normales o disminuidos en el hipotiroidismo secundario y muy reducidos o casi indetectables en pacientes con hipertiroidismo. El diagnóstico no se debe realizar hasta conocer los resultados de la T3 y T4.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Niveles séricos de hormonas tiroideas (tiroxina,T4 y triyodotironina, T3)</h4>
                </div>
                <p class="lead">
                  Los laboratorios clínicos ofrecen habitualmente ambas determinaciones. La T4 es la hormona tiroidea segregada por la glándula tiroides, aunque en realidad la sustancia con acción hormonal es la T3, que se origina casi por completo por transformación periférica de la T4. Los valores de referencia se deben establecer en cada laboratorio, pero generalmente oscilan entre 5 y 11 μg/dl para T4 y 70 y 190 ng/dl para T3. El método más empleado actualmente es la quimioluminiscencia, aunque también existen técnicas basadas en el radioinmunoanálisis o en el inmunoanálisis de multiplicación enzimática (EMIT).
                  Las concentraciones de T3 y T4 son un buen reflejo de la función tiroidea, pero también dependen de la cantidad de la globulina transportadora específica (TBG: thyroxine-binding globulin), que aumenta en el embarazo y por tratamientos estrogénicos o en situaciones de colestasis y disminuye por efecto de los glucocorticoides y en situaciones de desnutrición, entre otras causas.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Niveles séricos de T3 y T4 libres</h4>
                </div>
                <p class="lead">
                  Las hormonas libres son las biológicamente activas. Su intervalo normal, que debe ser fijado por cada laboratorio, es de 0,7 a 2,3 ng/dl para T4 libre y de 230 a 660 pg/dl para T3 libre. Estas determinaciones han sustituido con ventaja a las anteriores, ya que eliminan la incertidumbre ligada a la variabilidad de la TBG y evitan la necesidad de determinar los niveles de esta proteína (algo, sin embargo, factible) y han hecho caer en desuso métodos complejos que valoraban indirectamente la actividad hormonal, como la captación de T3 y el índice de T4 libre.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Niveles séricos de T3 reversa (rT3)</h4>
                </div>
                <p class="lead">
                  Se diferencia de la T3 en la ubicación de uno de los átomos de iodo que la constituyen. Es un reflejo fiel de la tasa de transformación periférica de la T4. Las concentraciones normales en el adulto son de 10 a 40 ng/100 ml. Se halla elevada en la sangre fetal y el líquido amniótico en relación con la presente en la sangre materna, lo que se debe a una falta de maduración en el feto del metabolismo de estas hormonas.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-3">
            <div class="col-lg-10">
              <h1 class="text-dark mb-0">Glucocorticoides</h1>

              <div class="me-auto">
                <h4 class="text-dark pt-1 mb-0">ASPECTOS MORFOLÓGICOS CORTEZA SUPRARRENAL:</h4>
              </div>
              <p class="lead">
                Las glándulas suprarrenales están ubicadas en el espacio retroperitoneal, cerca del polo superior de los riñones. Tienen dos órganos endocrinos separados: a) La médula suprarrenal: que segrega catecolaminas(adrenalina) b) La corteza suprarrenal: produce corticoides.
                <br><br>Las hormonas más importantes y responsables de las funciones endocrinas de la corteza suprarrenal: los glucocorticoides: cortisol o hidrocortisona y los mineralocorticoides: aldosterona.

              </p>
              <hr>
              <h2 class="text-dark mb-0">¿Qué es Cortisol?</h2>
              <p class="lead">
                El cortisol es un glucocorticoide producido en la corteza suprarrenal a partir de un derivado del colesterol (Pregnenolona).
                <br><br>Enfocándonos en su naturaleza química, este es una hormona esteroidea producida por la glándula suprarrenal, la cual tiene una naturaleza química polipeptídica derivada del colesterol.
              </p>
              <div class="card-header p-0 position-relative mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G3/Imagen 11.webp" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
              <h3>Regulación</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Patologías asociadas</h4>
                </div>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Regula su propia producción por un mecanismo de retroalimentación negativa.</li>
                      <li>Por vía sanguínea sistémica, el cortisol alcanza el hipotálamo e hipófisis, donde regula en forma negativa la secreción de CRH y ACTH, respectivamente.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Funciones</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead">
                  Tiene diversas funciones, las cuales son:
                </p>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Regula los niveles de azúcares</li>
                      <li>Mantiene la presión arterial</li>
                      <li>Responde al estrés</li>
                      <li>Tiene efectos antiinflamatorios</li>
                      <li>Estimula la glucogénesis</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Patologías</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Insuficiencia suprarrenal:</h4>
                </div>
                <p class="lead">
                  Esta se debe a la disminución de síntesis de cortisol por las glándulas suprarrenales, la cual puede llegar a causar enfermedad de Addison.
                  <br>Tiene diferentes clasificaciones:
                  <br><br> <b>Primario:</b> Destrucción de las glándulas adrenales (90%)
                  <br><b>Secundario:</b> Si la hipófisis no produce suficiente ACTH, las glándulas suprarrenales no producen suficiente cortisol. Con el tiempo, las glándulas suprarrenales pueden encogerse y dejar de funcionar.
                  <br><b>Terciario:</b> Cuando el hipotálamo no produce suficiente CRH, la hipófisis no produce suficiente ACTH. A su vez, las glándulas suprarrenales no producen suficiente cortisol.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Síndrome de cushing</h4>
                </div>
                <p class="lead">
                  Es causado por la exposición prolongada a un exceso de cortisol, una hormona producida por las glándulas adrenales. Algunas veces, tomar medicinas con hormonas sintéticas para tratar una enfermedad inflamatoria conduce al síndrome de Cushing. Ciertos tipos de tumores producen una hormona que puede hacer que el cuerpo produce demasiado cortisol.
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 12.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Pruebas basales</h4>
                </div>
                <p class="lead">
                  <b>CORTISOL EN ORINA DE 24 HORAS:</b>
                  <br>Se recolecta la totalidad de la orina por 24 h, para esto se requiere de un volumen de 3 a 5 L a 7 días refrigerada y 14 días congelada a -20 ºC. Se realiza un inmunoensayo competitivo que requiere una extracción previa con diclorometano.
                  <br>Valores > 300 μg/24 horas confirman el diagnóstico. -Valores < 100 μg/ 24 horas se descartan. Resultados de 100-300 μg/24 horas indicarían la necesidad de repetir la prueba. <br>Cabe destacar que el 95% de pacientes con síndrome de Cushing tiene un incremento de la excreción de cortisol en la orina de 24 horas
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Pruebas dinámicas</h4>
                </div>
                <p class="lead">
                  <b>TOLERANCIA A LA INSULINA:</b>
                  <br>La hipoglucemia, inducida por la insulina, actúa como un potente factor de estrés que hace que en el hipotálamo se estimule la liberación de la CRH. Si el eje hipotálamo- hipófisis-adrenal está intacto, la hiperglucemia induce el aumento de la ACTH y del cortisol, así también como de la hormona del crecimiento y de la prolactina.
                  <br>Muestra: se toma una muestra para cortisol y hormona del crecimiento (si se requiere) a los 30- 45-60-90 min.
                  <br>Valores: pacientes con el hipotálamo-hipofisis-adrenal intacto, el cortisol basal debe incrementar por encima de 18 ug/dl.
                </p>
                <p class="lead">
                  <b>ESTÍMULO CON METIRAPONA:</b>
                  <br>La metirapona inhibe a una enzima esteroidea. La caída resultante de los niveles de cortisol sérico normalmente estimulan el hipotálamo y la hipófisis para que secreten CRH Y ACTH
                  <br>Se suministra 30 mg/kg de metirapona en cápsulas entre las 11 pm y 12 pm y en la mañana siguiente de 7:30 am a 9:30 am se toma la muestra para medir cortisol.
                  <br>Valores: Adecuada: 5ug/dl.
                </p>
                <p class="lead">
                  <b>ESTÍMULO CON COSINTROPINA:</b>
                  <br> La cosintropina estimula la secreción de cortisol y otros corticosteroides de la corteza adrenal y, por lo tanto, se puede utilizar como un estímulo para evaluar una posible insuficiencia adrenal.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Muestra</h4>
                </div>
                <p class="lead">
                  Se toma muestra de sangre para basal de cortisol, Se aplican 250 ug de cosintropina vía intravenosa, intramuscular y se toman muestra de sangre a los 30 y 60 min después de aplicado el estímulo para estudio de cortisol.
                  <br>Valores: Pacientes con el hipotálamo-hipofisis-adrenal intacto debe aumentar por encima de 18 ug/dl 0 más de 7 ug/dl con relación al nivel basal
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-3">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">MINERALOCORTICOIDES</h2>
              <p class="lead">
                Son hormonas esteroideas sintetizadas y secretadas por la zona glomerulosa de la corteza adrenal y que actúa sobre el equilibrio electrolítico del plasma, especialmente por la absorción de sodio y cloro en los túbulos renales.
              </p>
              <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G3/Imagen 13.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <p class="lead">
                <b>Conformado por:</b>
              </p>
              <div class="row text-justify">
                <div class="col-1"></div>
                <div class="col-11">
                  <ol class="list lead mb-3 ">
                    <li>Aldosterona</li>
                    <li>11-desoxicorticosterona</li>
                    <li>18-hidroxicorticosteron</li>
                    <li>Corticosterona</li>
                    <li>Cortisol</li>
                  </ol>
                </div>
              </div>
              <h4 class="text-dark mb-0">FUNCIÓN</h4>
              <p class="lead">
                Regulación de los niveles de sales (minerales) y agua en el organismo. Es decir, son fundamentales para el equilibrio electrolítico, que es el equilibrio de la cantidad de sales disueltas (electrolitos) y agua que contiene el organismo.
              </p>
              <div class="row text-justify">
                <div class="col-1"></div>
                <div class="col-11">
                  <ol class="list lead mb-3 ">
                    <li>Actúan a nivel del túbulo renal distal, glándulas sudoríparas e intestino, reteniendo sodio y cloro y eliminando potasio.</li>
                    <li>El exceso produce pérdida de K y retención de Na y agua, aumenta la volemia con edema, hipertensión y supresión de la renina (hiperaldosteronismo).</li>
                  </ol>
                </div>
              </div>
              <h2 class="text-dark mb-0">ALDOSTERONA</h2>
              <p class="lead">
                Hormona esteroidea.
              </p>
              <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G3/Imagen 14.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
              <p class="lead">
                Su síntesis se lleva a cabo en la zona glomerular de la corteza suprarrenal, actuando sobre los receptores de los mineralocorticoides (MR), activando todas sus funciones.
                <br> Su vida media es de 30 minutos
              </p>
              <h2 class="text-dark mb-0">ESTÍMULOS DE LA SÍNTESIS DE ALDOSTERONA</h2>
              <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G3/Imagen 15.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
              <h3>HIPERALDOTIROIDISMO</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ol class="list lead mb-3 ">
                      <li>Está causado por un tumor en una glándula suprarrenal o por la presencia de algunas enfermedades.</li>
                      <li>Una concentración alta de aldosterona provoca hipertensión arterial y un descenso en la concentración de potasio. Esta baja concentración de potasio causa debilidad, hormigueo, calambres musculares y períodos de parálisis temporal.</li>
                      <li>Para realizar el diagnóstico, se miden las concentraciones sanguíneas de sodio, de potasio y de aldosterona.</li>
                      <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                        <a class="d-block blur-shadow-image">
                          <center>
                            <img src="../assets/img/G3/Imagen 16_.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                          </center>
                        </a>
                      </div>
                      <li>A veces, se extirpa el tumor o se administran fármacos que bloquean la acción de la aldosterona.</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>HIPOALDOTIROIDISMO</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ol class="list lead mb-3 ">
                      <li>Disminución de la síntesis de aldosterona y/o de su secreción como efecto derivado de una lesión suprarrenal primaria.
                      <li>Disminución de la estimulación de la secreción de aldosterona secundaria a la inhibición del sistema RAA.</li>
                      <li>Resistencia a la acción de la aldosterona.</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>INTERPRETACIÓN DE RESULTADOS</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 18.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">MEDICIÓN ALDOSTERONA:</h4>
                </div>
                <h5 class="text-dark pt-1 mb-0">SANGRE:</h5>
                <p class="lead">
                  <b>¿Cómo se debe preparar un paciente para esta prueba?</b>
                  <br>Desde dos semanas antes del examen no, comer alimentos muy salados, no tomar ningún tipo de medicamento que incluya hormonas dos semanas antes,no comer regaliz negro dos semanas antes
                  <br><b>¿Que puede afectar la prueba?</b>
                  <br>Embarazo, niveles de la hormona pueden ser altos en el tercer trimestre, hacer mucho ejercicio o tener mucho estrés, tomar medicamentos como hormonas femeninas, posición durante la prueba
                  <br><b>Valores de referencia</b>
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 19.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <h5 class="text-dark pt-1 mb-0">ORINA:</h5>
                <p class="lead">
                  <b>¿Cómo se debe preparar un paciente para esta prueba?</b>
                  <br>Desde dos semanas antes del examen no, comer alimentos muy salados, no tomar ningún tipo de medicamento que incluya hormonas dos semanas antes,no comer regaliz negro dos semanas antes
                  <br><b>¿Que puede afectar la prueba?</b>
                  <br>Embarazo, niveles de la hormona pueden ser altos en el tercer trimestre, hacer mucho ejercicio o tener mucho estrés, tomar medicamentos como hormonas femeninas, posición durante la prueba
                  <br><b>Valores de referencia</b>
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 20.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h5 class="text-dark pt-1 mb-0">MEDICIÓN Na+ EN SANGRE Y ORINA</h5>
                </div>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 21.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h5 class="text-dark pt-1 mb-0">MEDICIÓN DE K+</h5>
                </div>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Análisis</li>
                      Determinar si la concentración de potasio está dentro del intervalo de referencia y para ayudar a evaluar un desequilibrio electrolítico; para el seguimiento de las patologías que puedan provocar alteraciones en la concentración de potasio.
                      <li>Muestras</li>
                      <b>Sangre:</b> Toma de muestra de sangre venosa, determinación en suero o plasma.
                      <br><b>Orina:</b> muestra de orina aleatoria o muestra de orina de 24 horas.
                      <li>Valores de Referencia</li>
                      <b>Sangre:</b> Rango normal es de 3.7 a 5.2 miliequivalentes por litro (mEq/L), de 3.70 a 5.20 milimoles por litro (milimol/L)
                      <br><b>Orina:</b> 20 mEq/L en una muestra de orina aleatoria y de 25 a 125 mEq por día en una muestra de 24 horas
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
              <h3>Andrógenos</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Introducción</h4>
                </div>
                <p class="lead">
                  Los andrógenos son un grupo de hormonas, la más conocida de estas es la testosterona. Hay muchas ideas erradas sobre la testosterona y otros andrógenos. Las personas, por lo general, piensan que estas son hormonas “masculinas”. Es verdad que la testosterona es la hormona más importante para el desarrollo sexual de las personas con órganos sexuales masculinos.
                  <br>Dicho esto, todas las personas, sin importar su sexo, producen y necesitan ciertos niveles de andrógenos para su desarrollo reproductivo. Las hormonas, como los andrógenos, facilitan la comunicación entre las células de todo el cuerpo.
                  <br>Los andrógenos se producen a partir de la transformación del colesterol, en la glándula suprarrenal y en los ovarios. Los músculos y el tejido graso también pueden sintetizar testosterona:
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 22.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Patologías asociadas</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead">
                  <b> Los síntomas de niveles altos de andrógenos</b> incluyen: Hirsutismo (crecimiento excesivo del vello corporal)
                </p>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Acné</li>
                      <li>Períodos irregulares</li>
                      <li>Periodos ausentes (amenorrea)</li>
                      <li>Anovulación</li>
                      <li>Infertilidad</li>
                    </ul>
                  </div>
                </div>
                <p class="lead">
                  Los trastornos que pueden causar o están asociados con altos niveles de andrógenos incluyen:
                </p>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Síndrome de Ovario Poliquístico (SOP)</li>
                      <li>Tumores en la glándula suprarrenal</li>
                      <li>Tumores de ovario</li>
                      <li>Hiperprolactinemia</li>
                      <li>Enfermedad de Cushing</li>
                    </ul>
                  </div>
                </div>
                <p class="lead">
                  <b>Síntomas de niveles bajos de andrógenos</b> No hay muchos síntomas evidentes de niveles bajos de andrógenos en mujeres cisgénero y personas con ovarios. Los síntomas pueden incluir cambios en la libido y el estado de ánimo, pero la investigación sobre este tema no es concluyente
                  <br>Los procedimientos, tratamientos y trastornos que pueden causar o estar asociados a niveles inesperadamente bajos de andrógenos incluyen:
                </p>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Fallo ovárico prematuro (es decir, menopausia precoz)</li>
                      <li>Menopausia quirúrgica</li>
                      <li>Hipopituitarismo</li>
                      <li>Quimioterapia</li>
                      <li>Insuficiencia suprarrenal</li>
                      <li>VIH</li>
                      <li>Anticonceptivos y terapia de remplazo hormonal de estrógeno</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Pruebas para medir andrógenos</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Testosterona</h4>
                </div>
                <p class="lead">
                  Se mide con radioinmunoanálisis modificado que permite determinar la fracción libre. Esto es importante porque en situaciones de hiperandrogenismo disminuye la síntesis de la proteína transportadora de hormonas sexuales (SHBG) y la concentración total de testosterona puede no aumentar. La concentración normal en varones es de 3 a 10 ng/ml y hasta 1 ng/ml en mujeres. Cifras superiores a 2 ng/ml en mujeres deben hacer sospechar tumor virilizante adrenal u ovárico.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Niveles de testosterona</h4>
                </div>
                <p class="lead">
                  Es el principal andrógeno producido por las células de Leydig a partir de la androstendiona. También se sintetiza en los ovarios y las glándulas suprarrenales. Los valores normales son de 3 a 10 ng/ml en hombres y de 0,1 a 1,1 ng/ml en mujeres. Se puede determinar por enzimoinmunoensayo y radioinmunoensayo. Debido a que esta hormona se secreta en pulsos cada 60 a 90 minutos, la determinación de 3 muestras espaciadas 20 minutos aportará los resultados más fiables. Los valores prepuberales son también superiores en niños que en niñas, oscilando el rango entre 0,2 a 0,7 nmol/l (0,05 a 0,2 ng/ml).
                  <br> En los hombres, los andrógenos se elevan en situaciones de resistencia a andrógenos y en algunos tipos de hiperplasia adrenal congénita, y disminuyen en situaciones de hipogonadismo. También se presentan bajos niveles de testosterona en el síndrome de Klinefelter (XXY), en situaciones de feminización, como la secundaria a cirrosis hepática, y en algunas enfermedades autoinmunes (lupus sistémico, síndrome de Sjögren).
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Testosterona libre en saliva</h4>
                </div>
                <p class="lead">
                  Una fracción variable de la testosterona plasmática está ligada a la SHBG (sexual hormone-binding globulin). La saliva es un ultrafiltrado del plasma que no contiene proteínas, por lo que toda la testosterona que contenga será libre. Alternativamente, se puede medir la SHBG plasmática y calcular indirectamente la fracción libre en plasma.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Concentraciones de 5-α-dihidrotestosterona</h4>
                </div>
                <p class="lead">
                  Es el metabolito activo de la testosterona. Su valor es de aproximadamente la décima parte que el de testosterona en varones jóvenes, cercano a 0,6 ng/ml. Se reduce en los hipogonadismos.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Testosterona urinaria</h4>
                </div>
                <p class="lead">
                  Solo se elimina inmodificada por orina del 1 al 2 % de la producida. La tabla refleja la eliminación urinaria diaria de testosterona por grupos de edad, con un máximo entre los 20 y los 30 años.
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 23.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">Gónadas</h2>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Introducción</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  Las gónadas proporcionan a ambos sexos las hormonas y gametos necesarios para la reproducción. En cada etapa de formación, las funciones gonadales están reguladas por una vía hormonal a lo largo del eje hipotálamo-pituitario-gonadal.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Eje hipotálamo-hipófisis-gonadal (HHG)</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  El eje hipotálamo - Hipófisis - gonadal (HHG) es el responsable de todos los aspectos del proceso reproductor tanto en hombres como mujeres. En este eje vamos a encontrar 2 funciones principales, las cuales son: Esteroidogénesis (Síntesis de hormonas esteroideas responsables de la diferenciación y la maduración sexual) y Gametogénesis (Generación de los gametos correspondientes a cada uno de los sexos).
                  <br><br>En la imagen podemos ver el procesode como la hormona hipotalámica liberadora de gonadotropinas (GnRH) induce, en las células gonadotropas hipofisarias, la síntesis y liberación pulsátil de las gonadotropinas hipofisarias, LH (hormona luteinizante) y FSH (hormona folículo-estimulante), las cuales van a actuar coordinadamente en la gónada para inducir la maduración de las células germinales (óvulos o espermatozoides) y la producción de esteroides sexuales (ES), así como de otros péptidos gonadales, los cuales algunos de estos son inhibinas, activinas entre otras.
                </p>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 24.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <p class="lead mb-0">
                  La producción de esteroides sexuales y péptidos gonadales, así como otras hormonas circulantes como la leptina, ejercen acciones estimulantes e inhibidoras y un retrocontrol negativo en hipotálamo e hipófisis, reduciendo la secreción de GnRH y LH.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Patologías Implicadas con el aumento o disminución de la hormona</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Hipogonadismo primario o hipogonadismo hipergonadotrófico</h4>
                </div>
                <p class="lead mb-0">
                  En esta patología vamos a encontrar que las gónadas no producen suficientes hormonas sexuales. El cerebro produce más hormonas luteinizantes (LH) y hormona folículo-estimulante (FSH) intentando estimular a las gónadas, sin conseguirlo.
                  <br>Puede ser causado por distintos factores como lo son algunos medicamentos, Altas dosis o uso prolongado de opioides o medicamentos esteroides (glucocorticoides), El daño a la hipófisis o al hipotálamo a raíz de cirugía, lesión, tumor, infección o radiación, Trastornos genéticos y autoinmunes, Síndrome de Turner, Síndrome de Klinefelter, entre otros.
                </p>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G3/Imagen 25.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Alteraciones en los niveles de testosterona:</h4>
                </div>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Testosterona alta en los hombres y mujeres: En hombres puede llevar a consecuencias en el buen funcionamiento de los órganos y puede producir cambios de humor con tendencia a la agresividad y en mujeres pueden indicar una afección llamada síndrome de ovario poliquístico (SOP).</li>
                      <li>Testosterona baja en los hombres y mujeres: Puede conllevar a problemas de erección, debilidad muscular, infertilidad, entre otros y en mujeres puede afectar el crecimiento muscular óseo, crecimiento de cabello, fatiga, disminución del deseo sexual, entre otros.</li>
                    </ul>
                  </div>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Alteraciones en los niveles de estradiol:</h4>
                </div>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Niveles altos: Es el resultado de algún tipo de problema en los ovarios, alguna dificultad en la zona ovárica que repercute en la fabricación de esta hormona. Otra de las causas es la menopausia.</li>
                      <li>Niveles bajos: Un nivel bajo de estradiol tiene significados diferentes en función del momento del ciclo en el que se realice el análisis.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Pruebas basales</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Niveles de testosterona:</h4>
                </div>
                <p class="lead mb-0">
                  Esta prueba mide los niveles de testosterona en la sangre. La mayor parte de la testosterona en la sangre está unida a las proteínas. La testosterona que no está unida a una proteína se llama testosterona libre. Hay dos tipos principales de pruebas de testosterona:
                </p>
                <div class="me-auto">
                  <h5 class="text-dark pt-1 mb-0">Testosterona total:</h5>
                </div>
                <p class="lead mb-0">
                  Mide la testosterona unida y la libre.
                </p>
                <div class="me-auto">
                  <h5 class="text-dark pt-1 mb-0">Testosterona libre:</h5>
                </div>
                <p class="lead mb-0">
                  Mide solo la testosterona libre. La testosterona libre puede dar más información sobre ciertas afecciones médicas.
                  <br> <br>
                  Se puede determinar por enzimoinmunoensayo y radioinmunoensayo.
                  <br> Requiere un ayuno de 8 horas y para esta prueba no se necesita ninguna preparación especial. Es preferible realizar la extracción a primera hora de la mañana.
                </p>
                <div class="me-auto">
                  <h5 class="text-dark pt-1 mb-0">Testosterona libre en saliva:</h5>
                </div>
                <p class="lead mb-0">
                  La indicación para esta prueba es que el paciente no debe comer, beber, mascar goma o lavarse los dientes 30 min antes de la toma de muestra.
                  <br> Para esta prueba:
                </p>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Se debe recoger un mínimo de 0.5 mL de líquido.</li>
                      <li>Se efectúa por un Inmunoensayo enzimático.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Pruebas dinámicas</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Prueba de estimulación con GnRH:</h4>
                </div>
                <p class="lead mb-0">
                  Este es considerado como el método de referencia para la confirmación de la pubertad precoz central. Para la preparación del paciente, aunque no es requerido, el médico solicita un ayuno durante la noche y que la prueba sea ejecutada en la mañana.
                </p>
                <div class="me-auto">
                  <h5 class="text-dark pt-1 mb-0">Prueba de GnRH intravenosa:</h5>
                </div>
                <p class="lead mb-0">
                  Prueba diagnóstica que consiste en la administración intravenosa de la hormona liberadora de gonadotropina (GnRH) (habitualmente 100 microgramos) a fin de observar el patrón de respuesta de la hormona foliculoestimulante (FSH) y de la hormona luteinizante (LH).
                  <br>Puede llevarse a cabo administrando un solo bolo intravenoso, en infusión intravenosa continua, lo que facilita la valoración de los depósitos preformados y los de nueva síntesis, y en administración repetitiva durante varios días, si se precisa realizar un efecto de primado previo de las células gonadotropas.
                </p>
                <div class="me-auto">
                  <h5 class="text-dark pt-1 mb-0">Prueba de estímulo con análogo de GnRH:</h5>
                </div>
                <p class="lead mb-0">
                  Esta prueba es útil para el diagnóstico de pubertad precoz. Diferenciar entre hipogonadismos primarios y secundarios, disfunción de la secreción de gonadotropinas, control de terapia con análogos de GnRH (Hormona liberadora de Gonadotropinas).
                  <br>Al efectuar toma de muestras de sangre post GnRH en forma temprana y tardía, se permite evaluar el eje hipotálamo-hipófisis-ovario o testículo según el caso.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
            <div class="rotating-card-container">
              <div class="card card-rotate card-background shadow-primary mt-md-0 mt-5">
                <div class="front front-background" style="background-image: url(https://images.pexels.com/photos/3800795/pexels-photo-3800795.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260); background-size: cover;">
                  <div class="card-body py-7 text-center">
                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                    <h3 class="text-white">Juegos INTERACTIVOS</h3>
                    <p class="text-white opacity-8">Juega utilizando todo lo aprendido de una manera muy divertida!</p>
                  </div>
                </div>
                <div class="back back-background" style="background-image: url(https://images.pexels.com/photos/3800795/pexels-photo-3800795.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260); background-size: cover;">
                  <div class="card-body pt-7 text-center">
                    <h3 class="text-white"> En este pequeño juego pondrás a prueba lo aprendido, esperamos te diviertas jugando a los 6 juegos diferentes que tenemos para ti!</h3>
                    <a href="https://www.cerebriti.com/juegos-de-ciencias/hormonas-sistema-endocrino" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">A jugar!</a>
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