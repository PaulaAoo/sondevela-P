<?php
    $brands = get_field('brands');
?>
<div class="sondevela-section-marcas">
    <div class="container">
        <div class="content">
            <h2 class="title"><?=__('MARCAS QUE YA','sondevela');?></h2>
            <h3 class="subtitle"><?=__('Trabajan con nosotros','sondevela');?></h3>
            <div class="brands">
                <?php
                    foreach($brands as $brand){
                        echo '<img src="'.$brand.'">';
                    }
                ?>
                <img src="" />
            </div>
        </div>
    </div>
</div>

