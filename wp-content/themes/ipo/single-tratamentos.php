<?php get_header() ;?>


<?php 

	$galeria = get_field('galeria');
	$descricaoLonga = get_field('descricao_longa');

?>

<section class="pagina-tratamento pagina">

	<div class="container-fluid">
	    <div class="row">

	        <div class="col-md-6 nome">
        		<div class="col-md-10 col-md-offset-1">
        			<h2 class="title white">
        				<?php the_title(); ?>
        			</h2>
        			<div class="ipo-linha white"></div>
        		</div>
        		<div class="col-md-11 col-md-offset-1">
        			<ul>
        			<?php for ($i=0; $i<count($galeria);$i++): ?>
        				
        				<li class="col-md-5"><img src="<?php echo $galeria[$i]['sizes']['blog-g'] ?>"></li>

        			<?php endfor ?>
        			</ul>
        		</div>
        		<div class="wrap-button col-md-10 col-md-offset-1">
		            <button class="ipo-bt white-bd hover-orange" onclick="jivo_api.open();" ><?php l('Marcar Agora', 'Make an appointment') ?></button>
        		</div>
	        </div>
	        
	        <div class="col-md-4 col-md-offset-1 descricao">

        		<div class="ipo-linha orange"></div>
        		<div id="tgt-descricao"><?php echo $descricaoLonga ?></div>

	        </div>

	    </div>
	</div>

</section>


<?php get_footer();