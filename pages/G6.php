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
            <h1 class="text-white pt-3 mt-n5">SÍNDROME METABÓLICO</h1>
            <p class="lead text-white mt-3" style="text-align:center">Te invitamos a aprender con nosotros sobre el Síndrome Metabólico</p>
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
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es el Síndrome Metabólico?</h2>
              <p class="lead">El síndrome metabólico es un grupo de trastornos (aumento de la presión arterial, niveles altos de azúcar en sangre, exceso de grasa corporal alrededor de la cintura y niveles anormales de colesterol o triglicéridos) que se presentan al mismo tiempo, aumentando el riesgo de sufrir una enfermedad cardíaca, accidente cerebrovascular y/o diabetes tipo 2; es importante aclarar y saber que el hecho de que tengas solo uno de estos trastornos no significa que padeces de síndrome metabólico. <br>
                La mayoría de los trastornos asociados con el síndrome metabólico no presenta signos ni síntomas; pero un signo que es visible es la circunferencia grande de la cintura. Si el azúcar en sangre es alto, podrías notar los signos y los síntomas de la diabetes, como aumento de la sed y la orina, cansancio y visión borrosa.
              </p>
              <br>
              <div class="card-header p-0 position-relative mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G6/1.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
              <h2 class="text-dark mb-0">Fisiopatología</h2>
              <p class="lead">Como es bien sabido, no existe un único mecanismo fisiopatológico del síndrome metabólico que se encuentre universalmente aceptado dentro de la comunidad científica, de tal manera que se han propuesto varias respuestas ante tal síndrome que en conjunto conllevan a las manifestaciones clínicas típicas del síndrome metabólico.</p>
              <br>
              <div class="card-header p-0 position-relative mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G6/2.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
              <h3>Obesidad</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  Se sabe que la ingesta aumentada de alimentos a largo plazo da origen a la obesidad, lo cual genera en nuestro organismo un balance energético positivo, que claramente ocasionará acumulación de lípidos, lo que conlleva a la formación de adipocitos nuevos para su almacenamiento, proceso conocido como hiperplasia adipocítica, y esto es bueno, pero cuando se excede la capacidad de dicho tejido de hacer tal proceso, sobreviene la hipertrofia adipocítica y una respuesta inflamatoria, puesto que tal hipertrofia origina adipocitos no funcionales y a su vez llegada e infiltración de macrófagos en el tejido, ambos sucesos lleva a una producción aumentada de adipoquinas proinflamatorias, que incluyen principalmente, TNF-α, interleucina 6 (IL-6), que como consecuencia se origina una inflamación crónica subclínica que eventualmente se convertirá en una inflamación sistémica crónica, sumado a esto, ocurrirá acumulación ectópica de grasa en otros órganos o tejidos que no son capaces de acumular lípidos, por lo cual habrá lipotoxicidad en los mismos.</p>
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
              <h3>Dislipidemia</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  En la mayor parte de los casos, el exceso de grasa intraabdominal produce un aumento de la liberación de ácidos grasos libres (AGL) procedentes de los adipocitos resistentes a la insulina. El aporte excesivo de AGL hacia el hígado induce una sobreproducción de partículas lipoproteicas de muy baja densidad (VLDL) ricas en triglicéridos, lo que explica la hipertrigliceridemia de las personas con SM, que aumenta la expresión de la proteína transferidora de ésteres de colesterol (CETP). <br>
                  En presencia de hipertrigliceridemia, la transferencia de lípidos inducida por la CETP se realiza entre las partículas VLDL grandes y las HDL. Las partículas HDL ricas en triglicéridos son sustrato tanto para la lipoproteína lipasa periférica como para la lipasa hepática que hidroliza sus triglicéridos. La partícula resultante es una partícula HDL pequeña y con escaso contenido en colesterol, explicando las concentraciones bajas de colesterol HDL de las personas con este síndrome. <br>
                  Los diversos tipos de LDL son el resultado del catabolismo de diferentes tipos de VLDL sintetizadas en el hígado. Cuando las partículas VLDL son relativamente pobres en triglicéridos (VLDL 2) se solapan con las partículas de densidad intermedia y se transforman en LDL grandes con gran afinidad por el receptor LDL. En presencia de resistencia periférica a la insulina, las partículas sintetizadas por el hígado son ricas en triglicéridos (VLDL 1), tienden a enriquecerse en apo CIII, por lo que su metabolismo periférico y su afinidad por el receptor LDL disminuye dando lugar con mayor facilidad a las LDL pequeñas y densas.
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
              <h3>Hipertensión</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  El aumento de la masa del tejido adiposo produce una mayor secreción de sustancias que modifican la resistencia periférica y el volumen minuto, como el angiotensinógeno, precursor de la Ang II; la leptina y el NPr-C, el cual disminuye la concentración de esos péptidos que tienen un efecto vasodilatador. Sumado a esto, la hiperglucemia y la hiperinsulinemia, que también se encuentra presente en la persona, incrementa la expresión de angiotensinógeno, angiotensina II (ANG II) y del receptor AT1, lo cual puede contribuir al desarrollo de la hipertensión, pues la ANG II ejerce varios efectos que modulan la presión sanguínea, de manera tal que se activa el sistema renina-angiotensina. Además, tanto la resistencia a la insulina como la hiperinsulinemia estimulan el Sistema Nervioso Simpático y, en consecuencia, los riñones aumentan la reabsorción de sodio, el corazón aumenta el gasto cardíaco y las arterias responden con vasoconstricción e hipertensión.</p>
              </div>
            </div>
          </div>
          <br>
          <div class="card-header p-0 position-relative mx-3 z-index-2">
            <a class="d-block blur-shadow-image">
              <center>
                <img src="../assets/img/G6/3.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
              <h3>Insulino resistencia</h3>
              <h6 class="text-secondary font-weight-normal pe-3">Esta posee factores patogénicos como lo son:</h6>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Mediada por inflamación:</h4>
                </div>
                <p class="lead mb-0">
                  La obesidad ha sido asociada a un estado inflamatorio crónico leve a moderado. En condiciones pro-inflamatorias, se desencadena la migración del factor de transcripción NFkB para la síntesis de nuevos mediadores inflamatorios. En estado basal, este factor de transcripción está inactivo, unido a su inhibidor. A respuesta de una señal externa pro-inflamatoria, la proteína IKK induce la degradación del inhibidor, permitiendo la señal inflamatoria. La proteína IKK también fosforila al sustrato del receptor de insulina 1 (IRS1), provocando una inhibición de la transducción de la señal insulínica disminuyendo así la captación de la glucosa sanguínea. Como respuesta compensatoria, ocurre una hipersecreción de insulina.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Mediada por lípidos:</h4>
                </div>
                <p class="lead mb-0">
                  Los diglicéridos son capaces de influenciar la actividad de proteínas específicas, como la proteína quinasa Cè. Uno de los sustratos para la acción de proteína quinasa Cè es IRS1, lo cual determina una atenuación de la actividad de la señal insulínica, de manera análoga a lo que ocurre en una condición proinflamatoria. Los ácidos grasos libres circulantes constituyen un estímulo pro-inflamatorio, dada su capacidad de unirse a receptores de membrana como TLR, estos activan al NFêB (factor nuclear kappa B), con la consiguiente liberación de citoquinas pro-inflamatorias.
                </p>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Tejido adiposo: órgano central en la inflamación y resistencia insulínica:</h4>
                </div>
                <p class="lead mb-0">
                  El tejido adiposo está compuesto en su mayoría por adipocitos, los cuales pueden hipertrofiarse, generando una liberación mayor de ácidos grasos no esterificados a circulación y RI, ya que secretan en mayor cantidad adipoquinas con efectos deletéreos y secretan menos adipoquinas con efectos antagónicos a las deletereas, además también permiten que los macrofagos se infiltren y se genere una inflamación por las moléculas que estos secretan.
                </p>
              </div>
            </div>
          </div>
          <br>
        </div>
      </div>
      <hr>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Hiperglu-cemia</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  La exposición crónica a glucosa y ácidos grasos libres en concentraciones elevadas induce glucotoxicidad y lipotoxicidad respectivamente, lo cual puede causar disfunción y hasta muerte de las células B, debido a que estas células tienen capacidad limitada para enfrentar el estrés oxidativo, debido a que tienen un bajo nivel de enzimas antioxidantes. La resistencia a la insulina exige una producción aumentada de insulina por parte de las células β y estas células responden incrementando su masa y secreción de insulina. Esto puede exceder la capacidad de plegamiento, resultando en una acumulación de proinsulina no plegada en el lumen del retículo endoplásmico, generando así, el ERE. El ERE puede activar vías inflamatorias que trastornan las funciones celulares, además, causa acumulación de ROS induciendo estrés oxidativo y este a su vez promueve el ERE, de modo que ambos elementos contribuyen de manera aditiva al desarrollo de desórdenes metabólicos.
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
              <h3>Estado protrombótico</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  El SM representa un factor de riesgo para que el paciente presente enfermedades de tipo cardiovascular, las cuales se asocian, en parte, al estado protrombótico que acompaña al síndrome metabólico, y que incluye la disfunción endotelial y se asocia al estado proinflamatorio.
                </p>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li><b>Disfunción endotelial:</b> Es cualquier alteración de la fisiología del endotelio que produzca una descompensación de las funciones reguladoras que este realiza y se considera la causa principal del desarrollo y la progresión del proceso aterosclerótico. Entre sus causas se encuentran: La pérdida de la actividad de la sintetasa de ON dependiente del endotelio como resultado del envejecimiento. La insulinorresistencia debido a productos metabólicos derivados del tejido graso, hormonas y citoquinas. La función del tejido graso como un órgano capaz de producir y secretar péptidos con acciones inflamatorias o metabólicas, conlleva al deterioro de la función endotelial.</li>
                      <li><b>Estado proinflamatorio:</b> El estado proinflamatorio asociado a la obesidad y SM es debido a la presencia de células inflamatorias entre las células adipocitarias y por la actividad inflamatoria propia de los adipocitos. Se ha observado un aumento de moléculas como el factor de necrosis tumoral α (FNT-α), inhibidor del activador del plasminógeno 1 (PAI-1), interleuquina 6 y leptina y disminución de la adiponectlna, (todas estas secretadas por el tejido adiposo), tienen la capacidad de modular reacciones inflamatorias, trombóticas y vasoactivas.</li>
                      <li><b>Estado protrombótico:</b> Este incluye: Alteraciones en el endotelio, la coagulación y fibrinolisis, y la activación plaquetaria.</li>
                      <li><b>Coagulación:</b> Se han encontrado niveles elevados de fibrinógeno, factores vitamina K dependientes, factor XIII y FvW</li>
                      <li><b>Fibrinolisis:</b> Se ha evidenciado un aumento del inhibidor del activador del plasminógeno 1 (PAI-1), sintetizado por los adipocitos y plaquetas, y cuya concentración plasmática se relaciona con la cantidad de grasa visceral. El plasma de personas con SM forma coágulos más densos que los individuos sin SM debido a los niveles altos de (PAI-1).</li>
                      <li><b>Hiperactividad plaquetaria:</b> Alteraciones en las plaquetas que poseen SM pueden desencadenar su activación e hiperactividad (permitiendo la unión al tejido endotelial disfuncional) tales como la disminución de la fluidez de membrana. La hipertrigliceridemia y ácidos grasos libres (característico de los pacientes con SM) favorecen la agregación plaquetaria, participando así en el proceso aterogénico.</li>
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
              <h2 class="text-dark mb-0">En resumen:</h2>
              <br>
              <div class="card-header p-0 position-relative mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G6/4.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
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
              <h3>Diagnóstico</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Criterios de diagnóstico:</h4>
                </div>
                <p class="lead mb-0">
                  Para el diagnóstico del síndrome metabólico se debe evaluar los criterios que se encuentren vigentes y aceptados por cada institución, entre los más usados encontramos los criterios de la OMS, NECP, IDF, ATP III Y ALAD, de igual forma se debe tener en cuenta la edad del paciente, si se trata de un niño o de un adulto y en el caso de los adultos diferenciar a estos dependiendo del género, los valores entre estos fluctúan gracias a las diferencias funcionales metabólicas. <br>
                  A continuación encontrará dos tablas de los criterios diagnósticos, la tabla 1., corresponde a los criterios utilizados en niños, la tabla 2., corresponde a los criterios utilizados en adultos. Para interpretar el diagnóstico es necesario tener en cuenta la cantidad de criterios a cumplir el paciente para dar un diagnóstico de síndrome metabólico, como ejemplo: en el caso de los criterios de NECP, se deben cumplir 3 criterios para tener un diagnóstico positivo de SM.
                </p>
                <br>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G6/52.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      <p>Tabla 1. Criterios diagnósticos en niños</p>
                      <p>Imagen tomada de: <a href=" https://www.aepap.org/sites/default/files/cursoaepap2015p71-84.pdf">www.aepap.org</a></p>
                    </center>
                  </a>
                </div>
                <br>
                <!-- <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G6/51.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>-->
                <br>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G6/51.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg" width="500">
                      <p>Tabla 2. Criterios diagnósticos en adultos</p>
                      <p>Imagen tomada de: <a href=" https://www.archivosdemedicina.com/medicina-de-familia/siacutendrome-metaboacutelico-en-adultos-revisioacuten-narrativa-de-la-literatura.pdf">www.archivosdemedicina.com</a></p>
                    </center>
                  </a>
                </div>
                <br>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Resistencia a la insulina:</h4>
                </div>
                <p class="lead mb-0">
                  El método más usado para demostrar resistencia a la insulina, es la medición de insulina en ayunas; sin embargo, se pueden usar índices derivados de la insulina en ayunas y la glucosa, como la Homeostasis Model Assessment (HOMA), el Quantitative Insulin Sensitivity Check Index (QUICHI) y el Insulin Sensitivity Index (ISI).
                </p>
                <br>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Obesidad:</h4>
                </div>
                <p class="lead mb-0">
                  Este se calcula midiendo con una cinta métrica el perímetro abdominal (PA), para ello se debe ubicar la cinta métrica máxima 3 dedos sobre el ombligo, tomar la cinta métrica rodeando el cuerpo, expulsar el aire y tomar la medida como se evidencia en la imagen, para realizar la interpretación de esta se debe tener en cuenta el género, origen étnico y geográfico. Los valores que se consideran altos para determinar obesidad abdominal se encuentran en la siguiente tabla.
                </p>
                <br>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G6/6.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      <p>Imagen tomada de <a href="http://cardiosaudeferrol.com/sobrepeso-y-obesidad/perimetro-abdominal/">cardiosaudeferrol.com</a></p>
                    </center>
                  </a>
                </div>
                <br>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G6/7.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      <p>Tabla 3. Cifras de parámetro abdominal</p>
                      <p>Imagen tomada de: <a href="http://www.scielo.org.co/pdf/cm/v39n1/v39n1a13.pdf">www.scielo.org.co</a></p>
                    </center>
                  </a>
                </div>
                <br>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">IMC:</h4>
                </div>
                <p class="lead mb-0">
                  El IMC (índice de masa corporal) es la medida más utilizada y con mayor evidencia sobre su relación con eventos adversos en salud, tiene una analogía con grasa corporal alta (r=0.7-0.8)23, 24. Que se calcula al dividir el peso en kg sobre la talla en metros al cuadrado (IMC=P/T2). La interpretación de los valores se da en el siguiente cuadro.
                </p>
                <br>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G6/8.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      <p>Imagen tomada de <a href="http://www.scielo.org.co/pdf/cm/v39n1/v39n1a13.pdf">www.scielo.org.co</a></p>
                    </center>
                  </a>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">En este link podrá encontrar una página online que calcula este valor de forma fácil: <a href="https://www.cdc.gov/healthyweight/spanish/assessing/bmi/adult_bmi/metric_bmi_calculator/bmi_calculator.html">Calculadora del IMC</a></h4>
                </div>
                <br>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">Dislipemia:</h4>
                </div>
                <p class="lead mb-0">
                  Se considera que la dislipidemia asociada con el SM es altamente aterogénica y se caracteriza por: <br> 1) Hipertrigliceridemia: TG >150 mg/dl. <br> 2) Colesterol de baja densidad disminuida: H: HDL < 40 mg/dl, M: HDL < 50 mg/dl. <br> 3). Lipoproteínas de baja densidad (LDL) pequeñas y densas. <br> 4). Aumento de ácidos grasos libres en plasma <br> 5). Aumento de apolipoproteína B.
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
              <h3>Métodos de diagnóstico basal para IR</h3>
            </div>
          </div>

          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">HOMA:</h4>
                </div>
                <br>
                <p class="lead mb-0">
                  El modelo homeostático para evaluar la resistencia a la insulina (HOMA-IR) es un método para medir la resistencia a la insulina. Los cortes HOMA-IR para identificar el síndrome metabólico pueden variar entre las poblaciones y los niveles del índice de masa corporal (IMC). Para hallar el índice de resistencia insulinica como característica tomada en cuenta por la OMS y ATPIII para diagnosticar el síndrome metabólico es necesario hacer el uso de la fórmula del modelo anteriormente descrito (HOMA)se realiza dividiendo el producto de la multiplicación de los niveles de glucosa en milimoles por litro por la insulina en miliunidades por mililitro dividido entre una constante de 22.5 cuyo punto de corte es en individuos normales menores de 3. <br> <br>
                  <b>(Insulina Basal (μU/L) x Glicemia Basal (mmol/L)/22,5).</b>
                </p>
                <br>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G6/9.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      <p>Tabla 4. Valores de referencia índice HOMA</p>
                      <p>Imagen tomada de: <a href="https://amhigo.com/mi-diagnostico/calculadoras/indice-de-resistencia-a-la-insulina-homa-ir#:~:text=El%20acr%C3%B3nimo%20HOMA%2DIR%20representa,y%20la%20insulina%20en%20ayunas">amhigo.com</a></p>
                    </center>
                  </a>
                </div>
                <br>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">QUICKI:</h4>
                </div>
                <br>
                <p class="lead mb-0">
                  Quantitative Insulin Sensitivity Check Index es utilizado mediante el cálculo de (1/(Log glicemia ayuno (mg/dl) + Log insulina ayuno (μU/ml), se consideraron niveles de RI un valor de QUICKI ‹ 0.357. Tiene una buena correlación con el clamp euglicémico hiperinsulinémico y tiene la ventaja que predice el riesgo de presentar una diabetes mellitus tipo 2, mejor que el HOMA y la insulina en ayuno, lo que permite un diagnóstico más biológico de esta condición. Sin embargo, el índice HOMA es el más utilizado por su facilidad. Muchos autores estiman que el QUICKI es superior al HOMA como método para determinar la sensibilidad a la insulina. El QUICKI es inversamente proporcional a la sensibilidad a la insulina, aumentando a medida que esta disminuye. Al igual que el HOMA esta prueba puede ser aplicado tanto a pacientes hiperglucémicos como normoglucémicos.
                </p>
                <br>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">ISI:</h4>
                </div>
                <br>
                <p class="lead mb-0">
                  Índice de sensibilidad de la insulin se calcula para una masa corporal libre de tejido graso, empleando las concentraciones medias de insulina en los últimos 60 minutos de una prueba de 2 horas de duración, y los triglicéridos en ayunas. <br>
                  ISI = exp[3.29 - 0.25*ln(I0) - 0.22*ln(BMI) - 0.28*ln(TG)] (incorpora el índice de masa corporal). <br>
                  ISI = exp[2.63 - 0.28*ln(I0) - 0.31*ln(TG)] (no incorpora la masa corporal).
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
                <p class="lead mb-0">
                  Los cambios en el estilo de vida de los pacientes diagnosticados, acompañados de vigilancia médica, pueden dar calidad de vida. Debido a que la obesidad (central) es uno de los componentes del SM que desencadena los demás padecimientos, un tratamiento efectivo se debe centrar en la raíz del problema.
                  <br> <br>
                  En cuanto a la resistencia a la insulina que luego puede desencadenar diabetes tipo 2, farmacológicamente el uso de hipoglucemiantes como la metformina, que ayuda a la disminución de producción de glucosa en el hígado, son la opción más común para tratar a estos pacientes, con una administración de 500 a 850 mg por vía oral, de 2 a 3 veces al día en compañia de las comidas. Los hábitos saludables como una dieta baja en carbohidratos y actividad física pueden ayudar a esta condición.
                  <br> <br>
                  Para las dislipidemias, según el grupo latinoamericano de la oficina internacional de lípidos, las estatinas ayudan a regular el perfil aterogénico de pacientes con SM, las más utilizadas son: Atorvastatina, Lovastatina y Pitavastatina, lo que hacen es aumentar el colesterol HDL hasta en un 5-15%, dentro de este perfil los triglicéridos pueden tratarse según su grado de elevación, con actividad física, fármacos o combinando estas 2 opciones, cuando los niveles están por debajo de los 200 mg/dl el ejercicio es lo más óptimo, mientras que si se superan los 500 mg/dl los medicamentos como fibratos junto con una dieta baja en grasa deben ser el paso a seguir para llegar a un nivel sano de triglicéridos.
                </p>
                <br>
                <div class="card-header p-0 position-relative mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G6/10.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      <p>Tabla 4. Valores de referencia índice HOMA</p>
                      <p>Imagen tomada de: <a href="http://www.fepreva.org/curso/4to_curso/bibliografia/volumen1/u9_vol1_tratamiento.pdf">www.fepreva.org</a></p>
                    </center>
                  </a>
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
              <h2 class="text-dark mb-0">Bibliografía:</h2>
              <div class="row">
                <div class="col-1"></div>
                <div class="col-11">
                  <ul class="list lead mb-3 ">
                    <li>Martín Rioboó, E., García Criado, E. Fonseca del Pozo, F., nd Perspectivas y tratamiento actual del síndrome metabólico. [en línea] Elsevier.es. Disponible en: <a href="https://www.elsevier.es/es-revista-medicina-familia-semergen-40-articulo-perspectivas-tratamiento-actual-del-sindrome-13066284">www.elsevier.es</a> [Consultado el 1 de mayo de 2022].</li>
                    <li>Carrasco, F., Galgani, E., Reyes, M. (2013). Síndrome de resistencia a la insulina. estudio y manejo. Revista Médica Clínica Las Condes. Vol. 24(5); pp 827-837. Disponible en: <a href="https://www.elsevier.es/es-revista-revista-medica-clinica-las-condes-202-articulo-sindrome-resistencia-insulina-estudio-manejo-S071686401370230X">www.elsevier.es</a></li>
                    <li>Carvajal, Carlos. (2017). Síndrome metabólico: definiciones, epidemiología, etiología, componentes y tratamiento. Medicina Legal de Costa Rica, 34(1), 175-193. Disponible en <a href="http://www.scielo.sa.cr/scielo.php?script=sci_arttext&pid=S1409-00152017000100175&lng=en&tlng=es">www.scielo.sa.cr</a>.</li>
                    <li>Síndrome metabólico. (s/f). Mayoclinic.org. Recuperado el 4 de mayo de 2022, de <a href="https://www.mayoclinic.org/es-es/diseases-conditions/metabolic-syndrome/symptoms-causes/syc-20351916">www.mayoclinic.org</a></li>
                    <li>Cuartero, G. B. (2007, 1 mayo). Índice HOMA y QUICKI, insulina y péptido C en niños sanos. Puntos de corte de riesgo cardiovascular | Anales de Pediatría. Anales de Pediatria. <a href="https://www.analesdepediatria.org/en-indice-homa-quicki-insulina-peptido-articulo-13102513">www.analesdepediatria.org</a></li>
                    <li>Corte, L. A. (2008). Índices de sensibilidad insulínica (HOMA y QUICKI) en escolares y adolescentes sanos en Valera, estado Trujillo, Venezuela. SCIELO. <a href="http://ve.scielo.org/scielo.php?script=sci_arttext&pid=S0004-06492008000300003 ">ve.scielo.org</a></li>
                    <li>Pinzon, O., Lopez, D., Giraldo, J. (2015). Síndrome metabólico: enfoque fisiopatológico. Investigaciones Andina, vol. 17, núm. 31, pp. 1328-1342. Disponible en: <a href="https://www.redalyc.org/journal/2390/239040814005/html/ ">www.redalyc.org</a></li>
                    <li>P. Grosso, D., s.f. Tratamiento del Síndrome Metabólico, el Sobrepeso y la Obesidad. [en línea] Fepreva.org. Disponible en: <a href="http://www.fepreva.org/curso/4to_curso/bibliografia/volumen1/u9_vol1_tratamiento.pdf">www.fepreva.org</a>.</li>
                    <li>Pineda, Carlos Andrés. (2008). Síndrome metabólico: definición, historia, criterios. Colombia Médica , 39 (1), 96-106. Recuperado el 09 de mayo de 2022, de <a href="http://www.scielo.org.co/scielo.php?script=sci_arttext&pid=S1657-95342008000100013&lng=en&tlng=es">www.scielo.org.co</a>.</li>

                  </ul>
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