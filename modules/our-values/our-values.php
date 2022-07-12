<div class="our-values">
    <!-- <div class="triangle triangle--superior"></div> -->
    <svg class="wave wave--top" viewBox="0 0 1440 95" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M1440 88.3999C1314.25 5.05573 1011.93 -42.7465 590.328 64.2992C275.663 144.193 37.0625 45.4651 0 23.0821V0.5H720H1440V88.3999Z"
            fill="white" />
    </svg>
    <svg class="wave wave--bottom" viewBox="0 0 1461 102" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M1461 101.13C1290.5 -28.6872 1032.93 -30.0159 611.328 77.0298C294.5 124.313 37.0625 72.383 0 50V101.13H720H1440H1461Z"
            fill="white" />
    </svg>


    <div class="container">
        <div class="our-values__title"><?php the_sub_field('title') ?></div>
        <div class="our-values__values">
            <?php if (have_rows('values')) {
                while (have_rows('values')) {
                    the_row(); ?>
            <div class="our-values__values__item recort">
                <img src="<?php the_sub_field('img') ?>" alt="">
                <p><?php the_sub_field('text') ?></p>
            </div>
            <?php }
            } ?>
        </div>
    </div>
    <!-- <div class="triangle triangle--inferior"></div> -->
</div>