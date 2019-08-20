/*
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/


(function($) {

	var	$window = $(window),
		$body = $('body');

	// Breakpoints.
		breakpoints({
			wide:      [ '1281px',  '1680px' ],
			normal:    [ '981px',   '1280px' ],
			narrow:    [ '841px',   '980px'  ],
			narrower:  [ '737px',   '840px'  ],
			mobile:    [ '481px',   '736px'  ],
			mobilep:   [ null,      '480px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});
	// elinimacion de etiqueda a de galeria para modo mobil
	$window.on('load', function() {
	var tam = screen.width;
	if(tam <= 1024){
		$('#lugar-galeria').attr('href','#');
	}
});
	// Dropdowns.
		$('#nav > ul').dropotron({
			offsetY: -15,
			hoverDelay: 0,
			alignment: 'center'
		});

	// Nav.

		// Bar.
			$(
				'<div id="titleBar">' +
					'<a href="#navPanel" class="toggle"></a>' +
					'<span class="title"><h2>FUDELA Medios</h2></span>' +
				'</div>'
			)
				.appendTo($body);
		
		// Panel.
			$(
				'<div id="navPanel">' +
					'<nav>' +
						'<a href="index.php" class="link depth-0">'+
							'<span class="indent-1">Inicio</span>'+
						'</a>'+
						'<a href="#" class="link depth-0" id="nvcapacitacion">'+
							'<span class="indent-1">Cursos de capacitación</span>'+
							'<a href="atencionyservicio.php" class="link depth-1">'+
								'<span class=" link indent-1">Atención y servicio al cliente</span>'+
							'</a>'+
							'<a href="desarrolloproyectosc.php" class="link depth-1">'+
								'<span class="link indent-1">Desarrollo de proyectos</span>'+
							'</a>'+
							'<a href="altagerencia.php" id="nccli" class="link depth-1">'+
								'<span class="link indent-1">Dirección gerencial</span>'+
							'</a>'+
							'<a href="liderazgoc.php" id="nccli" class="link depth-1">'+
								'<span class="link indent-1">Liderazgo</span>'+
							'</a>'+
							'<a href="recursoshumanosc.php" id="nccli" class="link depth-1">'+
								'<span class="link indent-1">Recursos humanos</span>'+
							'</a>'+
							'<a href="capacitacionti.php" id="nccli" class="link depth-1">'+
								'<span class="link indent-1">Tecnologías de información</span>'+
							'</a>'+
							'<a href="urbanismoc.php" id="nccli" class="link depth-1">'+
								'<span class="link indent-1">Urbanismo</span>'+
							'</a>'+
						'</a>'+
						'<a href="#" class="link depth-0" id="nvsuministros">'+
							'<span class="indent-1">Suministros</span>'+
							'<a href="computadoras.php" id="nccli" class="link depth-2">'+
								'<span class="link indent-2">Equipo de cómputo</span>'+
							'</a>'+
							'<a href="productos.php" id="nccli" class="link depth-2">'+
								'<span class="link indent-2">Herramientas de todo tipo</span>'+
							'</a>'+
							'<a href="insumosoficina.php" id="nccli" class="link depth-2">'+
								'<span class="link indent-2">Insumos de oficina</span>'+
							'</a>'+
							'<a href="maquinariaespecializada.php" id="nccli" class="link depth-2">'+
								'<span class="link indent-2">Maquinaria especializada</span>'+
							'</a>'+
						'</a>'+
						'<a href="#" class="link depth-0">'+
							'<span class="indent-1">Personal</span>'+
						'</a>'+
						'<a href="#" class="link depth-0" id="nvproyectos">'+
							'<span class="indent-1">Proyectos</span>'+
							'<a href="arquitectonicosp.php" id="nccli" class="link depth-4">'+
								'<span class="link indent-4">Arquitectónicos</span>'+
							'</a>'+
							'<a href="industrialesp.php" id="nccli" class="link depth-4">'+
								'<span class="link indent-4">Industriales</span>'+
							'</a>'+
							'<a href="tecnologiasinformacion.php" id="nccli" class="link depth-4">'+
								'<span class="link indent-4">Tecnologías de información</span>'+
							'</a>'+
						'</a>'+
						'<a href="#" class="link depth-0" id="nvmantenimiento">'+
							'<span class="indent-1">Mantenimiento</span>'+
							'<a href="industrialm.php" id="nccli" class="link depth-5">'+
								'<span class="link indent-5">Industrial</span>'+
							'</a>'+
							'<a href="residencialm.php" id="nccli" class="link depth-5">'+
								'<span class="link indent-5">Residencial</span>'+
							'</a>'+
							'<a href="redesm.php" id="nccli" class="link depth-5">'+
								'<span class="link indent-5">Redes</span>'+
							'</a>'+
							'<a href="urbanom.php" id="nccli" class="link depth-5">'+
								'<span class="link indent-5">Urbano</span>'+
							'</a>'+
						'</a>'+
						'<a href="#" class="link depth-0" id="nvgaleria">'+
							'<span class="indent-1">Galería</span>'+
							'<a href="agroturismo.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Agroturismo</span>'+
							'</a>'+
							'<a href="bicicross.php" id="nccli" class="link depth-6">'+
							    '<span class="link indent-6">Bicicross</span>'+
							'</a>'+
							'<a href="camping.php" id="nccli" class="link depth-6">'+
							    '<span class="link indent-6">Camping</span>'+
							'</a>'+
							'<a href="ciclismo.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Ciclismo de montaña</span>'+
							'</a>'+
							'<a href="clubgolf.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Club de golf</span>'+
							'</a>'+
							'<a href="clubhipico.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Club hípico</span>'+
							'</a>'+
							'<a href="granjatematica.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Granja temática</span>'+
							'</a>'+
							'<a href="hoteles.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Hoteles / Condo-Hotel</span>'+
							'</a>'+
							'<a href="laberinto.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Laberinto</span>'+
							'</a>'+
							'<a href="minigolf.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Mini golf</span>'+
							'</a>'+
							
							'<a href="pared.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Pared de escalar</span>'+
							'</a>'+
							'<a href="pesca.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Pesca recreativa</span>'+
							'</a>'+
							'<a href="puente.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Puentes colgantes</span>'+
							'</a>'+
							'<a href="senderismo.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Senderismo</span>'+
							'</a>'+
							'<a href="telesilla.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Telesilla escénica</span>'+
							'</a>'+
							'<a href="tirolesa.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Tirolesa</span>'+
							'</a>'+
							'<a href="tobomontana.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Tobog&aacute;n de monta&ntilde;a</span>'+
							'</a>'+
							'<a href="viviendas.php" id="nccli" class="link depth-6">'+
								'<span class="link indent-6">Viviendas</span>'+
							'</a>'+
						'</a>'+
						'<a href="contacto.php" class="link depth-0">'+
							'<span class="indent-1">Contacto</span>'+
						'</a>'+
					'</nav>' +
				'</div>'
			)
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'left',
					target: $body,
					visibleClass: 'navPanel-visible'
				});

		//submenu
		$('#nvcapacitacion').click(function(){
			if($('.depth-1').css('display') == 'none'){
				$('.depth-1').css('display','inline-block');
			}
			else if($('.depth-1').css('display') == 'inline-block') {
				$('.depth-1').css('display','none');
			}
			$('.depth-2').css('display','none');
			$('.depth-4').css('display','none');
			$('.depth-5').css('display','none');
		});
		$('#nvsuministros').click(function(){
			if($('.depth-2').css('display') == 'none'){
				$('.depth-2').css('display','inline-block');
			}
			else if($('.depth-2').css('display') == 'inline-block') {
				$('.depth-2').css('display','none');
			}
			$('.depth-1').css('display','none');
			$('.depth-4').css('display','none');
			$('.depth-5').css('display','none');
		});
		$('#nvproyectos').click(function(){
			if($('.depth-4').css('display') == 'none'){
				$('.depth-4').css('display','inline-block');
			}
			else if($('.depth-4').css('display') == 'inline-block') {
				$('.depth-4').css('display','none');
			}
			$('.depth-1').css('display','none');
			$('.depth-2').css('display','none');
			$('.depth-5').css('display','none');
		});
		$('#nvmantenimiento').click(function(){
			if($('.depth-5').css('display') == 'none'){
				$('.depth-5').css('display','inline-block');
			}
			else if($('.depth-5').css('display') == 'inline-block') {
				$('.depth-5').css('display','none');
			}
			$('.depth-1').css('display','none');
			$('.depth-2').css('display','none');
			$('.depth-4').css('display','none');
		});
		$('#nvgaleria').click(function(){
			if($('.depth-6').css('display') == 'none'){
				$('.depth-6').css('display','inline-block');
			}
			else if($('.depth-6').css('display') == 'inline-block') {
				$('.depth-6').css('display','none');
			}
			$('.depth-1').css('display','none');
			$('.depth-2').css('display','none');
			$('.depth-4').css('display','none');
			$('.depth-5').css('display','none');
		});
})(jQuery);


function redireccionar(){
	window.location ="galeria.php#galeria";
} 
function mandar(){
	window.location ="contacto.php#contacto";
} 