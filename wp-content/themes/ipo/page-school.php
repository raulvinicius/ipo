<?php get_header(); ?>

	<section class="pagina pagina-escola">
		

		<section class="cursos humano-carousel">

			<button id="seta-esq" class="layer seta esq ani-04" data-depth="0.1"></button>
			<button id="seta-dir" class="layer seta dir ani-04" data-depth="0.1"></button>

			<ul >

					<?php 

					    $loop = get_post_by_type('cursos');
					    $i = 0;

					    while ( $loop->have_posts() ) :
					    
					        $loop->the_post();

					    	$pID = $post->ID;
					    	$link = get_permalink( $pID );
						    $chamada = get_field('chamada');
						    $inicio = get_field('inicio');
						    $final = get_field('final');
						    $descricao = get_field('descricao');
						    $descricaoCurta = substr($descricao, 0, 350);
					        if( strrpos($descricaoCurta, '</p>') > 0 )
					        {
					    	    $descricaoCurta = substr($descricaoCurta, 0, strpos($descricaoCurta, '</p>'));
					        }
					        else
					        {
							    $descricaoCurta = substr($descricaoCurta, 0, strrpos($descricaoCurta, ' ') . '...');
					        }
						    $descricaoCurta .= '</p>';
						    $cargaHoraria = get_field('carga_horaria');
						    $local = get_field('local');
						    $alunos = get_field('alunos');
						    $custo = get_field('custo');
						    $publico = get_field('publico');
						    $justificativa = get_field('justificativa');
						    $conteudo = get_field('conteudo');
						    $instrutores = get_field('instrutores');

						    ?>

								<li data-i="<?php echo $i ?>" <?php echo ($i == 0) ? 'class="highlight"' : '' ?>>
									<div class="container">
										<div class="row">
											<div class="wrap col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10">
												<h2 class="title"><i></i><?php the_title(); ?></h2>
												<h3 class="subtitle"><?php echo $chamada; ?></h3>
												<?php echo $descricaoCurta ?><br>
												<a href="<?php echo $link ?>" class="ipo-bt d-gray-bd hover-d-gray p-20"><?php l('Quero saber mais', 'Know more') ?></a>
												<?php if (get_the_title() == "Curso Plástica Oclusal"): ?>
													<button disabled class="ipo-bt orange hover-d-gray p-20 show-form" data-i-curso="<?php echo $pID ?>"><?php l('Vagas esgotadas', 'All spaces sold out') ?></button>
												<?php else : ?>
													<button onclick="showSubsForm(<?php echo $pID ?>, '<?php the_title(); ?>')" class="ipo-bt orange hover-d-gray p-20 show-form" data-i-curso="<?php echo $pID ?>"><?php l('Me inscrever', 'Subscribe') ?></button>
												<?php endif ?>
											</div>
										</div>
									</div>
								</li>
					
						    <?php

							$i++;

						endwhile;

					?>

			</ul>

			<div id="contador">
				<div id="marca" style="left: 5px; right: 37px;"></div>
			</div>

		</section>

		<?php include 'bloco-instrutores.php'; ?>

		<section class="a-escola container-fluid bg-parallax" data-speed="10">
			<div class="container">
				<img src="<?php echo bloginfo('template_url') ?>/img/ipo-icon-livro-laranja.png">
				<h2 class="col-md-10 col-md-offset-1 title orange"><?php l('Conheça nossa escola', 'Meet our facilities') ?></h2>
				<div class="ipo-linha gray center"></div>
				<p class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
					<?php l(
						'Nossas instalações foram pensadas para gerar conforto e melhorar a concentração e o aprendizado dos nossos alunos',
						'Our facilities were designed to provide comfort and improve the attention and the learning process'
					) ?>
				</p>
				<div class="col-xs-12">
					<a href="<?php echo bloginfo('url') ?>/l('clinica/a-escola', 'clinic/our-school')" class="ipo-bt orange-bd hover-orange"><?php l('Confira', 'Take a look') ?></a>
				</div>
			</div>
		</section>


	</section>

<?php get_footer(); ?>