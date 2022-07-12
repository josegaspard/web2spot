<?php get_header(); ?>
<?php include('menu.php') ?>
<style>
body {
    background: white;
}

.site-header.active,
.site-header.actived {
    box-shadow: none;

    border-bottom: 1px solid white;
}
</style>
<div class="single">
    <?php while (have_posts()) : the_post(); ?>
    <?php global $post;
		$thumbID = get_post_thumbnail_id($post->ID);
		$imgDestacada = wp_get_attachment_url($thumbID); ?>

    <div class="container">
        <div class="single-principal">
            <div class="single-principal__text">
                <div class="single-principal__text__category">
                    <?php the_category(); ?>
                </div>
                <h1 data-aos="fade-up" data-aos-offset="100"><?php the_title(); ?></h1>
                <div class="single-principal__text__date">
                    <p><strong></strong> <?php the_date(); ?></p>
                </div>
            </div>
            <div class="single-principal__img">
                <img src="<?php echo $imgDestacada; ?>" alt="">
            </div>
            <div class="single-principal__content">
                <?php the_content(); ?>
            </div>
        </div>


    </div>
    <div class="single-others">
        <div class="container">
            <h3 class="title">Te recomendamos</h3>

            <div class="single-others__container">
                <?php $args = array(
						'posts_per_page' => 3,
						'orderby' => 'date',
						'order' => 'DESC'
					); ?>
                <?php $family = new WP_Query($args); ?>
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                <?php while ($family->have_posts()) : $family->the_post(); ?>
                <div class="single-others__item" data-aos="fade-up" data-aos-offset="100">
                    <img src="<?php echo $url ?>" alt="">
                    <div class="single-others__item__date">
                        <span><?php the_category() ?> </span>
                        Publicado el <?php echo get_the_date(); ?>
                    </div>
                    <div class="texto-noticia">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </div>
                <?php endwhile;
					wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
</div>
</div>
<?php endwhile; ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    $('.site-header').addClass('actived');
    $('#brand').attr('src', $('#brand').data('brandtwo'))
})
</script>
<?php get_footer(); ?>