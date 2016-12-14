$(document).ready(function() {
	iconos();
	nubes();
	menu();
	registro();
});
function registro(){
	$('.colum input').focus(function (){
		$(this).css("border-bottom","2px solid black");
	});
	$('.colum input').focusout(function (){
		$(this).css("border-bottom","2px solid #5884AB");
	});
}
function menu(){
	$(window).scroll(function(event) {
		if($(this).scrollTop() > 60){
			$('nav').css({
				'background-color': 'rgba(0, 0, 0, 0.3)',
				'transition': '0.4s'
			});
		}else{
			$('nav').css({
				'background-color': 'rgba(0, 0, 0, 1)',
				'transition': '0.4s'
			});
		}
	});
}
function nubes(){
	$('.nube').hover(function() {
		$(this).css({
			'background-color': '#EEEEEE',
			'border': '1px solid #AAAAAA'
		});
	}, function() {
		$(this).css({
			'background-color': 'white',
			'border': '1px solid transparent'
		});
	});
}

function iconos(){
	$('.boton').hover(function() {
		$(this).children('a').append('<span>'+$(this).attr('title')+'</span>');
	}, function() {
		$(this).children('a').find('span:last-child').remove();
	}).fadeIn('slow');
}
/*
function iconos(){
	$('#acceder').hover(function() {
		$('#texto_acceder').stop(true).show("blind",{direction:"right"},500);
	}, function() {
		$('#texto_acceder').hide("blind",{direction:"right"},"slow");
	});

	$('#buscar').stop().hover(function() {
		$('#texto_buscar').stop(true,true).show("blind",{direction:"right"},500);
	}, function() {
		$('#texto_buscar').hide("blind",{direction:"right"},"slow");
	});

	$('#inicio').stop().hover(function() {
		$('#texto_inicio').stop(true,true).show("blind",{direction:"right"},500);
	}, function() {
		$('#texto_inicio').hide("blind",{direction:"right"},"slow");
	});
}*/
