<?php $__env->startSection('skin_styles'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('skin_styles'); ?> 
<style>
    /* #skin_login_bar é o div pai */
    #skin_login_bar {
        display: block;
        background-image: url("<?php echo e(asset('/vendor/laravel-usp-theme/skins/uspdev/images/bg-headtop.gif')); ?>");
        font-size: 15px;
        color: #FFFFFF;
        padding-top: 12px;
        margin-bottom: 5px;
    }

    /* .login_logout_link formata os links correspondentes que estão nos includes */
    #skin_login_bar .login_logout_link {
        color: #FFFFFF !important;
        text-decoration: none !important;
        font-weight: bold;
        padding-left: 5px;
        padding-right: 10px;
    }

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('skin_login_bar'); ?>

<div class="text-right">
    <?php if(auth()->guard()->check()): ?>
        <?php echo e(Auth::user()->name); ?> - <?php echo e(Auth::user()->email); ?> |
        <?php echo $__env->make('laravel-usp-theme::partials.login_bar.logout_link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        Não autenticado |
        <?php echo $__env->make('laravel-usp-theme::partials.login_bar.login_link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php /**PATH /home/lucas/curso/meu_laravel/vendor/uspdev/laravel-usp-theme/src/../resources/views/partials/skins/uspdev/login_bar.blade.php ENDPATH**/ ?>