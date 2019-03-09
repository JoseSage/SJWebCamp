       <?php include_once 'includes/templates/header.php' ;?>

       <section class="seccion contenedor">
         <h2>La Mejor Conferencia de diseño Web en Español</h2>
         <p class="diseñoweb">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Vel voluptate impedit rem dicta odit reprehenderit aliquam est, 
           nam sunt, fugiat nostrum dolorem non. Neque ipsum aliquid 
           repudiandae doloremque repellat beatae?</p>
       </section> <!--Seccion 1-->

      <section class="programas"><!--Seccion video-->
        <div class="contenedor-video"><!--contenedor video-->
            <video autoplay muted loop poster="img/bg-talleres.jpg">  
            <source src="videos/video.mp4" type="video/mp4">
            <source src="videos/video.webm" type="video/webm">
            <source src="videos/video.ogv" type="video/ogg">
          </video>
          <video src=""></video>
        </div><!--contenedor video-->

        <div class="contendio-programa"><!--Contenido Programa-->
           
          <div class="contenedor">
             <div class="programa-evento" >
               <h2>Programa del Evento</h2>
               <nav class="menu-programa"><!--Menú Programa-->
                 <a href="#talleres"> <i class="fa fa-code" ></i> Talleres</a>
                 <a href="#conferencias"> <i class="fa fa-comments"></i> Conferencias</a>
                 <a href="#seminarios"> <i class="fa fa-university"></i> Seminarios</a>
               </nav><!--Menú Programa-->
 

               <div class="info-curso ocultar" id="talleres">
                  <div class="detalle-evento">
                    <h3>HTML5, CSS3, JavaScript</h3>
                    <p> <i class="far fa-clock" aria-hidden="true" ></i> 14:00 hrs</p>
                    <p> <i class="fa fa-calendar-alt" ></i> 14 de Feb</p>
                    <p> <i class="fa fa-user-alt" ></i> El Bananero  Putorial</p>
                  </div>
                  <div class="detalle-evento2">
                      <h3>Responsive Web Design</h3>
                      <p> <i class="far fa-clock" aria-hidden="true" ></i> 19:00 hrs</p>
                      <p> <i class="fa fa-calendar-alt" ></i> 01 de Ago</p>
                      <p> <i class="fa fa-user-alt" ></i> Josécito Sage</p>
                    </div>
                    <div class="contenedor-boton">
                    <a href="#" class="boton float-derecha">Ver Todos</a>
                  </div>
               </div>
                 
               <div class="info-curso ocultar" id="conferencias">
                  <div class="detalle-evento">
                    <h3>Como se Freelancer</h3>
                    <p> <i class="far fa-clock" aria-hidden="true" ></i> 10:00 hrs</p>
                    <p> <i class="fa fa-calendar-alt" ></i> 7 de May</p>
                    <p> <i class="fa fa-user-alt" ></i> El Señor</p>
                  </div>
                  <div class="detalle-evento2">
                      <h3>Diseño UI/UX para móviles </h3>
                      <p> <i class="far fa-clock" aria-hidden="true" ></i> 13:00 hrs</p>
                      <p> <i class="fa fa-calendar-alt" ></i> 3 de Ago</p>
                      <p> <i class="fa fa-user-alt" ></i> Glorix</p>
                    </div>
                    <div class="contenedor-boton">
                    <a href="#" class="boton float-derecha">Ver Todos</a>
                  </div>
               </div>
               <div class="info-curso ocultar" id="seminarios">
                  <div class="detalle-evento">
                    <h3>Tecnologías del Futuro</h3>
                    <p> <i class="far fa-clock" aria-hidden="true" ></i> 19:00 hrs</p>
                    <p> <i class="fa fa-calendar-alt" ></i> 16 de Feb</p>
                    <p> <i class="fa fa-user-alt" ></i> Napingo45cm</p>
                  </div>
                  <div class="detalle-evento2">
                      <h3>Angular Material Design</h3>
                      <p> <i class="far fa-clock" aria-hidden="true" ></i> 14:00 hrs</p>
                      <p> <i class="fa fa-calendar-alt" ></i> 01 de Sep</p>
                      <p> <i class="fa fa-user-alt" ></i> Joseph Logan</p>
                    </div>
                    <div class="contenedor-boton">
                    <a href="#" class="boton float-derecha">Ver Todos</a>
                  </div>
               </div>

             </div>
           </div>
        </div><!--Contenido Programa-->
      </section><!--Seccion video-->

      <section class="invitados-principal"><!--Invitados Principal-->
        <h2>Nuestros Invitados</h2>
         
        <div class="invitados-contenedor"><!--Invitados Contenedor--> 
          <div class="invitado-item">
            <img src="img/invitado1.jpg" alt="" class="invitado-img">
            <p>Rafael Bautista</p>
          </div>
        
        
          <div class="invitado-item">
            <img src="img/invitado2.jpg" alt="" class="invitado-img">
            <p>Shari Herrera</p>
          </div>
        
      
          <div class="invitado-item">
            <img src="img/invitado3.jpg" alt="" class="invitado-img">
            <p>Georgino Sánchez</p>
          </div>
      
        
          <div class="invitado-item">
            <img src="img/invitado4.jpg" alt="" class="invitado-img">
            <p>Susana Rivera</p>
          </div>
       
        
          <div class="invitado-item">
            <img src="img/invitado5.jpg" alt="" class="invitado-img">
            <p>Harold García</p>
          </div>
        
        
          <div class="invitado-item">
            <img src="img/invitado6.jpg" alt="" class="invitado-img">
            <p>Susana Sánchez </p>
          </div>

        </div><!--Invitados Contenedor-->

      </section><!--Invitados Principal-->

      <section class="contador parallax"><!--Contador Parallax-->
        <div class="contenedor"><!--Contenedor-->
          <ul class="resumen-evento">
            <li>
              <p class="numero">6</p>Invitados
            </li>
            <li>
              <p class="numero">15</p>Talleres
            </li>
            <li>
              <p class="numero">3</p>Días
            </li>
            <li>
              <p class="numero">9</p>Conferencias
            </li>
          </ul>
        </div><!--Contenedor--> 
      </section><!--Contador Parallax-->

      <section class="precios"><!--Precios-->
        <h2>Precios</h2>
        <div class="precios-contenedor"><!--Contenedor Precios-->
           <ul class="lista-precios">
             <li>
               <div class="tabla-precio">
                 <h3>Pase por día</h3>
                 <p class="numero">$30</p>
                 <ul>
                   <li> <i class="fa fa-check" ></i> Bocadillos Gratis</li>
                   <li> <i class="fa fa-check" ></i> Todas la Conferencias</li>
                   <li> <i class="fa fa-check" ></i> Todos los Talleres</li>
                 </ul>
                 <a href="#" class="boton-precio">Comprar</a>
               </div>
             </li>
             <li>
              <div class="tabla-precio">
                <h3>Todos los días</h3>
                <p class="numero">$50</p>
                <ul>
                  <li><i class="fa fa-check" ></i>Bocadillos Gratis</li>
                  <li> <i class="fa fa-check" ></i> Todas la Conferencias</li>
                  <li> <i class="fa fa-check" ></i> Todos los Talleres</li>
                </ul>
                <a href="#" class="boton-precio-hollow">Comprar</a>
              </div>
            </li>
            <li>
              <div class="tabla-precio">
                <h3>Pase por 2 días</h3>
                <p class="numero">$45</p>
                <ul>
                  <li> <i class="fa fa-check" ></i> Bocadillos Gratis</li>
                  <li> <i class="fa fa-check" ></i> Todas la Conferencias</li>
                  <li> <i class="fa fa-check" ></i> Todos los Talleres</li>
                </ul>
                <a href="#" class="boton-precio ">Comprar</a>
              </div>
            </li> 
            </ul>
          </div><!--Contenedor Precios-->
      </section><!--Precios-->
   
    <section class="seccion-testimoniales"><!--Seccion de testimoniales-->
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedeor">
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur 
          adipisicing elit. Provident adipisci quaerat 
          dolorum beatae, tempore deleniti aliquam veniam 
          exercitationem reprehenderit unde quod numquam 
          nobis modi, saepe repellendus ad, animi architecto dignissimos.</p>
          <footer class="info-testimonial">
             <img src="img/testimonial.jpg" alt="imagen testimonial">
             <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
      </blockquote>
    </div><!--Testimonial-->
    <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur 
            adipisicing elit. Provident adipisci quaerat 
            dolorum beatae, tempore deleniti aliquam veniam 
            exercitationem reprehenderit unde quod numquam 
            nobis modi, saepe repellendus ad, animi architecto dignissimos.</p>
            <footer class="info-testimonial">
               <img src="img/testimonial.jpg" alt="imagen testimonial">
               <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
            </footer>
        </blockquote>
      </div><!--Testimonial-->
      <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur 
              adipisicing elit. Provident adipisci quaerat 
              dolorum beatae, tempore deleniti aliquam veniam 
              exercitationem reprehenderit unde quod numquam 
              nobis modi, saepe repellendus ad, animi architecto dignissimos.</p>
              <footer class="info-testimonial">
                 <img src="img/testimonial.jpg" alt="imagen testimonial">
                 <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
              </footer>
          </blockquote>
        </div><!--Testimonial-->
      </div>
      </section><!--Seccion de testimoniales-->

      <section class="newsletter parallax"><!--Seccion de noticias-->
        <div class="contenido contenedor">
          <p>Registrate al newsletter:</p>
          <h3>SJWEBCAMP</h3>
          <a href="#" class="boton-transparente">Registro</a>
        </div>
      </section><!--Seccion de noticias-->

      <section class="seccion"><!--Seccion de contador de días-->
         <h2>Faltan</h2>
         <div class="cuenta-regresiva contenedor">
           <ul class="cuenta-atras">
             <li><p id="dias" class="numero"></p>días</li>
             <li><p id="horas" class="numero"></p>horas</li>
             <li><p id="minutos" class="numero"></p>minutos</li>
             <li><p id="segundos" class="numero"></p>segundos</li>
           </ul>
         </div>
      </section><!--Seccion de contador de días-->
      
      <?php include_once 'includes/templates/footer.php' ;?>
      