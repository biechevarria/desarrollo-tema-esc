<?php 
//Fichero principal y central de la plantilla
  get_header(); 
?>
          
          <div id="slider-home" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slider-home" data-slide-to="0" class="active"></li>
              <li data-target="#slider-home" data-slide-to="1"></li>
              <li data-target="#slider-home" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item slider-1 active">
                <img src="<?php bloginfo('template_url'); ?> /img/10k.jpg" alt="First slide">
                
                <div class="carousel-caption">

                  <h1 class="mobile-title">ENGLISH SOCCER <span>CAMP</span></h1>
                  <h2>APRENDER INGLÉS SIN SALIR DE MADRID</h2>
                  <form class="formularioUno">
                    <div class="row">
                      <div class="col-2 formulario-1">
                        <input type="text" class="form-control" placeholder="Nombre y Apellidos">
                        <input type="text" class="form-control" placeholder="Whatsapp">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escribe aquí tu consulta"></textarea>
                        <button type="submit" class="btn btn-primary bg-dark">Envialo!!!</button>
                      </div>
                    </div>
                  </form>

                </div>

              </div>
              <div class="carousel-item slider-2">
                <img src="<?php bloginfo('template_url'); ?> /img/2OK.jpg" alt="First slide">
                
                <div class="carousel-caption">

                  <h1 class="mobile-title">ENGLISH SOCCER <span>CAMP</span></h1>
                  <h2>APRENDER INGLÉS SIN SALIR DE MADRID</h2>
                  <form class="formularioUno">
                    <div class="row">
                      <div class="col-2 formulario-1">
                        <input type="text" class="form-control" placeholder="Nombre y Apellidos">
                        <input type="text" class="form-control" placeholder="Whatsapp">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escribe aquí tu consulta"></textarea>
                        <button type="submit" class="btn btn-primary bg-dark">Envialo!!!</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>

              <div class="carousel-item slider-3">
                <img src="<?php bloginfo('template_url'); ?> /img/3OK.jpg" alt="First slide">
                
                <div class="carousel-caption">

                  <h1 class="mobile-title">ENGLISH SOCCER <span>CAMP</span></h1>
                  <h2 id="formprin">APRENDER INGLÉS SIN SALIR DE MADRID</h2>
                  <form class="formularioUno">
                    <div class="row">
                      <div class="col-2 formulario-1">
                        <input type="text" class="form-control" placeholder="Nombre y Apellidos">
                        <input type="text" class="form-control" placeholder="Whatsapp">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escribe aquí tu consulta"></textarea>
                        <button type="submit" class="btn btn-primary bg-dark">Envialo!!!</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
      </div>


    <section class="bg parallax" id="Objetivo">
      <div class="row">
        <div class="col-md-4">
          <h2 class="h2-mobile">ENGLISH SOCCER CAMP EL CAMPAMENTO DE FUTBOL PARA TUS HIJOS</h2>
          <strong>ENGLISH SOCCER CAMP abre sus puertas para niños/niñas que deseen aprender inglés disfrutando de su deporte favorito, EL FÚTBOL.</strong>
          <p>Nuestro objetivo es que los alumnos de nuestro camp aprendan inglés de una manera divertida de la mano de entrenadores nativos de habla inglesa. Con una instrucción integramente en inglés, y un programa de entrenamiento de fútbol planificado, su hijo disfrutará de un ambiente divertido y sano. Técnica, táctica, partidos, juegos en el terreno de juego y 1 hora de clase de inglés diaria en aula con temas divertidos y donde se estimulará a los niñ@s a mejorar su speaking </p>
          <button href="#ContForm" type="button" class="btn btn-orange-form">ESCRIBENOS!!!</button>
          <button type="button" class="btn btn-orange-form callbtn"><a class="contact-button" href="tel:+34626044188">¡LLAMANOS!</a></button><br>
          <strong>El campus estará abierto a chicos y chicas de entre 5 y 16 años, realizandose en horario de mañana de 9:00 a 14:00, pudiendose ampliar el horario de 8:30 a 9:00 y 14:00 a 15:00.</strong>
        </div>
        <div id="statbars" class="col-md-4">
          <h3>aprendizaje</h3>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-animated bg-orange" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
          </div>
          <h3>entrenamiento</h3>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-animated bg-orange" role="progressbar" style="width: 95%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">95%</div>
          </div>
          <h3>compañerismo</h3>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-animated bg-orange" role="progressbar" style="width: 98%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">98%</div><br>
          </div>
          <h3>saludable</h3>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-animated bg-orange" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
          </div>
        </div>
        <div class="col-md-4 frst-contact-btn text-center">
          <section id="ContForm" class="mb-12 text">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">¡¡Contacta con nosotros!!</h2>
            <!--Section description-->
            <div class="row>
  
                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
  
                        <!--Grid row-->
                        <div class="row">
  
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Nombre y apellidos">
                                    <label for="name" class=""></label>
                                </div>
                            </div>
                            <!--Grid column-->
  
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="email">
                                    <label for="email" class=""></label>
                                </div>
                            </div>
                            <!--Grid column-->
  
                        </div>
                        <!--Grid row-->
  
                        <!--Grid row-->
                        <div class="row">
  
                            <!--Grid column-->
                            <div class="col-md-12">
  
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Mensaje"></textarea>
                                    <label for="message"></label>
                                </div>
  
                            </div>
                        </div>
                        <!--Grid row-->
  
                    </form>
  
                    <div class="text-center text-md-left">
                        <a class="btn contact-button btn-orange-form" onclick="document.getElementById('contact-form').submit();">¡ESCRIBENOS!</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->
  
            </div>
  
          </section>
        </div>
      </div>
      
    </section>

    <section class="parallax" id="Diversion">
      <div class="row">
        <div class="col-md-9" id="AnchoTxtDiver">
          <h2 id="DivrsionTxt">
            <strong>¡¡FÚTBOL, DIVERSIÓN Y MUCHO INGLÉS<br> DE LA MANO DE ENTRENADORES NATIVOS</strong>
          </h2>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <strong>¡La importancia de aprender un idioma en un entorno de disfrute y diversión!</strong>
              </div>
              <div class="carousel-item">
                <strong>La mejor manera para que tus hijos mejoren su INGLÉS sin viajar al extranjero.</strong>
              </div>
              <div class="carousel-item">
                <strong>English Soccer Camp es una experiencia única.</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <!--Section: Contact v.2-->
        <section id="ContForm" class="mb-12 text">

          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold text-center my-4">¡¡Contacta con nosotros!!</h2>
          <!--Section description-->
          <div class="row>

              <!--Grid column-->
              <div class="col-md-9 mb-md-0 mb-5">
                  <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="name" name="name" class="form-control" placeholder="Nombre y apellidos">
                                  <label for="name" class=""></label>
                              </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="email" id="email" name="email" class="form-control" placeholder="email">
                                  <label for="email" class=""></label>
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-12">

                              <div class="md-form">
                                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Mensaje"></textarea>
                                  <label for="message"></label>
                              </div>

                          </div>
                      </div>
                      <!--Grid row-->

                  </form>

                  <div class="text-center text-md-left">
                      <a class="btn contact-button btn-orange-form" onclick="document.getElementById('contact-form').submit();">¡ESCRIBENOS!</a>
                  </div>
                  <div class="status"></div>
              </div>
              <!--Grid column-->

          </div>

        </section>
