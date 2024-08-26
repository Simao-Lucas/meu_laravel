
<?php $__env->startSection('styles'); ?>
  <?php if (! $__env->hasRenderedOnce('46974b45-0e36-4851-bbe2-564ac12294a0')): $__env->markAsRenderedOnce('46974b45-0e36-4851-bbe2-564ac12294a0'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>
    <style>
      /* Fixando card header no top quando scrool */
      .card-header-sticky {
        position: -webkit-sticky;
        position: sticky !important;
        top: 0;
        z-index: 100;
        background-color: #F0F0F0;
      }
    </style>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php /**PATH /home/lucas/curso/meu_laravel/vendor/uspdev/laravel-usp-theme/src/../resources/views/blocos/sticky.blade.php ENDPATH**/ ?>