<div class="menu-premium">
    <?php $menu_premium = get_field('menu_premium'); ?>

    <?php if($menu_premium): ?>

    <div class="menu-a">
        <h3><?=__('Opción A', 'sondevela');?></h3>
        <span><?=__('MENÚ BÁSICO', 'sondevela');?></span>
        <?=$menu_premium['menu_a']?>
    </div>
    <div class="menu-b">
        <h3><?=__('Opción B', 'sondevela');?></h3>
        <span><?=__('MENÚ PREMIUM', 'sondevela');?></span>
        <?=$menu_premium['menu_b']?>
    </div>
    <?php endif; ?>
</div>