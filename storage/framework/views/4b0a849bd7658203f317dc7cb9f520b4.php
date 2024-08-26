<?php echo $__env->first([
'laravel-usp-theme::partials.skins.'.strtolower($skin).'.header',
'laravel-usp-theme::partials.skins.uspdev.header',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/lucas/curso/meu_laravel/vendor/uspdev/laravel-usp-theme/src/../resources/views/partials/skin_header_loader.blade.php ENDPATH**/ ?>