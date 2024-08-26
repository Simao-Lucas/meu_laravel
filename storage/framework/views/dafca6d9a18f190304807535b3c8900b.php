<ul>
    <li><a href="/livros/<?php echo e($livro->id); ?>"><?php echo e($livro->titulo ?? ''); ?></a></li>
    <li><?php echo e($livro->autor ?? ''); ?></li>
    <li><?php echo e($livro->isbn ?? ''); ?></li>
    <li><a href="/livros/<?php echo e($livro->id); ?>/edit">Editar</a></li>
    <li>
    <form action="/livros/<?php echo e($livro->id); ?> " method="post">
      <?php echo csrf_field(); ?>
      <?php echo method_field('delete'); ?>
      <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
    </form>
  </li> 
</ul>
<?php /**PATH /home/lucas/curso/meu_laravel/resources/views/livros/partials/fields.blade.php ENDPATH**/ ?>