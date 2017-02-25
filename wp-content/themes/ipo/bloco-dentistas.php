<section class="bloco-instrutores instrutores">

	<div class="container">

		<div class="row header">
			<h2 class="title orange col-md-8 col-md-offset-2"><?php l('Dentistas', 'Dentists') ?></h2>
			<div class="ipo-linha gray center"></div>
			<p class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
				<?php echo get_field('dentistas-chamada', get_page_by_title( l('A Clínica', 'Our Clinic', FALSE))->ID ) ?>
			</p>
		</div>

		<div class="row lista">
			<ul>
				<li class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					<?php 

						$my_query = get_post_by_type('dentistas', 'ASC');

						$i = 0;

						$nInstrutores =  $my_query->post_count;

						if( $my_query->have_posts() ):

		   					while ($my_query->have_posts()) : $my_query->the_post(); 

		   						$apresentacao = get_field('apresentacao');
		   						$foto = get_field('foto');
		   						$foto = $foto['sizes']['foto-instrutor'];

		   						if( $i <= 2 ) :

									?>

										<img src="<?php echo $foto ?>">
										<h2 class="title"><?php the_title() ?></h2>
										<p><?php echo $apresentacao ?></p>
									</li><?php echo ($i != min ($nInstrutores-1, 2)) ? '<li class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">' : ''; ?>

									<?php

								endif;

								$i++;

							endwhile;

						endif;

					?>
			</ul>

		</div>

		<div class="row link">
			<div class="col-xs-12"><a href="<?php echo bloginfo('url') ?>/<?php l('clinica/instrutores', 'clinic/instructors') ?>" class="ipo-bt orange-bd hover-orange"><?php l('Todos os Dentistas', 'All Dentists') ?></a></div>
		</div>

	</div>
	
</section>