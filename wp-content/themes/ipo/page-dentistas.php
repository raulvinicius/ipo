<?php get_header(); ?>

	<section class="pagina pagina-instrutores pagina-dentistas">

		<section class="container head">
			<div class="row">
				<h2 class="title orange col-md-6 col-md-offset-3"><?php l('Dentistas', 'Our Dentists') ?></h2>
				<div class="ipo-linha gray center"></div>
				<p class="col-md-8 col-md-offset-2">
					<?php echo get_field('dentistas-chamada') ?>
				</p>
			</div>
		</section>

		<section class="container-fluid instrutores">
			<div class="container">
				<div class="row">
					<ul>

						<?php 

							$my_query = get_post_by_type('dentistas', 'ASC');

							$i = 0;

							if( $my_query->have_posts() ):

			   					while ($my_query->have_posts()) : $my_query->the_post(); 

			   						$apresentacao = get_field('apresentacao');
			   						$funcao = get_field('funcao_geral');
			   						$foto = get_field('foto');
			   						$foto = $foto['sizes']['foto-instrutor'];
			   						$facebook = get_field('facebook');
			   						$google = get_field('google');
			   						$instagram = get_field('instagram');

									?>

									<li class="col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1">
										<img class="circular-mask col-sm-5 col-xs-12" src="<?php echo $foto ?>">
										<div class="col-sm-7 col-sm-offset-0 col-xs-10 col-xs-offset-1">
											<h4 class="title orange"><?php the_title() ?></h4>
											<p><?php echo $apresentacao ?></p>
											<div class="redes-sociais">


												<?php if ($facebook != '') : ?>

												    <a href="http://facebook.com/<?php echo $facebook ?>" target="_blank" class="facebook">Facebook</a>

												 <?php endif; ?>

												<?php if ($google != '') : ?>

												    <a href="https://plus.google.com/u/0/+<?php echo $google ?>" target="_blank" class="google-plus">Google+</a>

												 <?php endif; ?>

												<?php if ($instagram != '') : ?>

												    <a href="http://instagram.com/<?php echo $instagram ?>" target="_blank" class="instagram">Instagram</a>

												 <?php endif; ?>

											</div>
										</div>
										<div class="clearfix"></div>
									</li>

									<?php if ($i % 2 != 0): ?>

										<div class="hidden-sm hidden-xs ipo-linha d-gray center"></div>
										
									<?php endif ?>

									<?php

									$i++;

								endwhile;

							endif;

						?>
						
						<div class="clearfix"></div>
					</ul>
				</div>
			</div>
		</section>

	</section>

<?php get_footer(); ?>