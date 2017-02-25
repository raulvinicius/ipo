<?php get_header() ;?>

	<section class="pagina-tratamentos pagina">

	    <div class="container">
	        <div class="row">

	            <div class="title-tratamentos head col-xs-offset-1 col-xs-10 col-md-offset-2 col-md-8">
	                <h2 class="title orange">
	                	<?php echo get_field('tratamentos-titulo') ?>
	                </h2>
	                <div class="ipo-linha gray center"></div>
	                <p>
	                	<?php echo get_field('tratamentos-chamada') ?>
	                </p>
	            </div>
	            
	        </div>
	    </div>

	    <div class="container-fluid tipos-tratamentos">
	        <div class="row">
	            <div class="container">
	                
	                <ul class="row">

					<?php 

						$my_query = get_post_by_type('tratamentos');

						if( $my_query->have_posts() ):

		   					while ($my_query->have_posts()) : $my_query->the_post(); 

		   						$descricao = get_field('descricao_curta');
		   						$icone = get_field('icone');
		   						$capa = get_field('capa');
		   						$capa = $capa['sizes']['capa-tratamento'];
		   						$icone = $icone['sizes']['large'];
									?>

									<li class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-6 col-md-4">
									    <div class="bg-li">
									        

									    	<?php if (isset($capa)): ?>
										        <figure class="depois">
										            <div class="filtro-depois"></div>
										            <img src="<?php echo $capa ?>" />
										        </figure>
									    	<?php endif ?>
									    		

									        <h3 class="title orange"><?php the_title() ?></h4>
									        <p><?php echo $descricao ?></p>
									        <div class="wrap-button">
									            <a href="<?php echo get_permalink($my_query->post->ID) ?>" class="ipo-bt white-bd"><?php l('Saber mais', 'See more') ?></a>
									            <!-- 
									            <button class="ipo-bt white-bd" onclick="jivo_api.open();" ><?php //l('Marcar Agora', 'Make an appointment') ?></button>
									             -->
									            
									        </div>
									    </div>
									</li>


									<?php


							endwhile;

						endif;

					?>

	                </ul>

	            </div>
	        </div>
	    </div>
	    


	</section>



<?php get_footer();