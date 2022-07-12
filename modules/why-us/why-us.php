<div class="why-us">
    <div class="container">
        <div class="why-us__text">
            <div id="titulo-2">
                <?php the_sub_field('title') ?>
            </div>
            <?php the_sub_field('text') ?>
        </div>
    </div>
    <div class="why-us__img owl-carousel owl-theme">
        <div class="why-us__img__item" style="background:url(<?php the_sub_field('imgOne') ?>)"></div>
        <div class="why-us__img__item" style="background:url(<?php the_sub_field('imgTwo') ?>)"></div>
    </div>

</div>