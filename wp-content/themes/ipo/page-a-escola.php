<?php get_header() ?>

	<section class="pagina pagina-a-escola">

		<section class="container head">
			<div class="row">
				<h2 class="title orange col-md-6 col-md-offset-3"><?php l('A Escola', 'Our School') ?></h2>
				<div class="ipo-linha gray center"></div>
				<p class="col-md-8 col-md-offset-2"><?php l(
						'O Instituto Plástica Oclusal é a materialização de um sonho de 30 anos: reunir atenção odontológica de vanguarda com formação profissional continuada', 
						'The Occlusal Plastic Institute is the materialization of a 30-years dream: to gather forefront dental care with continuous professional education'
					) ?></p>
			</div>
		</section>

		<section class="galeria humano-carousel">
			
				<button id="seta-esq" class="layer seta esq ani-04" data-depth="0.1"></button>
				<button id="seta-dir" class="layer seta dir ani-04" data-depth="0.1"></button>

				<ul>

					<li data-i="0" class="highlight">
						<figure>
							<img src="<?php echo bloginfo('template_url') ?>/img/ipo-sala-escola.jpg">
							<figcaption class="col-md-2 col-xs-3"><span><?php l('Sala de aula', 'Class room') ?></span></figcaption>
						</figure>
					</li>
					<li data-i="1">
						<figure>
							<img src="<?php echo bloginfo('template_url') ?>/img/ipo-mesas-escola.jpg">
							<figcaption class="col-md-2 col-xs-3"><span><?php l('Mesas', 'Student tables') ?></span></figcaption>
						</figure>
					</li>
					<li data-i="2" class="highlight">
						<figure>
							<img src="<?php echo bloginfo('template_url') ?>/img/ipo-sala-2-escola.jpg">
							<figcaption class="col-md-2 col-xs-3"><span><?php l('Sala de aula', 'Class room') ?></span></figcaption>
						</figure>
					</li>
					<li data-i="3">
						<figure>
							<img src="<?php echo bloginfo('template_url') ?>/img/ipo-mesas-2-escola.jpg">
							<figcaption class="col-md-2 col-xs-3"><span><?php l('Mesas', 'Student tables') ?></span></figcaption>
						</figure>
					</li>

				</ul>

				<div id="contador">
					<div id="marca" style="left: 5px; right: 37px;"></div>
				</div>

			</div>

		</section>
		
		<?php include 'bloco-instrutores.php'; ?>
		
	</section>

<?php get_footer() ?>