<?php if(isset($item['url'])): ?>
  <a class="nav-link nav-item <?php echo e($item['class']); ?>" href="<?php echo e($item['url']); ?>" title="<?php echo e($item['title']); ?>"
    target="<?php echo e($item['target']); ?>">
    <?php echo $item['text']; ?>

  </a>
<?php else: ?>
  <span class="nav-link nav-item <?php echo e($item['class']); ?>" title="<?php echo e($item['title']); ?>" target="<?php echo e($item['target']); ?>">
    <?php echo $item['text']; ?>

  </span>
<?php endif; ?>
<?php /**PATH /home/lucas/curso/meu_laravel/vendor/uspdev/laravel-usp-theme/src/../resources/views/partials/menu/item.blade.php ENDPATH**/ ?>