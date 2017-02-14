<?php get_header(); ?>

<section class="container pagina-post pagina">

	<div class="row head">
		<div class="hero col-xs-12">

			<?php 

				$time = get_post_time('d,n,Y', true);
				$time = explode(',', $time);
				$time = $time[0] . ' de ' . substr($meses[intval($time[1]) - 1], 0, 3) . ', ' . $time[2];

				$img = get_field('imagem');
				$img = $img['sizes']['hero-post'];

			 ?>

			<img src="<?php echo $img ?>">
		</div>
		<h2 class="title orange col-xs-12">
			<?php the_title(); ?>
		</h2>
		<time class="col-xs-12">
			<span class="ico-time"></span><?php echo $time ?>
		</time>
	</div>

	<div class="row">
		<div class="col-xs-8 col-xs-offset-2">
			<?php echo $post->post_content; ?>
		</div>
	</div>

	<div class="row wrap-bt-voltar">
		<a class="bt-voltar ani-04 ipo-bt orange hover-d-gray p-20" href="<?php bloginfo('url') ?>/<?php l('escola/blog', 'school/blog') ?>">
	        Voltar para o Blog
		</a>
	</div>
</section>

<?php get_footer(); ?>