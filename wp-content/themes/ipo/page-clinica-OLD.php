<?php get_header(); ?>

	<section class="pagina-clinica pagina">

		<section class="apresentacao container-fluid">

			<div class="container">
				<div class="row">
					<div id="urgencias" class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
						<div id="titulo" class="col-sm-6">
							<h2><i></i><?php l('Urgência <span>24 horas</span>', 'Urgency <span>24 hours</span>') ?></h2>
						</div>
						<div id="conteudo" class="col-sm-6">
							<p><?php l('Agendamento rápido pelo <span>chat</span>', 'Fast scheduling by <span>chat</span>') ?></p>
							<button class="ipo-bt white-bd hover-orange-bd p-20"  onclick="jivo_api.open();"><?php l('Marque agora', 'Schedule now') ?></button>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
		</section>		
		
		<section class="tratamentos container-fluid">
			<div class="container">
				<div class="row">
					<ul>

						<?php 

							$my_query = get_post_by_type('tratamentos');

							$i = 0;

							if( $my_query->have_posts() ):

			   					while ($my_query->have_posts()) : $my_query->the_post(); 

			   						$descricao = get_field('descricao_curta');
			   						$icone = get_field('icone');
			   						$icone = $icone['sizes']['large'];

			   						if( $i <= 3) :

										?>

										<li class="col-md-3 col-sm-6">
											<h2>
												<i>
													<img src="<?php echo $icone ?>">
												</i>
												<?php the_title(); ?>
											</h2>
											<p><?php echo $descricao ?></p>
											<!-- <button class="ipo-bt orange-bd p-10 bd-2 hover-orange"><?php l('Ver mais', 'See more') ?></button> -->
										</li>

										<?php

									endif;

									$i++;

								endwhile;

							endif;

						?>

					</ul>
				</div>
			</div>
		</section>

	</section>

<?php get_footer(); ?>