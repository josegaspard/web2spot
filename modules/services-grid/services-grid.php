<div class="services-grid">
    <div class="container">
        <section class="grid">
            <?php if (have_rows('services')) {
                while (have_rows('services')) {
                    the_row(); ?>

            <article class="element">
                <img src="<?php the_sub_field("hover") ?>" class="img--hover" alt="">
                <img src="<?php the_sub_field('icon') ?>" alt="" class="element__icon">
                <header>
                    <h2 class="element__title">
                        <?php echo get_sub_field("name"); ?>
                    </h2>
                </header>
                <p class="element__content">
                    <?php echo get_sub_field("description"); ?>
                </p>
                <div class="services-grid__links">
                    <?php if (is_array(get_sub_field("links")) && sizeof(get_sub_field("links")) > 0) {
                                $links = get_sub_field("links");
                                foreach ($links as $link) { ?>
                    <div class="services-grid__link">
                        <span class="name"><?php echo $link["link"]["title"]; ?></span>
                        <a href="<?php echo $link["link"]["url"]; ?>">
                            <div class="line"></div>
                            Ver más
                        </a>
                    </div>
                    <?php }
                            } else { ?>
                    <div class="services-grid__link">
                        <a href="<?php echo get_sub_field("main_link")["url"]; ?>">
                            <div class="line"></div> Ver más
                        </a>
                    </div>

                    <?php } ?>
                </div>
            </article>
            <?php }
            } ?>
        </section>
    </div>
</div>