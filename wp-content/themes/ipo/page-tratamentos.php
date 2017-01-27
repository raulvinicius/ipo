<?php get_header() ;?>

	<section class="pagina-tratamentos pagina">

	    <div class="container">
	        <div class="row">

	            <div class="title-tratamentos head col-xs-offset-1 col-xs-10 col-md-offset-2 col-md-8">
	                <h2 class="title orange"><?php l('Descubra o que podemos fazer por você', 'Find out what we can do for you') ?></h2>
	                <div class="ipo-linha gray center"></div>
	                <p>
	                	<?php l(
	                		'Nossos dentistas dominam diversas técnicas, todas voltadas para melhorar sua saúde, conforto e, por que não, a beleza do seu sorriso', 
	                		'Our dentists have mastered several techniques, all aiming to improve your health, comfort and also the beauty of your smile'
	                	) ?>
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

						$i = 0;

						if( $my_query->have_posts() ):

		   					while ($my_query->have_posts()) : $my_query->the_post(); 

		   						$descricao = get_field('descricao_curta');
		   						$icone = get_field('icone');
		   						$icone = $icone['sizes']['large'];

		   						if( $i <= 3) :

									?>

									<li class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-6 col-md-4">
									    <div class="bg-li">
									        
									        <figure class="depois">
									            <div class="filtro-depois"></div>
									            <img src="img/ipo-tratamentos-reabilitacao-depois.jpg" />
									        </figure>

									        <figure class="antes">
									            <div class="filtro-antes"></div>
									            <img src="img/ipo-tratamentos-reabilitacao-antes.jpg" />
									            <figcaption>Antes</figcaption>
									        </figure>

									        <h3 class="title orange"><?php the_title() ?></h4>
									        <p><?php echo $descricao ?></p>
									        <div class="wrap-button">
									            <button class="ipo-bt white-bd" onclick="jivo_api.open();" ><?php l('Marcar Agora', 'Make an appointment') ?></button>
									        </div>
									    </div>
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



<?php get_footer();