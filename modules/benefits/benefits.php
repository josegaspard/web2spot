<div class="benefits">
    <?php include("top-wave.php"); ?>
    <div class="left">
        <h2> <?php the_sub_field('title'); ?>
        </h2>
    </div>
    <div class="right">
        <p class="text__principal"> <?php the_sub_field('text'); ?></p>
        <section class="grid">
            <?php if (have_rows('benefits')) {
                while (have_rows('benefits')) {
                    the_row(); ?>
            <article class="benefit">
                <img src="<?php the_sub_field('img'); ?>" alt="beneficios">
                <p><?php the_sub_field('text'); ?></p>
            </article>
            <?php }
            } ?>
        </section>

    </div>
</div>