
<div class="nav-item">
    <a class="nav-link dropdown-toggle <?php echo e($item['class']); ?>" href="#" id="navbarDropdown<?php echo e(preg_replace('/[^\w\d]+/', '', $item['text'])); ?>"
        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $item['text']; ?>

    </a>
    <div class="dropdown">
        <div class="dropdown-menu <?php echo e($item['align']); ?>" aria-labelledby="navbarDropdown<?php echo e(preg_replace('/[^\w\d]+/', '', $item['text'])); ?>">
            <?php $__currentLoopData = $item['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(isset($submenu_item['can'])): ?>
                    <?php if(Gate::check($submenu_item['can'])): ?>
                        <?php echo $__env->make('laravel-usp-theme::partials.menu.dropdown_item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                <?php else: ?>
                    <?php echo $__env->make('laravel-usp-theme::partials.menu.dropdown_item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /home/lucas/curso/meu_laravel/vendor/uspdev/laravel-usp-theme/src/../resources/views/partials/menu/submenu.blade.php ENDPATH**/ ?>