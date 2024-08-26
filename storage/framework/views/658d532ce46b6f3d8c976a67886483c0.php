<?php echo $__env->make('laravel-usp-theme::blocos.sticky', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('laravel-usp-theme::blocos.spinner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('laravel-usp-theme::blocos.datatable-simples', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->startSection('title'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>
  <style>
    /*seus estilos*/
  </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts_bottom'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('javascripts_bottom'); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/livro.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('laravel-usp-theme::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucas/curso/meu_laravel/resources/views/layouts/app.blade.php ENDPATH**/ ?>