<li>Título: <input type="text" name="titulo" value="<?php echo e(old('titulo',$livro->titulo)); ?>"></li>
<li>Autor: <input type="text" name="autor" value="<?php echo e(old('autor',$livro->autor)); ?>"></li>
<li>Isbn: <input type="text" class="isbn" name="isbn" value="<?php echo e(old('isbn',$livro->isbn)); ?>"></li>

<button type="submit"> Enviar </button><?php /**PATH /home/lucas/curso/meu_laravel/resources/views/livros/partials/form.blade.php ENDPATH**/ ?>