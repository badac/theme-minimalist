<div class="item record col-sm-1 col-md-4">
    <?php
    $title = metadata($item, 'display_title');
    $description = metadata($item, array('Dublin Core', 'Description'), array('snippet' => 150));
    ?>
    <h3><?php echo link_to($item, 'show', $title); ?></h3>
    <?php if (metadata($item, 'has files')) {
        echo link_to_item(
            item_image('square_thumbnail', array('class' => 'img-fluid'), 0, $item),
            array('class' => 'image'), 'show', $item
        );
    }
    ?>
    <?php if ($description): ?>
        <p class="item-description"><?php echo $description; ?></p>
    <?php endif; ?>
</div>