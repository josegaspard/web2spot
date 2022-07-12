<?php
    /*
    Template Name: Privacy
    */
?>

<?php get_header(); ?>
<?php include('menu.php')?>
<style>
	body{
		background: white;
	}
    .site-header.active, .site-header.actived{
        box-shadow:none;

        border-bottom:1px solid white;
    }
</style>
<div class="single" >
		<?php while(have_posts() ): the_post(); ?>
			<?php global $post;
			$thumbID = get_post_thumbnail_id( $post->ID );
			$imgDestacada = wp_get_attachment_url( $thumbID );?>

			<div class="container">
				<div class="single-principal">
					<div class="single-principal__text">
						<div class="single-principal__text__category">
						<?php the_category(); ?>
						</div>
						<h1 data-aos="fade-up" data-aos-offset="100"><?php the_title();?></h1>

					</div>
					<div class="single-principal__img">
						<img src="<?php echo $imgDestacada;?>" alt="">
					</div>
					<div class="single-principal__content">
						<?php the_content();?>
					</div>
				</div>


		</div>
	</div>
</div>
	<?php endwhile; ?>
	<script>
	document.addEventListener('DOMContentLoaded', function(){
		$('.site-header').addClass('actived');
		$('#brand').attr('src', $('#brand').data('brandtwo'))
	})
</script>
<?php get_footer(); ?>