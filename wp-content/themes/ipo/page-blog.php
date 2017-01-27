<?php get_header(); ?>

	<section class="pagina-blog pagina container">

		<?php

			$loop = get_post_by_type('post');
			$arPosts = $loop->posts;

		?>

		<div class="row head">

			<h2 class="title orange col-md-8 col-md-offset-2">
				<?php l(
					'Saiba como se cuidar',
					'Learn how to take care of yourself'
				) ?>
			</h2>
			<div class="ipo-linha gray center"></div>
			<p class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
				<?php l(
					'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.', 
					'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.'
				) ?>
			</p>

		</div>

		<?php if ( count( $arPosts ) > 0 ): ?>
			<div class="news row">
				<ul>
					<div id="destaques">

					<?php if ( count( $arPosts ) > 0 ): ?>

						<div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
							<li id="float-title" class="post-g">
								<article>
									<a href="<?php echo get_permalink($arPosts[0]) ?>">
										<header>
											<img src="<?php bloginfo('template_url') ?>/img/ph-post01.jpg" nopin="nopin">
											<div id="wrap">
													<h2 class="ani-04 title white">
														<?php echo $arPosts[0]->post_title ?>
													</h2>
												<time>
													<span class="ico-time"></span><?php echo $arPosts[0]->post_date_gmt ?>
												</time>
											</div>
										</header>
									</a>
								</article>
							</li>
						</div>

					<?php endif ?>

					<?php if ( count( $arPosts ) > 1 ): ?>

						<div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 news-sm">

							<li id="float-title" class="post-sm">
								<article>
									<a href="<?php echo get_permalink($arPosts[1]) ?>">
										<header>
											<img src="<?php bloginfo('template_url') ?>/img/ph-post02.jpg" data-img="<?php bloginfo('template_url') ?>/img/ph-post02.jpg" data-img-xs="<?php bloginfo('template_url') ?>/img/ph-post01.jpg" nopin="nopin">
											<div id="wrap">
													<h2 class="ani-06 title white">
														http://kid-themes.com/sterling/
													</h2>
												<time>
													<span class="ico-time"></span>20 de Ago, 2016
												</time>
											</div>
										</header>
									</a>
								</article>
							</li>
							
							<?php if ( count( $arPosts ) > 2 ): ?>

								<li id="float-title" class="post-sm">
									<article>
										<a href="<?php echo get_permalink($arPosts[2]) ?>">
											<header>
												<img src="<?php bloginfo('template_url') ?>/img/ph-post03.jpg" data-img="<?php bloginfo('template_url') ?>/img/ph-post03.jpg" data-img-xs="<?php bloginfo('template_url') ?>/img/ph-post01.jpg" nopin="nopin">
												<div id="wrap">
														<h2 class="ani-04 title white">
															Facilisi facilisis vehicula diam leo
														</h2>
													<time>
														<span class="ico-time"></span>20 de Ago, 2016
													</time>
												</div>
											</header>
										</a>
									</article>
								</li>

							<?php endif ?>

						</div>

					<?php endif ?>

					<div class="clearfix"></div>

					<?php if ( count( $arPosts ) > 3 ): ?>

						<div class="col-md-5 col-sm-6 col-sm-offset-0 col-xs-5 col-xs-offset-1">
							<li class="post-m">
								<article>
									<a href="<?php echo get_permalink($arPosts[3]) ?>">
										<header>
											<img src="<?php bloginfo('template_url') ?>/img/ph-post04.jpg" nopin="nopin">
											<div id="wrap">
													<h2 class="ani-04 title orange">
														Facilisi facilisis vehicula diam leo
													</h2>
												<time>
													<span class="ico-time"></span>20 de Ago, 2016
												</time>
											</div>
										</header>
									</a>
									<p>Egestas lacinia. Sapien penatibus cubilia rutrum fusce curabitur felis nulla facilisis nunc nullam ornare augue ultrices. Mauris eleifend augue sapien ...</p>
								</article>
							</li>
						</div>

					<?php endif ?>

					<?php if ( count( $arPosts ) > 4 ): ?>

						<div class="col-md-4 col-sm-6 col-xs-5">
							<li class="post-m">
								<article>
									<a href="<?php echo get_permalink($arPosts[4]) ?>">
										<header>
											<img src="<?php bloginfo('template_url') ?>/img/ph-post05.jpg" data-img="<?php bloginfo('template_url') ?>/img/ph-post05.jpg" data-img-sm="<?php bloginfo('template_url') ?>/img/ph-post05-sm.jpg" data-img-xs="<?php bloginfo('template_url') ?>/img/ph-post05-sm.jpg" nopin="nopin">
											<div id="wrap">
													<h2 class="ani-04 title orange">
														Facilisi facilisis vehicula diam leo
													</h2>
												<time>
													<span class="ico-time"></span>20 de Ago, 2016
												</time>
											</div>
										</header>
									</a>
									<p>Egestas lacinia. Sapien penatibus cubilia rutrum fusce curabitur felis nulla facilisis nunc nullam ornare augue ultrices. Mauris eleifend augue sapien ...</p>
								</article>
							</li>
						</div>
						
					<?php endif ?>

					<?php if ( count( $arPosts ) > 5 ): ?>

						<div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 news-sp">
							<li class="post-sp col-md-12 col-sm-6 sm-alpha md-no-alpha xs-alpha xs-omega">
								<article>
									<a href="<?php echo get_permalink($arPosts[5]) ?>">
										<header>
											<img src="<?php bloginfo('template_url') ?>/img/ph-post06.jpg" data-img="<?php bloginfo('template_url') ?>/img/ph-post06.jpg" data-img-sm="<?php bloginfo('template_url') ?>/img/ph-post06-sm.jpg" nopin="nopin">
											<div id="wrap">
													<h2 class="ani-04 title orange">
														Facilisi facilisis vehicula diam leo
													</h2>
												<time>
													<span class="ico-time"></span>20 de Ago, 2016
												</time>
											</div>
										</header>
									</a>
									<p class="hidden-md hidden-lg">Egestas lacinia. Sapien penatibus cubilia rutrum fusce curabitur felis nulla facilisis nunc nullam ornare augue ultrices. Mauris eleifend augue sapien ...</p>
								</article>
							</li>

							<?php if ( count( $arPosts ) > 6 ): ?>
							
								<li class="post-sp col-md-12 col-sm-6 sm-omega md-no-omega xs-alpha xs-omega">
									<article>
										<a href="<?php echo get_permalink($arPosts[6]) ?>">
											<header>
												<img src="<?php bloginfo('template_url') ?>/img/ph-post07.jpg" data-img="<?php bloginfo('template_url') ?>/img/ph-post07.jpg" data-img-sm="<?php bloginfo('template_url') ?>/img/ph-post07-sm.jpg" nopin="nopin">
												<div id="wrap">
														<h2 class="ani-04 title orange">
															Facilisi facilisis vehicula diam leo
														</h2>
													<time>
														<span class="ico-time"></span>20 de Ago, 2016
													</time>
												</div>
											</header>
										</a>
										<p class="hidden-md hidden-lg">Egestas lacinia. Sapien penatibus cubilia rutrum fusce curabitur felis nulla facilisis nunc nullam ornare augue ultrices. Mauris eleifend augue sapien ...</p>
									</article>
								</li>
								
							<?php endif ?>

						</div>
						
					<?php endif ?>

					<?php if ( count( $arPosts ) > 7 ): ?>
					
						<div class="col-sm-3 col-sm-offset-0 col-xs-5 col-xs-offset-1">
							<li class="post-p">
								<article>
									<a href="<?php echo get_permalink($arPosts[7]) ?>">
										<header>
											<img src="<?php bloginfo('template_url') ?>/img/ph-post08.jpg" nopin="nopin">
											<div id="wrap">
													<h2 class="ani-04 title orange">
														Facilisi facilisis vehicula diam leo
													</h2>
												<time>
													<span class="ico-time"></span>20 de Ago, 2016
												</time>
											</div>
										</header>
									</a>
									<p>Egestas lacinia. Sapien penatibus cubilia rutrum fusce curabitur felis nulla facilisis nunc nullam ornare augue ultrices. Mauris eleifend augue sapien ...</p>
									<div class="clearfix"></div>
								</article>
							</li>
						</div>
						
					<?php endif ?>

					<?php if ( count( $arPosts ) > 8 ): ?>

						<div class="col-sm-3 col-xs-5">
							<li class="post-p">
								<article>
									<a href="<?php echo get_permalink($arPosts[8]) ?>">
										<header>
											<img src="<?php bloginfo('template_url') ?>/img/ph-post09.jpg" nopin="nopin">
											<div id="wrap">
													<h2 class="ani-04 title orange">
														Facilisi facilisis vehicula diam leo
													</h2>
												<time>
													<span class="ico-time"></span>20 de Ago, 2016
												</time>
											</div>
										</header>
									</a>
									<p>Egestas lacinia. Sapien penatibus cubilia rutrum fusce curabitur felis nulla facilisis nunc nullam ornare augue ultrices. Mauris eleifend augue sapien ...</p>
									<div class="clearfix"></div>
								</article>
							</li>
						</div>
					
					<?php endif ?>

					<?php if ( count( $arPosts ) > 9 ): ?>

						<div class="col-sm-3 col-sm-offset-0 col-xs-5 col-xs-offset-1">
							<li class="post-p">
								<article>
									<a href="<?php echo get_permalink($arPosts[9]) ?>">
										<header>
											<img src="<?php bloginfo('template_url') ?>/img/ph-post10.jpg" nopin="nopin">
											<div id="wrap">
													<h2 class="ani-04 title orange">
														Facilisi facilisis vehicula diam leo
													</h2>
												<time>
													<span class="ico-time"></span>20 de Ago, 2016
												</time>
											</div>
										</header>
									</a>
									<p>Egestas lacinia. Sapien penatibus cubilia rutrum fusce curabitur felis nulla facilisis nunc nullam ornare augue ultrices. Mauris eleifend augue sapien ...</p>
									<div class="clearfix"></div>
								</article>
							</li>
						</div>

					<?php endif ?>

					<?php if ( count( $arPosts ) > 10 ): ?>

						<div class="col-sm-3 col-xs-5">
							<li class="post-p">
								<article>
									<a href="<?php echo get_permalink($arPosts[10]) ?>">
										<header>
											<img src="<?php bloginfo('template_url') ?>/img/ph-post11.jpg" nopin="nopin">
											<div id="wrap">
													<h2 class="ani-04 title orange">
														Facilisi facilisis vehicula diam leo
													</h2>
												<time>
													<span class="ico-time"></span>20 de Ago, 2016
												</time>
											</div>
										</header>
									</a>
									<p>Egestas lacinia. Sapien penatibus cubilia rutrum fusce curabitur felis nulla facilisis nunc nullam ornare augue ultrices. Mauris eleifend augue sapien ...</p>
									<div class="clearfix"></div>
								</article>
							</li>
						</div>
						
					<?php endif ?>

				</ul>
			</div>

		<?php endif ?>

	</section>

<?php get_footer(); ?>