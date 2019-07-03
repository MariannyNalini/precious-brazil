<?php get_header(); ?>


	<main role="main">
		<section>
			<div class="container-fluid">
    		<header>
      		<div class="row">
		
						<a href="index.html">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" style="position: absolute; width: 185px; z-index: 9999; margin-top: 40px; margin-left: 10%">
						</a>

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
		              $SlideDuration: 1000,
		              $SlideEasing: $Jease$.$OutQuint,
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
            		<div>
                	<img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/home/1.png"/>
				
									<div class="home-text-box">
										<h2>EMPRESAS BRASILEIRAS TÊM APOIO <br> <a>DO PRECIOUS BRAZIL DURANTE FEIRA EM HONG KONG</a></h2>

										<h3>Ao todo, 26 empresas brasileiras participam com apoio do projeto setorial Precious Brazil, parceria do Instituto Brasileiro de Gemas e Metais Preciosos (IBGM) com a Agência Brasileira de Promoção de Exportações e Investimentos (Apex-Brasil).</h3>
									</div>
				
									<a href="noticia-1.html" style="font-weight: bolder"><input type="button" value="SAIBA MAIS"></a>				
            		</div>
            		<div>
                	<img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/home/2.png" />
				
									<div class="home-text-box">
										<h2>PRECIOUS BRAZIL PROMOVE ENCONTRO<br> <a> EM BELO HORIZONTE PARA NOVO PROJETO SETORIAL</a></h2>

										<h3>No dia 19 de janeiro (sexta-feira), às 9h, acontece o Workshop de Alinhamento Estratégico do projeto setorial Precious Brazil, parceria do Instituto Brasileiro de Gemas e Metais Preciosos (IBGM) com a Agência Brasileira de Promoção de Exportações e Investimentos (Apex-Brasil).</h3>
									</div>
				
									<a href="noticia-2.html" style="font-weight: bolder"><input type="button" value="SAIBA MAIS"></a>
				
            		</div>
								<div>
            	  	<img data-u="image" src="<?php echo get_template_directory_uri(); ?>/images/home/3.png" />
				
									<div class="home-text-box">
										<h2>PRECIOUS BRAZIL APOIA EXPOSITORES BRASILEIROS <br> <a> NA MAIOR FEIRA DE GEMAS DA AMÉRICA DO NORTE</a></h2>

										<h3>Entre os dias 30 de janeiro e 4 de fevereiro acontece a GJX Show, feira de gemas na cidade de Tucson, nos Estados Unidos. Criada em 1994, o evento recebe mais de 700 expositores de vários países, incluindo Brasil. Nesta edição, 33 empresas brasileiras participarão do evento apoiadas pelo projeto setorial Precious Brazil, parceria do Instituto Brasileiro de Gemas e Metais Preciosos (IBGM) com a Agência Brasileira de Promoção de Exportações e Investimentos (Apex-Brasil).</h3>
									</div>
									
									<a href="noticia-3.html" style="font-weight: bolder"><input type="button" value="SAIBA MAIS"></a>
				
         		 		</div>  
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
    			
		
					<div class="menu-slider-box">
						<div class="menu-slider">
							<a href="quem-somos.html">Precious Brazil</a><br>
							<a href="apex-brasil.html">Apex-Brasil</a><br>
							<a href="ibgm.html">IBGM</a><br>
							<a href="setor.html">Sobre o Setor</a><br>
						</div>
					</div>

          <nav class="desktop">
		  			<ul>
		          <li>
                <a href="quem-somos.html">Quem Somos</a>
		          </li>
              <li>
                <a href="acoes.html">Ações</a>
              </li>
              <li>
                <a href="empresas.html">Empresas</a>
              </li>
              <li>
                <a href="agenda.html">Agenda</a>
              </li>
						  <li>
								<a href="noticias.html">Noticias</a>
						  </li>
              <li>
                <a href="imprensa.html">Imprensa</a>
              </li>             
              <li>
                <a href="contato.html">Contato</a>
              </li>
              <li>
                <a href="#" class="search" style="display: none;">Lupa</a>
              </li>
            </ul>
          </nav>
        </div>
      </header> 
			<div class="row about">
        <div class="col-md-5 col-md-offset-1">
          <h2>Quem Somos</h2>
          <hr width="80px">         
          <p>
            O Projeto Setorial Precious Brazil é uma iniciativa do Instituto Brasileiro de Gemas e Metais Preciosos (IBGM) e da Agência Brasileira de Promoção de Exportações e Investimentos (Apex-Brazil) que visa apoiar e promover as empresas brasileiras dos segmentos de pedras, bijuterias e joias brasileiras que queiram exportar seus produtos, sejam elas iniciantes, exportadoras e internacionalizadas. Atualmente, o projeto atende cerca de 181 empresas do setor localizadas em regiões distintas do Brasil.
          </p>
        </div>
        <div class="col-md-6">
          <img src="<?php echo get_template_directory_uri(); ?>/images/quemsomos.jpg" alt="">
        </div> 
      </div>
      <div class="row counters">
        <div class="container">
          <div class="col-md-4 counter-1">
            <div class="counter">
              <h3>181
                <span>empresas</span>
              </h3>              
            </div>
          </div>
          <div class="col-md-4 counter-2">
            <div class="counter">
              <h3>110
                <span>destinos</span>
              </h3>              
            </div>
          </div>
          <div class="col-md-4 counter-3">
            <div class="counter">
              <h3>290
                <span>milhões U$ <br>exportados</span>
              </h3>              
            </div>
          </div>
        </div>
      </div>

      <div class="row initiative">
        <div class="container">
          <div class="col-md-12">
            <h2>notícias</h2>
          </div>          
        </div>
      </div> 

      <div class="row">
				<section class="regular slider">
			
					<a href="noticia-10.html">
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/slider/img10.png" alt="">
							<h3>Com o incentivo do Precious Brazil, marcas de joias brasileiras marcam presença na The Couture Show</h3>
					  </div>
					</a>
			
					<a href="noticia-1.html">
						<div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/slider/img1.png" alt="">
							<h3>Empresas brasileiras têm apoio do Precious Brazil durante feira em Hong Kong</h3>
            </div>
          </a>
			
					<a href="noticia-3.html">
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/slider/img3.png" alt="">
							<h3>Precious Brazil apoia expositores brasileiros na maior feira de gemas da América do Norte</h3>
			  		</div>
			  	</a>
			
					<a href="noticia-2.html">
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/slider/img2.png" alt="">
							<h3>Precious Brazil promove encontro em Belo Horizonte para novo Projeto Setorial</h3>
			  		</div>
			  	</a>
			  
			  	<a href="noticia-4.html">
			  		<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/slider/img4.png" alt="">
							<h3>Clement Sabbagh é eleito o novo presidente da International Colored Gemstone Association</h3>
		  			</div>
		  		</a>
			
		  		<a href="noticia-5.html">
		  			<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/slider/img5.png" alt="">
							<h3>Empresas exportadoras de soledade apostam no mundo virtual para alavancar vendas</h3>
		  			</div>
		  		</a>
			
			   	<a href="noticia-8.html">
		   			<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/slider/img8.png" alt="">
							<h3>Precious Brazil apresenta ao mundo a expertise e excelência das gemas e joias brasileiras</h3>
		  			</div>
		  		</a>
			
			  	<a href="noticia-9.html">
			  		<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/slider/img9.png" alt="">
							<h3>Projeto Precious Brazil organiza workshop em belo horizonte</h3>
			  		</div>
			  	</a>
			
			  	<a href="noticia-6.html">
			  		<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/slider/img6.png" alt="">
							<h3>Precious Brazil apresenta os destaques da joalheria brasileira em Las Vegas</h3>
			  		</div>
			  	</a>
			
			  	<a href="noticia-7.html">
			  		<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/slider/img7.png" alt="">
							<h3>Cresce a participação de empresas brasileiras nas feiras de joias de Las Vegas</h3>
			  		</div>
			  	</a>			   
  			</section>
				<div class="div-absolute"></div>
			 	<div class="row initiative-2">
        	<div class="container">
          	<div class="col-md-12"><br><br>
            	<h3>Receba nossa newsletter</h3>
            	<a href="https://podio.com/webforms/18760793/1353045" class="btn-cadastre" target="_blank">Cadastre-se</a>
							<br><br>
          	</div>
        	</div>
      	</div>

			</div>

		</section>


		
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
