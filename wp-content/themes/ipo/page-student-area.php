<?php

	if (!is_user_logged_in())
	{
		header('Location: ' . wp_login_url( get_bloginfo('url') . '/area-do-aluno/' ));
	}
	else
	{
		$GLOBALS['usr'] = wp_get_current_user();
		$uID = $GLOBALS['usr']->ID;
		$uDisplay = $GLOBALS['usr']->display_name;
		$roles = $GLOBALS['usr']->roles;

		$utc_date = DateTime::createFromFormat(
			'Y-m-d H:i:s', 
			date('Y-m-d H:i:s'), 
			new DateTimeZone('UTC')
		);

		$sp_date = $utc_date;
		$sp_date->setTimeZone(new DateTimeZone('America/Sao_Paulo'));


		if ( NULL == get_user_meta($GLOBALS['usr']->ID, '_last_visit', true ) )
		{
		    add_user_meta( $GLOBALS['usr']->ID, '_last_visit', $sp_date->format('Y-m-d H:i:s') );
		}
		else
		{
			$lastVisit = date_create( get_user_meta( $GLOBALS['usr']->ID, '_last_visit', true ) );
		    update_user_meta( $GLOBALS['usr']->ID, '_last_visit', $sp_date->format('Y-m-d H:i:s') );
		}


		if ($roles[0] != 'aluno' && $roles[0] != 'administrator') 
		{
			header('Location: ' . get_bloginfo('url'));
		}
	}

	get_header();

?>

