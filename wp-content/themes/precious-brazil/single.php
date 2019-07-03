<?php get_header(); ?>



	<main role="main">
		<?php if (have_posts()): ?>
			<div class="container">
				<section>
					<article class="noticias-new">
						<?php while (have_posts()) : the_post();?>
							<div class="row">
				        <div class="col-md-12">
				        	<h2><?php the_title()?></h2>

								    <?php the_tags( '<div class="tags"><h3>', '</h3></div> <div class="tags"><h3>', '</h3></div>' ); ?>

									<?php echo do_shortcode( "[ssba-buttons]" ); ?>
				        </div>
							</div>
							<div class="row">
								<div class="col-md-8">
							    <?php the_content()?>
								</div>
								<div class="col-md-4 pr-0 sidebar-desktop">
									<?php get_sidebar(); ?>
								</div>									
								<div id="Responsive">
									<div class="col-md-9">
									<div class="noticias-relacionadas">
										<div class="icon-relacionada"></div>
										<h2>Notícias Relacionadas</h2>		
										<div class="row">
									
											<?php $custom_query_args = array( 
												'posts_per_page' => 3, // Number of related posts to display
												'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
												'orderby' => 'rand', // Randomize the results
											);
											// Initiate the custom query
											$custom_query = new WP_Query( $custom_query_args );?>
											<?php if ( $custom_query->have_posts() ) : ?>
												<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
													<div class="col-md-4">
														<?php if ( has_post_thumbnail() ) { ?> 
															<a href="<?php the_permalink()?>">
																<div class="circle" style="background: url(<?php echo the_post_thumbnail_url();?>); background-size: cover"></div>
															</a>
														<?php } ?>
														<a href="<?php the_permalink(); ?>"><h3><?php echo wp_trim_words( get_the_title(), 5 ); ?><br><p><?php the_date('d/m/Y'); ?></p></a>	
													</div>
												<?php endwhile; ?>
											<?php else : ?>
													<p>Sorry, no related articles to display.</p>
											<?php endif;
											// Reset postdata
											wp_reset_postdata();?>
										</div>
									</div>
								</div>
								</div>
							</div>
							<div class="row">
								<div id="Desktop">
									<div class="col-md-9">
										<div class="noticias-relacionadas">
											<div class="icon-relacionada"></div>
											<h2>Notícias Relacionadas</h2>		
											<div class="row">
										
												<?php $custom_query_args = array( 
													'posts_per_page' => 3, // Number of related posts to display
													'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
													'orderby' => 'rand', // Randomize the results
												);
												// Initiate the custom query
												$custom_query = new WP_Query( $custom_query_args );?>
												<?php if ( $custom_query->have_posts() ) : ?>
													<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
														<div class="col-md-4">
															<?php if ( has_post_thumbnail() ) { ?> 
																<a href="<?php the_permalink()?>">
																	<div class="circle" style="background: url(<?php echo the_post_thumbnail_url();?>); background-size: cover"></div>
																</a>
															<?php } ?>
															<a href="<?php the_permalink(); ?>"><h3><?php echo wp_trim_words( get_the_title(), 5 ); ?><br><p><?php the_date('d/m/Y'); ?></p></a>	
														</div>
													<?php endwhile; ?>
												<?php else : ?>
														<p>Sorry, no related articles to display.</p>
												<?php endif;
												// Reset postdata
												wp_reset_postdata();?>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3 pr-0 sidebar-mobile">
									<?php include( TEMPLATEPATH . '/sidebar.php'); ?>
								</div>
							</div>
						<?php endwhile;?>
					</article>
				</section>
			</div>
		<?php endif ?>

	</main>
	<section>

	

	</section>
	<!-- /section -->
	</main>



<?php get_footer(); ?>
