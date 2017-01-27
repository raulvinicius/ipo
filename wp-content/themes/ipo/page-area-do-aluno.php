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
		<div id="menu" class="col-md-2">

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
						
						<li><a id="arquivo" class="ani-04" href="<?php bloginfo('url') ?>/area-do-aluno/?t=arquivo">Materiais de Apoio <?php echo ( $nArquivos > 0 ) ? '<span id="novos">' . $nArquivos . '</span>' : ''; ?></a></li>
						<li><a id="artigo" class="ani-04" href="<?php bloginfo('url') ?>/area-do-aluno/?t=artigo">Artigos <?php echo ( $nArtigos > 0 ) ? '<span id="novos">' . $nArtigos . '</span>' : ''; ?></a></li>
						<li><a id="comunicado" class="ani-04" href="<?php bloginfo('url') ?>/area-do-aluno/?t=comunicado">Comunicados <?php echo ( $nComunicados > 0 ) ? '<span id="novos">' . $nComunicados . '</span>' : ''; ?></a></li>
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
		<div id="conteudo" class="col-md-10 col-md-offset-2">


			<?php 

				if( isset($liberado) && $liberado == true )
				{

					$hora = intval($sp_date->format('H'));

					$saudacao = 'Bom dia,';
					if ( $hora >= 12 && $hora <= 17 ) 
					{
						$saudacao = 'Boa tarde,';
					}
					else if ( $hora > 18 && $hora <= 23 )
					{
						$saudacao = 'Boa noite,';
					}

				}

			 ?>


			<div class="col-md-8 col-md-offset-2">
				<div id="aviso" class=" col-md-12">
					<?php if ( isset($liberado) && $liberado == true ): ?>

						<?php if ( !isset($_GET['t']) ): ?>
							<?php if ($nMateriais > 0): ?>
								<p><strong><?php echo $saudacao ?></strong> você tem <strong><?php echo ($nMateriais < 9) ? '0' . $nMateriais : $nMateriais; ?></strong> <?php echo pluralize($nMateriais, 'novos cards', 'novo card') ?></p>
							<?php else : ?>
								<p><strong><?php echo $saudacao ?></strong> você não tem novos cards</p>
							<?php endif ?>
						<?php else : ?>
							<p><strong><?php echo $_GET['t'] . 's' ?></strong></p>
						<?php endif ?>
							
					<?php elseif ( !isset($liberado) ) : ?>

						<p><strong>Olá <?php echo $GLOBALS['uDisplay'] ?></strong>, seu acesso à Área do Aluno ainda não foi liberado. Tente novamente mais tarde, ou <a class="ani-04" onclick="jivo_api.open();" href="javascript:void(0);">solicite seu acesso</a>.</p>

					<?php elseif ( isset($liberado) && $liberado == false ) : ?>
					
						<p><strong>Olá <?php echo $GLOBALS['uDisplay'] ?></strong>, seu acesso à Área do Aluno foi bloqueado. <a class="ani-04" onclick="jivo_api.open();" href="javascript:void(0);">Entre em contato</a> para obter mais informações.</p>

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

							$arNomeTipo['arquivo'] = "Material de Apoio";
							$arNomeTipo['artigo'] = "Artigo";
							$arNomeTipo['comunicado'] = "Comunicado";

							$t = $_GET['t'];
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
														<a class="ani-06" href="<?php echo get_bloginfo('template_url') . '/' . $conteudo['filename'] ?>"><?php echo substr( $conteudo['filename'], strrpos($conteudo['filename'], '.'), 10 ) ?></a>
													<?php elseif ($tipo == 'artigo') : ?>
														<a class="ani-06" href="<?php echo $conteudo ?>"><?php echo $conteudo ?></a>
													<?php endif ?>
												</div>

											<?php endif ?>
											<div id="comentario" class="col-md-12">
												<h2 class="title"><?php echo get_the_title( $material->ID ) ?></h2>
												<p>
													<?php echo ($tipo == 'comunicado') ? $conteudo : $comentario ?>
												</p>
											</div>
										</div>
										<div id="autor" class="">
											<span id="avatar">
												<img src="<?php bloginfo('template_url') ?>/img/ph-foto-autor.jpg">
												<p><?php echo $autor->display_name ?></p>
											</span>
											<span id="date">
												<p><?php echo date_format($pDate, 'd/m/Y') ?></p>
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
			
		</div>
	</div>
</section>

<?php get_footer(); ?>