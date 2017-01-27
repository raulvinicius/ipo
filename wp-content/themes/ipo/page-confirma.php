<?php get_header(); ?>

	<section class="container-fluid pagina pagina-confirma-email">
		<div class="conainer">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">


					<form class="ani-04 js confirma-email col-xs-12" action="<?php bloginfo('url') ?>/confirma-email">

						<div id="process" class="col-xs-12"><?php l('Verificando...', 'Verifying...') ?></div>
						<div id="success" class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
						    <?php l(
						    	'Obrigado por sua inscrição no curso <span id="curso">' . get_the_title( $_GET['i2'] ) . '</span>.',
						    	'Thank you for your registration to <span id="curso">' . get_the_title( $_GET['i2'] ) . '</span>.'
						    ) ?>
						    <div>
							    <a id="hide-form" class="ipo-bt orange hover-d-gray" href="<?php bloginfo('url') ?>/escola"><?php l('Fechar', 'Close') ?></a>
						    </div>
						</div>

						<div id="error" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
						    <?php l('Houve um erro ao confirmar seu e-mail, tente novamente.', 'There was an error while verifying your email, please try again.') ?>
						</div>

						<fieldset class="col-xs-12">

							<h4 class="title col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">Basta clicar no botão abaixo para confirmar seu e-mail e completar seu cadastro.</h4>

							<input type="hidden" name="crs" value="<?php echo $_GET['i2'] ?>">
							<input type="hidden" name="idu" value="<?php echo $_GET['i'] ?>">
							<input type="hidden" name="email" value="ok">

							<input type="submit" value="Confirmar meu e-mail" class="ipo-bt orange hover-d-gray">

						</fieldset>

					</form>

				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>