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

						<div class="col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0">
							<li class="md-float-title post-g">
								<article>
									<a href="<?php echo get_permalink($arPosts[0]) ?>">
										<header>
											<?php 

												$img = get_field('imagem', $arPosts[0]->ID);

											?>
											<img class="ani-04" src="<?php echo $img['sizes']['blog-g'] ?>" data-img="<?php echo $img['sizes']['blog-g'] ?>" data-img-sm="<?php echo $img['sizes']['blog-sm'] ?>" data-img-xs="<?php echo $img['sizes']['blog-m'] ?>" nopin="nopin">
											<div id="wrap">
												<h2 class="ani-04 title orange">
													<?php echo $arPosts[0]->post_title ?>
												</h2>
												<time>

													<?php 

													$time = date('d,n,Y', strtotime($arPosts[0]->post_date_gmt));
													$time = explode(',', $time);
													$time = $time[0] . ' de ' . substr($meses[intval($time[1]) - 1], 0, 3) . ', ' . $time[2];

													 ?>

													<span class="ico-time"></span><?php echo $time ?>
												</time>
											</div>
										</header>
									</a>
									<p>
										<?php

											$txt = substr( wp_strip_all_tags( $arPosts[1]->post_content ), 0, 255 );
											$txt = substr( $txt, 0, strrpos( $txt, ' ' ) );
											$noWrapPos = strrpos( $txt, ' ' );
											echo substr($txt, 0, $noWrapPos) . ' <span id="no-wrap">' . substr($txt, $noWrapPos) . '...</span>';
											
										?>
									</p>
									<div class="clearfix"></div>
								</article>
							</li>
						</div>

					<?php endif ?>

					<?php if ( count( $arPosts ) > 1 ): ?>

						<div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 news-sm col-md-6 col-md-offset-0">

							<li class="md-float-title post-sm col-md-12 col-xs-6 xs-alpha md-omega">
								<article>
									<a href="<?php echo get_permalink($arPosts[1]) ?>">
										<header>
											<?php 

												$img = get_field('imagem', $arPosts[1]->ID);

											?>
											<img class="ani-04" src="<?php echo $img['sizes']['blog-sm'] ?>" data-img="<?php echo $img['sizes']['blog-sm'] ?>" data-img-sm="<?php echo $img['sizes']['blog-m'] ?>" data-img-xs="<?php echo $img['sizes']['blog-p'] ?>" nopin="nopin">
											<div id="wrap">
													<h2 class="ani-06 title orange">
														<?php echo $arPosts[1]->post_title ?>
													</h2>
												<time>

													<?php 

													$time = date('d,n,Y', strtotime($arPosts[1]->post_date_gmt));
													$time = explode(',', $time);
													$time = $time[0] . ' de ' . substr($meses[intval($time[1]) - 1], 0, 3) . ', ' . $time[2];

													 ?>

													<span class="ico-time"></span><?php echo $time ?>
												</time>
											</div>
										</header>
									</a>
									<p>
										<?php

											$txt = substr( wp_strip_all_tags( $arPosts[1]->post_content ), 0, 155 );
											$txt = substr( $txt, 0, strrpos( $txt, ' ' ) );
											$noWrapPos = strrpos( $txt, ' ' );
											echo substr($txt, 0, $noWrapPos) . ' <span id="no-wrap">' . substr($txt, $noWrapPos) . '...</span>';
											
										?>
									</p>
								</article>
							</li>
							
							<?php if ( count( $arPosts ) > 2 ): ?>

								<li class="md-float-title post-sm col-md-12 col-xs-6 xs-omega md-alpha">
									<article>
										<a href="<?php echo get_permalink($arPosts[2]) ?>">
											<header>
												<?php 

													$img = get_field('imagem', $arPosts[2]->ID);

												?>
												<img class="ani-04" src="<?php echo $img['sizes']['blog-sm'] ?>" data-img="<?php echo $img['sizes']['blog-sm'] ?>" data-img-sm="<?php echo $img['sizes']['blog-m'] ?>" data-img-xs="<?php echo $img['sizes']['blog-p'] ?>" nopin="nopin">
												<div id="wrap">
														<h2 class="ani-04 title orange">
															<?php echo $arPosts[2]->post_title ?>
														</h2>
													<time>

														<?php 

														$time = date('d,n,Y', strtotime($arPosts[2]->post_date_gmt));
														$time = explode(',', $time);
														$time = $time[0] . ' de ' . substr($meses[intval($time[1]) - 1], 0, 3) . ', ' . $time[2];

														 ?>

														<span class="ico-time"></span><?php echo $time ?>

													</time>
												</div>
											</header>
										</a>
										<p>
											<?php

												$txt = substr( wp_strip_all_tags( $arPosts[2]->post_content ), 0, 155 );
												$txt = substr( $txt, 0, strrpos( $txt, ' ' ) );
												$noWrapPos = strrpos( $txt, ' ' );
												echo substr($txt, 0, $noWrapPos) . ' <span id="no-wrap">' . substr($txt, $noWrapPos) . '...</span>';
												
											?>
										</p>
									</article>
								</li>

							<?php endif ?>

						</div>

					<?php endif ?>

					<div class="clearfix"></div>

					<?php if ( count( $arPosts ) > 3 ): ?>

						<div class="col-md-9 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">

							<div class="col-xs-6 xs-alpha">
								<li class="post-m">
									<article>
										<a href="<?php echo get_permalink($arPosts[3]) ?>">
											<header>
												<?php 

													$img = get_field('imagem', $arPosts[3]->ID);

												?>
												<img class="ani-04" src="<?php echo $img['sizes']['blog-m'] ?>" data-img="<?php echo $img['sizes']['blog-m'] ?>" data-img-xs="<?php echo $img['sizes']['blog-p'] ?>" nopin="nopin">
												<div id="wrap">
														<h2 class="ani-04 title orange">
															<?php echo $arPosts[3]->post_title ?>
														</h2>
													<time>

														<?php 

														$time = date('d,n,Y', strtotime($arPosts[3]->post_date_gmt));
														$time = explode(',', $time);
														$time = $time[0] . ' de ' . substr($meses[intval($time[1]) - 1], 0, 3) . ', ' . $time[2];

														 ?>

														<span class="ico-time"></span><?php echo $time ?>

													</time>
												</div>
											</header>
										</a>
										<p>
											<?php

												$txt = substr( wp_strip_all_tags( $arPosts[3]->post_content ), 0, 155 );
												$txt = substr( $txt, 0, strrpos( $txt, ' ' ) );
												$noWrapPos = strrpos( $txt, ' ' );
												echo substr($txt, 0, $noWrapPos) . ' <span id="no-wrap">' . substr($txt, $noWrapPos) . '...</span>';
												
											?>
										</p>
									</article>
								</li>
							</div>


							<?php if ( count( $arPosts ) > 4 ): ?>

								<div class="col-xs-6 xs-omega">
									<li class="post-m">
										<article>
											<a href="<?php echo get_permalink($arPosts[4]) ?>">
												<header>
													<?php 

														$img = get_field('imagem', $arPosts[4]->ID);

													?>
													<img class="ani-04" src="<?php echo $img['sizes']['blog-m'] ?>" data-img="<?php echo $img['sizes']['blog-m'] ?>" data-img-xs="<?php echo $img['sizes']['blog-p'] ?>" nopin="nopin">
													<div id="wrap">
														<h2 class="ani-04 title orange">
															<?php echo $arPosts[4]->post_title ?>
														</h2>
														<time>

															<?php 

															$time = date('d,n,Y', strtotime($arPosts[4]->post_date_gmt));
															$time = explode(',', $time);
															$time = $time[0] . ' de ' . substr($meses[intval($time[1]) - 1], 0, 3) . ', ' . $time[2];

															 ?>

															<span class="ico-time"></span><?php echo $time ?>

														</time>
													</div>
												</header>
											</a>
											<p>
												<?php

													$txt = substr( wp_strip_all_tags( $arPosts[4]->post_content ), 0, 155 );
													$txt = substr( $txt, 0, strrpos( $txt, ' ' ) );
													$noWrapPos = strrpos( $txt, ' ' );
													echo substr($txt, 0, $noWrapPos) . ' <span id="no-wrap">' . substr($txt, $noWrapPos) . '...</span>';
													
												?>
											</p>
										</article>
									</li>
								</div>
								
							<?php endif ?>
							
							<div class="clearfix"></div>
						</div>
						
					<?php endif ?>

					<?php if ( count( $arPosts ) > 5 ): ?>

						<div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 news-sp">
							<li class="post-sp col-md-12 col-xs-6 xs-alpha md-omega">
								<article>
									<a href="<?php echo get_permalink($arPosts[5]) ?>">
										<header>
											<?php

												$img = get_field('imagem', $arPosts[5]->ID);

											?>
											<img class="ani-04" src="<?php echo $img['sizes']['blog-m'] ?>" data-img="<?php echo $img['sizes']['blog-m'] ?>" data-img-sm="<?php echo $img['sizes']['blog-p'] ?>" data-img-xs="<?php echo $img['sizes']['blog-p'] ?>" nopin="nopin">
											<div id="wrap">
													<h2 class="ani-04 title orange">
														<?php echo $arPosts[5]->post_title ?>
													</h2>
												<time>

													<?php 

													$time = date('d,n,Y', strtotime($arPosts[5]->post_date_gmt));
													$time = explode(',', $time);
													$time = $time[0] . ' de ' . substr($meses[intval($time[1]) - 1], 0, 3) . ', ' . $time[2];

													 ?>

													<span class="ico-time"></span><?php echo $time ?>

												</time>
											</div>
										</header>
									</a>
									<p class="hidden-md hidden-lg">
										<?php

											$txt = substr( wp_strip_all_tags( $arPosts[5]->post_content ), 0, 155 );
											$txt = substr( $txt, 0, strrpos( $txt, ' ' ) );
											$noWrapPos = strrpos( $txt, ' ' );
											echo substr($txt, 0, $noWrapPos) . ' <span id="no-wrap">' . substr($txt, $noWrapPos) . '...</span>';
											
										?>
									</p>
								</article>
							</li>

							<?php if ( count( $arPosts ) > 6 ): ?>
							
								<li class="post-sp col-md-12 col-xs-6 md-alpha xs-omega">
									<article>
										<a href="<?php echo get_permalink($arPosts[6]) ?>">
											<header>
												<?php 

													$img = get_field('imagem', $arPosts[6]->ID);

												?>
												<img class="ani-04" src="<?php echo $img['sizes']['blog-m'] ?>" data-img="<?php echo $img['sizes']['blog-m'] ?>" data-img-sm="<?php echo $img['sizes']['blog-p'] ?>" data-img-xs="<?php echo $img['sizes']['blog-p'] ?>" nopin="nopin">
												<div id="wrap">
														<h2 class="ani-04 title orange">
															<?php echo $arPosts[6]->post_title ?>
														</h2>
													<time>

														<?php 

														$time = date('d,n,Y', strtotime($arPosts[6]->post_date_gmt));
														$time = explode(',', $time);
														$time = $time[0] . ' de ' . substr($meses[intval($time[1]) - 1], 0, 3) . ', ' . $time[2];
