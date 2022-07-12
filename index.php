<?php get_header(); ?>
<style>
.site-header.active,
.site-header.actived {
    box-shadow: none;

    border-bottom: 1px solid white;
}
</style>
<?php include('menu.php') ?>
<div class="blog">
    <?php $args = array(
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
    ); ?>
    <?php $family = new WP_Query($args); ?>
    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
    <?php while ($family->have_posts()) : $family->the_post(); ?>
    <div class="articulo-principal">
        <div class="articulo-principal__text" data-aos="fade-right">
            <span><?php the_date(); ?></span>
            <h1><?php the_title(); ?></h1>
            <p class=""><?php excerptContent('15'); ?></p>
            <a href="<?php the_permalink() ?>">Leer más </a>
        </div>
        <!-- <div class="triangle">
        </div> -->
        <svg class="wave wave--bottom" viewBox="0 0 1441 211" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1091.21 123.251C1241.81 137.16 1386.35 179.682 1440.31 210.16L720.309 210.16L0.3088 210.16L0.30888 31.6602C32.5772 15.5056 127.683 -18.8334 274.307 14.7509C453.307 55.7509 425.892 98.1618 604.309 132.16C604.309 132.16 652.716 140.697 675.554 142.27C698.366 143.842 728.625 144.428 728.625 144.428C840.248 144.074 921.555 129.266 950.603 123.976L951.675 123.78C977.807 119.024 1064.1 120.747 1091.21 123.251Z"
                fill="white" />
        </svg>

    </div>
    <?php endwhile;
    wp_reset_postdata(); ?>

    <section id="articulos" class="articulos">
        <div class="container">
            <div class="articulos__title">
                <h3>Te recomendamos</h3>
            </div>
            <div class="contenedor-articulos">
                <?php $args = array(
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'offset' => 2,
                    'order' => 'DESC'
                ); ?>
                <?php $family = new WP_Query($args); ?>
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                <?php while ($family->have_posts()) : $family->the_post(); ?>
                <div class="articulos__item row">
                    <a href="<?php the_permalink() ?>"
                        style="position:absolute; display:block; width:100%; height:100%;"></a>
                    <div class="imagen-article" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);"></div>
                    <div class="textos">
                        <div class="detalles">
                            <div class="date"><span><?php the_category() ?> </span> Publicado
                                el:<?php echo get_the_date(); ?></div>
                            <span class="icon-profile"></span>
                        </div>
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    $('.site-header').addClass('actived');
    $('#brand').attr('src', $('#brand').data('brandtwo'))
})
</script>
<?php get_footer(); ?>