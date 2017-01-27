<?php get_header(); ?>

	<section class="pagina pagina-instrutores">

		<section class="container head">
			<div class="row">
				<h2 class="title orange col-md-6 col-md-offset-3"><?php l('Conhecimento de Vanguarda', 'Forefront of knowledge') ?></h2>
				<div class="ipo-linha gray center"></div>
				<p class="col-md-8 col-md-offset-2"><?php l('Nosso curso conta com professores fixos e professores convidados. Procuramos, a cada ano, diferenciar estes professores convidados de maneira a buscar técnicas e opiniões válidas para nosso método', 'Our courses have fixed teachers and invited teachers. Each year, we try to differentiate these invited teachers so as to seek valid techniques and opinions for our method') ?></p>
			</div>
		</section>

		<section class="container-fluid instrutores">
			<div class="container">
				<div class="row">
					<h3 class="title orange"><?php l('Instrutores IPO:PALMIERI', 'IPO:PALMIERI Instructors') ?></h3>
					<div class="ipo-linha gray center"></div>
				</div>
				<div class="row">
					<ul>

						<?php 

							$my_query = get_post_by_type('instrutores', 'ASC');

							$i = 0;

							if( $my_query->have_posts() ):

			   					while ($my_query->have_posts()) : $my_query->the_post(); 

			   						$apresentacao = get_field('apresentacao');
			   						$funcao = get_field('funcao_geral');
			   						$foto = get_field('foto');
			   						$foto = $foto['sizes']['large'];

									?>

									<li class="col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1">
										<img class="circular-mask col-sm-5 col-xs-12" src="<?php echo $foto ?>">
										<div class="col-sm-7 col-sm-offset-0 col-xs-10 col-xs-offset-1">
											<h4 class="title orange"><?php the_title() ?></h4>
											<p><?php echo $apresentacao ?></p>
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