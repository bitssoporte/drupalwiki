<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Open Space Bits Americas</title>
	<link rel="icon" href="img/Favicon.ico" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="vendors/flat-icon/font/flaticon.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>




  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner">
    <div class="container text-center">
      <span class="hero-banner-icon"><i class="flaticon-sing"></i></span>
      <p>22 de Mayo</p>
      <h1>OPEN SPACE BITS 2020</h1>
      <!--<a class="button button-header" href="#">Buy Ticket</a>-->
    </div>
  </section>
  <!--================Hero Banner Area End =================-->


  <!--================ Innovation section Start =================-->
  <section class="section-padding--small bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
          <div class="innovative-wrapper">
            <h3 class="primary-text">Open Space <br class="d-none d-xl-block"> Bits Americas 2020</h3>
            <p class="h4 primary-text2 mb-3">Compartamos nuestros saberes</p>
            <p>Un espacio donde algunos de nuestros colaboradores, nos compartirán su conocimiento en diferentes temas. Contaremos con la presencia de un conferencista internacional, experto en tecnologías de cuarta revolución industrial.</p>
          </div>
        </div>
        <div class="col-lg-6 pl-xl-5">

          <ul class="clockdiv text-center" id="clockdiv">
            <li class="clockdiv-single clockdiv-day">
              <h1 id= "days" class="days">5</h1>
              <span class="smalltext">Dias</span>
            </li>
            <li class="clockdiv-single clockdiv-hour">
              <h1 id="hours" class="hours">30</h1>
              <span class="smalltext">Horas</span>
            </li>
            <li class="clockdiv-single clockdiv-minute">
              <h1 id="minutes" class="minutes">30</h1>
              <span class="smalltext">Minutos</span>
            </li>
          </ul>

          <div class="clockdiv-content text-center">
            <p class="h4 primary-text2 mb-2">22 de Mayo, Colombia</p>
            <!--<a class="button button-link" href="#">Get Ticket</a>-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Innovation section End =================-->


  <!--================ Schedule section Start =================-->
  <section class="section-margin mb-5 pb-5">
    <div class="container">
      <div class="section-intro text-center pb-98px">
        <h2 class="primary-text">Agenda</h2>
        <img src="img/home/section-style.png" alt="">
      </div>

      <div class="row">
        <div class="col-xl-10 offset-xl-1">
          <div class="scheduleTab">
            <ul class="nav nav-tabs">
              <li class="nav-item text-center">
                <a class="active" data-toggle="tab" href="#day1">
                  <h4>Sala Familia</h4>
                  <p onclick="salaFamilia()">¡Únete aquí!</p>
                </a>
              </li>
              <li class="nav-item text-center">
                <a  data-toggle="tab" href="#day2">
                  <h4>Sala Pasión</h4>
                  <p onclick="salaPasion()">¡Únete aquí!</p>
                </a>
              </li>
              <li class="nav-item text-center">
                <a data-toggle="tab" href="#day3">
                  <h4>Sala Innovación</h4>
                  <p onclick="salaInnovacion()">¡Únete aquí!</p>
                </a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="col-md-12 card mx-auto">
                <div class="schedule-content mx-auto">
                  <p class="schedule-date">8.00 AM - 9.00 AM</p>
                  <a class="schedule-title" href="https://us02web.zoom.us/j/82223398902" target="_blank">
                    <h3>BIENVENIDA ¡ÚNETE AQUÍ!</h3>
                  </a>
                </div>
              </div>

              <div id="day1" class="tab-pane active">

                <div class="schedule-card mt-4">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <div class="card-identity">
                        <img src="img/speakers/jose.jpeg" alt="">
                        <h3>Jose Barbosa</h3>
                        <p>Director de proyectos</p>
                      </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                      <div class="schedule-content">
                        <p class="schedule-date">9.00 AM - 10.00 AM</p>
                        <a class="schedule-title" href="#">
                          <h3>El aprendizaje de las máquinas (Machine Learning) - Industria 4.0</h3>
                        </a>
                        <p>El aprendizaje de las máquinas (Machine Learning) - Industria 4.0</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="schedule-card">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <div class="card-identity">
                        <img src="img/speakers/xiomara.png" alt="">
                        <h3>Xiomara Cruz</h3>
                        <p>Contadora Pública, Esp. en Gerencia Financiera/Tributaria</p>
                      </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                      <div class="schedule-content">
                        <p class="schedule-date">10.00 AM - 11.00 AM</p>
                        <a class="schedule-title" href="#">
                          <h3>Impactos tributarios en personas naturales</h3>
                        </a>
                        <p>Impactos tributarios en personas naturales</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="schedule-card">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <div class="card-identity">
                        <img src="img/speakers/erika.png" alt="">
                        <img src="img/speakers/yeltsein.jpg" alt="">
                        <h3>Erika y Yeltsein</h3>
                        <p>Talento humano</p>
                      </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                      <div class="schedule-content">
                        <p class="schedule-date">11.00 AM - 12.00 PM</p>
                        <a class="schedule-title" href="#">
                          <h3>Psicología Positiva</h3>
                        </a>
                        <p>Psicología Positiva </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="schedule-card">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <div class="card-identity">
                        <img src="img/speakers/orfenys.png" alt="">
                        <h3>Orfenys Perez</h3>
                        <p>Desarrolladora de Software</p>
                      </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                      <div class="schedule-content">
                        <p class="schedule-date">2.00 PM - 3.00 PM</p>
                        <a class="schedule-title" href="#">
                          <h3>Pruebas Automatizadas</h3>
                        </a>
                        <p>Pruebas Automatizadas</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div id="day2" class="tab-pane">

               <div class="schedule-card mt-4">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <div class="card-identity">
                        <img src="img/speakers/roberto.png" alt="">
                        <h3>Roberto Gonzalez</h3>
                        <p>Ingeniero de Sistemas – Desarrollador de Negocios</p>
                      </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                      <div class="schedule-content">
                        <p class="schedule-date">9.00 AM - 10.00 AM</p>
                        <a class="schedule-title" href="#">
                          <h3>Revolución del Codigo Abierto Odoo y Moodle</h3>
                        </a>
                        <p>Revolución del Codigo Abierto Odoo y Moodle</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="schedule-card">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <div class="card-identity">
                        <img src="img/speakers/ludwring.png" alt="">
                        <h3>Ludwring Liccien</h3>
                        <p>Desarrollador de software</p>
                      </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                      <div class="schedule-content">
                        <p class="schedule-date">10.00 AM - 11.00 AM</p>
                        <a class="schedule-title" href="#">
                          <h3>Microservicios con NestJs</h3>
                        </a>
                        <p>Microservicios con NestJs</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="schedule-card">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <div class="card-identity">
                        <img src="img/speakers/luis.jpg" alt="">
                        <h3>Luis Bonilla</h3>
                        <p>Líder de proyectos</p>
                      </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                      <div class="schedule-content">
                        <p class="schedule-date">11.00 AM - 12.00 PM</p>
                        <a class="schedule-title" href="#">
                          <h3>Scrum Developer</h3>
                        </a>
                        <p>Scrum Developer</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="schedule-card">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <div class="card-identity">
                        <img src="img/speakers/elizabeth.jpg" alt="">
                        <img src="img/speakers/alberto.png" alt="">
                        <h3>Elizabeth y Alberto</h3>
                        <p>Desarrolladores de Software</p>
                      </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                      <div class="schedule-content">
                        <p class="schedule-date">2.00 PM - 3.00 PM</p>
                        <a class="schedule-title" href="#">
                          <h3>¿Cómo se hace un ingeniero en cuba?</h3>
                        </a>
                        <p>¿Cómo se hace un ingeniero en cuba?</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div id="day3" class="tab-pane">
                <div class="schedule-card mt-4">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <div class="card-identity">
                        <img src="img/speakers/cristian.png" alt="">
                        <h3>Cristian A. De la cruz L.</h3>
                        <p>MEng</p>
                      </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                      <div class="schedule-content">
                        <p class="schedule-date">9.00 AM - 10.00 AM</p>
                        <a class="schedule-title" href="#">
                          <h3>Ingenieria de requerimientos</h3>
                        </a>
                        <p>La importancia de la ingeniería de requerimientos y sus procesos de elicitación</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="schedule-card">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <div class="card-identity">
                        <img src="img/speakers/julian_guerrero.png" alt="">
                        <h3>Julián Guerrero</h3>
                        <p>Desarrollador de software</p>
                      </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                      <div class="schedule-content">
                        <p class="schedule-date">10.00 AM - 11.00 AM</p>
                        <a class="schedule-title" href="#">
                          <h3>Usabilidad UX</h3>
                        </a>
                        <p>Hacer que tus productos web sean usados</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="schedule-card">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <div class="card-identity">
                        <img src="img/speakers/alexandra.png" alt="">
                        <h3>Alexandra Rojas</h3>
                        <p>Business Developer</p>
                      </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                      <div class="schedule-content">
                        <p class="schedule-date">11.00 AM - 12.00 PM</p>
                        <a class="schedule-title" href="#">
                          <h3>Blockchain y tecnologías disruptivas</h3>
                        </a>
                        <p>Blockchain y tecnologías disruptivas </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="schedule-card">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <div class="card-identity">
                        <img src="img/speakers/ximena.png" alt="">
                        <img src="img/speakers/edward.jpg" alt="">
                        <h3>Ximena y Edward</h3>
                        <p>Líder de proyectos y desarrollador de software</p>
                      </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                      <div class="schedule-content">
                        <p class="schedule-date">2.00 PM - 3.00 PM</p>
                        <a class="schedule-title" href="#">
                          <h3>Mindfulness</h3>
                        </a>
                        <p>Mindfulness</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="schedule-card">
                <div class="row no-gutters">
                  <div class="col-md-3 mt-4">
                    <div class="card-identity">
                      <img src="img/speakers/mauricio_tovar.jpg" alt="">
                      <h3>Mauricio Tovar</h3>
                      <p>Co-Director IntiColombia</p>
                    </div>
                  </div>
                  <div class="col-md-9 align-self-center">
                    <div class="schedule-content">
                      <p class="schedule-date">3.00 PM - 4.00 PM</p>
                      <a class="schedule-title" href="#">
                        <h3>FUTURE OF TECHNOLOGY - 4IR</h3>
                      </a>
                     <a href="https://us02web.zoom.us/j/82223398902" target="_blank"><p>¡Únete aquí!</p></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12 card mx-auto">
                <div class="schedule-content mx-auto">
                  <p class="schedule-date">4.00 PM - 4.30 PM</p>
                  <a class="schedule-title" href="https://is.gd/Av0wRi" target="_blank">
                    <h3>Foto en familia ¡Sube tu foto aquí!</h3>
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Schedule section End =================-->

  <script>
    function salaFamilia() {
      window.open("https://us02web.zoom.us/j/82729634293");
    }
    function salaPasion() {
      window.open("https://us02web.zoom.us/j/86781457111");
    }
    function salaInnovacion() {
      window.open("https://us02web.zoom.us/j/85223645880");
    }
    function salaGeneral() {
      window.open("https://us02web.zoom.us/j/82223398902");
    }
  </script>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/countdown.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/main.js"></script>



</body>
</html>