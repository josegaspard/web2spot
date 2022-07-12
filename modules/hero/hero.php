<section class="hero">
    <div class="hero-container owl-carousel owl-theme">
        <?php if (have_rows('sliderhero')) {
            while (have_rows('sliderhero')) {
                the_row(); ?>
        <div class="hero-item" style="background-color:<?php the_sub_field('color') ?>">
            <div class="hero-item__img">
                <?php
                        $image = get_sub_field('imagen_de_escritorio');
                        if (!empty($image)) : ?>
                <img class="hide-on-small-only" src="<?php echo esc_url($image['url']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <?php
                        $image = get_sub_field('imagen_de_mobile');
                        if (!empty($image)) : ?>
                <img class="hide-tablet-on-up " src="<?php echo esc_url($image['url']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>

            <div class="hero-item__content container <?php the_sub_field('typetext') ?>">
                <div data-aos="fade-up"><?php the_sub_field("texto") ?></div>
                <div class="hero-item__content-buttons      <?php $form = get_sub_field('form');
                                                                    if ($form) : ?>two-buttons <?php endif; ?>">
                    <?php
                            $form = get_sub_field('form');
                            if ($form) :

                            ?>
                    <button class="btnCotiza" data-form="">Solicitar</button>
                    <?php endif; ?>
                    <?php
                            $link = get_sub_field('boton');
                            $hayboton = get_sub_field('hay_boton');
                            if ($hayboton) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                    <a href="<?php echo esc_url($link_url); ?>"
                        target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php }
        } ?>
    </div>
    <div class="vermas">
        <?php
        $link = get_sub_field('ver_mas');
        if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
            <span></span>
            <?php echo esc_html($link_title); ?>
        </a>
        <?php endif; ?>
    </div>
</section>