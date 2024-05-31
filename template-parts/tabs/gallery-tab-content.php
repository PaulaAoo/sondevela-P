<?php
    $gallery = get_field('gallery_tab');
    if($gallery):
?>

<div class="gallery_tab">
    <?php foreach($gallery as $image) : ?>
        <img class="grid-item" src="<?=$image?>">
    <?php endforeach; ?>
</div>
<?php endif; ?>