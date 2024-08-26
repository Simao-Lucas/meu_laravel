<?php switch($submenu_item['type'] ?? ''):
    case ('header'): ?>
        <div class="dropdown-header"><?php echo $submenu_item['text']; ?></div>
    <?php break; ?>
    <?php case ('divider'): ?>
        <div class="dropdown-divider"></div>
    <?php break; ?>
    <?php default: ?>
        <a class="dropdown-item <?php echo e($submenu_item['class']); ?>" href="<?php echo e($submenu_item['url']); ?>" 
        target="<?php echo e($submenu_item['target']); ?>">
            <?php echo $submenu_item['text']; ?>

        </a>
<?php endswitch; ?>
<?php /**PATH /home/lucas/curso/meu_laravel/vendor/uspdev/laravel-usp-theme/src/../resources/views/partials/menu/dropdown_item.blade.php ENDPATH**/ ?>