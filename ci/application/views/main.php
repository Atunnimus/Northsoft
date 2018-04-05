      <!-- About Section -->
      <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
          <h2 class="text-center text-uppercase text-white">Sobre Nosotros</h2><br>
          <span style="display:block;text-align:center;" ><img class="img-responsive" src="<?=base_url('img/sepblanco.png');?>"></img></span><br>
          <div class="row">
            <div class="col-lg-4 ml-auto">
              <p class="lead derecho">Somos un grupo de especialistas en tecnologías de la información comprometidos con el crecimiento de tu negocio. Ya sea que necesites un diseñador gráfico, un programador o un administrador de sistemas, Northsoft reúne los conocimientos de todos sus especialistas y los pone a tu disposición.</p>
            </div>
            <div class="col-lg-4 mr-auto">
              <p class="lead izquierdo">En Northsoft . . .  Somos la dirección correcta en tecnologías de la información.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section class="services" id="services">
        <div class="container">
          <h2 class="text-center text-uppercase text-secondary mb-0">Servicios</h2><br>
          <span style="display:block;text-align:center;" ><img class="img-responsive" src="<?=base_url('img/sepnegro.png');?>"></img></span><br>
          <div class="row">
            <div class="col-md-4 col-lg-4 centro">
              <i class="fas fa-wrench services-big"></i>
              <h4 class="descripcion">Contrucción de tu Landing Page</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-4 col-lg-4 centro">
              <i class="fas fa-wrench services-big"></i>
              <h4 class="descripcion">Contrucción de tu Landing Page</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-4 col-lg-4 centro">
              <i class="fas fa-wrench services-big"></i>
              <h4 class="descripcion">Contrucción de tu Landing Page</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Portfolio Grid Section -->
      <section class="portfolio" id="portfolio">
        <div class="container">
          <h2 class="text-center text-uppercase text-secondary mb-0">Portafolio</h2><br>
          <span style="display:block;text-align:center;" ><img class="img-responsive" src="<?=base_url('img/sepnegro.png');?>"></img></span><br>
          <div class="row">
            <div class="col-md-12 descripcion">
              <h5>Estos son algunos de nuestros proyectos...</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <a href="http://biblat.unam.mx/" target="_blank">
                <img class="img-fluid" src="<?=base_url('img/portafolio/biblat.png');?>" alt="Bibliografía Latinoamericana">
              </a>
              <h5 class="clientes">Blbliografía latinoamericana</h5>
            </div>
            <div class="col-md-6 col-lg-4">
              <a href="http://cid.unam.mx" target="_blank">
                <img class="img-fluid" src="<?=base_url('img/portafolio/cid.png');?>" alt="Coordinación de Identidad Digital">
              </a>
            </div>
            <div class="col-md-6 col-lg-4">
              <a href="http://3dgummy.mx/" target="_blank">
                <img class="img-fluid" src="<?=base_url('img/portafolio/3dgummy.png');?>" alt="Hawaiian Fruit">
              </a>
            </div>
            <!--
            <div class="col-md-6 col-lg-4">
              <a href="http://www.kyrabo.com/" target="_blank">
                <img class="img-fluid" src="<?=base_url('img/portafolio/3dgummy.png');?>" alt="Kyrabo SMSC">
              </a>
            </div>
            
            <div class="col-md-6 col-lg-4">
              <a href="http://companeros.com.mx" target="_blank">
                <img class="img-fluid" src="<?=base_url('img/portafolio/companeros.png');?>" alt="Mecánica Automotríz Compañeros">
              </a>
            </div>
            -->
          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section id="contact">
        <div class="container">
          <h2 class="text-center text-uppercase text-secondary mb-0">Contacto</h2><br>
          <span style="display:block;text-align:center;" ><img class="img-responsive" src="<?=base_url('img/sepnegro.png');?>"></img></span><br>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
              <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
              <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Name</label>
                    <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Email Address</label>
                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Phone Number</label>
                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>