#des#de
														 ?>

														<span class="ico-time"></span><?php echo $time ?>

													</time>
												</div>
											</header>
										</a>
										<p class="hidden-md hidden-lg">
											<?php

												$txt = substr( wp_strip_all_tags( $arPosts[6]->post_content ), 0, 155 );
												$txt = substr( $txt, 0, strrpos( $txt, ' ' ) );
												$noWrapPos = strrpos( $txt, ' ' );
												echo substr($txt, 0, $noWrapPos) . ' <span id="no-wrap">' . substr($txt, $noWrapPos) . '...</span>';
												
											?>
										</p>
									</article>
								</li>
								
							<?php endif ?>

						</div>
						
					<?php endif ?>

					<?php if ( count( $arPosts ) > 7 ): ?>

						<?php for ($i=7; $i < count( $arPosts ); $i++) : ?>

							<div class="col-sm-3 col-sm-offset-0 col-xs-5 <?php echo ($i % 2 == 0) ? 'newline' : 'col-xs-offset-1'; ?>">
								<li class="post-p">
									<article>
										<a href="<?php echo get_permalink($arPosts[$i]) ?>">
											<header>
												<?php 

													$img = get_field('imagem', $arPosts[$i]->ID);

												?>
												<img class="ani-04" src="<?php echo $img['sizes']['blog-p'] ?>" nopin="nopin">
												<div id="wrap">
														<h2 class="ani-04 title orange">
															<?php echo $arPosts[$i]->post_title ?>
														</h2>
													<time>

														<?php 

														$time = date('d,n,Y', strtotime($arPosts[$i]->post_date_gmt));
														$time = explode(',', $time);
														$time = $time[0] . ' de ' . substr($meses[intval($time[1]) - 1], 0, 3) . ', ' . $time[2];

														 ?>

														<span class="ico-time"></span><?php echo $time ?>

													</time>
												</div>
											</header>
										</a>
										<p>
											<?php

												$txt = substr( wp_strip_all_tags( $arPosts[$i]->post_content ), 0, 155 );
												$txt = substr( $txt, 0, strrpos( $txt, ' ' ) );
												$noWrapPos = strrpos( $txt, ' ' );
												echo substr($txt, 0, $noWrapPos) . ' <span id="no-wrap">' . substr($txt, $noWrapPos) . '...</span>';
												
											?>
										</p>
									</article>
								</li>
							</div>

						<?php endfor; ?>
						
					<?php endif ?>

				</ul>
			</div>

		<?php endif ?>

	</section>

<?php get_footer(); ?>