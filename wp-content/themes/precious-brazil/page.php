<?php get_header(); ?>


	<main role="main">
		<?php if(is_page('precious-brazil') || is_page('ibgm') || is_page('sobre-o-setor') || is_page('apex-brasil')):?>
			<section>
				<article class="quem-somos">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="title">Quem Somos</h2>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row quem-somos-block row-eq-height">
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<div class="col-md-5 col-sm-12 pl-0" style="background: url('<?php echo get_the_post_thumbnail_url();?>'); background-size:cover; background-repeat:no-repeat">
									<div class="v_mobile">
										<img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
									</div>
								</div>									
								
								<div class="col-md-7 col-sm-12 pr-0">
									<div class="quem-somos-content">
										<h1><?php the_title()?></h1>
										<?php the_content()?>										
									</div>
								</div>
							<?php endwhile; endif;?>
						</div>
					</div>
					<?php if(is_page('sobre-o-setor')){?>
						<div class="container">
							<div class="numeros-setor">
								<div class="row">
									<div class="col-md-12">
										<h2 style="font-size: 30px; text-align: center; padding-bottom: 50px;">Números do Setor</h2>
										<img src="<?php the_field('numeros_do_setor')?>" alt="">
									</div>
								</div>
							</div>
						</div>
					<?php }?>
					<div class="quem-somos-opc">
						<div class="container">
							<div class="row">
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<?php if(get_field('quemsomos_rodape_texto')){?>
										<div class="col-md-3 offset-md-2">
											<h4><?php the_field('quemsomos_rodape_texto');?></h4>
											<a href="<?php the_field('quemsomos_rodape_link_do_botao')?>">
												<input type="button" value="<?php the_field('quemsomos_rodape_texto_do_botao')?>" style="margin-left: 7px;">
											</a>
										</div>
										<div class="col-md-4 offset-md-2">
											<?php if(is_page('precious-brazil')){?>
												<h4 style="font-size: 30px; line-height: 45px;">
													<a style="font-weight: lighter;">faça</a> <a style="font-weight: bolder">parte do <br> precious</a> <a style="font-weight: 500">brazil</a>
												</h4>
												<a href="https://podio.com/webforms/16609331/1152695" target="_blank">
													<input type="button" value="INSCREVA-SE">
												</a>
											<?php }elseif(is_page('ibgm')){ ?>
												<h4 style="font-size: 30px; line-height: 45px;">
													<a style="font-weight: lighter;">PARA</a> <a style="font-weight: bolder">saber mais <br> sobre o</a> <a style="font-weight: 500">IBGM</a>
												</h4>
												<a href="http://ibgm.com.br" target="_blank"><input type="button" value="ACESSE"></a>
											<?php }elseif(is_page('sobre-o-setor')){ ?>
												<h4 style="font-size: 30px; line-height: 45px;">
													<a style="font-weight: lighter;">PARA</a> <a style="font-weight: bolder">saber mais <br> sobre o</a> <a style="font-weight: 500">IBGM</a>
												</h4>
												<a href="http://ibgm.com.br" target="_blank"><input type="button" value="ACESSE"></a>
											<?php }elseif (is_page('apex-brasil')) {?>
												<h4>
													<a style="font-weight: lighter;">mais</a> <a style="font-weight: bolder">sobre a <br> apex</a><a style="font-weight: 500">-brasil</a>
												</h4>
												<a href="http://www.apexbrasil.com.br/home/index" target="_blank"><input type="button" value="ACESSE"></a>
											<?php }?>
										</div>
									<?php }else{?>
										<div class="col-md-4 offset-md-4" style="text-align:center;">
											<?php if(is_page('precious-brazil')){?>
												<h4 style="font-size: 30px; line-height: 45px;">
													<a style="font-weight: lighter;">faça</a> <a style="font-weight: bolder">parte do <br> precious</a> <a style="font-weight: 500">brazil</a>
												</h4>
												<a href="https://podio.com/webforms/16609331/1152695" target="_blank">
													<input type="button" value="INSCREVA-SE">
												</a>
											<?php }elseif(is_page('ibgm')){ ?>
												<h4 style="font-size: 30px; line-height: 45px;">
													<a style="font-weight: lighter;">PARA</a> <a style="font-weight: bolder">saber mais <br> sobre o</a> <a style="font-weight: 500">IBGM</a>
												</h4>
												<a href="http://ibgm.com.br" target="_blank"><input type="button" value="ACESSE"></a>
											<?php }elseif(is_page('sobre-o-setor')){ ?>
												<h4 style="font-size: 30px; line-height: 45px;">
													<a style="font-weight: lighter;">PARA</a> <a style="font-weight: bolder">saber mais <br> sobre o</a> <a style="font-weight: 500">IBGM</a>
												</h4>
												<a href="http://ibgm.com.br" target="_blank"><input type="button" value="ACESSE"></a>
											<?php }elseif (is_page('apex-brasil')) {?>
												<h4>
													<a style="font-weight: lighter;">mais</a> <a style="font-weight: bolder">sobre a <br> apex</a><a style="font-weight: 500">-brasil</a>
												</h4>
												<a href="http://www.apexbrasil.com.br/home/index" target="_blank"><input type="button" value="ACESSE"></a>
											<?php }?>
										</div>
									<?php }?>
								<?php endwhile; endif;?>
							</div>							
						</div>						
					</div>
				</article>
			</section>
		<?php endif;?>
		<?php if(is_page('acoes')):?>
			<div id="Desktop">
				<section>
					<div class="container-fluid">
						<div class="row about">
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<div class="col-md-5 offset-md-1">
									<h2><?php the_title()?></h2>
				          <hr width="80px">
				          <?php the_content()?>
								</div>
								<div class="col-md-6 pr-0">
									<img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
								</div>
							<?php endwhile; endif; wp_reset_query();?>
						</div>
					</div>
				</section>
				<section>
					<article class="acoes">
						<div class="acoes-content">
							<div class="container">
								<div class="row">
									<div class="col-md-12 pl-0 pr-0">
										<?php $post_type = 'acoes';

											$taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
											 
											foreach( $taxonomies as $taxonomy ) :
												$terms = get_terms( $taxonomy );
												foreach( $terms as $term ) : ?>
													<h2><?php echo $term->name; ?></h2>
													<?php $args = array(
														'order' => 'ASC',
											      'post_type' => $post_type,
											      'posts_per_page' => -1,  //show all posts
											      'tax_query' => array(
										          array(
										            'taxonomy' => $taxonomy,
										            'field' => 'slug',
										            'terms' => $term->slug
										          )
											      )
													);
													$posts = new WP_Query($args);
											 
													while( $posts->have_posts() ) : $posts->the_post(); ?>
														<div class="acao-box" data-target="<?php echo $post->post_name;?>" style="background: url(<?php echo get_the_post_thumbnail_url()?>);">
															<h5 class="ajust-acoes-h5"><?php the_title()?></h5>
														</div>
														<?php wp_reset_postdata();?>
														<?php endwhile;  ?>
														<?php while( $posts->have_posts() ) : $posts->the_post(); ?>
														<div class="acao-ds acao-conteudo" id="<?php echo $post->post_name;?>">
															<div class="seta-direita"></div>
															<?php the_content()?>
														</div>
													<?php endwhile; ?>
													<?php wp_reset_postdata();
												endforeach;
											endforeach; 
										?>
									</div>
								</div>
							</div>
						</div>
					</article>
				</section>				
			</div>
			<div id="Responsive">
				<section>
					<div class="container">
						<div class="row about">
							<?php $posts = new WP_Query(array('pagename' => 'acoes'));
								if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); ?>
								<div class="col-md-12">
									<h2><?php the_title()?></h2>
				          <hr width="80px">
				          <?php the_content()?>
								</div>							
							<?php endwhile; endif; wp_reset_postdata();?>
						</div>
					</div>
				</section>
				<section>
					<article class="acoes">
						<div class="container">
							<div class="acoes-content">
								<div class="row">
									<div class="col-md-12">
										<?php $post_type = 'acoes';

											$taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
	 
											foreach( $taxonomies as $taxonomy ) :
	    									$terms = get_terms( $taxonomy );
	 
	    									foreach( $terms as $term ) : ?>
	 
	      								<h2><?php echo $term->name; ?></h2>
	 
	        							<?php $args = array(
	        								'order' => 'ASC',
					                'post_type' => $post_type,
					                'posts_per_page' => -1,  //show all posts
					                'tax_query' => array(
					                    array(
					                        'taxonomy' => $taxonomy,
					                        'field' => 'slug',
					                        'terms' => $term->slug,
					                    )
					                )
	            					);
	        							$posts = new WP_Query($args);
	 
	        							if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); ?>
	        								<div class="acao-box" data-target="<?php echo $post->post_name;?>" style="background: url(<?php echo get_the_post_thumbnail_url()?>);">
														<h5 class="ajust-acoes-h5"><?php the_title()?></h5>														
	        								</div>
	        								<div class="acao-ds acao-conteudo" id="<?php echo $post->post_name;?>">
														<div class="seta-direita"></div>
															<?php the_content()?>
													</div>
	 											<?php endwhile; endif; wp_reset_postdata();?>
	    								<?php endforeach;
										endforeach; ?>
									</div>
								</div>
							</div>							
						</div>
					</article>
				</section>
			</div>
		<?php endif;?>
		<?php if(is_page('empresas')):?>
			<div id="Desktop">
				<section>
					<article class="empresas">
						<h2><?php the_title()?></h2>
						<div class="empresas-content">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<?php $loop = new WP_Query( array( 'post_type' => 'empresas', 'order' => 'ASC' ) );
						    			if ( $loop->have_posts() ) :
						    				$i = 1;
						        		while ( $loop->have_posts() ) : $loop->the_post(); ?>
													<div class="block-empresas <?php echo $i; ?>">
														<h3>
															<a href="<?php the_permalink();?>"><?php the_title()?></a>
														</h3>
														<h4>
															<?php the_field('empresa_segmento')?>
														</h4>
														<h5>
															<?php the_field('empresa_perfil');?>
														</h5>
														<?php if(get_field('empresa_facebook')){?>
															<img src="<?php echo get_template_directory_uri(); ?>/images/face.png" class="img-face">
														<?php }?>
														<?php if(get_field('empresa_instagram')){?>
															<img src="<?php echo get_template_directory_uri(); ?>/images/insta.png">
														<?php }?>
														<?php if(get_field('empresa_whatsapp')){?>
															<img src="<?php echo get_template_directory_uri(); ?>/images/whats.png">
														<?php }?>

													</div>
													<?php
                            if($i % 4 === 0) {
                                echo '<div class="empresas-line"></div>';
                            }
                            ++$i;
                           ?>
						        		<?php endwhile;
						        	endif; wp_reset_postdata();
						        ?>
									</div>
								</div>
							</div>
						</div>
					</article>
				</section>				
			</div>
			<div id="Responsive">
				<section>
					<div class="container">
						<article class="empresas">
							<h2><?php the_title();?></h2>
							<div class="empresas-content">
								<div class="row">
									<div class="col-md-12">
										<?php $loop = new WP_Query( array( 'post_type' => 'empresas', 'order' => 'ASC' ) );
						    			if ( $loop->have_posts() ) :
						    				$i = 1;
						        		while ( $loop->have_posts() ) : $loop->the_post(); ?>
													<div class="block-empresas <?php echo $i; ?>">
														<h3>
															<a href="<?php the_permalink();?>"><?php the_title()?></a>
														</h3>
														<h4>
															<?php the_field('empresa_segmento')?>
														</h4>
														<h5>
															<?php the_field('empresa_perfil');?>
														</h5>
														<?php if(get_field('empresa_facebook')){?>
															<img src="<?php echo get_template_directory_uri(); ?>/images/face.png" class="img-face">
														<?php }?>
														<?php if(get_field('empresa_instagram')){?>
															<img src="<?php echo get_template_directory_uri(); ?>/images/insta.png">
														<?php }?>
														<?php if(get_field('empresa_whatsapp')){?>
															<img src="<?php echo get_template_directory_uri(); ?>/images/whats.png">
														<?php }?>
													</div>
													<div class="empresas-line"></div>

						        		<?php endwhile;
						        	endif; wp_reset_postdata();
						        ?>
									</div>
								</div>
							</div>
						</article>
					</div>
				</section>
			</div>
		<?php endif;?>
		<?php if(is_page('noticias')):?>
			<div class="container">
				<section>
					<article class="noticias">
						<h2><?php the_title()?></h2>
						<?php $loop = new WP_Query( array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 9 ) );
	    			if ( $loop->have_posts() ) :
	    				$counter = 0;
	        		while ( $loop->have_posts() ) : $loop->the_post();
								if ($counter % 3 == 0) :
			            echo $counter > 0 ? "</div>" : ""; // close div if it's not the first
			            echo "<div class='row'>";
				        endif;?>
				        <div class="col-md-4 pl-5 pr-5">
				        	<div class="noticias-box">
					        	<a href="<?php the_permalink()?>">
					        		<img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
					        		<h3><?php the_title()?> - <em><?php the_date('d/m/Y'); ?></em></h3>
										</a>				        		
				        	</div>
				        </div>
				        <?php if (($loop->current_post +1) == ($loop->post_count)) {
								  echo '</div>';
								} ?>
				        <?php $counter++;?>
				      <?php endwhile;?>
				      <div class="pagination">
						    <?php 
						        echo paginate_links( array(
						            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
						            'total'        => $loop->max_num_pages,
						            'current'      => max( 1, get_query_var( 'paged' ) ),
						            'format'       => '?paged=%#%',
						            'show_all'     => false,
						            'type'         => 'plain',
						            'end_size'     => 2,
						            'mid_size'     => 1,
						            'prev_next'    => true,
						            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Anterior', 'text-domain' ) ),
						            'next_text'    => sprintf( '%1$s <i></i>', __( 'Próxima', 'text-domain' ) ),
						            'add_args'     => false,
						            'add_fragment' => '',
						        ) );
						    ?>
							</div>
				    <?php endif; wp_reset_query();?>

					</article>
				</section>				
			</div>
		<?php endif;?>
		<?php if(is_page('contato')):?>
			<div id="Desktop">
				<section>
					<article class="contato">
						<div class="container">
							<div class="row">
								<div class="col-md-10 offset-md-1">
									<h2 class="title"><?php the_title()?>
										<hr>
									</h2>

								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-md-7 offset-md-1">
									<div class="form-contato">
										<?php echo do_shortcode('[contact-form-7 id="171" title="Formulário de Contato"]');?>			
									</div>	
								</div>
								<div class="col-md-3">
									<aside class="contato-info">
										<?php if (have_posts()): while (have_posts()) : the_post();
											the_content();
										endwhile; endif;?>
									</aside>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div id="Responsive">
				<section>
					<article class="contato">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h2 class="title"><?php the_title()?>
										<hr>
									</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-7">
									<div class="form-contato">
										<?php echo do_shortcode('[contact-form-7 id="171" title="Formulário de Contato"]');?>			
									</div>
								</div>
								<div class="col-md-3">
									<aside class="contato-info">
										<?php if (have_posts()): while (have_posts()) : the_post();
											the_content();
										endwhile; endif;?>
									</aside>
								</div>
							</div>
						</div>
					</article>
				</section>
			</div>			
		<?php endif;?>
		<?php if(is_page('imprensa')):?>
			<div id="Desktop">
				<section>
					<article class="imprensa">
						<h2><?php the_title()?></h2>
						<div class="container">
							<div class="imprensa-content">
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<h3><?php the_excerpt()?></h3>
								<?php endwhile; endif;?>
								<div class="row">
									<div class="col-md-7">
										<div class="row">
											<?php $stickies = get_option( 'sticky_posts' );
											// Make sure we have stickies to avoid unexpected output
											if ( $stickies ) {
										    $args = array(
									        'post_type'           => 'imprensa',
									        'post__in'            => $stickies,
									        'posts_per_page'      => 5,
									        'ignore_sticky_posts' => 1,
									        'offset' => 1
										    );
										    $the_query = new WP_Query($args);

										    if ( $the_query->have_posts() ) { 
									        while ( $the_query->have_posts() ) { 
								            $the_query->the_post();?>

								            <div class="col-md-6">
								            	<a href="<?php the_permalink();?>">
									            	<div class="imprensa-block1" style="background: url('<?php echo get_the_post_thumbnail_url();?>')">
									            		<div class="imprensa-mask">
																		<h4>
																			<img src="<?php echo get_template_directory_uri(); ?>/images/hover-icon.png">
																		</h4>
																	</div>
									            	</div>
								            	</a>
								            </div>


									        <?php }    
									        wp_reset_postdata();    
										    }
											}?>
										</div>
									</div>
									<div class="col-md-5">
										<div class="row">
											<?php $stickies = get_option( 'sticky_posts' );
											// Make sure we have stickies to avoid unexpected output
											if ( $stickies ) {
										    $args = array(
									        'post_type'           => 'imprensa',
									        'post__in'            => $stickies,
									        'posts_per_page'      => 1,
									        'ignore_sticky_posts' => 1
										    );
										    $the_query = new WP_Query($args);

										    if ( $the_query->have_posts() ) { 
									        while ( $the_query->have_posts() ) { 
								            $the_query->the_post();?>

								            <div class="imprensa-block2" style="background: url('<?php echo get_the_post_thumbnail_url();?>')">
							            		<a href="<?php the_permalink()?>">
								            		<div class="imprensa-mask">
																	<h4>
																		<img src="<?php echo get_template_directory_uri(); ?>/images/hover-icon.png">
																	</h4>
																</div>
							            		</a>
							            	</div>
							       			 <?php }    
									        wp_reset_postdata();    
										    }
											}?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<div class="imprensa-noticias-box">
											<?php $loop = new WP_Query( array( 'post_type' => 'imprensa', 'order' => 'DESC', 'post__not_in' => get_option( 'sticky_posts' ), 'posts_per_page' => 9) );
						    			if ( $loop->have_posts() ) :
						    				$counter = 0;
						        		while ( $loop->have_posts() ) : $loop->the_post();?>
						        		<div class="imprensa-noticias">
							        		<a href="<?php the_permalink()?>"><?php the_title()?></a>
							        		<h5><?php the_field('imprensa_nome_da_midia')?><img src="<?php echo get_template_directory_uri(); ?>/images/hover-icon-black.png"></h5>						        			
						        		</div>
						        	<?php endwhile;?>
												<div class="pagination">
											    <?php echo paginate_links( array(
								            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
								            'total'        => $loop->max_num_pages,
								            'current'      => max( 1, get_query_var( 'paged' ) ),
								            'format'       => '?paged=%#%',
								            'show_all'     => false,
								            'type'         => 'plain',
								            'end_size'     => 2,
								            'mid_size'     => 1,
								            'prev_next'    => true,
								            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Anterior', 'text-domain' ) ),
								            'next_text'    => sprintf( '%1$s <i></i>', __( 'Próxima', 'text-domain' ) ),
								            'add_args'     => false,
								            'add_fragment' => '',
								        	) );
										    ?>
											</div>
						        	<?php endif; wp_reset_postdata(); ?>					
										</div>										
									</div>
									<div class="col-md-4">
										<div class="imprensa-info">
											<?php if (have_posts()): while (have_posts()) : the_post(); ?>
												<?php the_content();?>
											<?php endwhile; endif;?>
										</div>
									</div>
								</div>
							</div>							
						</div>
					</article>
				</section>
			</div>
			<div id="Responsive">
				<section>
					<article class="imprensa">
						<h2><?php the_title()?></h2>
						<div class="container">
							<div class="imprensa-content">
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									<h3><?php the_excerpt()?></h3>
								<?php endwhile; endif;?>
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<?php $stickies = get_option( 'sticky_posts' );
											// Make sure we have stickies to avoid unexpected output
											if ( $stickies ) {
										    $args = array(
									        'post_type'           => 'imprensa',
									        'post__in'            => $stickies,
									        'posts_per_page'      => 5,
									        'ignore_sticky_posts' => 1,
									        'offset' => 1
										    );
										    $the_query = new WP_Query($args);

										    if ( $the_query->have_posts() ) { 
									        while ( $the_query->have_posts() ) { 
								            $the_query->the_post();?>

								            <div class="col-md-6">
								            	<a href="<?php the_permalink();?>">
									            	<div class="imprensa-block1" style="background: url('<?php echo get_the_post_thumbnail_url();?>')">
									            		
									            	</div>
								            	</a>
								            </div>


									        <?php }    
									        wp_reset_postdata();    
										    }
										  }?>
										</div>
									</div>
								</div>
								<div class="row">
									<?php $stickies = get_option( 'sticky_posts' );
										// Make sure we have stickies to avoid unexpected output
										if ( $stickies ) {
									    $args = array(
								        'post_type'           => 'imprensa',
								        'post__in'            => $stickies,
								        'posts_per_page'      => 1,
								        'ignore_sticky_posts' => 1
									    );
									    $the_query = new WP_Query($args);

									    if ( $the_query->have_posts() ) { 
								        while ( $the_query->have_posts() ) { 
							            $the_query->the_post();?>

							            <div class="imprensa-block2" style="background: url('<?php echo get_the_post_thumbnail_url();?>')">
						            		<a href="<?php the_permalink()?>">
							            		
						            		</a>
						            	</div>
						       			 <?php }    
								        wp_reset_postdata();    
									    }
										}
									?>
								</div>
								<div class="row">
									<div class="col-md-8">
										<div class="imprensa-noticias-box">
											<?php $loop = new WP_Query( array( 'post_type' => 'imprensa', 'order' => 'DESC', 'post__not_in' => get_option( 'sticky_posts' ), 'posts_per_page' => 9) );
						    			if ( $loop->have_posts() ) :
						    				$counter = 0;
						        		while ( $loop->have_posts() ) : $loop->the_post();?>
						        		<div class="imprensa-noticias">
							        		<a href="<?php the_permalink()?>"><?php the_title()?></a>
							        		<h5><?php the_field('imprensa_nome_da_midia')?><img src="<?php echo get_template_directory_uri(); ?>/images/hover-icon-black.png"></h5>						        			
						        		</div>
						        	<?php endwhile; ?>
						        	<div class="pagination">
										    <?php 
										        echo paginate_links( array(
										            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
										            'total'        => $loop->max_num_pages,
										            'current'      => max( 1, get_query_var( 'paged' ) ),
										            'format'       => '?paged=%#%',
										            'show_all'     => false,
										            'type'         => 'plain',
										            'end_size'     => 2,
										            'mid_size'     => 1,
										            'prev_next'    => true,
										            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Anterior', 'text-domain' ) ),
										            'next_text'    => sprintf( '%1$s <i></i>', __( 'Próxima', 'text-domain' ) ),
										            'add_args'     => false,
										            'add_fragment' => '',
										        ) );
										    ?>
											</div>

						        	<?php endif; wp_reset_postdata(); ?>					
										</div>	
									</div>
									<div class="col-md-4">
										<div class="imprensa-info">
											<?php if (have_posts()): while (have_posts()) : the_post(); ?>
												<?php the_content();?>
											<?php endwhile; endif;?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</section>
			</div>
		<?php endif;?>
		<?php if(is_page('agenda')):?>
			<div id="Desktop">
				<section>
					<article class="agenda">
						<h2>Agenda</h2>
						<div class="container">
							<?php $loop = new WP_Query( array( 'post_type' => 'agenda', 'order' => 'ASC' ) );
			    			if ( $loop->have_posts() ) :
			    				$i = 1;
			        		while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<div class="block-agenda">
											<div class="agenda-alerta"></div>
											<div class="agenda-more" href="agenda_<?php echo $i;?>"></div>
											<div class="img-agenda" style="background: url(<?php echo get_the_post_thumbnail_url();?>)"></div>			
											<h3><?php the_title()?></h3>
											<h4><?php the_field('agenda_data_do_evento')?></h4>
										</div>
										<div class="block-agenda-mais" id="agenda_<?php echo $i?>">
											<div class="agenda-line"></div>
											<?php the_content()?>
										</div>
										<?php $i++?>
									<?php endwhile;
								endif; wp_reset_postdata();?>
						</div>
					</article>
				</section>
			</div>
			<div id="Responsive">
				<section>
					<article class="agenda">
						<h2><?php the_title()?></h2>
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<?php $loop = new WP_Query( array( 'post_type' => 'agenda', 'order' => 'ASC' ) );
			    			if ( $loop->have_posts() ) :
			    				$i = 1;
			        		while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<div class="block-agenda">
											<div class="agenda-alerta"></div>
											<div class="agenda-more" href="agenda_<?php echo $i;?>"></div>
											<div class="img-agenda" style="background: url(<?php echo get_the_post_thumbnail_url();?>)"></div>			
											<h3><?php the_title()?></h3>
											<h4><?php the_field('agenda_data_do_evento')?></h4>
										</div>
										<div class="block-agenda-mais" id="agenda_<?php echo $i?>">
											<div class="agenda-line"></div>
											<?php the_content()?>
										</div>
										<?php $i++?>
									<?php endwhile;
								endif; wp_reset_postdata();?>
								</div>
							</div>
						</div>
					</article>
				</section>
			</div>
		<?php endif;?>
	</main>

<?php get_footer(); ?>
