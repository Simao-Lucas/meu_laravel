<ul>
    <li><?php echo e($livro->titulo ?? 'Livro não cadastrado.'); ?></li>
    <li><?php echo e($livro->autor ?? ''); ?></li>
    <li><?php echo e($livro->isbn ?? ''); ?></li>
</ul>
<?php /**PATH /home/lucas/meu_laravel/resources/views/livros/partials/fields.blade.php ENDPATH**/ ?>