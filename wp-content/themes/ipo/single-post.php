<?php get_header(); ?>

<section class="container pagina-post pagina">

	<div class="row head">
		<h2 class="title orange">
			<?php the_title(); ?>
		</h2>
	</div>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">
			<?php echo $post->post_content; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>