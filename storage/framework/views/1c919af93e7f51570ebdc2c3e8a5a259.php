<?php $__env->startSection('content'); ?>

    <form method="post" action="/livros">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('livros.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucas/curso/meu_laravel/resources/views/livros/create.blade.php ENDPATH**/ ?>