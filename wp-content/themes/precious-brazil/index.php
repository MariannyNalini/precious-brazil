<?php get_header(); ?>


	<main role="main">
		<section id="Desktop">
			<div class="container-fluid">
      	<header style="position: relative">
        	<div class="row">
      		
      			<div style="position:absolute; width: 100%; z-index: 99999">
      				<a href="/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home/logo.png" style="width: 185px; z-index: 9999; margin-top: 40px; margin-left: 10%;">
							</a>
							<nav class="desktop">				  
								<?php wp_nav_menu();?>
	      			</nav>
      			</div>
        		
						
		
						<script type="text/javascript">
			        jssor_1_slider_init = function() {

		            var jssor_1_SlideoTransitions = [
		              [{b:-1,d:1,o:-0.7}],
		              [{b:900,d:2000,x:-379,e:{x:7}}],
		              [{b:900,d:2000,x:-379,e:{x:7}}],
		              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
		            ];

		            var jssor_1_options = {
		              $AutoPlay: 1,
		              $SlideDuration: 3000,
		              $SlideEasing: $Jease$.$EaseLinear,
		              $CaptionSliderOptions: {
		                $Class: $JssorCaptionSlideo$,
		                $Transitions: jssor_1_SlideoTransitions
		              },
		              $ArrowNavigatorOptions: {
		                $Class: $JssorArrowNavigator$
		              },
		              $BulletNavigatorOptions: {
		                $Class: $JssorBulletNavigator$
		              }
		            };

		            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

		            /*#region responsive code begin*/

		            var MAX_WIDTH = 3000;

		            function ScaleSlider() {
	                var containerElement = jssor_1_slider.$Elmt.parentNode;
	                var containerWidth = containerElement.clientWidth;

	                if (containerWidth) {

	                  var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
	                }
	                else {
                    window.setTimeout(ScaleSlider, 30);
	                }
		            }

		            ScaleSlider();

		            $Jssor$.$AddEvent(window, "load", ScaleSlider);
		            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
		            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
					
		            /*#endregion responsive code end*/
		        	};
 				 		</script>
    				<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px; height:600px; overflow:hidden;visibility:hidden;">
			        <!-- Loading Screen -->
			        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
	            	<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo get_template_directory_uri(); ?>/images/slider_header/spin.svg" />
		        	</div>
        			<div data-u="slides" class="slidess" style="cursor:default;position:relative;top:0px;left:0px;width:1300px; height:600px; overflow:hidden;">
			        	<?php
							    $loop = new WP_Query( array( 'post_type' => 'slides', 'order' => 'ASC' ) );
							    if ( $loop->have_posts() ) :
							        while ( $loop->have_posts() ) : $loop->the_post(); ?>
							        	<div>
							        		<img data-u="image" src="<?php the_field('slide_imagem'); ?>" alt="">

							        		<div class="home-text-box">
							        			<h2><?php the_title(); ?></h2>

							        			<h3><?php the_field('slide_texto'); ?></h3>
							        		</div>

							        		<a href="<?php the_field('slide_link'); ?>" style="font-weight: bolder">
														<input type="button" value="SAIBA MAIS">
							        		</a>
							        	</div>    
							        <?php endwhile;						        
							    endif;
							    wp_reset_postdata();
								?> 
        			</div>
			        <!-- Bullet Navigator -->
			        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
	            	<div data-u="prototype" class="i" style="width:16px;height:16px;">
	              	<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	                	<circle class="b" cx="8000" cy="8000" r="5800"></circle>
	              	</svg>
	            	</div>
		        	</div>
			        <!-- Arrow Navigator -->
			        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
          			<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            			<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
          			</svg>
        			</div>
        			<div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
          			<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            			<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
          			</svg>
        			</div>
    				</div>
    				<script type="text/javascript">jssor_1_slider_init();</script>						

		      	
    			</div>
  			</header>
	      <div class="row about">
      		<?php
		    	$loop = new WP_Query( array( 'pagename' => 'quem-somos', 'order' => 'ASC' ) );
			    if ( $loop->have_posts() ) :?>
		        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      				<div class="col-md-5 offset-md-1">
			          <h2><?php the_title();?></h2>
			          <hr width="80px">         
			          <p>
				        	<?php the_content();?> 
				        </p> 
      				</div>
			        <div class="col-md-6 pr-0">
			          <img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
			        </div> 
		        <?php endwhile;?>
			    <?php endif;
			    wp_reset_postdata(); ?> 
	      </div>
	    </div>
			<div class="counters">
        <div class="container">

		      <div class="row">
	      		<?php
			    	$loop = new WP_Query( array( 'pagename' => 'home', 'order' => 'ASC' ) );
				    if ( $loop->have_posts() ) :?>
			        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			          <div class="col-md-4 counter-1">
			            <div class="counter">
			              <h3><?php the_field('contador_empresas')?>
			                <span>empresas</span>
			              </h3>              
			            </div>
			          </div>
			          <div class="col-md-4 counter-2">
			            <div class="counter">
			              <h3><?php the_field('contador_destinos')?>
			                <span>destinos</span>
			              </h3>              
			            </div>
			          </div>
			          <div class="col-md-4 counter-3">
			            <div class="counter">
			              <h3><?php the_field('contador_milhoes')?>
			                <span>milhões U$ <br>exportados</span>
			              </h3>              
			            </div>
			          </div>
			      	<?php endwhile;
		     		endif; ?>
	        </div>
	      </div> 					
			</div>
			<div class="container-fluid">

	      <div class="row initiative">
	        <div class="container">
	          <div class="col-md-12">
	            <h2>notícias</h2>
	          </div>          
	        </div>
	      </div>
	  		<br><br><br><br>
		
				<section>
	  			<div class="row" style="position:relative">
						<div class="regular slider">
							<?php
						    $loop = new WP_Query( array( 'post_type' => 'post', 'order' => 'ASC' ) );
					     	if ( $loop->have_posts() ) :
			        		while ( $loop->have_posts() ) : $loop->the_post(); ?>
										<a href="<?php the_permalink();?>">
											<div>
												<img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
												<h3><?php the_title()?></h3>
											</div>
										</a>
			        		<?php endwhile;
			        	endif;
								wp_reset_postdata();
							?>							
						</div>
						
					<div class="div-absolute"></div>  
					</div>
				</section>
			</div>
			<div class="container-fluid initiative-2">
				<div class="row">
          	<div class="col-md-12 pl-0 pr-0">
          		<br><br>
            	<h3>Receba nossa newsletter</h3>
            	<?php $loop = new WP_Query( array( 'pagename' => 'home', 'order' => 'ASC' ) );
					   	if ( $loop->have_posts() ) :
					  		while ( $loop->have_posts() ) : $loop->the_post(); ?>	
            			<a href="<?php the_field('home_link_da_newsletter')?>" class="btn-cadastre" target="_blank">Cadastre-se</a>
            		<?php endwhile;
            	endif; wp_reset_postdata();?>
							<br><br>
          	</div>
        	</div>
			</div>
			

    	<div class="row news">
      	<div class="container">
      		<div class="row">
      			
          	<div class="col-md-5 mobile">
            	<h2>Últimas <span>notícias<br>
            	precious</span> brazil</h2>
            	<h4>Fique sempre atualizado</h4>
            	<a href="#" style="align-content: center; border: solid">Ver todas</a>
          	</div>  
     
          	<div class="col-md-6">
             	<div class="row new">
              	<a class="set" onMouseover="move('container2',5)" onMouseout="clearTimeout(move.to)" style="cursor: pointer; padding: 0px 40% 40px 40%;">
          				<div class="moveacima" align="right">
          					<center>
            					<img src="<?php echo get_template_directory_uri(); ?>/images/setaacima.png" alt="" width="20" height="20" class="img-responsive"/>
          					</center>
          				</div>
          			</a> 
								<br/>
            		<div style="position:relative;width:500px;height:500px;overflow:auto;" class="home-empresas-scroll">
            			<div id="container2" style="position:absolute;width:450px;left:0;top:0;">

            				<?php 
										$letter=' '; 
										query_posts( array ( 'post_type' => 'empresas', 'orderby' => 'title', 'order' => 'ASC' ) );
										if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
										    
							        <?php 
							        $title=get_the_title(); 
							        $initial=strtoupper(substr($title,0,1));
							        if($initial!=$letter){
							          echo "<h2>$initial</h2>";
							          $letter=$initial;
						          }?>
							        <div class="item-empresa">
							        	<div class="empresa-title">
								        	<h3>
								        		<span>
								        			<a href="<?php the_permalink();?>">
								        				<?php echo $title ?>
								        			</a>
								        		</span>
								        	</h3>
							        		<span class="date">
							        			<?php the_field('empresa_segmento')?>	
							        		</span>
							        	</div>
						        		<div class="icons-empresas">
						        			<ul>
						        				<?php if( get_field('empresa_facebook')) {?>
							        				<li>
							        					<a href="<?php the_field('empresa_facebook')?>">
							        						<img src="<?php echo get_template_directory_uri(); ?>/images/ico_fb.jpg" class="img-responsive" width="20" height="20" alt=""/></>
							        					</a>
							        				</li>
						        				<?php } ?>
						        				<?php if( get_field('empresa_instagram')){?>
							        				<li>
							        					<a href="<?php the_field('empresa_instagram') ?>">
							        						<img src="<?php echo get_template_directory_uri(); ?>/images/ico_insta.jpg" class="img-responsive" width="20" height="20" alt=""/>
							        					</a>
							        				</li>
							        			<?php } ?>
							        			<?php if( get_field('empresa_whatsapp')){?>
							        				<li>
							        					<a href="<?php the_field('empresa_whatsapp') ?>">
							        						<img src="<?php echo get_template_directory_uri(); ?>/images/ico_whatsapp.jpg" class="img-responsive" width="20" height="20" alt=""/>
							        					</a>
							        				</li>
							        			<?php } ?>
						        			</ul>
						        		</div>
						        		<div class="clear"></div>									
							        	<p>
							        		<?php the_field('empresa_perfil')?>
							        	</p>
							      	</div>
										    
										<?php endwhile; endif; wp_reset_query(); ?>

              		</div>
              	</div>
          
          			<a class="set" onMouseover="move('container2',-5)" onMouseout="clearTimeout(move.to)" style="cursor: pointer; padding: 50px 40% 0 40%;">
				          <div class="moveabaixo" align="right">
				          <center>
				            <img src="<?php echo get_template_directory_uri(); ?>/images/setaabaixo.png" alt="" class="img-responsive"/>
				          </center>  
				          </div>
				        </a>
								<br/>
            	</div>
          	</div>
			
          	<div class="col-md-5 desktop" style="alignment-baseline: top; margin-top: 150px;">
          		<h2>Empresas <span>do<br>
            	precious</span> brazil</h2><a href="/empresas" style="align-content: center; border:solid" class="btn-ver-todas">Ver todas</a> 
							<br/><br/><br/><br/><br/>
          	</div>
      		</div>
        
      	</div>
    	</div>
      
    	<?php $loop = new WP_Query( array( 'pagename' => 'home', 'order' => 'ASC' ) );
     	if ( $loop->have_posts() ) :
    		while ( $loop->have_posts() ) : $loop->the_post(); ?>
	      	<div class="container-fluid logos" style="background: url(<?php the_field('home_imagem_da_frase')?>); background-repeat: no-repeat; background-size: 100%; ">
	      		<div class="row">
	          	<div class="col-md-12 pl-0 pr-0">
	       
	          	</div>
	        	</div>
	      	</div>
	     	<?php endwhile;
	     endif; wp_reset_postdata();?>

	    <?php $loop = new WP_Query( array( 'pagename' => 'home', 'order' => 'ASC' ) );
     	if ( $loop->have_posts() ) :
    		while ( $loop->have_posts() ) : $loop->the_post(); ?> 
			
					<div class="container contact">
		      	<div class="row contact">
		        	
		        	<div class="col-md-12">
		          	<h2><?php the_field('home_participe_titulo')?></h2>
		          	<h3>
		           		<p><?php the_field('home_participe_texto')?></p>
		          	</h3>
		        	</div>
		        	
		      	</div>					
		      	<div class="row contact-form">
		          <div class="col-md-12">
		            <a href="<?php the_field('home_participe_link')?>" target="_blank">
		            	<input type="submit" value="<?php the_field('home_participe_texto_do_botao')?>" class="btn-acesse">
		            </a>
		          </div>
		        </div>
					</div>
				<?php endwhile;
			endif; wp_reset_postdata();?>

			<div class="container-fluid depoimentos" id="container2">
				<div class="row">
					<?php $loop = new WP_Query( array( 'post_type' => 'depoimentos', 'order' => 'ASC' ) );
		     	if ( $loop->have_posts() ) :
	      		while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="col-md-6" style="text-align:center;">
								<img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="img-responsive" style="width: 450px;"/>
					  		<h3>
				  				<?php the_title()?>
					  		</h3>
								<span class="date"><?php the_field('depoimentos_profissao')?></span>
				        	<?php the_content()?>
							</div>
			      <?php endwhile; 
				  endif; wp_reset_postdata();?>
				</div>
			</div>
   
      

		  
		  
		  
			<div class="row contact-form"> </div>
      
      

    </div>



	
	</section>
	

