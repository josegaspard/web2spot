<div class="plans-service">
    <div class="container">
        <div class="plans-service__title"><?php the_sub_field('title')?></div>
        <div class="plans-service__description"><?php the_sub_field('description_service')?></div>
        <div class="plans-service-slider owl-carousel owl-theme">
        <?php if (have_rows('plans')) {
            while (have_rows('plans')) {
                the_row(); ?>
            <div class="plans-service-slider__item <?php
                    $image = get_sub_field('isSpot');
                    if ($image) : ?> active <?php endif; ?>">
            <?php
                    $image = get_sub_field('isSpot');
                    if ($image) : ?>
                        <span>Recomendado</span>
                    <?php endif; ?>
                <h3>Plan <strong><?php the_sub_field('title')?></strong></h3>
                <h4><?php the_sub_field('before')?> <strong><?php the_sub_field('mount')?></strong> <?php the_sub_field('after')?></h4>
                <div class="plans-service-slider__item__text">
                    <div class="plans-service-slider__item__text__old">
                    <?php the_sub_field('old')?>
                    </div>
                    <?php the_sub_field('text')?>
                </div>
				<button class="btnCotiza btn__primary">Solicítalo aquí</button>
            </div>
            <?php }} ?>
        </div>
        <div class="plans-service__details"><?php the_sub_field('details_services')?></div>
    </div>
</div>