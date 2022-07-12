<div class="quote">
    <div class="container">
        <div class="quote-slider owl-carousel owl-theme">
        <?php if (have_rows('quotes')) {
            while (have_rows('quotes')) {
                the_row(); ?>
            <div class="quote-slider__item">
                <div class="quote-slider__item__text">
                    <h3 style="font-weight: 700;"><?php the_sub_field('text') ?></h3>
                    <p><?php the_sub_field('from') ?></p>
                </div>
            </div>
            <?php }} ?>
        </div>
    </div>
</div>