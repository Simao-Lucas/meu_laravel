
<?php echo $__env->make('laravel-usp-theme::partials.assets_default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('laravel-usp-theme::partials.skin_header_loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('laravel-usp-theme::partials.skin_login_bar_loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('laravel-usp-theme::partials.skin_footer_loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php if(env('USP_THEME_SKIN') == 'fflch'): ?>
  <?php echo $__env->make('laravel-usp-theme::partials.skin_menu_loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php echo $__env->make('laravel-usp-theme::partials.menu.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('styles_default'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('styles_default'); ?>
<link rel="stylesheet" href="<?php echo e(asset('/vendor/laravel-usp-theme/css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascripts_default'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('javascripts_default'); ?>
<script type="text/javascript" src="<?php echo e(asset('/vendor/laravel-usp-theme/js/script.js')); ?>"></script>
<?php $__env->stopSection(); ?><?php /**PATH /home/lucas/curso/meu_laravel/vendor/uspdev/laravel-usp-theme/src/../resources/views/partials/partials_loader.blade.php ENDPATH**/ ?>