<?php get_header(); ?>

	<main role="main">
		<div class="container">
			<section>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="empresas-new">
						<div class="empresas-new-content">
							<h2>
								<?php the_title()?>
							</h2>
							<h3>EMPRESAS</h3>
							<div class="redes-intern-empresas">
								<?php if( get_field('empresa_site')) {?>
									<div class="redes-block">
										<a href="<?php the_field('empresa_site');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/site.png">Visitar site</a>
									</div>
								<?php }?>
								<?php if( get_field('empresa_email')) {?>
									<div class="redes-block">
										<a href="<?php the_field('empresa_email');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/email.png?>" alt="">Enviar Email</a>
									</div>
								<?php }?>
								<?php if( get_field('empresa_facebook')) {?>
									<a href="<?php the_field('empresa_facebook');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/face.png?>" alt=""></a>							
								<?php }?>
								<?php if( get_field('empresa_instagram')) {?>
									<a href="<?php the_field('empresa_instagram');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/insta.png?>" alt=""></a>
								<?php }?>
								<?php if( get_field('empresa_whatsapp')) {?>
									<a href="<?php the_field('empresa_whatsapp');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/whats.png?>" alt=""></a>
								<?php }?>
							</div>
							<div class="empresas-new-line"></div>
							<div class="ds-intern-empresas">
								<span><strong>Segmento principal: </strong><?php the_field('empresa_segmento')?></span>
								<span><strong>Telefone: </strong><?php the_field('empresa_telefone')?></span>
								<span><strong>Localização: </strong><?php the_field('empresa_localizacao')?></span>		
							</div>
							<h4>
								<strong>Perfil:</strong>
								<?php the_field('empresa_perfil')?>
								<br><br>				
								<strong>Produtos:</strong>
								<?php the_field('empresa_produtos')?>
							</h4>
							<div class="row">
								<div class="col-md-4">
									<img src="<?php the_field('empresa_destaque_1')?>" alt="">
								</div>
								<div class="col-md-4">
									<img src="<?php the_field('empresa_destaque_2')?>" alt="">
								</div>
								<div class="col-md-4">
									<img src="<?php the_field('empresa_destaque_3')?>" alt="">	
								</div>
							</div>
						</div>
					</article>
				<?php endwhile; endif;?>
			</section>
		</div>
	</main>
		
<?php get_footer(); ?>
