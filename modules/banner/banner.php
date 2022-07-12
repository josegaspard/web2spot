<div class="banner" style="background-color:<?php the_sub_field('color') ?>;">

    <?php $image = get_sub_field('img');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

</div>