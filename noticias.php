   <?php
    include 'header.php';
    ?>
   <style>
     .aCaption {
       display: none
     }

     .small,
     .small a {
       font-family: Arial;
       font-size: 11px;
       color: grey
     }

     .medium,
     .medium a {
       font-family: Calibri, Arial, sans-serif;
       font-size: 14px;
       color: grey;
       line-height: 150%;
       text-align: justify
     }

     .img-principal {
       opacity: .8;
       border-radius: 5px
     }

     article,
     article img {
       transform-origin: center
     }

     article,
     figure {
       overflow: hidden
     }

     article {
       --img-scale: 1.001;
       --title-color: black;
       --link-icon-translate: -20px;
       --link-icon-opacity: 0;
       position: relative;
       border-radius: 16px;
       box-shadow: none;
       background: #fff;
       transition: .4s ease-in-out
     }

     article a::after {
       position: absolute;
       inset-block: 0;
       inset-inline: 0;
       cursor: pointer;
       content: ""
     }

     article h2 {
       margin: 0 0 18px;
       font-family: "Bebas Neue", cursive;
       font-size: 1.9rem;
       letter-spacing: .06em;
       color: var(--title-color);
       transition: color .3s ease-out
     }

     figure {
       margin: 0;
       padding: 0;
       aspect-ratio: 16/9
     }

     article img {
       max-width: 100%;
       transform: scale(var(--img-scale));
       transition: transform .4s ease-in-out
     }

     .article-body {
       padding: 24px
     }

     article a {
       display: inline-flex;
       align-items: center;
       text-decoration: none;
       color: #28666e;
       font-size: 18px;
       font-weight: 700
     }

     article a:focus {
       outline: #28666e dotted 1px
     }

     article a .icon {
       min-width: 24px;
       width: 24px;
       height: 24px;
       margin-left: 5px;
       transform: translateX(var(--link-icon-translate));
       opacity: var(--link-icon-opacity);
       transition: .3s
     }

     article:has(:hover, :focus) {
       --img-scale: 1.1;
       --title-color: #28666e;
       --link-icon-translate: 0;
       --link-icon-opacity: 1;
       box-shadow: rgba(0, 0, 0, .16) 0 10px 36px 0, rgba(0, 0, 0, .06) 0 0 0 1px
     }

     .articles {
       display: grid;
       max-width: 1200px;
       margin-inline: auto;
       padding-inline: 24px;
       grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
       gap: 24px
     }

     figure {
       width: 100%;
       height: 100%;
       overflow: hidden
     }

     figure img {
       height: 100%;
       object-fit: cover
     }

     @media screen and (max-width:960px) {
       article {
         container: card/inline-size;
       }
     }

     @media screen and (max-width:480px) {
       .articles {
         grid-template-columns: 100%;
         padding-inline: 0;
       }
     }
   </style>
   <div class="row">
     <div><img class="img-principal" src="https://edutalentos.pe/wp-content/uploads/2025/02/difoca_lima.jpeg" alt=""></div>
   </div>
   <!-- <div class="row" style="padding-top:40px">
     <div class="col-sm-4">
       <div class="boxcurso"><a class="curso_img" href="https://edutalentos.pe/noticias-siete-buenas-practicas-de-gestion-educativa-de-macrorregion-sur-seran-replicadas-en-otras-regiones/" target="_top" rel="noopener"><img style="height:200px" src="https://edutalentos.pe/wp-content/uploads/2025/02/difoca_tumbes-1.jpeg" alt="gestión educativa en Tumbes por Minedu y Difoca Edutalentos Regiones"></a>
         <div class="curso_cont">
           <div style="height:235px">
             <p class="small">24 de Febrero de 2025</p>
             <h4>Minedu fortalece la gestión educativa en Tumbes con diagnóstico territorial y capacitación a directivos y especialistas</h4>
             <p class="medium">El MINEDU, mediante DIFOCA y en coordinación con la DRE Tumbes, realizó un diagnóstico territorial del 27 al 30 de enero de 2025 para fortalecer la gestión educativa. Evaluaron habilidades en directivos y especialistas, identificando necesidades de formación en gestión por procesos, innovación y monitoreo pedagógico.</p>
             <div class="aClear"></div>
           </div><a class="btn_info" href="https://edutalentos.pe/noticias-minedu-convoca-concurso-de-buenas-practicas-de-gestion-educativa-2024/" target="_top" rel="noopener">LEER MÁS</a>
         </div>
       </div>
     </div>
     <div class="col-sm-4">
       <div class="boxcurso"><a class="curso_img" href="https://edutalentos.pe/noticias-siete-buenas-practicas-de-gestion-educativa-de-macrorregion-sur-seran-replicadas-en-otras-regiones/" target="_top" rel="noopener"><img style="height:200px" src="https://edutalentos.pe/wp-content/uploads/2025/02/difoca_ayacucho.jpeg" alt=""></a>
         <div class="curso_cont">
           <div style="height:235px">
             <p class="small">10 de Enero de 2024</p>
             <h4>Minedu junto con Difoca descentralizado en una sesión extraordinaria en Ayacucho</h4>
             <p class="medium">Siete buenas prácticas de gestión educativa que benefician a escolares de 6178 escuelas de Apurímac, Arequipa, Cusco, Puno y Tacna serán replicadas en otras regiones, luego de ser presentadas en la macrorregión sur en un evento organizado por el Ministerio de Educación (Minedu).</p>
             <div class="aClear"></div>
           </div><a class="btn_info" href="https://edutalentos.pe/noticias-siete-buenas-practicas-de-gestion-educativa-de-macrorregion-sur-seran-replicadas-en-otras-regiones/" target="_blank" rel="noopener">LEER MÁS</a>
         </div>
       </div>
     </div>
     <div class="col-sm-4">
       <div class="boxcurso"><a class="curso_img" href="https://edutalentos.pe/noticias-minedu-capacita-en-gestion-educativa-a-mas-de-100-funcionarios-de-ugel/" target="_top" rel="noopener"><img style="height:200px" src="https://edutalentos.pe/wp-content/uploads/2024/08/noticia-3-thumb.png" alt=""></a>
         <div class="curso_cont">
           <div style="height:235px">
             <p class="small">30 de junio de 2024</p>
             <h4>Minedu capacita en gestión educativa a más de 100 funcionarios de UGEL</h4>
             <p class="medium">Un total de 28 directores y 84 jefes seleccionados de las unidades de gestión educativa local (UGEL) de 17 regiones participan en el programa UGEL Transforma organizado por el Ministerio de Educación (Minedu) con el fin de mejorar sus competencias y la calidad del servicio educativo en su territorio.</p>
             <div class="aClear"></div>
           </div><a class="btn_info" href="https://edutalentos.pe/noticias-minedu-capacita-en-gestion-educativa-a-mas-de-100-funcionarios-de-ugel/" target="_blank" rel="noopener">LEER MÁS</a>
         </div>
       </div>
     </div>
   </div>
   <div class="row" style="padding-top:40px">
     <div class="col-sm-4">
       <div class="boxcurso"><a class="curso_img" href="https://edutalentos.pe/noticias-minedu-convoca-concurso-de-buenas-practicas-de-gestion-educativa-2024/" target="_top" rel="noopener"><img style="height:200px" src="https://edutalentos.pe/wp-content/uploads/2024/08/noticia-1-thumb.png" alt=""></a>
         <div class="curso_cont">
           <p class="small">15 de agosto de 2024</p>
           <h4>Minedu convoca Concurso de Buenas Prácticas de Gestión Educativa 2024</h4>
           <p class="medium">El Ministerio de Educación (Minedu) abrió la convocatoria para la novena edición del Concurso de Buenas Prácticas de Gestión Educativa, que reconocerá las iniciativas que implementan las gerencias o direcciones regionales de Educación (DRE) y las unidades de gestión educativa local (UGEL) para mejorar la atención al usuario y el servicio educativo a los estudiantes.</p>
           <div class="aClear"></div><a class="btn_info" href="https://edutalentos.pe/noticias-minedu-convoca-concurso-de-buenas-practicas-de-gestion-educativa-2024/" target="_top" rel="noopener">LEER MÁS</a>
         </div>
       </div>
     </div>
     <div class="col-sm-4">
       <div class="boxcurso"><a class="curso_img" href="https://edutalentos.pe/noticias-siete-buenas-practicas-de-gestion-educativa-de-macrorregion-sur-seran-replicadas-en-otras-regiones/" target="_top" rel="noopener"><img style="height:200px" src="https://edutalentos.pe/wp-content/uploads/2024/08/noticia-2-thumb.png" alt=""></a>
         <div class="curso_cont">
           <div style="height:235px">
             <p class="small">15 de agosto de 2024</p>
             <h4>Siete buenas prácticas de gestión educativa de macrorregión sur serán replicadas en otras regiones</h4>
             <p class="medium">Siete buenas prácticas de gestión educativa que benefician a escolares de 6178 escuelas de Apurímac, Arequipa, Cusco, Puno y Tacna serán replicadas en otras regiones, luego de ser presentadas en la macrorregión sur en un evento organizado por el Ministerio de Educación (Minedu).</p>
             <div class="aClear"></div>
           </div><a class="btn_info" href="https://edutalentos.pe/noticias-siete-buenas-practicas-de-gestion-educativa-de-macrorregion-sur-seran-replicadas-en-otras-regiones/" target="_blank" rel="noopener">LEER MÁS</a>
         </div>
       </div>
     </div>
     <div class="col-sm-4">
       <div class="boxcurso"><a class="curso_img" href="https://edutalentos.pe/noticias-minedu-capacita-en-gestion-educativa-a-mas-de-100-funcionarios-de-ugel/" target="_top" rel="noopener"><img style="height:200px" src="https://edutalentos.pe/wp-content/uploads/2024/08/noticia-3-thumb.png" alt=""></a>
         <div class="curso_cont">
           <div style="height:235px">
             <p class="small">30 de junio de 2024</p>
             <h4>Minedu capacita en gestión educativa a más de 100 funcionarios de UGEL</h4>
             <p class="medium">Un total de 28 directores y 84 jefes seleccionados de las unidades de gestión educativa local (UGEL) de 17 regiones participan en el programa UGEL Transforma organizado por el Ministerio de Educación (Minedu) con el fin de mejorar sus competencias y la calidad del servicio educativo en su territorio.</p>
             <div class="aClear"></div>
           </div><a class="btn_info" href="https://edutalentos.pe/noticias-minedu-capacita-en-gestion-educativa-a-mas-de-100-funcionarios-de-ugel/" target="_blank" rel="noopener">LEER MÁS</a>
         </div>
       </div>
     </div>
   </div> -->
   <!-- <section class="articles" style="padding-top:40px">
     <article>
       <div class="article-wrapper">
         <figure><img alt="" src="https://picsum.photos/id/1011/800/450"></figure>
         <div class="article-body">
           <h4>Minedu junto con Difoca descentralizado en una sesión extraordinaria en Ayacucho</h4>
           <p class="medium">Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestassdasda sdasdasda sdasd sds.</p><a class="read-more" href="#">Leer más <span class="sr-only">about this is some title</span><svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" fill-rule="evenodd" />
             </svg></a>
         </div>
       </div>
     </article>
     <article>
       <div class="article-wrapper">
         <figure><img alt="" src="https://picsum.photos/id/1005/800/450"></figure>
         <div class="article-body">
           <h4>Minedu junto con Difoca descentralizado en una sesión extraordinaria en Ayacucho</h4>
           <p class="medium">Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.</p><a class="read-more" href="#">Leer más <span class="sr-only">about this is some title</span><svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" fill-rule="evenodd" />
             </svg></a>
         </div>
       </div>
     </article>
     <article>
       <div class="article-wrapper">
         <figure><img alt="" src="https://picsum.photos/id/103/800/450"></figure>
         <div class="article-body">
           <h4>Minedu junto con Difoca descentralizado en una sesión extraordinaria en Ayacucho</h4>
           <p class="medium">Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.</p><a class="read-more" href="#">Leer más <span class="sr-only">about this is some title</span><svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" fill-rule="evenodd" />
             </svg></a>
         </div>
       </div>
     </article>
   </section> -->

   <section class="articles" style="padding-top:40px">

     <?php
      // Leer el archivo JSON
      $json = file_get_contents('noticias.json');
      $noticias = json_decode($json, true);
      ?>

     <?php if ($noticias && is_array($noticias)) : ?>
       <?php foreach ($noticias as $noticia) : ?>
         <article>
           <div class="article-wrapper">
             <figure>
               <img src="<?= htmlspecialchars($noticia['imagen']) ?>" alt="">
             </figure>
             <div class="article-body">
               <h4><?= htmlspecialchars($noticia['titulo']) ?></h4>
               <p class="medium"><?= htmlspecialchars($noticia['descripcion']) ?></p>
               <a class="read-more" href="<?= htmlspecialchars($noticia['url']) ?>">Leer más <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                   <path clip-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" fill-rule="evenodd" />
                 </svg></a>
             </div>
           </div>
         </article>
       <?php endforeach; ?>
     <?php else : ?>
       <p>No hay noticias disponibles.</p>
     <?php endif; ?>

   </section>

   <?php
    include 'footer.php';
    ?>