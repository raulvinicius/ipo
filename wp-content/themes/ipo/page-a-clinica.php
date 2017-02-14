<?php get_header() ?>

	<section class="pagina pagina-a-escola">

		<section class="container head">
			<div class="row">
				<h2 class="title orange col-md-6 col-md-offset-3"><?php l('A Clínica', 'Our Clinic') ?></h2>
				<div class="ipo-linha gray center"></div>
				<div class="col-md-8 col-md-offset-2">
					<?php echo get_field('a-clinica-sobre'); ?>
				</div>
			</div>
		</section>

		<section class="galeria humano-carousel">
			
				<button id="seta-esq" class="layer seta esq ani-04" data-depth="0.1"></button>
				<button id="seta-dir" class="layer seta dir ani-04" data-depth="0.1"></button>

				<ul>
					<?php $fotos = get_field('a-clinica-fotos'); ?>

					<?php for ($i=0; $i<count($fotos); $i++):  ?>

						<li data-i="<?php echo $i ?>" class="highlight">
							<figure>
								<img src="<?php echo $fotos[$i]['url'] ?>">
								<figcaption class="col-md-2 col-xs-3"><span><?php echo $fotos[$i]['caption'] ?></span></figcaption>
							</figure>
						</li>

					<?php endfor; ?>

				</ul>

				<div id="contador">
					<div id="marca" style="left: 5px; right: 37px;"></div>
				</div>

			</div>

		</section>
		
		<?php //include 'bloco-dentistas.php'; ?>
		
	</section>

<?php get_footer() ?>