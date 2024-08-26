<?php echo $__env->first([
'laravel-usp-theme::partials.skins.'.strtolower($skin).'.footer',
'laravel-usp-theme::partials.skins.uspdev.footer',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/lucas/curso/meu_laravel/vendor/uspdev/laravel-usp-theme/src/../resources/views/partials/skin_footer_loader.blade.php ENDPATH**/ ?>