<!---------------------------------------------------------------- Responsive ------------------------------------------------------------>

	<section id="Responsive">

		<div class="header">

			<img src="<?php echo get_template_directory_uri(); ?>/images/home/logo.png">
	
			<div class="icon-menu">
				<div class="line-icon"></div>
				<div class="line-icon"></div>
				<div class="line-icon"></div>		
			</div>

		</div>

		<div class="menu-animate">

			<div class="seta"></div>
    
  		<div class="menu-line"></div>
    
    	<nav class="nav">		  
				<?php wp_nav_menu();?>
    	</nav>

		</div>

<!-------------------------------------------------- Home -------------------------------------------------->

		<section class="home">

			<script type="text/javascript">
	      rjssor_1_slider_init = function() {

	      var rjssor_1_SlideoTransitions = [
	        [{b:-1,d:1,o:-0.7}],
	        [{b:900,d:2000,x:-379,e:{x:7}}],
	        [{b:900,d:2000,x:-379,e:{x:7}}],
	        [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
	      ];

	      var rjssor_1_options = {
	        $AutoPlay: 1,
	        $SlideDuration: 1000,
	        $SlideEasing: $Jease$.$OutQuint,
	        $CaptionSliderOptions: {
	          $Class: $JssorCaptionSlideo$,
	          $Transitions: rjssor_1_SlideoTransitions
	        },
	        $ArrowNavigatorOptions: {
	          $Class: $JssorArrowNavigator$
	        },
	        $BulletNavigatorOptions: {
	          $Class: $JssorBulletNavigator$
	        }
	      };

	      var rjssor_1_slider = new $JssorSlider$("rjssor_1", rjssor_1_options);

	      /*#region responsive code begin*/

	      var MAX_WIDTH = 3000;

	      function ScaleSlider() {
	      	var containerElement = rjssor_1_slider.$Elmt.parentNode;
	        var containerWidth = containerElement.clientWidth;

	        if (containerWidth) {
	          var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

	          rjssor_1_slider.$ScaleWidth(expectedWidth);
	        }
	        else {
	          window.setTimeout(ScaleSlider, 30);
	        }
	      }

	      ScaleSlider();

	      $Jssor$.$AddEvent(window, "load", ScaleSlider);
	      $Jssor$.$AddEvent(window, "resize", ScaleSlider);
	      $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);

	      /*#endregion responsive code end*/
	        };
	    </script>    
	    <div id="rjssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1000px; height:1600px; overflow:hidden;visibility:hidden;">
	      <!-- Loading Screen -->
	      <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
	        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo get_template_directory_uri(); ?>/images/slider_header/spin.svg" />
	      </div>
	      <div data-u="slides" class="slidess" style="cursor:default;position:relative;top:0px;left:0px;width:1000px; height:1600px; overflow:hidden;">
	        <?php
			    $loop = new WP_Query( array( 'post_type' => 'slides', 'order' => 'ASC' ) );
			    if ( $loop->have_posts() ) :
		        while ( $loop->have_posts() ) : $loop->the_post(); ?>
		        	<div>
		        		<img data-u="image" src="<?php the_field('slider_imagem_mobile'); ?>" alt="">

		        		<div class="home-text-box">
		        			<h2><?php the_title(); ?></h2>

		        			<h3><?php the_field('slide_texto'); ?></h3>
		        		</div>

		        		<a href="<?php the_field('slide_link'); ?>" style="font-weight: bolder">
									<input type="button" value="SAIBA MAIS">
		        		</a>
		        	</div>    
		        <?php endwhile;						        
			    endif;
			    wp_reset_postdata();
					?> 
	      </div>
	      <!-- Bullet Navigator -->
	      <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
	        <div data-u="prototype" class="i" style="width:30px;height:30px;">
	          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
	          </svg>
	        </div>
	      </div>
	    </div>
	    <script type="text/javascript">rjssor_1_slider_init();</script>
	   
		</section>


		<section class="sobre" id="r1">
		
			<article class="content">
			
				<?php
	    	$loop = new WP_Query( array( 'pagename' => 'quem-somos', 'order' => 'ASC' ) );
		    if ( $loop->have_posts() ) :?>
	        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    				<div class="col-md-5 col-md-offset-1">
		          <h2><?php the_title();?></h2>
		          <hr width="80px">         
		          <p>
			        	<?php the_content();?> 
			        </p> 
    				</div>
	        <?php endwhile;?>
		    <?php endif;
		    wp_reset_postdata(); ?> 
			  
			</article>

			
		
		
  		<?php
    	$loop = new WP_Query( array( 'pagename' => 'home', 'order' => 'ASC' ) );
	    if ( $loop->have_posts() ) :?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	      	<div class="sobre-empresas">
            <h3><?php the_field('contador_empresas')?>
  	          <p>empresas</p>
            </h3>
          </div>
          <div class="sobre-destinos">
          	<h3><?php the_field('contador_destinos')?>
              <p>destinos</p>
            </h3>  
          </div>
          <div class="sobre-milhoes">
          	<h3><?php the_field('contador_milhoes')?>
              <p>milhões U$ <br>exportados</p>
            </h3> 
          </div>
	      <?php endwhile;
     	endif; 
     	wp_reset_postdata();?>
      

		
		</section>



		<section class="home-noticias">

			<div class="content">

				<h2>Noticias</h2>
				<?php
			    $loop = new WP_Query( array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => '3' ) );
		     	if ( $loop->have_posts() ) :
        		while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<a href="<?php the_permalink();?>">
								<div>
									<img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
									<h3><?php the_title()?></h3>
								</div>
							</a>
        		<?php endwhile;
        	endif;
					wp_reset_postdata();
				?>
				<a href="/noticias">
					<input type="button" value="VER TODAS">
				</a>
			</div>

		</section>

		<section class="newsletter">

			<h2>Receba Nossa <br> Newsletter</h2>

			<?php $loop = new WP_Query( array( 'pagename' => 'home', 'order' => 'ASC' ) );
	   	if ( $loop->have_posts() ) :
	  		while ( $loop->have_posts() ) : $loop->the_post(); ?>	

					<a href="<?php the_field('home_link_da_newsletter')?>" target="_blank"><input type="button" value="Cadastre-se"></a>
				<?php endwhile;
			endif; wp_reset_postdata();?>

		</section>



		<section class="home-empresas">

			<div class="content">
				<h2>Empresas <strong>do<br>
				precious</strong> brazil</h2>
				<a href="empresas.html">
					<input type="button" value="VER TODAS">
				</a>	
			</div>

		</section>


		<?php $loop = new WP_Query( array( 'pagename' => 'home', 'order' => 'ASC' ) );
   	if ( $loop->have_posts() ) :
  		while ( $loop->have_posts() ) : $loop->the_post(); ?>	

				<div class="home-empresas-bg" style="background: url(<?php the_field('home_imagem_de_fundo_frase')?>); background-size: cover; background-position: center;">

					<div class="content">
						<h3><?php the_field('home_texto_frase')?></h3>
					</div>

				</div>
			<?php endwhile;
		endif; wp_reset_postdata(); ?>



		<section class="home-depoimentos">

			<div class="content">

				<?php $loop = new WP_Query( array( 'pagename' => 'home', 'order' => 'ASC' ) );
		   	if ( $loop->have_posts() ) :
		  		while ( $loop->have_posts() ) : $loop->the_post(); ?>	

						<h2><?php the_field('home_participe_titulo')?></h2>
				
						<h3><?php the_field('home_participe_texto')?></h3>
					<?php endwhile;
				endif; wp_reset_postdata();?>

				
				<div class="container depoimentos" id="container2">
				<div class="row">
					<?php $loop = new WP_Query( array( 'post_type' => 'depoimentos', 'order' => 'ASC' ) );
		     	if ( $loop->have_posts() ) :
	      		while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="col-md-6" style="text-align:center;">
								<img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="img-responsive" style="width: 450px;"/>
					  		<h3>
				  				<?php the_title()?>
					  		</h3>
								<span class="date"><?php the_field('depoimentos_profissao')?></span>
				        	<?php the_content()?>
							</div>
			      <?php endwhile; 
				  endif; wp_reset_postdata();?>
				</div>
			</div>
			</div>
		
		</section>

	

	</section>
	


		
</main>

<?php get_footer(); ?>
