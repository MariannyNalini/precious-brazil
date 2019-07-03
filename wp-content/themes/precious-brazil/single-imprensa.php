<?php get_header(); ?>

	<main role="main">
		<div class="container">
			<section>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="imprensa-new">
						<div class="imprensa-new-content">
							<h2>
								<?php the_title()?>
							</h2>
							<h3>IMPRENSA</h3>
							<div class="redes-intern-empresas">
								<div class="redes-block">
									<img src="<?php echo get_template_directory_uri();?>/images/data.png" alt=""><a><?php the_date('d/m/Y'); ?></a>									
								</div>
								<div class="redes-block">
									<img src="<?php echo get_template_directory_uri();?>/images/anexo.png" alt=""><a href="<?php the_field('imprensa_link_da_noticia')?>">LINK DA NOTÍCIA</a>									
								</div>
								<div class="redes-block">
									<img src="<?php echo get_template_directory_uri();?>/images/news.png" alt=""><a><?php the_field('imprensa_nome_da_midia')?></a>
								</div>
							</div>
							<div class="empresas-new-line"></div>
							<div class="ds-intern-empresas">
								<span><strong>Categoria: </strong><?php the_field('imprensa_categoria')?></span>
								<span><strong>Referência: </strong><?php the_field('imprensa_referencia')?></span>
								<span><strong>Marcas/Empresas participantes citadas: </strong><?php the_field('imprensa_participantes_citados')?></span>		
							</div>
							<?php the_content()?>
						</div>
					</article>
				<?php endwhile; endif;?>
			</section>
		</div>
	</main>
		
<?php get_footer(); ?>
