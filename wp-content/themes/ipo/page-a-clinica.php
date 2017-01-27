<?php get_header() ?>

	<section class="pagina pagina-a-escola">

		<section class="container head">
			<div class="row">
				<h2 class="title orange col-md-6 col-md-offset-3"><?php l('A Clínica', 'Our Clinic') ?></h2>
				<div class="ipo-linha gray center"></div>
				<p class="col-md-8 col-md-offset-2"><?php l(
						'Desde o início de nossas atividades, em 1986, a Clínica IPO:PALMIERI vem se dedicando a reabilitação e manutenção da mastigação e do sorriso de seus clientes', 
						'Since the beginning of our activities, in 1986, the IPO:PALMIERI Practice focus has been rehabilitation and maintenance of function and to the smile of the clients'
					) ?></p>
			</div>
		</section>

		<section class="galeria humano-carousel">
			
				<button id="seta-esq" class="layer seta esq ani-04" data-depth="0.1"></button>
				<button id="seta-dir" class="layer seta dir ani-04" data-depth="0.1"></button>

				<ul>

					<li data-i="0" class="highlight">
						<figure>
							<img src="<?php echo bloginfo('template_url') ?>/img/ipo-recepcao-clinica.jpg">
							<figcaption class="col-md-2 col-xs-3"><span><?php l('Nossa recepção', 'Our reception') ?></span></figcaption>
						</figure>
					</li>
					<li data-i="1">
						<figure>
							<img src="<?php echo bloginfo('template_url') ?>/img/ipo-salas-clinica.jpg">
							<figcaption class="col-md-2 col-xs-3"><span><?php l('Consultórios', 'Dental offices') ?></span></figcaption>
						</figure>
					</li>
					<li data-i="2" class="highlight">
						<figure>
							<img src="<?php echo bloginfo('template_url') ?>/img/ipo-sala-clinica.jpg">
							<figcaption class="col-md-2 col-xs-3"><span><?php l('Consultório', 'Dental office') ?></span></figcaption>
						</figure>
					</li>
					<li data-i="3">
						<figure>
							<img src="<?php echo bloginfo('template_url') ?>/img/ipo-sala-2-clinica.jpg">
							<figcaption class="col-md-2 col-xs-3"><span><?php l('Consultório', 'Dental office') ?></span></figcaption>
						</figure>
					</li>

				</ul>

				<div id="contador">
					<div id="marca" style="left: 5px; right: 37px;"></div>
				</div>

			</div>

		</section>
		
		<?php //include 'bloco-dentistas.php'; ?>
		
	</section>

<?php get_footer() ?>