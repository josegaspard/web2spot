<div class="our-packs">
    <div class="container">
        <div class="our-packs__title"><?php the_sub_field('title') ?></div>
        <div class="our-packs__plans">
            <?php if (have_rows('plans')) {
                while (have_rows('plans')) {
                    the_row(); ?>
            <div class="our-packs__plans__item <?php
                                                        $image = get_sub_field('isSpot');
                                                        if ($image) : ?> active <?php endif; ?>">
                <?php
                        $image = get_sub_field('isSpot');
                        if ($image) : ?>
                <span>Recomendado</span>
                <?php endif; ?>
                <h3>Plan <strong><?php the_sub_field('title') ?></strong></h3>
                <h4><?php the_sub_field('before') ?> <strong>S/<?php the_sub_field('mount') ?></strong>
                    <?php the_sub_field('after') ?></h4>
                <div class="our-packs__plans__item__text">
                    <?php the_sub_field('text') ?>
                </div>
            </div>
            <?php }
            } ?>
        </div>
    </div>
</div>