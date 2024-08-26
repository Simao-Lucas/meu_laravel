
<?php $__env->startSection('javascripts_bottom'); ?>
  <?php if (! $__env->hasRenderedOnce('6716da87-0517-4829-b1fb-084ecca2587d')): $__env->markAsRenderedOnce('6716da87-0517-4829-b1fb-084ecca2587d'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('javascripts_bottom'); ?>
    <script>
      jQuery(function() {

        spinnerRun = function(btn) {
          if (!btn.data('text-spinner')) { // salvando o conteúdo do botão
            btn.data('text-spinner', btn.html())
          }
          btn.addClass('disabled').prop('disabled', true) // desativando depois de clicar
          btn.html( // add spinner to button
            `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ` +
            'Carregando'.substring(0, btn.data('text-spinner').length - 3) + '..' //limita o tamanho do texto
          )
          btn.closest('form').submit() // se for botão de submit de form vamos disparar
        }

        spinnerRestore = function(btn = null) {
          if (btn == null) { // se nao for passado botao, vamos aplicar a todos os spinners com dados salvos
            $('.btn-spinner, .spinner').each(function() {
              let btn = $(this)
              if (btn.data('text-spinner')) { // se houver conteúdo salvo, vamos restaurar e reativar
                btn.html(btn.data('text-spinner'))
                btn.removeClass('disabled').prop('disabled', false)
              }
            })
          } else { // se foi passado um botao, vamos aplicar somente nele
            if (btn.data('text-spinner')) {
              btn.html(btn.data('text-spinner'))
              btn.removeClass('disabled')
            }
          }
        }

        // ao clicar no botão/link: salva conteúdo, adiciona spinner, desativa, submete form
        $('.btn-spinner, .spinner').on('click', function() {
          spinnerRun($(this))
        })

        // restaurando ao mostrar a página, inclusive quando clicak em back no navegador
        $(window).bind('pageshow', function(event) {
          spinnerRestore()
        });

      })
    </script>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php /**PATH /home/lucas/curso/meu_laravel/vendor/uspdev/laravel-usp-theme/src/../resources/views/blocos/spinner.blade.php ENDPATH**/ ?>