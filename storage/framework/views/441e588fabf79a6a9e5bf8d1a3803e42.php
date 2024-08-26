<?php $__env->startSection('menu'); ?>

<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3 py-0 border-bottom border-top border-gray">
    
    <?php if(config('laravel-usp-theme.sistemas')): ?> 
    <a class="navbar-brand dropdown-toggle" href="#" data-toggle="dropdown" title="Outros sistemas">
        <i class="fas fa-globe"></i>
    </a>
    <div class="dropdown-menu" role="menu">
        <?php $__currentLoopData = config('laravel-usp-theme.sistemas'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sistema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="dropdown-item" href="<?php echo e($sistema['url']); ?>" target="_<?php echo e($sistema['text']); ?>">
                <?php echo e($sistema['text']); ?>

            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>

    <a class="navbar-brand font-weight-bold" href="<?php echo e($app_url); ?>">
        <?php $__env->startSection('sitename'); ?> <?php echo e($title); ?> <?php echo $__env->yieldSection(); ?>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

        <div class="navbar-nav mr-auto"> 
            <?php echo $__env->make('laravel-usp-theme::partials.menu.itens_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <?php if(isset($right_menu)): ?> 
        <div class="navbar-nav ml-md-auto">
            <?php echo $__env->make('laravel-usp-theme::partials.menu.itens_menu', ['menu' => $right_menu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php endif; ?>
        
    </div>
</nav>

<?php $__env->stopSection(); ?>
<?php /**PATH /home/lucas/curso/meu_laravel/vendor/uspdev/laravel-usp-theme/src/../resources/views/partials/menu/menu.blade.php ENDPATH**/ ?>