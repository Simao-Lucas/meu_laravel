<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php $__env->startSection('title'); ?><?php echo e($title); ?><?php echo $__env->yieldSection(); ?></title>

        <base href="<?php echo e($app_url); ?>/">

        <link rel="canonical" href="https://github.com/uspdev/laravel-usp-theme">

        
        <?php echo $__env->make('laravel-usp-theme::partials.partials_loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Estilos do tema e das bibliotecas internas -->
        <?php echo $__env->yieldContent('styles_default'); ?>

        <!-- Estilos do skin -->
        <?php echo $__env->yieldContent('skin_styles'); ?>

        <!-- Estilos da aplicação -->
        <?php echo $__env->yieldContent('styles'); ?>
    </head>

    <body>
        <div id="skin_header" class="<?php echo e($container); ?>"> 
            <?php echo $__env->yieldContent('skin_header'); ?>
        </div>

        <div id="skin_login_bar" class="<?php echo e($container); ?>"> 
            <?php echo $__env->yieldContent('skin_login_bar'); ?>
        </div>

        <div id="menu" class="<?php echo e($container); ?>"> 
            <?php echo $__env->yieldContent('menu'); ?>
        </div>

        <div class="<?php echo e($container); ?>">
            <div class="row">
                <div id="content" class="col-md-12">
                <?php $__env->startSection('flash'); ?>
                    <?php echo $__env->renderWhen(config('laravel-usp-theme.mensagensFlash'),'laravel-usp-theme::partials.content_flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
                <?php echo $__env->yieldSection(); ?>
                <?php $__env->startSection('content'); ?>
                    
                    <?php echo $__env->make('laravel-usp-theme::partials.content_sample', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldSection(); ?>
            </div>
        </div>
    </div>

    <div id="skin_footer" class="<?php echo e($container); ?>"> 
        <?php echo $__env->yieldContent('skin_footer'); ?>
    </div>

    <!-- Bibliotecas js do tema e das bibliotecas internas -->
    <?php echo $__env->yieldContent('javascripts_default'); ?>

    <!-- Bibliotecas js da aplicação -->
    <?php echo $__env->yieldContent('javascripts_bottom'); ?>

</body>

</html>
<?php /**PATH /home/lucas/curso/meu_laravel/vendor/uspdev/laravel-usp-theme/src/../resources/views/master.blade.php ENDPATH**/ ?>