<div class="our-clients">
    <?php include __DIR__ . './top-wave.php'; ?>
    <div class="container">
        <div style="margin: -70px 0px 40px 0px;" class="our-clients__title">
            <?php the_sub_field('title') ?>
        </div>
        <div class="our-clients-slider owl-carousel owl-theme">
            <?php if (have_rows('logos')) {
                while (have_rows('logos')) {
                    the_row(); ?>
            <div class="our-clients-slider__item">
                <a href="<?php the_sub_field('link') ?>" class="our-clients-slider__item__link"></a>
                <div class="our-clients-slider__item__img" style="background:url(<?php the_sub_field('img') ?>)"></div>
            </div>
            <?php }
            } ?>
        </div>
    </div>
</div>