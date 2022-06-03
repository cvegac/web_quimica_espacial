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
            <h1 class="text-white pt-3 mt-n5">DIABETES</h1>
            <p class="lead text-white mt-3" style="text-align:center">Te invitamos a aprender con nosotros sobre la Diabetes </p>
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
              <h2 class="text-dark mb-0">¿Qué es la DIABETES MELLITUS TIPO 1 (DM1)?</h2>
              <p class="lead text-justify">La Diabetes Mellitus tipo 1, a comparación de la DM2, es una enfermedad autoinmune y metabólica, en donde son atacadas los islotes de las células beta pancreáticas dándose una destrucción en los sujetos genéticamente predispuestos por lo que se alcanza una deficiencia absoluta dela producción de insulina dando un consecuente estado de hiperglucemia que evoluciona y tiene una tendencia rápida a la cetoacidosis en condiciones basales. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>FISIOPATOLOGÍA</h3>
              <h6 class="text-secondary font-weight-normal pe-3">Los síntomas de la diabetes descompensada están claramente definidos: poliuria, polidipsia, astenia y adelgazamiento inexplicado. </h6>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  En la primera infancia, el aumento de la diuresis es enmascarado por el uso de pañales y la sed se manifiesta por llanto o irritabilidad, por lo que el diagnóstico se retrasa y los niños llegan a la consulta médica, frecuentemente, en cetoacidosis diabética. En la primera infancia, el aumento de la diuresis es enmascarado por la utilización de pañales y la sed se manifiesta por llanto o irritabilidad, por lo que el diagnóstico se retrasa y los niños llegan a la consulta médica, frecuentemente, en cetoacidosis diabética. La mayoría de los pacientes con diabetes tipo 1 experimentan un período de remisión clínica parcial, caracterizado por un requerimiento bajo de insulina y prácticamente la normalización de la glucemia. Este período se prolonga por más tiempo, cuando la diabetes tipo 1 se presenta durante o después de la pubertad, en comparación a la que inicia en edades más tempranas de la vida. La diabetes tipo 1 es una enfermedad compleja causada por varios factores genéticos y ambientales. Por más de tres décadas, estudios genéticos han identificado varias enfermedades genéticas y la lista de los locus genéticos relacionados; son varios los polimorfismos genéticos que han sido asociados a la diabetes tipo 1. <br>
                  <br>Se estima que el locus del antígeno leucocitario humano (HLA) explica más del 50 % de la agrupación familiar de la diabetes tipo 1 y el porcentaje restante es atribuido a múltiples locus. El genotipo HLA DR3/4 se ha asociado a autoinmunidad contra las células beta. Se ha descrito que el gen IFIH1, codificador de una proteína (RNA helicasa) que participa en la respuesta inmune ante las infecciones virales, es un factor de riesgo para la diabetes tipo 1 y para la artritis reumatoidea.<br>
                  <br>El estrés oxidativo en los pacientes diabéticos está acelerado por el incremento de la producción de especies de oxígeno reactivo, causado por la hiperglucemia y también por la menor habilidad del sistema de defensa antioxidante, explicada parcialmente por algunos polimorfismos genéticos de las enzimas antioxidantes.<br>
                  <br>Respecto a la diabetes neonatal permanente, se han reportado mutaciones en cuatro genes, responsables de la enfermedad; las más frecuentes son las mutaciones activadoras en las subunidades de los canales de K sensibles al ATP de las células beta. Las mutaciones del gen de la insulina representan la segunda causa más común de diabetes neonatal permanente.
                </p>
              </div>
            </div>
          </div>
          <hr>
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>DIAGNÓSTICO</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  La diabetes es una enfermedad metabólica caracterizada por hiperglucemia. Según los criterios de la Asociación Americana de Diabetes y de la Organización Mundial de la Salud, el diagnóstico puede llevarse a cabo en las tres situaciones siguientes:
                </p>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Presencia de síntomas clínicos y glucemia plasmática >/= 200 mg/dL (11.1 mmol/L), independientemente de la hora de extracción en relación con las comidas.</li>
                      <li>Glucemia plasmática en ayunas >/ =126 mg/dL (7.0 mmol/L).</li>
                      <li>Glucemia plasmática a los 120 minutos, en la prueba de tolerancia oral a la glucosa (glucosa, 1.75 g/kg, máximo 75 g - P.T.O.G.) >/= 200 mg/dL. Cada una de las tres situaciones es suficiente para hacer el diagnóstico de diabetes. Un resultado anormal debe confirmarse con la repetición de la medición en dos ocasiones en dos días diferentes.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>TRATAMIENTO:</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  En el tratamiento de los niños diabéticos, son importantes la alimentación, el ejercicio físico, la insulinoterapia y el autocontrol, al cual se llega mediante una educación diabetológica intensa.
                  <br><br>La terapia debe permitir al niño llevar una vida prácticamente normal, con ausencia de sintomatología y de complicaciones agudas de su enfermedad; debe garantizar el desarrollo somatopsíquico normal e impedir la aparición de complicaciones crónicas.
                  <br><br>El objetivo específico del tratamiento para cada niño con diabetes tipo 1 será el de alcanzar el nivel más bajo de hemoglobina glucosilada HbA1c (menor a 7.5%), sin inducir hipoglucemias severas.
                  <br><br>Para ello cualquier esquema terapéutico debe plantearse en forma individualizada, adaptado a cada caso; el papel de la familia es tanto mayor cuanto menor es el niño diabético.
                  <br><br>El equipo diabetológico pediátrico debe estar integrado por un endocrinólogo pediátrico, una enfermera especialista en diabetes, un dietista, un trabajador social y un psicólogo.
                </p>
                <h4 class="text-dark mb-0">Alimentación</h4>
                <p class="lead mb-0">
                  <br><br>El plan de alimentación debe ser individualizado, preferentemente bajo la guía de un nutricionista con experiencia en el tratamiento de pacientes diabéticos; se tomarán en cuenta las preferencias alimentarias de cada niño, las inﬂuencias culturales, la actividad física y el horario de alimentación familiar. El conteo de carbohidratos es un requisito para adaptar la insulinoterapia a la ingesta alimentaria.
                  <br><br>En los adolescentes con diabetes tipo 1, el mantener un patrón regular de alimentación (horario), la ingesta de ﬁbra, el mayor consumo de frutas y verduras, además de la menor ingestión de bebidas azucaradas, se asocia con un mejor control glucémico.
                  <br><br>El mayor riesgo de ateroesclerosis en niños y adolescentes con diabetes tipo 1, se ha relacionado al mayor consumo de alimentos, especialmente de grasas saturadas, además de la ingesta escasa de ﬁbra, frutas y vegetales.
                </p>
                <h4 class="text-dark mb-0">Ejercicio físico</h4>
                <p class="lead mb-0">
                  <br> La actividad física regular es una de las piedras angulares del tratamiento de la diabetes tipo 1, con el ejercicio, los pacientes aumentan la sensación de bienestar, mejoran su calidad de vida, la composición corporal y los niveles de presión arterial, además de disminuir el riesgo de complicaciones relacionadas a la diabetes.
                  <br>Es importante la regularidad del ejercicio físico, porque este colabora con el control del peso corporal y el trabajo cardiovascular; disminuye el pulso, la presión arterial y mejora el perﬁl lipídico del paciente diabético20.
                </p>
                <h4 class="text-dark mb-0">Insulinoterapia</h4>
                <p class="lead mb-0">
                  <br>La insulina constituye la principal base terapéutica de la diabetes tipo 1, aunque insuficiente por sí misma para conseguir normalizar los trastornos metabólicos de la enfermedad.
                  <br><br>La administración de análogos de insulina de acción ultrarrápida (insulina aspartato, insulina glulisina e insulina lispro) inmediatamente antes de las comidas y de análogos de acción prolongada (insulina glargina e insulina detemir), para cubrir los requerimientos basales, representa el esquema intensivo de insulinoterapia más frecuentemente indicado. En muchos países, el uso de análogos de insulina está aprobado sólo para mayores de seis años; sin embargo, ya se los ha utilizado en niños de uno a cinco años de edad.
                  <br><br>Se ha obtenido un mejor control glucémico con insulina glargina combinada con insulinas de acción rápida, respecto al esquema de insulina NPH en combinación con insulinas de acción rápida.
                  <br><br>Por otro lado, la bomba de infusión continua de insulina subcutánea, desde hace algunos años, se ha constituido en un método de insulinoterapia común en pacientes diabéticos pediátricos; es flexible y la liberación de la insulina es más precisa; además, en general, produce menos eventos de hipoglucemia, en comparación al método de múltiples inyecciones diarias de insulina. Algunos autores no han reportado diferencias, en niños diabéticos menores de seis años, en el control metabólico (hemoglobina glicosilada) ni en el número de eventos hipoglucémicos, al comparar, la terapia con bomba de insulina y el tratamiento con múltiples inyecciones diarias.
                  <br><br>La administración de análogos de insulina en niños diabéticos y el uso de la bomba de insulina han disminuido el número de hipoglucemias severas en los pacientes; sin embargo, no en la magnitud que se esperaba.
                  <br><br>Respecto a la dosis diaria de insulina que requiere un niño diabético, ésta es variable. Se ha descrito como el percentil 50 de la dosis a los tres años de edad, 0.67 U / kg de peso y a los 13 años, 0.93 U / kg; el requerimiento aumenta a mayor edad, desde la infancia hasta la adolescencia.
                  <br><br>Hoy en día se está investigando con nuevas terapias como son: la pramlintida, análogo sintético de la amilina, mejora la hiperglucemia postprandial, la insulina inhalada y el transplante de células de islotes y al de células madre.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es la DIABETES MELLITUS TIPO 2 (DM2)?</h2>
              <p class="lead text-justify">La diabetes mellitus tipo II es una de las enfermedades crónicas no transmisibles que se encuentra entre las primeras 5 enfermedades con altas tasas de mortalidad en el mundo, siendo en varias regiones de Latinoamérica una gran problemática debido al alto costo en salud. La prevalencia de la diabetes se centra en zonas urbanas por el inadecuado consumo de alimentos y bebidas con alto contenido calórico, inactividad física a causa del sedentarismo y rutina de vida, promoviendo así uno de los factores predisponentes a la diabetes, que es la obesidad, afectando poblaciones adultas e incluso niños/as. La DM2 llega a ser asintomática durante muchos años, dándose cuenta los pacientes únicamente cuando presentan complicaciones graves, desarrollando una dependencia a la insulina en algunos casos, en otros no. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>FISIOPATOLOGÍA</h3>
              <h6 class="text-secondary font-weight-normal pe-3">Los síntomas de la diabetes descompensada están claramente definidos: poliuria, polidipsia, astenia y adelgazamiento inexplicado. </h6>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <h4 class="text-dark mb-0">FACTORES PREDISPONENTES: </h4>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Síndrome metabólico (resistencia a la insulina, dislipidemia, presión arterial y obesidad abdominal definida por el perímetro de la cintura >80 cm en mujeres y en hombres >90).</li>
                      <li>Índice de masa corporal (IMC) >25. </li>
                      <li>Deficiencia de producción de insulina o defectos en su acción.</li>
                      <li>Hiperglucemia.</li>
                      <li>Antecedentes familiares con diabetes.</li>
                      <li>Bajo peso al nacer.</li>
                      <li>Desnutrición en niños.</li>
                      <li>Edad.</li>
                      <li>Comorbilidades (Ovario poliquístico, enfermedad coronaria o vascular de origen aterosclerótico, esquizofrenia, apnea, esteatosis hepática, acantosis nigricans).</li>
                      <li>Defectos genéticos en la función de las células beta del páncreas.</li>
                      <li>Enfermedades del páncreas exocrino.</li>
                      <li>Fármacos diabetógenos.</li>
                      <li>Infecciones virales.</li>
                    </ul>
                  </div>
                </div>
                <h4 class="text-dark mb-0">SÍNTOMAS Y SIGNOS CUANDO SE PADECE LA ENFERMEDAD: </h4>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Aumento de apetito. </li>
                      <li>Poliuria. </li>
                      <li>Polidipsia. </li>
                      <li>Polifagia. </li>
                      <li>Pérdida inexplicable de peso.</li>
                      <li>Hipertensión arterial.</li>
                      <li>Visión borrosa.</li>
                      <li>Problemas en la erección e irregularidades menstruales.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>DIAGNÓSTICO</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G8/IMAGEN 1..PNG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>TRATAMIENTO:</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G8/IMAGEN 2..PNG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                      <p>Imagen tomada de: <a href="https://www.insp.mx/resources/images/stories/Centros/nucleo/docs/2.pdf">www.insp.mx</a></p>
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
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es la DIABETES INSÍPIDA?</h2>
              <p class="lead text-justify">
                Para entender la patología denominada como diabetes insipida tenemos que definir a la vasopresina (hormona antidiurética) esta es un no-péptido que controla la reabsorción de agua por los túbulos distales del riñón para regular la presión osmótica de la sangre. Su función es conservar el agua corporal reduciendo la de la orina, por lo que se conoce como antidiurético. La vasopresina se sintetiza en el núcleo supraóptico del hipotálamo, donde se une a un portador de proteína neurofisina, se empaqueta en gránulos y se entrega por transporte intracelular a las terminales nerviosas de la hipófisis posterior.
                <br><br>La vasopresina unida a la neurofisina se libera de los gránulos en respuesta a un aumento de la osmolaridad extracelular detectado por los osmorreceptores hipotalámicos, a la señalización de los receptores de estiramiento auricular o tras un aumento de los niveles de angiotensina II. Su secreción aumenta con la deshidratación o el estrés y disminuye tras el consumo de alcohol.
                <br><br>La hormona esteroidea aldosterona, sintetizada en la zona glomerulosa de la corteza suprarrenal, también desempeña un papel importante en el mantenimiento de la osmolaridad de la sangre. Se une a sus receptores en el citoplasma de las células epiteliales del del colon distal y de la nefrona renal, seguido de la translocación del complejo hormona-receptor al núcleo y la activación de la transcripción de genes de transporte de iones para aumentar la reabsorción de Na+ y la secreción de K+. El agua sigue el movimiento del Na+ por ósmosis. Estos transportadores incluyen el luminal amilorida, el canal luminal de K+, el canal seroso de Na+ y el canal seroso de K+. serosal de Na+, K+ -ATPasa, el intercambiador Na+ /H+ y el Na+/Cl-cotransportador
                <br><br>En la diabetes insípida, este proceso está alterado, lo que provoca una producción excesiva de orina.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>FISIOPATOLOGÍA</h3>
              <h6 class="text-secondary font-weight-normal pe-3">Los síntomas de la diabetes descompensada están claramente definidos: poliuria, polidipsia, astenia y adelgazamiento inexplicado. </h6>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  En ausencia de vasopresina, el riñón no puede reabsorber el agua y esta sale en forma de orina. Esta condición puede surgir de una deficiencia en la secreción de vasopresina de la hipófisis posterior como resultado de:
                </p>

                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>Tumores hipotalámicos.</li>
                      <li>Lesiones. </li>
                      <li>Infección.</li>
                      <li>Alternativamente, la enfermedad puede ser el resultado de mutaciones en los genes del receptor de la vasopresina, de la acuaporina u otras enfermedades que alteran la respuesta renal a la vasopresina.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <!--<div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>DIAGNÓSTICO</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G8/IMAGEN 1..PNG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <hr>-->
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>TRATAMIENTO:</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  El tratamiento consiste en administración de acetato de desmopresina (DDAVP), un análogo sintético de la arginina vasopresina (AVP)
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es la DIABETES DIABETES MODY?</h2>
              <p class="lead text-justify">
                <br><br>La diabetes tipo MODY recibe su nombre por la abreviatura de la frase, en inglés, Maturity Onset Diabetes of the Young (diabetes de la edad madura que se presenta en el joven). Como su nombre indica, se trata de un tipo de diabetes que en principio se parecería más al tipo 2, cuyo inicio típico es en la madurez, en que puede controlarse sin necesidad de insulina, pero con una edad precoz de presentación, por debajo de los 25 años. Conviene destacar que no es la misma situación que se ha observado en los últimos años de aparición de diabetes tipo 2 en población infantil debido a la obesidad, que se está viendo recientemente en relación con la dieta inadecuada y la falta de ejercicio físico de los niños con un estilo de vida “occidental”. Los pacientes con diabetes tipo MODY, por el contrario, no tienen por qué ser obesos.
                <br><br>Desde el punto de vista cuantitativo, la diabetes tipo MODY es mucho menos frecuente que el tipo 2: si esta representa más del 90% del total de casos de diabetes, la MODY solo es responsable del 2-5% de los casos, aunque muchas veces está sin diagnosticar.
                <br><br>Es una alteración heterogénea, en relación con diferentes alteraciones genéticas. En la mayoría de los casos se encuentra una mutación genética, si bien es cierto que una minoría de pacientes reúne las características de MODY sin haberse encontrado dicha mutación.

              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <hr>
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>DIAGNÓSTICO</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  El diagnóstico se debe sospechar ante individuos de cualquier edad con hiperglucemia no cetósica, aunque predomina en la segunda o tercera década de la vida. En los niños se puede confundir con el inicio de un DM 1, aunque difiere de esta por la ausencia de anticuerpos (antiinsulina, antiislotes, anti-GAD) y una herencia dominante. Se diferencia del DM 2 por la ausencia de resistencia a la insulina. A diferencia de otros tipos de diabetes, cursa con hiperglucemia leve. En general no se asocia a obesidad, pero cuando se presenta se relaciona con menor edad al diagnóstico. La presencia de enfermedad renal puede ser indicativa de MODY 5. Excepto el MODY 2, evolucionan de forma progresiva hacia el fallo de las células beta.
                </p>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>El test genético establece el diagnóstico basado en un análisis de sangre. Es además útil para el screening de familiares, que puede detectar mutaciones asociadas al MODY en individuos todavía no diabéticos, en los que el incremento de la vigilancia y cambios en el estilo de vida pueden ayudar a prevenir la persistencia de una hiperglucemia no reconocida, además de facilitar la selección de un tratamiento específico con mejor pronóstico. Está indicado su uso en individuos de cualquier edad con hiperglucemia no cetósica, así como en personas con historia familiar de diabetes tipo MODY.45,46</li>
                      <li>La metodología que se sigue se basa en aislar el ADN de leucocitos y amplificar por reacción en cadena de la polimerasa (PCR) los exones a estudiar (de los que se conocen mutaciones). Estos fragmentos amplificados se analizan, teniendo el inconveniente de un 5 % de falsos negativos. Los fragmentos mutados se secuencian a posteriori para conocer exactamente la mutación que provoca el fenotipo observado. A menudo es difícil el diagnóstico del gen implicado, ya que los factores de transcripción afectados pueden estar interrelacionados. Por ejemplo, HNF-3 regula a HNF-4 (a su vez este regula HNF-1 y HNF-1), IPF-1 y NEUROD1, que tienen distintas dianas que afectan el metabolismo, el desarrollo de células beta o el recambio proteico, y por eso pueden ser causantes de MODY.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>TRATAMIENTO:</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  El tratamiento para la diabetes tipo MODY depende de la causa genética. El MODY 2 puede ser manejado con alimentación y ejercicios físicos con excelente pronóstico. Los subtipos 1, 3 y 4 responden bien al uso de sulfonilureas, aunque una importante proporción de ellos (30-40 % para MODY 1 y MODY 3), requieren eventualmente terapia insulínica, debido al fallo progresivo de las células beta. El MODY 5 requiere reemplazo de la función pancreática endocrina y exocrina, y tratamiento para múltiples anomalías orgánicas. En los pacientes con sobrepeso, la pérdida de peso mejora la hiperglucemia.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es la DIABETES INSÍPIDA?</h2>
              <p class="lead text-justify">
                Para entender la patología denominada como diabetes insipida tenemos que definir a la vasopresina (hormona antidiurética) esta es un no-péptido que controla la reabsorción de agua por los túbulos distales del riñón para regular la presión osmótica de la sangre. Su función es conservar el agua corporal reduciendo la de la orina, por lo que se conoce como antidiurético. La vasopresina se sintetiza en el núcleo supraóptico del hipotálamo, donde se une a un portador de proteína neurofisina, se empaqueta en gránulos y se entrega por transporte intracelular a las terminales nerviosas de la hipófisis posterior.
                <br><br>La vasopresina unida a la neurofisina se libera de los gránulos en respuesta a un aumento de la osmolaridad extracelular detectado por los osmorreceptores hipotalámicos, a la señalización de los receptores de estiramiento auricular o tras un aumento de los niveles de angiotensina II. Su secreción aumenta con la deshidratación o el estrés y disminuye tras el consumo de alcohol.
                <br><br>La hormona esteroidea aldosterona, sintetizada en la zona glomerulosa de la corteza suprarrenal, también desempeña un papel importante en el mantenimiento de la osmolaridad de la sangre. Se une a sus receptores en el citoplasma de las células epiteliales del del colon distal y de la nefrona renal, seguido de la translocación del complejo hormona-receptor al núcleo y la activación de la transcripción de genes de transporte de iones para aumentar la reabsorción de Na+ y la secreción de K+. El agua sigue el movimiento del Na+ por ósmosis. Estos transportadores incluyen el luminal amilorida, el canal luminal de K+, el canal seroso de Na+ y el canal seroso de K+. serosal de Na+, K+ -ATPasa, el intercambiador Na+ /H+ y el Na+/Cl-cotransportador
                <br><br>En la diabetes insípida, este proceso está alterado, lo que provoca una producción excesiva de orina.
              </p>
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
                  El diagnóstico se debe sospechar ante individuos de cualquier edad con hiperglucemia no cetósica, aunque predomina en la segunda o tercera década de la vida. En los niños se puede confundir con el inicio de un DM 1, aunque difiere de esta por la ausencia de anticuerpos (antiinsulina, antiislotes, anti-GAD) y una herencia dominante. Se diferencia del DM 2 por la ausencia de resistencia a la insulina. A diferencia de otros tipos de diabetes, cursa con hiperglucemia leve. En general no se asocia a obesidad, pero cuando se presenta se relaciona con menor edad al diagnóstico. La presencia de enfermedad renal puede ser indicativa de MODY 5. Excepto el MODY 2, evolucionan de forma progresiva hacia el fallo de las células beta.

                </p>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ul class="list lead mb-3 ">
                      <li>El test genético establece el diagnóstico basado en un análisis de sangre. Es además útil para el screening de familiares, que puede detectar mutaciones asociadas al MODY en individuos todavía no diabéticos, en los que el incremento de la vigilancia y cambios en el estilo de vida pueden ayudar a prevenir la persistencia de una hiperglucemia no reconocida, además de facilitar la selección de un tratamiento específico con mejor pronóstico. Está indicado su uso en individuos de cualquier edad con hiperglucemia no cetósica, así como en personas con historia familiar de diabetes tipo MODY.45,46</li>
                      <li>La metodología que se sigue se basa en aislar el ADN de leucocitos y amplificar por reacción en cadena de la polimerasa (PCR) los exones a estudiar (de los que se conocen mutaciones). Estos fragmentos amplificados se analizan, teniendo el inconveniente de un 5 % de falsos negativos. Los fragmentos mutados se secuencian a posteriori para conocer exactamente la mutación que provoca el fenotipo observado. A menudo es difícil el diagnóstico del gen implicado, ya que los factores de transcripción afectados pueden estar interrelacionados. Por ejemplo, HNF-3 regula a HNF-4 (a su vez este regula HNF-1 y HNF-1), IPF-1 y NEUROD1, que tienen distintas dianas que afectan el metabolismo, el desarrollo de células beta o el recambio proteico, y por eso pueden ser causantes de MODY.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>TRATAMIENTO:</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  El tratamiento para la diabetes tipo MODY depende de la causa genética. El MODY 2 puede ser manejado con alimentación y ejercicios físicos con excelente pronóstico. Los subtipos 1, 3 y 4 responden bien al uso de sulfonilureas, aunque una importante proporción de ellos (30-40 % para MODY 1 y MODY 3), requieren eventualmente terapia insulínica, debido al fallo progresivo de las células beta. El MODY 5 requiere reemplazo de la función pancreática endocrina y exocrina, y tratamiento para múltiples anomalías orgánicas. En los pacientes con sobrepeso, la pérdida de peso mejora la hiperglucemia.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es la DIABETES LADA?</h2>
              <p class="lead text-justify">
                El término LADA (Latent Autoinmune Diabetes of the Adult) fue acuñado posteriormente por Tuomi et al para describir a pacientes con una forma lentamente progresiva de DM autoinmune o tipo 1 que podían ser tratados inicialmente sin insulina.

              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>FISIOPATOLOGÍA</h3>
              <h6 class="text-secondary font-weight-normal pe-3">Los síntomas de la diabetes descompensada están claramente definidos: poliuria, polidipsia, astenia y adelgazamiento inexplicado. </h6>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  Se consideran 2 posibilidades: larga historia de autoinmunidad con una lenta progresión del daño en células beta a través de los años, o bien, aparición de autoinmunidad tardía con una fase preclínica breve.
                  <br> La aparición de estas manifestaciones es el resultado de la interacción entre la susceptibilidad genética y la exposición a factores ambientales.
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G8/IMAGEN 3..PNG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>DIAGNÓSTICO</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  El diagnóstico se basa en 3 criterios:
                </p>
                <div class="row text-justify">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <ol class="list lead mb-3 ">
                      <li>Aparición en la edad adulta, generalmente después de los 35 años.</li>
                      <li>Presencia de autoanticuerpos específicos, siendo anti-GAD el más prevalente.</li>
                      <li>Sin necesidad de insulinoterapia al debut de la enfermedad, lo que debe prolongarse a lo menos por 6 meses.</li>
                    </ol>
                  </div>
                </div>
                <p class="lead mb-0">
                  Las características más frecuentemente asociadas a la enfermedad en comparación con diabéticos tipo 2 son: edad de inicio < 50 años, síntomas agudos al debut, IMC < 25 kg/m2, e historia personal o familiar de enfermedad autoinmune. La presencia de 2 o más de estos criterios presenta 90% de sensibilidad y 71% de especificidad para la identificación de pacientes LADA. <br> caso de sospecha deben solicitarse los anticuerpos específicos para confirmar el diagnóstico.
                </p>
              </div>
              <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G8/IMAGEN 4..PNG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>TRATAMIENTO:</h3>
          </div>
        </div>
        <div class="col-lg-9" style="text-align: justify">
          <div class="row mt-3">
            <div class="row py-3 align-items-center">
              <p class="lead mb-0">
                Los objetivos de control metabólico deben ser los recomendados para la enfermedad (HbA1c ≤ 7%).
                <br>Las medidas dietéticas y ejercicio son similares a otros tipos de DM.
              </p>
              <div class="me-auto">
                <h4 class="text-dark pt-1 mb-0">-Hipoglicemiantes orales</h4>
              </div>
              <div class="row text-justify">
                <div class="col-1"></div>
                <div class="col-11">
                  <ul class="list lead mb-3 ">
                    <li><b>Sulfonilureas:</b> son efectivas como reductoras de la glicemia, sin embargo, existen evidencias experimentales de que pueden aumentar la respuesta inmunológica, por lo que son consideradas poco recomendables, ya que podrían acelerar la progresión hacia la insulinodependencia.</li>
                    <li><b>Glitazonas (tiazolidinedionas):</b> por su efecto antiinflamatorio y de protección de la apoptosis a la célula beta, su uso parece recomendable en LADA.</li>
                    <li><b>Insulina:</b> Parece ser la terapia de elección, sobre todo en casos de control metabólico insuficiente.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">¿Qué es la DIABETES GESTACIONAL?</h2>
              <p class="lead text-justify">
                La diabetes gestacional es un tipo de diabetes que se desarrolla solo durante el embarazo y se caracteriza por la disminución de la tolerancia a la glucosa. A su vez actualmente aplica a los casos insulino dependientes y no insulino dependientes, o también si dicha condición persiste o no después del parto.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>FISIOPATOLOGÍA</h3>
              <h6 class="text-secondary font-weight-normal pe-3">Los síntomas de la diabetes descompensada están claramente definidos: poliuria, polidipsia, astenia y adelgazamiento inexplicado. </h6>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <p class="lead mb-0">
                  Durante el primer trimestre existe aumento en la secreción de insulina, producto de una hiperplasia de las células β del páncreas; esta hiperplasia es inducida por los altos niveles de progesterona y estrógenos. El aumento en los niveles de insulina determina un aumento en la acción periférica de la insulina, incrementando la utilización de glucosa. Por esto, los niveles de glicemia son bajos en el primer trimestre (70-80 mg/dL), siendo un 20% menos que en la etapa pre-gestacional.
                  <br>En el segundo trimestre de embarazo, fisiopatológicamente corresponde al periodo de mayor riesgo para desarrollar DMG. Existe un aumento de la demanda fetal por nutrientes y se requiere movilización de los depósitos de glucosa. Por la secreción de hormonas placentarias (lactógeno placentario, prolactina y cortisol) se produce un aumento en la resistencia periférica a la insulina; este fenómeno es máximo entre las 26 y 30 semanas de gestación. Producto del balance en estos cambios fisiológicos, durante el final del segundo trimestre del embarazo, aumenta la glicemia posprandial, esencialmente producto del aumento en la insulinorresistencia.
                </p>
              </div>
            </div>
          </div>
          <hr>
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>DIAGNÓSTICO</h3>
            </div>
          </div>
          <div class="col-lg-9" style="text-align: justify">
            <div class="row mt-3">
              <div class="row py-3 align-items-center">
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">-Test de O'sullivan</h4>
                </div>
                <p class="lead mb-0">
                  Es recomendable que toda mujer en estado de embarazo se le investigue entre la 24 - 28 semana de embarazo la Diabetes Mellitus Gestacional, especialmente si tiene factores de riesgo.
                </p>
                <div class="me-auto">
                  <h5 class="text-dark pt-1 mb-0">Prueba de tamizaje</h5>
                  <p class="lead mb-0">
                    50gr 1 hora 140 mg/dl
                  </p>
                </div>
                <div class="me-auto">
                  <h4 class="text-dark pt-1 mb-0">-Prueba de tolerancia oral a la glucosa</h4>
                </div>
                <p class="lead mb-0">
                  Realizar una PTOG a las 24-28 semanas a toda mujer en estado de embarazo con una glicemia normal en el primer trimestre. Posibles resultados:
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G8/IMAGEN 6..PNG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
                <p class="lead mb-0">
                  Repetir PTOG a las 30-33 semanas III trimestre a toda mujer con factores de riesgo de diabetes mellitus con valores normales en PTOG del II trimestre. Posibles resultados:
                </p>
                <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                  <a class="d-block blur-shadow-image">
                    <center>
                      <img src="../assets/img/G8/IMAGEN 7..PNG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                    </center>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>TRATAMIENTO:</h3>
          </div>
        </div>
        <div class="col-lg-9" style="text-align: justify">
          <div class="row mt-3">
            <div class="row py-3 align-items-center">
              <p class="lead mb-0">
                El manejo de la diabetes gestacional incluye seguir un plan de alimentación saludable y estar físicamente activo que ha demostrado reducir la capacidad la hemoglobina glicosilada hasta en un 2,6%
                <br><br>El tratamiento médico se basa en el monitoreo frecuente de los niveles de glicemia con ajustes en la dieta y el tratamiento con insulina para lograr normoglicemia.
                <br><br>La insulina está indicada cuando no se alcanzan los objetivos metabólicos en el plazo de dos semanas con tratamiento médico nutricional.
                <br><br>La ALAD 2014 recomienda inicio del tratamiento con insulina si 20% o más de los controles durante un período de 2 semanas exceden las metas. Otra forma es si 2 valores de glicemia de un mismo momento de control (pre o post-prandial) exceden las metas.
                <br><br>Se recomienda el uso de insulina NPH durante el embarazo, debido a que está demostrada su seguridad y efectividad durante el embarazo. No se recomienda el uso rutinario de análogos de insulina (detemir) en lugar de NPH, ya que no hay datos contundentes para su uso rutinario.
                <br><br>Requerimientos de insulina durante el embarazo: se recomienda comenzar con 0.1 a 0.2 U/k/día para insulina NPH y el esquema inicial dependerá del perfil del control:
              </p>
              <div class="card-header p-0 position-relative mt-n0 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <center>
                    <img src="../assets/img/G8/IMAGEN 8..PNG" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                  </center>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-10">
              <h2 class="text-dark mb-0">REFERENCIAS</h2>
              <div class="row text-justify">
                <ul class="list lead mb-3 ">
                  <li>AMERICAN DIABETES ASSOCIATION. (s. f.). Diabetes tipo 2. professional.diabetes.org. Recuperado 30 de abril de 2022, de <a href="https://professional.diabetes.org/sites/professional.diabetes.org/files/media/Type_2_Spanish.pdf">professional.diabetes.org</a></li>
                  <li>Grupo de Estudio de la Diabetes en Atención Primaria de Salud (GEDAPS) de la Societat Catalana de Medicina Familiar i Comunitària. (s. f.). Diabetes mellitus tipo 2: Protocolo de actuación. insp.mx. Recuperado 30 de abril de 2022, de <a href="https://www.insp.mx/resources/images/stories/Centros/nucleo/docs/2.pdf">www.insp.mx</a></li>
                  <li>Diabetes mellitus o de tipo 2: qué es, causas y síntomas. (s. f.). asomundi. Recuperado 30 de abril de 2022, de <a href="https://asomundi.com/documents/diabetes-mellitus.pdf">asomundi.com</a></li>
                  <li>ALAD. (2019). Guías ALAD sobre el Diagnóstico, Control y Tratamiento de la Diabetes Mellitus Tipo 2 con Medicina Basada en Evidencia Edición 2019. revistaalad. Recuperado 30 de abril de 2022, de <a href="https://www.revistaalad.com/guias/5600AX191_guias_alad_2019.pdf">www.revistaalad.com</a></li>
                  <li>Felipe Pollak C, Tatiana Vásquez A. Diabetes autoinmune (latente) del adulto. Rev Med Chile. 2012;140(1):1476-81. <a href="https://scielo.conicyt.cl/pdf/rmc/v140n11/art15.pdf">scielo.conicyt.cl</a></li>
                  <li>Manual Obstetricia y Ginecología PUC 2014. Emily Kelly Osse Mejias, Ginecología y Obstetricia, Diabetes durante el embarazo (2017). [Internet]. Disponible en: <a href="https://sintesis.med.uchile.cl/index.php/respecialidades/r-ginecologia-y-obstetricia/135-revision/r-ginecologia-y-obstetricia/1692-28-diabetes-durante-el-emabarazo">sintesis.med.uchile.cl</a></li>
                </ul>
              </div>
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
                    <h3 class="text-white">Juego INTERACTIVO</h3>
                    <p class="text-white opacity-8">Juega utilizando todo lo aprendido de una manera muy divertida!</p>
                  </div>
                </div>
                <div class="back back-background" style="background-image: url(https://images.pexels.com/photos/3800795/pexels-photo-3800795.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260); background-size: cover;">
                  <div class="card-body pt-7 text-center">
                    <h3 class="text-white"> En este pequeño juego pondrás a prueba lo aprendido, esperamos te diviertas salvando al sapito de la Diabetes!</h3>
                    <a href="https://es.educaplay.com/recursos-educativos/12233229-acercamiento_a_la_diabetes.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">A jugar!</a>
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