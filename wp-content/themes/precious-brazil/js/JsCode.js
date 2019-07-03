// JavaScript Document
$(document).ready(function(){
	$('#Responsive .menu-item-has-children').bind('click', function (e) {
		e.preventDefault();
  	$(this).find(".sub-menu").slideDown();
	});
	$('#Responsive .sub-menu a').click(function(){
		var url = $(this).attr("href");
		window.location = url;
	});

  $(".desktop .menu-item-has-children").hover(
		
		function(){

			$(this).find(".sub-menu").slideDown(200);
		},

		function(){
			$(this).find(".sub-menu").slideUp(200);
		}
	);

});

$(window).ready(function(){
	
	/* ------------- Footer ------------- */
	
	$(".footer-2 span").click(function(){
		window.open('http://prietoeassociados.com.br/','_blank');
	});
	
	$("#Responsive footer h3").click(function(){
		window.open('http://prietoeassociados.com.br/','_blank');
	});
	
	$(".container-fluid").attr("id","0");
	
	// $(".footer-2-content").prepend('<div class="voltar-topo" href="#0"></div>');
	
	$(".voltar-topo").click(function(){
		$("html, body").animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
	});
	
	// $("#Responsive footer .content").append('<div class="r-voltar-topo" href="#Responsive"></div>');
	
	$(".r-voltar-topo").click(function(){
		$("html, body").animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
	});
	
	/* ------------- Logo - Home ------------- */
	
	$("#Responsive .header img").click(function(){
		window.location.href = 'index.html';
	});
	
	$("#Responsive footer img:first-child").click(function(){
		window.location.href = 'index.html';
	});
	
	/* ------------- Slider - Noticias - Home ------------- */
	
	$(document).on('ready', function() {

      $(".vertical-center-4").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 4,
        slidesToScroll: 4
      });
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
	
	/* ------------- Header ------------- */
	
	// $("#menu ul li").each(function() {
 
 //        var el = $('#' + $(this).attr('id') + ' ul:eq(0)'); 
 
 //        $(this).hover(function() {
 //            var n_left = $(this).position().left;
 //            var n_top = $(this).position().top + 50;
 //            var n_width = $(this).width() + 40;
 
 //            el.css('left', n_left);
 //            el.css('top', n_top);
 //            el.css('width', n_width);
 //            el.show();
 //        }, function(){
 //            el.hide();
 //        });
 //    });
	
	// $(".menu li").each(function(){
	// 	var el = $('#' + $(this).attr('id') + ' ul:eq(0)');
	// 	var el_pos = $(this).outerWidth() / 4;
	// 	el.css("left", el_pos);
	// 	$(this).hover(function(){			
	// 		el.slideDown(200);
	// 	}, function(){
	// 		el.slideUp(200);	
	// 	});
	// });

	// $(".menu li").hover(function(){
	// 	var el = $('#' + $(this).attr('id') + ' ul:eq(0)');
	// 	$(this).hover(function(){
	// 		alert("hover");
	// 		el.slideDown(200);
	// 	}, function(){
	// 		el.slideUp(200);	
	// 	});
	// });
	
	var apex = document.querySelectorAll(".menu-slider-box a");

	for(var i = 0; i < apex.length; i++){
		if(apex[i].innerHTML == "Apex-Brasil"){
			apex[i].innerHTML = "APEX-Brasil";
		}
	}
	
	var allElements = document.querySelectorAll("a,h1,h2,h3,h4,h5,h6");
	
	for(var i = 0; i < allElements.length; i++){
		if(allElements[i].innerHTML == "Apex-Brasil"){
			allElements[i].innerHTML = "APEX-Brasil";
		}
	}
	
	$(".menu-slider-box").hover(
		
		function(){
			$(".menu-slider-box").slideDown(200);
		},

		function(){
			$(".menu-slider-box").slideUp(200);
		}
	
	);
	
	/* ------------- Ações ------------- */
	// $('#Desktop .acao-box').unbind('click').bind('click', function (e){
	// 	$(".acao-conteudo").each(function(){
	// 		$(this).slideUp();
	// 	});
	// 	e.preventDefault();
	// 	target = $(this).attr("data-target");
	// 	$("#" + target).slideToggle();
	// });


	$('#Desktop .acao-box').unbind('click').bind('click', function (e){
		if($(this).hasClass('clicado')){
			$("#Desktop .acao-conteudo").slideUp(300);
			$(this).removeClass('clicado');
		}		
		else{
			$("#Desktop .acao-conteudo").slideUp(300);
			var classe = $(this).attr("data-target");
			$("#Desktop #" + classe).delay(300).slideDown(300);
			$("#Desktop .acoes .acao-box").removeClass('clicado');
			$(this).addClass("clicado");
		}
	});

	$('#Responsive .acao-box').unbind('click').bind('click', function (e){
		if($(this).hasClass('clicado')){
			$("#Responsive .acao-conteudo").slideUp(300);
			$(this).removeClass('clicado');
		}		
		else{
			$("#Responsive .acao-conteudo").slideUp(300);
			var classe = $(this).attr("data-target");
			$("#Responsive #" + classe).delay(300).slideDown(300);
			$("#Responsive .acoes .acao-box").removeClass('clicado');
			$(this).addClass("clicado");
		}
	});


	
	
	/* ------------- Agenda ------------- */
	
	$('#Desktop .agenda-more').unbind('click').bind('click', function (e) {
		e.preventDefault();
		var agenda = $(this).attr("href");
		$("#Desktop #" + agenda).slideToggle(300);
		
		if($(window).width() < 1023){
			
			if($(this).hasClass('clicado')){
				$(this).removeClass("clicado");
			}
			else{
				$("html, body").animate({scrollTop: $($(this).attr('href')).offset().top - 80}, 1000);
				$(this).addClass("clicado");
			}
			
		}

	});

	$('#Responsive .agenda-more').unbind('click').bind('click', function (e) {
		e.preventDefault();
		var agenda = $(this).attr("href");
		$("#Responsive #" + agenda).slideToggle(300);
		
		if($(window).width() < 1023){
			
			if($(this).hasClass('clicado')){
				$(this).removeClass("clicado");
			}
			else{
				$("html, body").animate({scrollTop: $($("#Responsive #" + agenda)).offset().top - 80}, 1000);
				$(this).addClass("clicado");
			}
			
		}

	});

	/* -------------------- Menu - Icon-------------------- */
		
	$(".icon-menu").click(function(e) {
		
		if($(window).width() > 481)
		{
			$(".menu-animate").animate({"margin-left" : "-300px"}, 300);
		}
		
		else
		{
			$(".menu-animate").animate({"margin-left" : "-70%"}, 300);
		}
		
		
	});
	
	$(".seta").click(function(e) {
        
		$(".menu-animate").animate({"margin-left" : "0px"}, 300);
		
    });
    
    $("#r-quem-somos").click(function(e){
        
        $(".sub-menu").slideToggle(300);
        
    });
    

});