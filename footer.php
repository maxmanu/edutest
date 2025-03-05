</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</section>

<footer class="aFooter aPt-30 aPb-30" style="background: #2d3235">
  <div class="container aTa-c">
    <div class="aBdib-m aTa-c">
      <p><i class="fa fa-envelope-o"></i> edutalentos@minedu.gob.pe</p>
      <p><i class="fa fa-phone"></i> (511) 615-5818</p>
    </div>
    <p class="aMb-0">Copyright © 2018 Edutalentos.pe. Todos los derechos reservados - Ministerio de Educación</p>
  </div>
</footer>

<div
  class="modal fade"
  id="expand-image-modal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="expand-image-modal-title"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="expand-image-modal-title">&nbsp;</h4>
      </div>
      <div class="modal-body"></div>
    </div>
  </div>
</div>
<div
  class="modal fade"
  id="global-modal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="global-modal-title"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="global-modal-title">&nbsp;</h4>
      </div>
      <div class="modal-body"></div>
    </div>
  </div>
</div>

<div id="aPopup-Validacion" class="aPopup-Registro zoom-anim-dialog aPopup-content mfp-hide"></div>

<script>
  $(document).ready(function() {
    $('input[type="text"]').attr('autocomplete', 'off');

    $('[data-toggle=popover]').each(function(i, obj) {
      $(this).popover({
        html: true,
        content: function() {
          var id = $(this).attr('id');
          return $('#popover-content-' + id).html();
        },
      });
    });

    // Date time settings.
    moment.locale('es');
    $.datepicker.setDefaults($.datepicker.regional['es']);
    $.datepicker.regional['local'] = $.datepicker.regional['es'];

    // Chosen select
    $('.chzn-select').chosen({
      disable_search_threshold: 10,
      no_results_text: 'No\x20se\x20han\x20encontrado\x20resultados\x20en\x20la\x20b\u00FAsqueda',
      placeholder_text_multiple: 'Seleccione\x20alguna\x20opci\u00F3n',
      placeholder_text_single: 'Elegir\x20una\x20opci\u00F3n',
      width: '100%',
    });

    // Bootstrap tabs.
    $('.tab-wrapper a').click(function(e) {
      e.preventDefault();
      $(this).tab('show');
    });

    // Fixes bug when loading links inside a tab.
    $('.tab-wrapper .tab-pane a').unbind();

    $('.advanced_options').on('click', function(event) {
      event.preventDefault();
      var id = $(this).attr('id') + '_options';
      var button = $(this);
      $('#' + id).toggle();
    });

    $('.advanced_options_open').on('click', function(event) {
      event.preventDefault();
      var id = $(this).attr('rel');
      $('#' + id).show();
    });

    $('.advanced_options_close').on('click', function(event) {
      event.preventDefault();
      var id = $(this).attr('rel');
      $('#' + id).hide();
    });

    // Adv multi-select search input.
    $('.select_class_filter').each(function() {
      var inputId = $(this).attr('id');
      inputId = inputId.replace('-filter', '');
      $('#' + inputId).filterByText($('#' + inputId + '-filter'));
    });

    $('.jp-jplayer audio').addClass('skip');

    // Mediaelement
    if (1 == 1) {
      jQuery('video:not(.skip), audio:not(.skip)').mediaelementplayer( /* Options */ );
    }

    // Table highlight.
    $('form .data_table input:checkbox').click(function() {
      if ($(this).is(':checked')) {
        $(this).parentsUntil('tr').parent().addClass('row_selected');
      } else {
        $(this).parentsUntil('tr').parent().removeClass('row_selected');
      }
    });

    /* For non HTML5 browsers */
    if ($('#formLogin'.length > 1)) {
      $('input[name=login]').focus();
    }

    // Tool tip (in exercises)
    var tip_options = {
      placement: 'right',
    };
    $('.boot-tooltip').tooltip(tip_options);
    var more = 'Ver\x20m\u00E1s';
    var close = 'Cerrar';
    $('.list-teachers').readmore({
      speed: 75,
      moreLink: '<a href="#">' + more + '</a>',
      lessLink: '<a href="#">' + close + '</a>',
      collapsedHeight: 35,
      blockCSS: 'display: block; width: 100%;',
    });

    var rutac = $(location).attr('href');
    var ruta = $(location).attr('pathname');
    if (rutac == 'http://aula.edutalentos.pe/index.php#registro') {
      jQuery(window).load(function() {
        jQuery.magnificPopup.open({
            items: {
              src: '#aPopup-Registro'
            },
            type: 'inline',
          },
          0
        );
      });
    }
  });

  try {
    document.getElementById('lost_password_user').autocomplete = 'off';
    document.getElementById('lost_password_captcha').autocomplete = 'off';
  } catch (error) {}

  try {
    document.getElementById('login').autocomplete = 'off';
    document.getElementById('password').autocomplete = 'off';
  } catch (error) {}

  try {
    document.getElementById('formLogin_login').autocomplete = 'off';
    document.getElementById('formLogin_password').autocomplete = 'off';
  } catch (error) {}
</script>
</div>
</body>

</html>