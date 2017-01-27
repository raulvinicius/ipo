<?php get_header(); ?>

	<section class="pagina-clinica pagina">

		<span id="wrap-tela">

			<section class="hero humano-carousel">
				
					<button id="seta-esq" class="layer seta esq ani-04" data-depth="0.1"></button>
					<button id="seta-dir" class="layer seta dir ani-04" data-depth="0.1"></button>

					<ul>

						<li data-i="0" class="highlight">
							<figure>
								<img src="<?php echo bloginfo('template_url') ?>/img/ipo-salas-clinica.jpg">
							</figure>
						</li>
						<li data-i="1" class="highlight">
							<figure>
								<img src="<?php echo bloginfo('template_url') ?>/img/ipo-sala-clinica.jpg">
							</figure>
						</li>
						<li data-i="2">
							<figure>
								<img src="<?php echo bloginfo('template_url') ?>/img/ipo-sala-2-clinica.jpg">
							</figure>
						</li>

					</ul>

					<div id="contador">
						<div id="marca" style="left: 5px; right: 37px;"></div>
					</div>

				</div>

			</section>

			
			<section class="tratamentos container-fluid">
				<div id="wrap-urgencia" class="">

					<div id="urgencia">
						
						<div class="wrap-txt">
							<h2 class="title orange"><i></i>
								<?php l(
									'<span>Urgência</span> 24 horas',
									'24 hours <span>emergency</span>'
								) ?>
							</h2>
							<p><?php l(
									'Desde o socorro para dor de dente, fraturas de dente até coroas soltas, se consulte a qualquer hora pelo <strong>61 99933 1131 (whatsap)</strong> ou pelo nosso <strong>CHAT</strong>', 
									'From a toothache relief to tooth fractures or loose crowns, consult at any time by Whatsapp <strong>+55 61 99933 1131</strong> or by <strong>CHAT</strong>'
								) ?></p>
						</div><div class="wrap-button">
							<button class="ipo-bt white-bd hover-orange-bd p-20"  onclick="jivo_api.open();"><?php l('Se consulte agora mesmo', 'See now') ?></button>
						</div>


					</div>
					<div class="clearfix"></div>

				</div>
				<div class="row">
					<div class="container">
						<div id="wrap-tratamentos" class="row">
								

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

												<li class="col-md-3 col-md-offset-0 col-md-offset-right-0 col-sm-4 col-sm-offset-1 col-sm-offset-right-1 col-xs-10 col-xs-offset-1">
													<h3>
														<i>
															<img src="<?php echo $icone ?>">
														</i>
														<?php the_title(); ?>
													</h3>
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
				</div>
			</section>

			<section class="sobre container-fluid">
				<div class="row">
					<div class="align-bot">
						<div id="texto" class="col-lg-3 col-lg-offset-6 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
							<h3 class="title orange"><?php l('A Clínica', 'Our Clinic') ?></h3>
							<div class="ipo-linha gray"></div>
							<p ><?php l(
									'Desde o início de nossas atividades, em 1986, a Clínica IPO:PALMIERI vem se dedicando a reabilitação e manutenção da mastigação e do sorriso de seus clientes', 
									'Since the beginning of our activities, in 1986, the IPO:PALMIERI Practice focus has been rehabilitation and maintenance of function and to the smile of the clients'
								) ?></p>
						</div>
						<div id="desde" class="col-lg-3 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3">
							<h3><?php l('Desde', 'Since') ?> <span>1986</span></h3>
						</div>
					</div>
				</div>
			</section>

			<?php //include 'bloco-dentistas.php'; ?>

		</span>

	</section>

<?php get_footer(); ?>