<section class="pagina pagina-area-aluno container-fluid">
	<div class="row">
		<div id="menu" class="col-md-2 col-xs-3">

			<?php 

			$liberado = get_field('liberado', 'user_' . $uID);
			if ( isset($liberado) && $liberado == true)
			{
				$uCursos = get_field('cursos', 'user_' . $uID);

				$nMateriais = 0;
				$nArquivos = 0;
				$nArtigos = 0;
				$nComunicados = 0;

				for ($i = 0; $i < count($uCursos); $i++)
				{
					$uCursos[$i]['instrutores'] = get_field('instrutores', $uCursos[$i]['curso'][0]);

					$uCursos[$i]['materiais'] = get_posts(array(
						'post_type' => 'materiais',
						'meta_query' => array(
							array(
								'key' => 'curso',
								'value' => $uCursos[$i]['curso'][0]
							)
						)
					));

					foreach( $uCursos[$i]['materiais'] as $material ) : 

						$pDate = date_create( get_post_field( 'post_date', $material->ID ) );

						if( $lastVisit == NULL || $lastVisit < $pDate )
						{
							$nMateriais++;
							$tipo = get_field('tipo', $material->ID);

							if( $tipo == 'arquivo' )
							{
								$nArquivos++;
							}
							else if( $tipo == 'artigo' )
							{
								$nArtigos++;
							}
							else
							{
								$nComunicados++;
							}

						}

					endforeach;

				}
			}


			?>

			<nav>
				<ul>


					<?php if ( isset($liberado) && $liberado == true ): ?>
						
						<li>
							<a id="todos" class="ani-04 <?php echo (isset($_GET['t'])) ? '' : 'disabled'; ?>" <?php echo (isset($_GET['t'])) ? 'href="' . get_bloginfo('url') . '/' . l('area-do-aluno', 'student-area', false) . '/"' : ''; ?> >
								<span class="ico"></span>
								<p><?php l('Todos os cards', 'All cards') ?></p>
								<?php echo ( $nArquivos > 0 || $nArtigos > 0 || $nComunicados > 0 ) ? '<span id="novos">' . ( $nArquivos + $nArtigos + $nComunicados ) . '</span>' : ''; ?>
								<div class="clearfix"></div>
							</a>
						</li><li>
							<a id="arquivo" class="ani-04" href="<?php bloginfo('url'); l('/area-do-aluno', '/student-area') ?>/?t=<?php l('arquivo', 'file') ?>">
								<span class="ico"></span>
								<p><?php l('Materiais de Apoio', 'Support Material') ?></p>
								<?php echo ( $nArquivos > 0 ) ? '<span id="novos">' . $nArquivos . '</span>' : ''; ?>
								<div class="clearfix"></div>
							</a>
						</li><li>
							<a id="artigo" class="ani-04" href="<?php bloginfo('url'); l('/area-do-aluno', '/student-area') ?>/?t=<?php l('artigo', 'article') ?>">
								<span class="ico"></span>
								<p><?php l('Artigos', 'Articles') ?></p>
								<?php echo ( $nArtigos > 0 ) ? '<span id="novos">' . $nArtigos . '</span>' : ''; ?>
								<div class="clearfix"></div>
							</a>
						</li><li>
							<a id="comunicado" class="ani-04" href="<?php bloginfo('url'); l('/area-do-aluno', '/student-area') ?>/?t=<?php l('comunicado', 'bulletin') ?>">
								<span class="ico"></span>
								<p><?php l('Comunicados', 'Bulletin') ?></p>
								<?php echo ( $nComunicados > 0 ) ? '<span id="novos">' . $nComunicados . '</span>' : ''; ?>
								<div class="clearfix"></div>
							</a>
						</li>
						<!-- 
						<span class="separator"></span>
						<li class="submenu">
							<a id="duvidas" class="ani-04" href="#">Tirar Dúvidas</a>
							<ul id="instrutores" class="ani-04">
								<?php for ($i=0; $i < count($uCursos); $i++) : ?>
									<h4 class="title">Curso: <?php echo get_the_title($uCursos[$i]['curso'][0]) ?></h4>

									<?php for ($j=0; $j < count($uCursos[$i]['instrutores']); $j++) : 

										$foto = get_field('foto', $uCursos[$i]['instrutores'][$j]['instrutor'][0]->ID);
										$foto = $foto['sizes']['thumbnail'];

										?>
										<li>
											<a class="ani-04" href="javascript:void(0);" onclick="enviaDuvida('<?php echo $GLOBALS['usr']->email ?>')">
												<img src="<?php echo $foto ?>">
												<?php echo get_the_title($uCursos[$i]['instrutores'][$j]['instrutor'][0]->ID) ?>
											</a>
										</li>
										<?php endfor; ?>
								<?php endfor; ?>
							</ul>
						</li>
						 -->
						<!-- 
						<span class="separator"></span>
						<li><a id="perfil" class="ani-04" href="#">Meus Dados</a></li>
						 -->

					<?php endif ?>

				</ul>
			</nav>
			
		</div>
		<div id="conteudo" class="col-md-10 col-md-offset-2 col-xs-9 col-xs-offset-3">


			<?php 

				if( isset($liberado) && $liberado == true )
				{

					$hora = intval($sp_date->format('H'));

					$saudacao = l('Bom dia,', 'Good morning,', false);
					if ( $hora >= 12 && $hora <= 17 )
					{
						$saudacao = l('Boa tarde,', 'Good afternoon', false);
					}
					else if ( $hora > 17 && $hora <= 23 )
					{
						$saudacao = l('Boa noite,', 'Good evenning', false);
					}

				}

			 ?>


			<div class="col-md-8 col-md-offset-2">
				<div id="aviso" class=" col-md-12">
					<?php if ( isset($liberado) && $liberado == true ): ?>

						<?php if ( !isset($_GET['t']) ): ?>
							<?php if ($nMateriais > 0): ?>
								<p><strong><?php echo $saudacao ?></strong> <?php l('você tem', 'you have') ?> <strong><?php echo ($nMateriais < 9) ? '0' . $nMateriais : $nMateriais; ?></strong> <?php echo pluralize($nMateriais, l('novos cards', 'new cards', false), l('novo card', 'new card', false)) ?></p>
							<?php else : ?>
								<p><strong><?php echo $saudacao ?></strong> <?php l('você não tem novos cards', 'you don\'t have new cards') ?></p>
							<?php endif ?>
						<?php else : ?>
							<p><strong><?php echo $_GET['t'] . 's' ?></strong></p>
						<?php endif ?>
							
					<?php elseif ( !isset($liberado) ) : ?>

						<p><strong><?php l('Olá', 'Hi') ?> <?php echo $GLOBALS['uDisplay'] ?></strong>, <?php l('seu acesso à Área do Aluno ainda não foi liberado. Tente novamente mais tarde, ou', 'your access to the Student Area haven\'t been unlocked. Try again later, or') ?> <a class="ani-04" onclick="jivo_api.open();" href="javascript:void(0);"><?php l('solicite seu acesso', 'require your access') ?></a>.</p>

					<?php elseif ( isset($liberado) && $liberado == false ) : ?>
					
						<p><strong><?php l('Olá', 'Hi') ?> <?php echo $GLOBALS['uDisplay'] ?></strong>, <?php l('seu acesso à Área do Aluno foi bloqueado', 'your access to the Student Area has been blocked.') ?>. <a class="ani-04" onclick="jivo_api.open();" href="javascript:void(0);"><?php l('Entre em contato', 'Get in touch') ?></a> <?php l('para obter mais informações', 'to know more') ?>.</p>

					<?php endif ?>
				</div>



				<?php for ($i = 0; $i < count($uCursos); $i++) : ?>

					<?php if( $uCursos[$i]['materiais'] ): ?>
						<?php foreach( $uCursos[$i]['materiais'] as $material ): 

							$tipo = get_field('tipo', $material->ID);
							$conteudo = get_field($tipo, $material->ID);
							$comentario = get_field('comentario', $material->ID);

							$pDate = date_create( get_post_field( 'post_date', $material->ID ) );

							$novo = '';

							if( $lastVisit == NULL || $lastVisit < $pDate ) :

								$novo = 'novo';

							endif;

							$autor = get_post_field( 'post_author', $material->ID );
							$autor = get_user_by('ID', $autor);
							$autor->user_pass = undefined;

							$arNomeTipo['arquivo'] = l('Material de Apoio', 'Support Material', false);
							$arNomeTipo['artigo'] = l('Artigo', 'Article', false);
							$arNomeTipo['comunicado'] = l('Comunicado', 'Bulletin', false);

							$arEnToPt['file'] = 'arquivo';
							$arEnToPt['article'] = 'artigo';
							$arEnToPt['bulletin'] = 'comunicado';

							if ( pll_current_language() == 'en' )
							{
								$t = $arEnToPt[ $_GET['t'] ];
							}
							else
							{
								$t = $_GET['t'];
							}

							if ( $t == NULL || $tipo == $t ) :


								?>

								<div id="cards">
									<div class="card <?php echo $novo . ' ' . $tipo ?> col-md-12">
										<div id="identificacao" class="col-md-3">
											<img src="<?php bloginfo('template_url') ?>/img/ipo-icon-card-<?php echo $tipo ?>.png">
											<h3 class="title orange">
												<?php echo $arNomeTipo[$tipo] ?>
											</h3>
										</div>
										<div id="infos" class="col-md-9">
											<?php if ($tipo != 'comunicado'): ?>
												
												<div id="material" class="col-md-12">
													<?php if ($tipo == 'arquivo'): ?>
														<a class="ani-06" href="<?php echo get_bloginfo('template_url') . '/' . $conteudo['filename'] ?>" target="_blank"><?php echo substr( $conteudo['filename'], strrpos($conteudo['filename'], '.'), 10 ) ?></a>
													<?php elseif ($tipo == 'artigo') : ?>
														<a class="ani-06" href="<?php echo $conteudo ?>" target="_blank"><?php echo $conteudo ?></a>
													<?php endif ?>
												</div>

											<?php endif ?>
											<div id="comentario" class="col-md-12">
												<h2 class="title"><?php echo get_the_title( $material->ID ) ?></h2>
													<?php echo ($tipo == 'comunicado') ? $conteudo : '<p>' . $comentario . '</p>' ?>
											</div>
										</div>
										<div id="autor" class="">
											<span id="avatar">
												<img src="<?php bloginfo('template_url') ?>/img/ph-foto-autor.jpg">
												<p><?php echo $autor->display_name ?></p>
											</span>
											<span id="date">
												<p><?php echo date_format($pDate, l('d/m/Y', 'm/d/Y', false) ) ?></p>
											</span>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							<?php endif; ?>				
						<?php endforeach; ?>
					<?php endif; ?>				

				<?php endfor; ?>				







			
			</div>

			<div class="clearfix"></div>
			
		</div>
	</div>
</section>

<?php get_footer(); ?>