

<?php $__env->startSection('styles'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>
  <style>
    .datatable-simples,
    .dataTables_info {
      padding-top: 3px !important;
      padding-bottom: 3px !important;
      padding-left: 8px !important;
      padding-right: 8px !important;
    }
  </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts_bottom'); ?>
  <?php if (! $__env->hasRenderedOnce('cde35133-3525-4669-aaa5-139e258d7480')): $__env->markAsRenderedOnce('cde35133-3525-4669-aaa5-139e258d7480'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('javascripts_bottom'); ?>
    <script>
      jQuery(function() {

        var datatableSimples = $('.datatable-simples')

        // verifica se tem fixed header
        let dtFixedHeader = (datatableSimples.hasClass('dt-fixed-header')) ? true : false

        // verifica se tem paginação
        let dtPaging = -1
        let dtPageLength = -1
        if (datatableSimples.hasClass('dt-paging-10')) {
          dtPaging = true
          dtPageLength = 10
        }
        if (datatableSimples.hasClass('dt-paging-50')) {
          dtPaging = true
          dtPageLength = 50
        }
        // ajusta o dom para mostrar menu de paginação se necessário
        let dtDom = (dtPaging == -1) ?
          '<"row"<"col-md-12 form-inline"<"mr-2"f>B<"ml-3 border rounded border-info"i>>>t' :
          '<"row"<"col-md-12 form-inline"<"mr-2"f>B<"ml-2 btn-sm"p><"ml-3 border rounded border-info"i>>>t'

        // verifica se tem botões
        let dtButtons = []
        if (datatableSimples.hasClass('dt-buttons')) {

          let pdfButton = ''
          if (datatableSimples.hasClass('dt-buttons-pdf')) {
            pdfButton = {
              extend: 'pdfHtml5',
              className: 'btn btn-sm btn-outline-primary'
            }
          }

          if (datatableSimples.hasClass('dt-buttons-pdf-landscape')) {
            pdfButton = {
              extend: 'pdfHtml5',
              className: 'btn btn-sm btn-outline-primary',
              text: 'PDF-L',
              orientation: 'landscape'
            }
          }

          excelButton = [{
            extend: 'excelHtml5',
            className: 'btn btn-sm btn-outline-primary'
          }, {
            extend: 'csvHtml5',
            className: 'btn btn-sm btn-outline-primary'
          }]

          excelButton.push(pdfButton)

          dtButtons = {
            buttons: excelButton,
            dom: {
              button: {
                className: 'btn'
              }
            }
          }
        }

        // vamos inicializar o datatable
        datatableSimples.DataTable({
          dom: dtDom,
          order: [],
          paging: false,
          lengthChange: false,
          searching: true,
          ordering: true,
          info: true,
          fixedHeader: dtFixedHeader,
          autoWidth: false,
          lengthMenu: [
            [10, 25, 50, 100, -1],
            ['10 linhas', '25 linhas', '50 linhas', '100 linhas', 'Mostar todos']
          ],
          paging: dtPaging,
          pageLength: dtPageLength,
          stateSave: false,
          language: {
            search: '',
            searchPlaceholder: 'Pesquisar ..'
          },
          buttons: dtButtons,
        })
      })
    </script>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php /**PATH /home/lucas/curso/meu_laravel/vendor/uspdev/laravel-usp-theme/src/../resources/views/blocos/datatable-simples.blade.php ENDPATH**/ ?>