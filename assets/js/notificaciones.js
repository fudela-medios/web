$(document).ready(function(){
  $('.evento').click(function(e){
		var img = e.target.src;
		$('.modal').attr("style","/* display: none; */");
		var id = e.target.id;
		if (id == "informatica") {
			$('.modal_img').attr("src","assets/css/images/informatica.jpg");
			$('.descripcion-texto-p').text("Podemos definir a la informática como el conjunto de prácticas que se ocupan del tratamiento de la información por medio de computadoras.");
		}
		if (id == "sistemas") {
			$('.modal_img').attr("src","assets/css/images/sistemas.jpg");
			$('.descripcion-texto-p').text("Texto de sistemas");
		}
		if (id == "atencion") {
			$('.modal_img').attr("src","assets/css/images/sistemas.jpg");
			$('.descripcion-texto-p').text("Texto de Atencion a clientes");
		}
		if (id == "relaciones") {
			$('.modal_img').attr("src","assets/css/images/informatica.jpg");
			$('.descripcion-texto-p').text("Texto de relaciones");
		}
		if (id == "cursos") {
			$('.modal_img').attr("src","assets/css/images/sistemas.jpg");
			$('.descripcion-texto-p').text("Texto de cursos");
		}
		if (id == "recursos") {
			$('.modal_img').attr("src","assets/css/images/sistemas.jpg");
			$('.descripcion-texto-p').text("Texto de  recursos");
		}
		if (id == "liderazgo") {
			$('.modal_img').attr("src","assets/css/images/informatica.jpg");
			$('.descripcion-texto-p').text("Texto de liderazgo");
		}
		if (id == "direccion") {
			$('.modal_img').attr("src","assets/css/images/sistemas.jpg");
			$('.descripcion-texto-p').text("Texto de direccion");
		}
		if (id == "word") {
			$('.modal_img').attr("src","assets/css/images/sistemas.jpg");
			$('.descripcion-texto-p').text("Texto de word");
		}
		if (id == "pont") {
			$('.modal_img').attr("src","assets/css/images/informatica.jpg");
			$('.descripcion-texto-p').text("Texto de pont");
		}
		if (id == "excel") {
			$('.modal_img').attr("src","assets/css/images/sistemas.jpg");
			$('.descripcion-texto-p').text("Texto de excel");
		}
		if (id == "video") {
			$('.modal_img').attr("src","assets/css/images/sistemas.jpg");
			$('.descripcion-texto-p').text("Texto de video");
		}
		if (id == "imagenes") {
			$('.modal_img').attr("src","assets/css/images/informatica.jpg");
			$('.descripcion-texto-p').text("Texto de imagenes");
		}
		if (id == "mantenimiento") {
			$('.modal_img').attr("src","assets/css/images/sistemas.jpg");
			$('.descripcion-texto-p').text("Texto de mantenimiento");
		}
	});

  
});

$(document).ready(function(){
	$('.modal_boton').click(function(){
		$('.modal').attr("style","display: none;");
	});
});

$(document).keydown(function(e){
	if (e.which == "27") {
		$('.modal').attr("style","display: none;");
	}
});