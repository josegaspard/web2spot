<div class="strategies">
    <div class="container">
        <header>
            <h2 class="strategies__title"><?php the_sub_field("title") ?></h2>
        </header>
        <section class="strategies__column">
            <?php if (have_rows('strategies')) {
                while (have_rows('strategies')) {
                    the_row(); ?>
            <article class="strategies__item">
                <header>
                    <h3 class="strategies__item__title"><?php the_sub_field("title") ?></h3>
                </header>
                <p class="strategies__item__text"><?php the_sub_field("text") ?></p>
                <img class="strategies__item__img" src="<?php the_sub_field("img") ?>"
                    alt="<?php the_sub_field("title") ?>">
            </article>
            <?php }
            } ?>
        </section>
        <p class="final-message"><?php the_sub_field("final-message") ?></p>
    </div>
</div>