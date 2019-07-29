var	$window = $(window);
$body = $('body');
$window.on('load', function() {
	var tam = screen.width;
	if(tam <= 1024){
		$('.catapdf').css('display','none');
		$('.br-espacio').css('display','none');
		$('<div class="conen">'+
		    '<div class="conen-img"><img class="img-conen" src="assets/css/images/mobil/asus.jpg"></div>'+
		    '<div class="conen-texto">'+
		        '<h3 id="txt-conen">Catálogos de ASUS</h3>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/20.pdf"><span class="botondt">Catálogo 1</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/21.pdf"><span class="botondt">Catálogo 2</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/22.pdf"><span class="botondt">Catálogo 3</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/23.pdf"><span class="botondt">Catálogo 4</span></a></button>'+
		        '</div>'+
			'</div>'+
		  '</div>').appendTo('#mobil');
		  
		  $('<div class="conen">'+
		    '<div class="conen-img"><img class="img-conen" src="assets/css/images/mobil/Bosch.png"></div>'+
		    '<div class="conen-texto">'+
		        '<h3 id="txt-conen">Catálogos de Bosh</h3>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/1.pdf"><span class="botondt">Catálogo 1</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/2.pdf"><span class="botondt">Catálogo 2</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/3.pdf"><span class="botondt">Catálogo 3</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/4.pdf"><span class="botondt">Catálogo 4</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/5.pdf"><span class="botondt">Catálogo 5</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/6.pdf"><span class="botondt">Catálogo 6</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/7.pdf"><span class="botondt">Catálogo 7</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/14.pdf"><span class="botondt">Catálogo 8</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/16.pdf"><span class="botondt">Catálogo 9</span></a></button>'+
		        '</div>'+
		        '<div class="conen-img"><img class="img-conen" src="assets/css/images/mobil/Black&Decker.png"></div>'+
		        '<h3 id="txt-conen">Catálogos de Black & Decker</h3>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/8.pdf"><span class="botondt">Catálogo 1</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/13.pdf"><span class="botondt">Catálogo 2</span></a></button>'+
		        '</div>'+
		        '<div class="conen-img"><img class="img-conen" src="assets/css/images/mobil/DeWalt.png"></div>'+
		        '<h3 id="txt-conen">Catálogos de DeWALT</h3>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/9.pdf"><span class="botondt">Catálogo 1</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/10.pdf"><span class="botondt">Catálogo 2</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/17.pdf"><span class="botondt">Catálogo 3</span></a></button>'+
		        '</div>'+
		        '<div class="conen-img"><img class="img-conen" src="assets/css/images/mobil/Stanley.png"></div>'+
		        '<h3 id="txt-conen">Catálogos de STANLEY</h3>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/11.pdf"><span class="botondt">Catálogo 1</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/12.pdf"><span class="botondt">Catálogo 2</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/18.pdf"><span class="botondt">Catálogo 3</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/19.pdf"><span class="botondt">Catálogo 4</span></a></button>'+
		        '</div>'+
		        '<div class="conen-img"><img class="img-conen" src="assets/css/images/mobil/Makita.png"></div>'+
		        '<h3 id="txt-conen">Catálogo de Makita</h3>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/15.pdf"><span class="botondt">Catálogo 1</span></a></button>'+
		        '</div>'+
			'</div>'+
		  '</div>').appendTo('#mobilproductos');
		  
		  $('<div class="conen">'+
		    '<div class="conen-img"><img class="img-conen" src="assets/css/images/mobil/Bic.png"></div>'+
		    '<div class="conen-texto">'+
		        '<h3 id="txt-conen">Catálogo de papeleria</h3>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/papeleria/1.pdf"><span class="botondt">Catálogo 1</span></a></button>'+
		        '</div>'+
		        '<h3 id="txt-conen">Catálogos de muebles</h3>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/papeleria/2.pdf"><span class="botondt">Catálogo 1</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/papeleria/3.pdf"><span class="botondt">Catálogo 2</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/papeleria/4.pdf"><span class="botondt">Catálogo 3</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/papeleria/5.pdf"><span class="botondt">Catálogo 4</span></a></button>'+
		        '</div>'+
			'</div>'+
		  '</div>').appendTo('#mobilinsumos');
		  
		  $('<div class="conen">'+
		    '<div class="conen-img"><img class="img-conen" src="assets/css/images/mobil/Bosch.png"></div>'+
		    '<div class="conen-texto">'+
		        '<h3 id="txt-conen">Catálogo de Bosh</h3>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/1-2.pdf"><span class="botondt">Catálogo 1</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/2-1.pdf"><span class="botondt">Catálogo 2</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/3.pdf.pdf"><span class="botondt">Catálogo 3</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/4-1.pdf"><span class="botondt">Catálogo 4</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/5.pdf"><span class="botondt">Catálogo 5</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/6.pdf"><span class="botondt">Catálogo 5</span></a></button>'+
		        '</div>'+
		        '<div class="contenedor-boton-pdf">'+
		            '<button class="boton-descargar-pdf"><a class="aconen" href="catalogos/7-1.pdf"><span class="botondt">Catálogo 5</span></a></button>'+
		        '</div>'+
			'</div>'+
		  '</div>').appendTo('#mobilespecializada');
	}
});