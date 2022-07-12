<div class="bg-description" style="background:url(<?php the_sub_field('img'); ?>)">
    <div class="overlay" style="background-color:<?php the_sub_field('color'); ?>"></div>
    <div class="container">
        <div class="side">
            <img class="side__img-flank" src="<?php the_sub_field('img-flank') ?>" alt="">
        </div>
        <div class="side side--img-side">
            <?php the_sub_field('text'); ?>
            <button class="btnCotiza btn__primary">
                <p>Solicítalo aquí</p>
            </button>
        </div>

    </div>
</div>