<!--Section: Contact v.2-->
      </div>
    </section>

    <section id="blog">
      <div class="container cont-blog">
        <div class="row r-blog justify-content-center">
          <h2>English Soccer Camp es una experiencia única</h2>
          <h3>Disfruar, jugar y hacer amigos al mismo tiempo que se aprende Inglés</h3>
        </div>
        <div class="row blog-posts">
          <div class="col-mb-4 post">
            <div class="post-thumb">
              <img src="<?php bloginfo('template_url'); ?> /img/1.jpg" alt="">
              <h2 class="title-posts">¡Un entorno de disfrute y diversión!</h2>
              <h3 class="resume-posts">El fútbol es un lenguaje universal que entienden todos los niños en el mundo.</h3>
            </div>
          </div>
          <div class="col-mb-4 post">
            <div class="post-thumb">
              <img src="<?php bloginfo('template_url'); ?> /img/2.jpg" alt="">
              <h2 class="title-posts">El fútbol para los niños.</h2>
              <h3 class="resume-posts">English Soccer Camp es la mejor manera para que tus hijos mejoren su INGLÉS sin viajar al extranjero.</h3>
            </div>
          </div>
          <div class="col-mb-4 post">
            <div class="post-thumb">
              <img src="<?php bloginfo('template_url'); ?> /img/3.jpg" alt="">
              <h2 class="title-posts">La importancia de aprender un idioma.</h2>
              <h3 class="resume-posts">English Soccer Camp es la manera más natural de aprender INGLËS, de una manera divertida, mezclando deporte y estudios.</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

</html>

<?php get_footer(); ?>
