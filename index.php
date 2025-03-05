      <?php
      include 'header.php';
      ?>

      <!-- 03-12-2024 -->
      <style>
        @font-face {
          font-family: 'gotham_bookregular';
          src: url('fonts/gotham-book-webfont.woff2') format('woff2'),
            url('fonts/gotham-book-webfont.woff') format('woff');
          font-weight: normal;
          font-style: normal;
        }

        @font-face {
          font-family: 'Gotham-Rounded-Bold';
          src: url('fonts/Gotham-Rounded-Bold.ttf') format('truetype'),
            url('fonts/Gotham-Rounded-Bold.woff') format('woff'),
            url('fonts/Gotham-Rounded-Bold.woff2') format('woff2');
        }

        body {
          background-color: #ffffff;
        }

        #content-section .container {
          width: 100%;
        }

        #header-section {
          background-color: #ffffff;
        }

        .content a {
          color: #333;
        }

        .title-tools {
          color: #333;
        }

        .contenido_curso {
          font-family: 'gotham_bookregular';
        }

        .contenido_curso p {
          text-align: left;
          font-size: 16px;
        }

        .none {
          display: none;
        }

        .bk1 {
          background-color: #fff;
        }

        .pestana {
          font-family: 'Gotham-Rounded-Bold';
          color: #fff;
          font-weight: bold;
          font-size: 32px;
          background-color: #0663b5;
          padding: 10px 10px 10px 100px;
          -webkit-border-radius: 10px;
          -moz-border-radius: 10px;
          border-radius: 10px;
          margin-right: -15px;
          margin-left: -15px;
          position: relative;
        }

        img.esquina {
          position: absolute;
          top: -1px;
          left: 20%;
          max-width: 60% !important;
        }

        img.griss {
          filter: grayscale(1);
          transition-property: filter;
          transition-duration: 1s;
        }

        img.border {
          border: #407bff 2px solid;
          border-radius: 25px;
        }

        iframe {
          width: 100%;
        }

        .no-gutter>[class*='col-'] {
          padding-right: 0;
          padding-left: 0;
        }

        .shadow {
          -webkit-box-shadow: -14px 0px 12px -4px rgba(204, 204, 204, 1);
          -moz-box-shadow: -14px 0px 12px -4px rgba(204, 204, 204, 1);
          box-shadow: -14px 0px 12px -4px rgba(204, 204, 204, 1);
        }

        .titulo {
          padding: 15px 0px;
          color: #0c3c86;
          font-family: 'Gotham-Rounded-Bold';
          font-size: 25px;
          margin: 20px 0px;
          text-align: center;
        }

        .titulo span {
          color: #aba503;
          display: block;
        }

        .estado {
          background-color: #33a1c6;
          padding: 15px 0px;
          color: #fff;
          font-family: 'Gotham-Rounded-Bold';
        }

        .boton {
          display: block;
          width: 180px;
          text-transform: uppercase;
          background-color: #de7d00;
          color: #fff;
          font-family: 'Gotham-Rounded-Bold';
          margin: auto;
          margin-top: 20px;
          font-size: 16px;
          padding: 10px 5px;
          border-radius: 25px;
        }

        .boton:hover {
          color: #fff;
        }

        .p-30 {
          padding: 30px;
        }

        .mb-10 {
          margin-bottom: 10px;
        }

        .mb-20 {
          margin-bottom: 20px;
        }

        .mb-40 {
          margin-bottom: 40px;
        }

        .align_1 {
          text-align: center;
        }

        .laterales {
          padding: 0px 70px;
        }

        .laterales_small {
          padding: 80px 50px 10px;
        }

        .laterales_accordeon {
          padding: 30px 180px;
        }

        .sesion {
          display: block;
          color: #ffffff;
          margin: 2px;
          font-family: 'Gotham-Rounded-Bold';
        }

        .sesion .ca1 {
          display: block;
          background-color: #f36b45;
          padding: 30px 0px;
        }

        .sesion .ca1 img {
          margin-bottom: 10px;
        }

        .sesion .ca2 {
          display: block;
          background-color: #aba500;
          padding: 30px 0px;
        }

        .sesion .ca2 img {
          margin-bottom: 10px;
        }

        .sesion .ca3 {
          display: block;
          background-color: #fbd2c7;
          font-size: 15px;
          padding: 15px;
          height: 130px;
          color: #0c3c86 !important;
        }

        .sesion .ca4 {
          display: block;
          background-color: #e5e4b3;
          font-size: 15px;
          padding: 15px;
          height: 130px;
          color: #0c3c86 !important;
        }

        .sesion:hover {
          color: #ffffff;
        }

        .sesion span:hover {
          color: #ffffff;
        }

        .border_top_left_radius {
          -webkit-border-top-left-radius: 20px;
          -moz-border-radius-topleft: 20px;
          border-top-left-radius: 20px;
        }

        .border_top_right_radius {
          -webkit-border-top-right-radius: 20px;
          -moz-border-radius-topright: 20px;
          border-top-right-radius: 20px;
        }

        .border_bottom_right_radius {
          -webkit-border-bottom-right-radius: 20px;
          -moz-border-radius-bottomright: 20px;
          border-bottom-right-radius: 20px;
        }

        .border_bottom_left_radius {
          -webkit-border-bottom-left-radius: 20px;
          -moz-border-radius-bottomleft: 20px;
          border-bottom-left-radius: 20px;
        }

        .tabulador .accordion {
          background-image: url('/courses/25001I/document/mas.png');
          background-repeat: no-repeat;
          background-position: right 15px center;
          background-size: 35px;
          background-color: #0663b5;
          color: #fff;
          cursor: pointer;
          padding: 18px;
          width: 100%;
          border: none;
          border-bottom: #fff 3px solid;
          text-align: left;
          outline: none;
          font-size: 18px;
          transition: 0.4s;
          font-family: 'Gotham-Rounded-Bold';
        }

        .tabulador .active,
        .tabulador .accordion:hover {
          background-color: #0663b5;
        }

        .tabulador .first {
          -webkit-border-top-left-radius: 15px;
          -webkit-border-top-right-radius: 15px;
          -moz-border-radius-topleft: 15px;
          -moz-border-radius-topright: 15px;
          border-top-left-radius: 15px;
          border-top-right-radius: 15px;
        }

        .tabulador .last {
          -webkit-border-bottom-right-radius: 15px;
          -webkit-border-bottom-left-radius: 15px;
          -moz-border-radius-bottomright: 15px;
          -moz-border-radius-bottomleft: 15px;
          border-bottom-right-radius: 15px;
          border-bottom-left-radius: 15px;
        }

        .tabulador .contpanel {
          padding: 20px;
          display: none;
          background-color: #edf4ff;
          overflow: hidden;
          font-size: 16px;
        }

        .box {
          display: block;
          background-color: #0663b5;
          color: #ffffff;
          text-align: center;
          padding: 40px 25px;
          height: 260px;
          -webkit-border-radius: 20px;
          -moz-border-radius: 20px;
          border-radius: 20px;
        }

        .box:hover {
          background-color: #f36b45;
        }

        .no-gutter>[class*='col-'] {
          padding-right: 0;
          padding-left: 0;
        }

        .row-header {
          padding-left: 45px;
        }

        .title-card-header {
          font-size: 40px;
          font-family: 'Gotham-Rounded-Bold';
          color: #174d8c;
          padding-top: 40px;
        }

        .subtitle-card-header {
          text-align: center;
          padding-top: 10px;
          font-family: 'Gotham-Rounded-Bold';
          color: #174d8c;
          font-size: 20px;
          line-height: 1.2;
        }

        .light-title {
          font-family: 'gotham_bookregular';
        }

        .row--title-flex {
          display: flex;
          align-items: center;

          p {
            margin: 0;
            color: #EF504F;
            font-size: 2.5rem;
            font-family: 'Gotham-Rounded-Bold';
          }
        }

        .container--card {
          padding: 0 45px 30px;
          max-width: 450px;
          background-color: #FFE8BF;
          border-radius: 20px;
        }

        .row--pill {
          display: flex;
          align-items: center;
          justify-content: space-between;
          background-color: #DFE8F0;
          border: 2px solid #7FA1C3;
          border-radius: 25px;
          text-align: center;
          margin-left: auto;
          margin-right: auto;
          max-width: 800px;

          .btn {
            padding: 5px 40px;
            border-radius: 15px;
            background-color: #155294;
          }
        }

        .row--pill-stretch {
          align-items: stretch;
        }

        .col--pill-dark {
          background-color: #8AA8CA;
          border-top-left-radius: 25px;
          border-bottom-left-radius: 25px;
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .pill-title {
          font-size: 2rem;
          font-family: 'Gotham-Rounded-Bold';
          color: #155294;
        }

        .py-5 {
          padding-top: 1rem;
          padding-bottom: 1rem;
        }

        .row--pill::before {
          display: none;
        }

        .btn-pill {
          background-color: #0663b5;
          color: #fff;
          cursor: pointer;
          border-radius: 15px;
          margin-bottom: 10px;
          padding: 18px;
          width: 100%;
          border: none;
          text-align: left;
          outline: none;
          font-size: 18px;
          transition: 0.4s;
          font-family: 'Gotham-Rounded-Bold';
        }

        @media(max-width: 1200px) {
          .container--card {
            margin-bottom: 50px;
          }
        }

        @media (min-width: 993px) {
          .ten-columns>.col-lg-2 {
            width: 20%;
          }

          .row--items {
            display: flex;
            justify-content: center;
          }
        }

        @media only screen and (max-width: 990px) {
          .align_1 {
            text-align: left;
          }

          .laterales_accordeon {
            padding: 30px 50px;
          }
        }

        @media (max-width: 768px) {
          .laterales {
            padding: 0;
          }

          .row-header {
            padding-left: 0;
          }

          .contenido_curso p {
            text-align: center !important;
          }

          .tabulador .accordion {
            font-size: 15px;
          }

          .row--pill {
            display: block;
            max-width: 500px;
          }

          .col--pill-dark {
            border-bottom-left-radius: 0;
            border-top-right-radius: 25px;
          }
        }

        @media(max-width:480px) {
          .tabulador .accordion {
            background-size: 23px;
          }
        }
      </style>
      <div class="contenido_curso">
        <!-- PRINCIPAL -->
        <div id="section0">
          <!-- Encabezado principal -->
          <div class="container-fluid">
            <div class="row no-gutter">
              <div class="col-sm-12">
                <img
                  alt="MPG"
                  src="img/induccion_a_lideres_en_gestion_educativa.png" />
              </div>
            </div>
          </div>
          <!-- Fin de encabezado principal -->

          <p>&nbsp;</p>

          <div class="laterales">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12 col-lg-6" style="text-align: center">
                  <img
                    alt=""
                    src="img/induccion_a_lideres_en_gestion_educativa_img.png" />
                </div>

                <div class="col-sm-12 col-lg-6">
                  <p>&nbsp;</p>

                  <div class="text-center">
                    <p style="text-align: center !important">
                      <strong>&iexcl;Bienvenido al curso Inducci&oacute;n a l&iacute;deres de
                        gesti&oacute;n educativa local!</strong>
                    </p>

                    <p>
                      Nos alegra contar contigo en esta experiencia de aprendizaje 100%
                      asincr&oacute;nica.
                    </p>

                    <p>
                      A continuaci&oacute;n, para que puedas acceder a los m&oacute;dulos y realizar
                      las evaluaciones, te daremos algunas
                    </p>

                    <p>indicaciones importantes.</p>
                  </div>

                  <p>&nbsp;</p>
                  <!-- Acordeon -->

                  <div class="tabulador">
                    <button class="accordion first">
                      1. Preparaci&oacute;n (Actividades de inicio)
                    </button>

                    <div class="contpanel">
                      <p>- Descarga la gu&iacute;a del estudiante y rev&iacute;sala.</p>

                      <p>- Realiza las actividades del m&oacute;dulo de inicio.</p>

                      <p>- Descarga y revisa el cronograma del curso.</p>
                    </div>
                    <button class="accordion">
                      2. Interacci&oacute;n (Desarrollo de actividades)
                    </button>

                    <div class="contpanel">
                      <p>
                        - Organiza un horario fijo de estudio y evita dejar la revisi&oacute;n de los
                        recursos para &uacute;ltima hora.
                      </p>

                      <p>- Descarga y refuerza lo aprendido revisando las lecturas.</p>

                      <p>
                        - Toma en cuenta como se dar&aacute; la calificaci&oacute;n (seg&uacute;n la
                        gu&iacute;a del estudiante) antes de realizar las evaluaciones.
                      </p>
                    </div>
                    <button class="accordion last">
                      3. Finalizaci&oacute;n del curso (Actividades finales)
                    </button>

                    <div class="contpanel">
                      <p>- Realiza las actividades finales.</p>

                      <p>
                        - De haber cumplido con los requisitos del curso (seg&uacute;n la gu&iacute;a
                        del estudiante), recibe tu certificaci&oacute;n.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <p>&nbsp;</p>

            <div class="container-fluid">
              <p>&nbsp;</p>

              <div class="mb-40" style="background-color: #bfecec; border-radius: 20px">
                <div class="row mb-20 row-header">
                  <div class="col-lg-1 col-sm-2 esquina text-right">
                    <img
                      alt=""
                      src="img/induccion_a_lideres_en_gestion_educativa-libro.png"
                      style="max-width: 90px" />
                  </div>

                  <div class="col-lg-8">
                    <p
                      style="
                        font-size: 40px;
                        font-family: 'Gotham-Rounded-Bold';
                        color: #174d8c;
                        padding-top: 40px;
                      ">
                      Actividades de inicio
                    </p>
                  </div>
                </div>
                <div class="laterales_small">
                  <div class="row ten-columns">
                    <div class="col-sm-6 col-md-4 col-lg-2 text-center mb-20">
                      <a
                        href="https://aula.edutalentos.pe/courses/25001I/document/pdf/guia-de-estudiante-induccion-lideres-gestion-educativa.pdf"
                        target="_blank"><img
                          alt=""
                          src="img/induccion_a_lideres_en_gestion_educativa-guia.png" /></a>

                      <p
                        style="
                                                text-align: center;
                                                padding-top: 10px;
                                                font-family: 'Gotham-Rounded-Bold';
                                                color: #174d8c;
                                                font-size: 20px;
                                                line-height: 1.2;
                                              ">
                        Gu&iacute;a<br />
                        del participante
                      </p>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-2 text-center mb-20">
                      <a
                        href="https://aula.edutalentos.pe/courses/25001I/document/pdf/cronograma-induccion-lideres-gestion-educativa.pdf"
                        target="_blank"><img
                          alt=""
                          src="img/induccion_a_lideres_en_gestion_educativa-calendario.png" /></a>

                      <p
                        style="
                                                text-align: center;
                                                padding-top: 10px;
                                                font-family: 'Gotham-Rounded-Bold';
                                                color: #174d8c;
                                                font-size: 20px;
                                                line-height: 1.2;
                                              ">
                        Calendario
                      </p>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-2 text-center mb-20">
                      <a
                        href="https://aula.edutalentos.pe/main/exercise/overview.php?cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;exerciseId=1372&amp;isStudentView=true"
                        target="_blank"><img
                          alt=""
                          src="img/induccion_a_lideres_en_gestion_educativa-compromiso.png" /></a>

                      <p
                        style="
                                                text-align: center;
                                                padding-top: 10px;
                                                font-family: 'Gotham-Rounded-Bold';
                                                color: #174d8c;
                                                font-size: 20px;
                                                line-height: 1.2;
                                              ">
                        Compromiso
                      </p>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-2 text-center mb-20">
                      <a
                        href="https://aula.edutalentos.pe/main/exercise/overview.php?cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;exerciseId=1373&amp;isStudentView=true"
                        target="_blank"><img
                          alt=""
                          src="img/induccion_a_lideres_en_gestion_educativa-cuestionario.png" /></a>

                      <p
                        style="
                                                text-align: center;
                                                padding-top: 10px;
                                                font-family: 'Gotham-Rounded-Bold';
                                                color: #174d8c;
                                                font-size: 20px;
                                                line-height: 1.2;
                                              ">
                        Cuestionario<br />
                        de inicio
                      </p>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-2 text-center mb-20">
                      <a data-target="#myModalvideo" data-toggle="modal" href="javascript:void(0)"><img
                          alt=""
                          src="img/induccion_a_lideres_en_gestion_educativa-video.png" /></a>

                      <p
                        style="
                                                text-align: center;
                                                padding-top: 10px;
                                                font-family: 'Gotham-Rounded-Bold';
                                                color: #174d8c;
                                                font-size: 20px;
                                                line-height: 1.2;
                                              ">
                        Video<br />
                        m&oacute;dulo de inicio
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-40" style="background-color: #FFDA99; border-radius: 20px">
                <div class="row mb-20 row-header">
                  <div class="col-lg-1 col-sm-2 esquina text-right"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-libro.png" style="max-width: 90px" /></div>

                  <div class="col-lg-8">
                    <p style="
                  font-size: 40px;
                  font-family: 'Gotham-Rounded-Bold';
                  color: #174d8c;
                  padding-top: 40px;
                ">Desarrollo de actividades</p>
                  </div>
                </div>

                <div class="laterales_accordeon">
                  <div class="row ten-columns">
                    <div class="col">
                      <div class="pills">
                        <a class="sesion btn-pill" href="javascript:void(0)" rel="1">M&Oacute;DULO I: <span class="light-title">Gesti&oacute;n por procesos</span></a>
                        <a class="sesion btn-pill" href="javascript:void(0)" rel="2">M&Oacute;DULO II: <span class="light-title">Funciones DRE y UGEL, documentos de gesti&oacute;n</span></a>
                        <a class="sesion btn-pill" href="javascript:void(0)" rel="3">M&Oacute;DULO III: <span class="light-title">Gesti&oacute;n Escolar</span></a>
                        <a class="sesion btn-pill" href="javascript:void(0)" rel="4">M&Oacute;DULO IV: <span class="light-title">Mantenimiento de locales escolares</span></a>
                        <a class="sesion btn-pill" href="javascript:void(0)" rel="5">M&Oacute;DULO V: <span class="light-title">Sistemas administrativos y de informaci&oacute;n</span></a>
                        <a class="sesion btn-pill" href="javascript:void(0)" rel="6">M&Oacute;DULO VI: <span class="light-title">Aspectos pedag&oacute;gicos y curriculares</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-40" style="background-color: #FBD3D3; border-radius: 20px">
                <div class="row mb-20 row-header">
                  <div class="col-lg-1 col-sm-2 esquina text-right">
                    <img
                      alt=""
                      src="img/induccion_a_lideres_en_gestion_educativa-libro.png"
                      style="max-width: 90px" />
                  </div>

                  <div class="col-lg-8">
                    <p
                      style="
                        font-size: 40px;
                        font-family: 'Gotham-Rounded-Bold';
                        color: #174d8c;
                        padding-top: 40px;
                      ">
                      Actividades finales
                    </p>
                  </div>
                </div>
                <div class="laterales_small">
                  <div class="row row--items ten-columns">
                    <div class="col-sm-6 col-md-4 col-lg-2 text-center mb-20">
                      <a
                        href="https://aula.edutalentos.pe/main/exercise/overview.php?cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;exerciseId=1373&amp;isStudentView=true"
                        target="_blank"><img
                          alt=""
                          src="img/induccion_a_lideres_en_gestion_educativa-cuestionario.png" /></a>

                      <p
                        style="
                            text-align: center;
                            padding-top: 10px;
                            font-family: 'Gotham-Rounded-Bold';
                            color: #174d8c;
                            font-size: 20px;
                            line-height: 1.2;
                          ">
                        Cuestionario<br />
                        de inicio
                      </p>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-2 text-center mb-20">
                      <a data-target="#myModalvideo" data-toggle="modal" href="javascript:void(0)"><img
                          alt=""
                          src="img/induccion_a_lideres_en_gestion_educativa-video.png" /></a>

                      <p
                        style="
                          text-align: center;
                          padding-top: 10px;
                          font-family: 'Gotham-Rounded-Bold';
                          color: #174d8c;
                          font-size: 20px;
                          line-height: 1.2;
                        ">
                        Video<br />
                        m&oacute;dulo de inicio
                      </p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Sesiones --><!-- SESIÓN 1 -->

      <div class="bk1 none" id="section1"><!-- Encabezado -->
        <div class="container-fluid">
          <div class="row no-gutter">
            <div class="col-sm-12"><img alt="" src="img/induccion_lideres_gestion_educativa_cabecera-m1.png" /></div>
          </div>

          <p>&nbsp;</p>

          <div class="row row--title-flex mb-40">
            <div class="col-lg-1 col-sm-2 esquina text-right"><a class="btninicio" href="javascript:void(0)" rel="0"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-inicio.png" style="max-width: 60px;background: #EF504F;padding: 5px 15px" /> </a></div>

            <div class="col-lg-8">
              <p><a class="btninicio" href="javascript:void(0)" rel="0" style="color: #EF504F">Regresar al inicio</a></p>
            </div>
          </div>
        </div>
        <!-- Fin encabezado -->

        <div class="container-fluid">
          <div class="laterales_small">
            <div class="row">
              <div class="col-sm-12 col-lg-4" style="text-align: center">
                <div class="container container--card">
                  <div class="row">
                    <div class="col esquina text-center"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-logro.png" style="max-width: 90px" /></div>
                  </div>

                  <div class="row text-center">
                    <div class="col">
                      <p style="
                  font-size: 3rem;
                  font-family: 'Gotham-Rounded-Bold';
                  color: #174d8c;
                  padding-top: 20px;
                  text-align:center;
                ">Logro del m&oacute;dulo</p>
                    </div>
                  </div>

                  <div class="row text-center">
                    <div class="col">
                      <p style="
                  color: #333;
                  padding-top: 30px;
                  text-align: justify;
                ">Al finalizar el m&oacute;dulo 1, el participante diferencia los conceptos generales de la gesti&oacute;n por procesos y su aplicaci&oacute;n en el liderazgo educativo para fomentar la eficiencia y efectividad institucional, seg&uacute;n la normativa vigente.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-lg-8">
                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-multimedia.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Recurso multimedia M01</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="https://aula.edutalentos.pe/main/lp/lp_controller.php?action=view&amp;lp_id=1327&amp;cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;isStudentView=true" target="_blank">Revisar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-lectura.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Lecturas M01</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="/courses/25001I/document/pdf/lectura_M1_induccion-lideres-gestion-educativa.pdf" target="_blank">Descargar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-m1-mas.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Material adicional M01</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="/courses/25001I/document/pdf/material-adicional_m01.pdf" target="_blank">Descargar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-evaluacion.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Evaluaci&oacute;n M01</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="https://aula.edutalentos.pe/main/exercise/overview.php?cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;exerciseId=1374&amp;isStudentView=true" target="_blank">Realizar</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FIN DE SESIÓN 1 --><!-- SESIÓN 2 -->

      <div class="bk1 none" id="section2"><!-- Encabezado -->
        <div class="container-fluid">
          <div class="row no-gutter">
            <div class="col-sm-12"><img alt="" src="img/induccion_lideres_gestion_educativa_cabecera-m1.png" /></div>
          </div>

          <p>&nbsp;</p>

          <div class="row row--title-flex mb-40">
            <div class="col-lg-1 col-sm-2 esquina text-right"><a class="btninicio" href="javascript:void(0)" rel="0"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-inicio.png" style="max-width: 60px;background: #EF504F;padding: 5px 15px" /> </a></div>

            <div class="col-lg-8">
              <p><a class="btninicio" href="javascript:void(0)" rel="0" style="color: #EF504F">Regresar al inicio</a></p>
            </div>
          </div>
        </div>
        <!-- Fin encabezado -->

        <div class="container-fluid">
          <div class="laterales_small">
            <div class="row">
              <div class="col-sm-12 col-lg-4" style="text-align: center">
                <div class="container container--card">
                  <div class="row">
                    <div class="col esquina text-center"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-logro.png" style="max-width: 90px" /></div>
                  </div>

                  <div class="row text-center">
                    <div class="col">
                      <p style="
                  font-size: 3rem;
                  font-family: 'Gotham-Rounded-Bold';
                  color: #174d8c;
                  padding-top: 20px;
                  text-align:center;
                ">Logro del m&oacute;dulo</p>
                    </div>
                  </div>

                  <div class="row text-center">
                    <div class="col">
                      <p style="
                  color: #333;
                  padding-top: 30px;
                  text-align: justify;
                ">Al finalizar el módulo 2, el parcipante
                        idenfica las funciones de las UGEL y
                        DRE, la arculación de los planes
                        instucionales y los documentos de
                        gesón organizacional, según la
                        normava vigente.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-lg-8">
                <div class="row row--pill row--pill-stretch mb-20">
                  <div class="col-md-2 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-multimedia.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-10">
                    <div class="row" style="padding: 15px 0">
                      <div class="col-md-8">
                        <span class="pill-title">Recurso multimedia A</span>
                      </div>
                      <div class="col-md-4">
                        <a class="btn btn-primary" href="https://aula.edutalentos.pe/main/lp/lp_controller.php?action=view&amp;lp_id=1327&amp;cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;isStudentView=true" target="_blank">Revisar</a>
                      </div>
                    </div>
                    <div class="row" style="padding: 15px 0;  border-top: 1px solid #7FA1C3;border-bottom: 1px solid #7FA1C3">
                      <div class="col-md-8">
                        <span class="pill-title">Recurso multimedia B</span>
                      </div>
                      <div class="col-md-4">
                        <a class="btn btn-primary" href="https://aula.edutalentos.pe/main/lp/lp_controller.php?action=view&amp;lp_id=1327&amp;cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;isStudentView=true" target="_blank">Revisar</a>
                      </div>
                    </div>
                    <div class="row" style="padding: 15px 0">
                      <div class="col-md-8">
                        <span class="pill-title">Recurso multimedia C</span>
                      </div>
                      <div class="col-md-4">
                        <a class="btn btn-primary" href="https://aula.edutalentos.pe/main/lp/lp_controller.php?action=view&amp;lp_id=1327&amp;cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;isStudentView=true" target="_blank">Revisar</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row row--pill row--pill-stretch mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-lectura.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-10">
                    <div class="row" style="padding: 15px 0;border-top: 1px solid #7FA1C3;border-bottom: 1px solid #7FA1C3">
                      <div class="col-md-8">
                        <span class="pill-title" style="font-size:2.5rem;">Lecturas M02</span>
                      </div>
                    </div>
                    <div class="row" style="padding: 15px 0">
                      <div class="col-md-8">
                        <span class="pill-title">Lectura A</span>
                      </div>
                      <div class="col-md-4">
                        <a class="btn btn-primary" href="/courses/25001I/document/pdf/lectura_M1_induccion-lideres-gestion-educativa.pdf" target="_blank">Descargar</a>
                      </div>
                    </div>
                    <div class="row" style="padding: 15px 0; border-top: 1px solid #7FA1C3;border-bottom: 1px solid #7FA1C3">
                      <div class="col-md-8">
                        <span class="pill-title">Lectura B</span>
                      </div>
                      <div class="col-md-4">
                        <a class="btn btn-primary" href="/courses/25001I/document/pdf/lectura_M1_induccion-lideres-gestion-educativa.pdf" target="_blank">Descargar</a>
                      </div>
                    </div>
                    <div class="row" style="padding: 15px 0">
                      <div class="col-md-8">
                        <span class="pill-title">Lectura C</span>
                      </div>
                      <div class="col-md-4">
                        <a class="btn btn-primary" href="/courses/25001I/document/pdf/lectura_M1_induccion-lideres-gestion-educativa.pdf" target="_blank">Descargar</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-m1-mas.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Material adicional M02</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="/courses/25001I/document/pdf/material-adicional_m01.pdf" target="_blank">Descargar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-evaluacion.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Evaluaci&oacute;n M02</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="https://aula.edutalentos.pe/main/exercise/overview.php?cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;exerciseId=1374&amp;isStudentView=true" target="_blank">Realizar</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FIN DE SESIÓN 2 --><!-- SESIÓN 3 -->

      <div class="bk1 none" id="section3"><!-- Encabezado -->
        <div class="container-fluid">
          <div class="row no-gutter">
            <div class="col-sm-12"><img alt="" src="img/induccion_lideres_gestion_educativa_cabecera-m1.png" /></div>
          </div>

          <p>&nbsp;</p>

          <div class="row row--title-flex mb-40">
            <div class="col-lg-1 col-sm-2 esquina text-right"><a class="btninicio" href="javascript:void(0)" rel="0"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-inicio.png" style="max-width: 60px;background: #EF504F;padding: 5px 15px" /> </a></div>

            <div class="col-lg-8">
              <p><a class="btninicio" href="javascript:void(0)" rel="0" style="color: #EF504F">Regresar al inicio</a></p>
            </div>
          </div>
        </div>
        <!-- Fin encabezado -->

        <div class="container-fluid">
          <div class="laterales_small">
            <div class="row">
              <div class="col-sm-12 col-lg-4" style="text-align: center">
                <div class="container container--card">
                  <div class="row">
                    <div class="col esquina text-center"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-logro.png" style="max-width: 90px" /></div>
                  </div>

                  <div class="row text-center">
                    <div class="col">
                      <p style="
                  font-size: 3rem;
                  font-family: 'Gotham-Rounded-Bold';
                  color: #174d8c;
                  padding-top: 20px;
                  text-align:center;
                ">Logro del m&oacute;dulo</p>
                    </div>
                  </div>

                  <div class="row text-center">
                    <div class="col">
                      <p style="
                  color: #333;
                  padding-top: 30px;
                  text-align: justify;
                ">Al finalizar el módulo 3, el parcipante
                        idenfica los compromisos de gesón
                        escolar y su organización, según la
                        normava vigente. </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-lg-8">
                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-multimedia.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Recurso multimedia M03</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="https://aula.edutalentos.pe/main/lp/lp_controller.php?action=view&amp;lp_id=1327&amp;cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;isStudentView=true" target="_blank">Revisar</a></div>
                </div>

                <div class="row row--pill row--pill-stretch mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-lectura.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-10">
                    <div class="row" style="padding: 15px 0">
                      <div class="col-md-8">
                        <span class="pill-title">Lectura m03</span>
                      </div>
                      <div class="col-md-4">
                        <a class="btn btn-primary" href="/courses/25001I/document/pdf/lectura_M1_induccion-lideres-gestion-educativa.pdf" target="_blank">Descargar</a>
                      </div>
                    </div>
                    <div class="row" style="padding: 15px 0; border-top: 1px solid #7FA1C3;border-bottom: 1px solid #7FA1C3">
                      <div class="col-md-8">
                        <span class="pill-title">Anexo M03</span>
                      </div>
                      <div class="col-md-4">
                        <a class="btn btn-primary" href="/courses/25001I/document/pdf/lectura_M1_induccion-lideres-gestion-educativa.pdf" target="_blank">Descargar</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-m1-mas.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Material adicional M03</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="/courses/25001I/document/pdf/material-adicional_m01.pdf" target="_blank">Descargar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-evaluacion.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Evaluaci&oacute;n M03</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="https://aula.edutalentos.pe/main/exercise/overview.php?cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;exerciseId=1374&amp;isStudentView=true" target="_blank">Realizar</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FIN DE SESIÓN 3 --><!-- SESIÓN 4 -->

      <div class="bk1 none" id="section4"><!-- Encabezado -->
        <div class="container-fluid">
          <div class="row no-gutter">
            <div class="col-sm-12"><img alt="" src="img/induccion_lideres_gestion_educativa_cabecera-m1.png" /></div>
          </div>

          <p>&nbsp;</p>

          <div class="row row--title-flex mb-40">
            <div class="col-lg-1 col-sm-2 esquina text-right"><a class="btninicio" href="javascript:void(0)" rel="0"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-inicio.png" style="max-width: 60px;background: #EF504F;padding: 5px 15px" /> </a></div>

            <div class="col-lg-8">
              <p><a class="btninicio" href="javascript:void(0)" rel="0" style="color: #EF504F">Regresar al inicio</a></p>
            </div>
          </div>
        </div>
        <!-- Fin encabezado -->

        <div class="container-fluid">
          <div class="laterales_small">
            <div class="row">
              <div class="col-sm-12 col-lg-4" style="text-align: center">
                <div class="container container--card">
                  <div class="row">
                    <div class="col esquina text-center"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-logro.png" style="max-width: 90px" /></div>
                  </div>

                  <div class="row text-center">
                    <div class="col">
                      <p style="
                  font-size: 3rem;
                  font-family: 'Gotham-Rounded-Bold';
                  color: #174d8c;
                  padding-top: 20px;
                  text-align:center;
                ">Logro del m&oacute;dulo</p>
                    </div>
                  </div>

                  <div class="row text-center">
                    <div class="col">
                      <p style="
                  color: #333;
                  padding-top: 30px;
                  text-align: justify;
                ">Al finalizar el módulo 4, el parcipante
                        idenfica los principales aspectos de
                        las etapas del proceso de
                        mantenimiento de locales educavos,
                        según la normava vigente.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-lg-8">
                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-multimedia.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Recurso multimedia M04</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="https://aula.edutalentos.pe/main/lp/lp_controller.php?action=view&amp;lp_id=1327&amp;cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;isStudentView=true" target="_blank">Revisar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-lectura.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Lecturas M04</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="/courses/25001I/document/pdf/lectura_M1_induccion-lideres-gestion-educativa.pdf" target="_blank">Descargar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-m1-mas.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Material adicional M04</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="/courses/25001I/document/pdf/material-adicional_m01.pdf" target="_blank">Descargar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-evaluacion.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Evaluaci&oacute;n M04</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="https://aula.edutalentos.pe/main/exercise/overview.php?cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;exerciseId=1374&amp;isStudentView=true" target="_blank">Realizar</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FIN DE SESIÓN 4 --><!-- SESIÓN 5 -->

      <div class="bk1 none" id="section5"><!-- Encabezado -->
        <div class="container-fluid">
          <div class="row no-gutter">
            <div class="col-sm-12"><img alt="" src="img/induccion_lideres_gestion_educativa_cabecera-m1.png" /></div>
          </div>

          <p>&nbsp;</p>

          <div class="row row--title-flex mb-40">
            <div class="col-lg-1 col-sm-2 esquina text-right"><a class="btninicio" href="javascript:void(0)" rel="0"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-inicio.png" style="max-width: 60px;background: #EF504F;padding: 5px 15px" /> </a></div>

            <div class="col-lg-8">
              <p><a class="btninicio" href="javascript:void(0)" rel="0" style="color: #EF504F">Regresar al inicio</a></p>
            </div>
          </div>
        </div>
        <!-- Fin encabezado -->

        <div class="container-fluid">
          <div class="laterales_small">
            <div class="row">
              <div class="col-sm-12 col-lg-4" style="text-align: center">
                <div class="container container--card">
                  <div class="row">
                    <div class="col esquina text-center"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-logro.png" style="max-width: 90px" /></div>
                  </div>

                  <div class="row text-center">
                    <div class="col">
                      <p style="
                  font-size: 3rem;
                  font-family: 'Gotham-Rounded-Bold';
                  color: #174d8c;
                  padding-top: 20px;
                  text-align:center;
                ">Logro del m&oacute;dulo</p>
                    </div>
                  </div>

                  <div class="row text-center">
                    <div class="col">
                      <p style="
                  color: #333;
                  padding-top: 30px;
                  text-align: justify;
                ">Al finalizar el módulo 5, el parcipante
                        diferencia los sistemas administravos
                        de gesón, para el monitoreo y
                        reporte de datos educavos,
                        considerando las herramientas
                        informácas.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-lg-8">
                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-multimedia.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Recurso multimedia M05</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="https://aula.edutalentos.pe/main/lp/lp_controller.php?action=view&amp;lp_id=1327&amp;cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;isStudentView=true" target="_blank">Revisar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-lectura.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Lecturas M05</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="/courses/25001I/document/pdf/lectura_M1_induccion-lideres-gestion-educativa.pdf" target="_blank">Descargar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-m1-mas.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Material adicional M05</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="/courses/25001I/document/pdf/material-adicional_m01.pdf" target="_blank">Descargar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-evaluacion.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Evaluaci&oacute;n M05</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="https://aula.edutalentos.pe/main/exercise/overview.php?cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;exerciseId=1374&amp;isStudentView=true" target="_blank">Realizar</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FIN DE SESIÓN 5 --><!-- SESIÓN 6 -->

      <div class="bk1 none" id="section6"><!-- Encabezado -->
        <div class="container-fluid">
          <div class="row no-gutter">
            <div class="col-sm-12"><img alt="" src="img/induccion_lideres_gestion_educativa_cabecera-m1.png" /></div>
          </div>

          <p>&nbsp;</p>

          <div class="row row--title-flex mb-40">
            <div class="col-lg-1 col-sm-2 esquina text-right"><a class="btninicio" href="javascript:void(0)" rel="0"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-inicio.png" style="max-width: 60px;background: #EF504F;padding: 5px 15px" /> </a></div>

            <div class="col-lg-8">
              <p><a class="btninicio" href="javascript:void(0)" rel="0" style="color: #EF504F">Regresar al inicio</a></p>
            </div>
          </div>
        </div>
        <!-- Fin encabezado -->

        <div class="container-fluid">
          <div class="laterales_small">
            <div class="row">
              <div class="col-sm-12 col-lg-4" style="text-align: center">
                <div class="container container--card">
                  <div class="row">
                    <div class="col esquina text-center"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-logro.png" style="max-width: 90px" /></div>
                  </div>

                  <div class="row text-center">
                    <div class="col">
                      <p style="
                  font-size: 3rem;
                  font-family: 'Gotham-Rounded-Bold';
                  color: #174d8c;
                  padding-top: 20px;
                  text-align:center;
                ">Logro del m&oacute;dulo</p>
                    </div>
                  </div>

                  <div class="row text-center">
                    <div class="col">
                      <p style="
                  color: #333;
                  padding-top: 30px;
                  text-align: justify;
                ">Al finalizar el módulo 6, el parcipante
                        idenfica los principales aspectos
                        pedagógicos y curriculares, según la
                        normava vigente.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-lg-8">
                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-multimedia.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Recurso multimedia M06</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="https://aula.edutalentos.pe/main/lp/lp_controller.php?action=view&amp;lp_id=1327&amp;cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;isStudentView=true" target="_blank">Revisar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-lectura.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Lecturas M06</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="/courses/25001I/document/pdf/lectura_M1_induccion-lideres-gestion-educativa.pdf" target="_blank">Descargar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-m1-mas.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Material adicional M06</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="/courses/25001I/document/pdf/material-adicional_m01.pdf" target="_blank">Descargar</a></div>
                </div>

                <div class="row row--pill mb-20">
                  <div class="col-md-2 py-5 col--pill-dark"><img alt="" src="img/induccion_a_lideres_en_gestion_educativa-evaluacion.png" style="max-width: 100%;width: 70px;" /></div>

                  <div class="col-md-7 py-5"><span class="pill-title">Evaluaci&oacute;n M06</span></div>

                  <div class="col-md-3 py-5"><a class="btn btn-primary" href="https://aula.edutalentos.pe/main/exercise/overview.php?cidReq=25001I&amp;id_session=0&amp;gidReq=0&amp;gradebook=0&amp;origin=&amp;exerciseId=1374&amp;isStudentView=true" target="_blank">Realizar</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FIN DE SESIÓN 6 --><!-- Modal -->

      <div
        aria-hidden="true"
        aria-labelledby="myModalvideo"
        class="modal fade"
        id="myModalvideo"
        role="dialog"
        style="display: none"
        tabindex="-1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><strong>VIDEO</strong></h4>
            </div>

            <div class="modal-body">
              <div class="row text-center">
                <div class="col-sm-12">
                  <iframe
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen=""
                    frameborder="0"
                    height="500"
                    id="cartoonVideo1"
                    referrerpolicy="strict-origin-when-cross-origin"
                    src="https://www.youtube.com/embed/tXmlMH0wVLs?si=scAjqSBTD4bZJuLS"
                    title="YouTube video player"
                    width="100%"></iframe>

                  <p>&nbsp;</p>
                  <a
                    href="https://aula.edutalentos.pe/courses/25001I/document/pdf/induccion-lideres-ge-presentacion-del-modulo-de-inicio.pdf"
                    target="_blank"><img alt="" src="https://aula.edutalentos.pe/courses/24001I/document/images/20.png" width="250" /></a>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button class="btn btn-danger" data-dismiss="modal" type="button">
                CERRAR
              </button>
            </div>
          </div>
        </div>
      </div>
      <script
        nonce="rja7oYdlwpr9u2bAbmMWxjuCCoxUvUzR9RNGW2yhvoNn7aA=" type="text/javascript">
        $('.bthome').click(function() {
          var rel = $(this).attr('rel');
          if (rel.length > 0) {
            $('#hea1').show();
            $('#hea2').hide();
            $("div[id^='se']").hide();
            $('#' + rel).show();
            console.log(rel);
          }
          $('html, body').animate({
            scrollTop: $('.contenido_curso').offset().top
          }, 1000);

          setTimeout(function() {
            var ht = $('#columnright_' + rel).height();
            $('#columnleft_' + rel).height(ht);
          }, 500);
        });

        $('.sesion').click(function() {
          var rel = $(this).attr('rel');
          if (rel.length > 0) {
            $("div[id^='section']").hide();
            $('#section' + rel).show();
          }
          $('html, body').animate({
            scrollTop: $('.contenido_curso').offset().top
          }, 1000);
        });

        $('.btninicio').click(function() {
          var rel = $(this).attr('rel');
          if (rel.length > 0) {
            $("div[id^='section']").hide();
            $('#section' + rel).show();
          }
          $('html, body').animate({
            scrollTop: $('.contenido_curso').offset().top
          }, 1000);
        });

        /* TABULADOR */
        var acc = document.getElementsByClassName('accordion');
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener('click', function() {
            this.classList.toggle('active');
            var panel = this.nextElementSibling;
            if (panel.style.display === 'block') {
              panel.style.display = 'none';
            } else {
              panel.style.display = 'block';
            }
          });
        }

        var url1 = $('#cartoonVideo1').attr('src');
        var url2 = $('#cartoonVideo2').attr('src');

        $('#myModalvideo').on('hide.bs.modal', function() {
          $('#cartoonVideo1').attr('src', '');
        });
        $('#myModalvideo').on('show.bs.modal', function() {
          $('#cartoonVideo1').attr('src', url1);
        });

        $('#myModalvideodes1').on('hide.bs.modal', function() {
          $('#cartoonVideo2').attr('src', '');
        });
        $('#myModalvideodes1').on('show.bs.modal', function() {
          $('#cartoonVideo2').attr('src', url2);
        });

        /* DESACTIVAR ZOOM DEL NAVEGADOR - TECLADO */
        document.addEventListener('keydown', function(e) {
          if (
            e.ctrlKey &&
            (e.keyCode == '61' ||
              e.keyCode == '107' ||
              e.keyCode == '173' ||
              e.keyCode == '109' ||
              e.keyCode == '187' ||
              e.keyCode == '189')
          ) {
            e.preventDefault();
          }
        });
        /* DESACTIVAR ZOOM DEL NAVEGADOR - MOUSE */
        document.addEventListener(
          'wheel',
          function(e) {
            if (e.ctrlKey) {
              e.preventDefault();
            }
          }, {
            passive: false
          }
        );
      </script>

      <?php
      include 'footer.php';
      ?>