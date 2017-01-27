<?php get_header() ?>

	<section class="pagina pagina-cursos container-fluid">

		<ul>
			<?php 

			    $loop = get_post_by_type('cursos');
			    $i = 0;

			    while ( $loop->have_posts() ) :
			    
			        $loop->the_post();

			    	$pID = $post->ID;
			    	$link = get_permalink( $pID );
					$duracao = get_field('duracao');
				    $chamada = get_field('chamada');
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


				    ?>

						<li>
							<div class="row">
								<div id="nome" class="col-sm-6 <?php echo ($i % 4 == 1) ? 'col-sm-push-6' : '' ?> bg-parallax" data-speed="10" style="background-image: url(<?php bloginfo('template_url') ?>/img/ipo-bg-<?php echo $i % 4 ?>-cursos.jpg)">
									<div class="col-xs-10 col-xs-offset-1">
										<h2 class="title"><?php the_title(); ?></h2>
										<div class="ipo-linha"></div>
										<h3 class="subtitle italic"><?php echo $chamada ?></h3>
										<div class="data-curso">
											<?php if (count( $duracao ) > 1): ?>

											    <span id="n-modulos"><?php l('em ' . count($duracao) . ' módulos:', 'in ' . count($duracao) . ' modules:') ?></span>

											<?php endif ?>

											<div id="wrap-data" <?php echo ( count($duracao) > 1 ) ? 'class="multi-modulos"' : '' ?>>

											    <?php 

											    $iDuracao = 0;

											    foreach ($duracao as $datas) :
											
											        $datetime = new DateTime();
											        $inicio = $datetime->createFromFormat('Ymd', $datas['inicio']);

											        $datetime = new DateTime();
											        $final = $datetime->createFromFormat('Ymd', $datas['final']);

											        echo "<p>";

											        incluiNumModulo( $duracao, $iDuracao );


											        if ( $inicio->format('m') == $final->format('m') && $inicio->format('Y') == $final->format('Y') ) :

											        ?>
											            <!-- PT: mes IGUAL e ano IGUAL -->
											            <!-- EN: mes IGUAL e ano IGUAL -->

											            <?php echo l(
											                'De <strong>' . $inicio->format('d') . '</strong> 
											                a <strong>' . $final->format('d') . '</strong> 
											                de <strong>' . $meses[$inicio->format('n') - 1] . '</strong> 
											                de <strong>' . $inicio->format('Y') . '</strong>', 

											                '<strong id="day">' . enDay( $inicio->format('d') ) . '</strong> 
											                to <strong>' . $months[$final->format('n') - 1] . '</strong> 
											                <strong id="day">' . enDay( $final->format('d') ) . '</strong>, 
											                <strong>' . $final->format('Y') ) . '</strong>' ?>

											        <?php elseif ( $inicio->format('m') != $final->format('m') && $inicio->format('Y') == $final->format('Y') ) : ?>

											            <!-- PT: mes DIFERENTE e ano IGUAL -->
											            <!-- EN: mes DIFERENTE e ano IGUAL -->

											            <?php echo l(
											                'De <strong>' . $inicio->format('d') . '</strong> 
											                de <strong>' . $meses[$inicio->format('n') - 1] . '</strong> 
											                a <strong>' . $final->format('d') . '</strong> 
											                de <strong>' . $meses[$final->format('n') - 1] . '</strong> 
											                de <strong>' . $inicio->format('Y') . '</strong>', 

											                '<strong>' . $months[$inicio->format('n') - 1] . '</strong> 
											                <strong id="day">' . enDay( $inicio->format('d') ) . '</strong> 
											                to <strong>' . $months[$final->format('n') - 1] . '</strong> 
											                <strong id="day">' . enDay( $final->format('d') ) . '</strong>, 
											                <strong>' . $final->format('Y') ) . '</strong>' ?>
											            
											            <!-- <p>De <strong><?php echo $inicio->format('d') ?></strong> de <strong><?php echo $meses[$inicio->format('n') - 1] ?></strong> a <strong><?php echo $final->format('d') ?></strong> de <strong><?php echo $meses[$final->format('n') - 1] ?></strong> de <strong><?php echo $inicio->format('Y') ?></strong></p> -->

											        <?php elseif ( ( $inicio->format('m') != $final->format('m') && $inicio->format('Y') != $final->format('Y') ) || ( $inicio->format('m') == $final->format('m') && $inicio->format('Y') != $final->format('Y') ) ) : ?>

											            <!-- PT: mes DIFERENTE e ano DIFERENTE -->
											            <!-- EN: mes DIFERENTE e ano DIFERENTE -->

											            <?php echo l(
											                'De <strong>' . $inicio->format('d') . '</strong> 
											                de <strong>' . $meses[$inicio->format('n') - 1] . '</strong> 
											                de <strong>' . $inicio->format('Y') . '</strong> 
											                a <strong>' . $final->format('d') . '</strong> 
											                de <strong>' . $meses[$final->format('n') - 1] . '</strong> 
											                de <strong>' . $final->format('Y') . '</strong>', 

											                '<strong>' . $months[$inicio->format('n') - 1] . '</strong> 
											                <strong id="day">' . enDay( $inicio->format('d') ) . '</strong>, 
											                <strong>' . $inicio->format('Y') . '</strong> 
											                to <strong>' . $months[$final->format('n') - 1] . '</strong> 
											                <strong id="day">' . enDay( $final->format('d') ) . '</strong>, 
											                <strong>' . $final->format('Y') ) . '</strong>' ?>

											        <?php endif; ?>

											        <?php 

											        echo "</p>";

											        $iDuracao++;

											        endforeach; 
											    ?>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div id="descricao" class="col-sm-6 <?php echo ($i % 4 == 1) ? 'col-sm-pull-6' : '' ?>">
									<div class="col-xs-10 col-xs-offset-1">
										<?php echo $descricaoCurta ?>
										<a href="<?php echo $link ?>" class="ipo-bt d-gray-bd hover-d-gray p-20"><?php l('Saber mais', 'Know more') ?></a>
										<?php if (get_the_title() == "Curso Plástica Oclusal"): ?>
											<button disabled class="ipo-bt orange hover-d-gray p-20 show-form" data-i-curso="<?php echo $pID ?>"><?php l('Vagas esgotadas', 'All spaces sold out') ?></button>
										<?php else : ?>
											<button onclick="showSubsForm(<?php echo $pID ?>, '<?php the_title(); ?>')" class="ipo-bt orange hover-d-gray p-20 show-form" data-i-curso="<?php echo $pID ?>"><?php l('Me inscrever', 'Sign up') ?></button>
										<?php endif ?>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>

						</li>
			
				    <?php

					$i++;

				endwhile;

			?>
		</ul>

	</section>
	
<?php get_footer() ?>