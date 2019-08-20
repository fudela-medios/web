window.onload = (function() {
	var tam = screen.width;
	if(tam >= 1024){
		$('<img class="imagen-inicio" src="assets/css/images/ini.gif">').appendTo('.loader');
	}
	timer = setTimeout( function(){
		$('.loader').animate({
    		opacity: 0.25,
    		height: "toggle"
  			}, 5000, function() {
  				$(".loader").css('visibility','hidden');
  		});
	},6500);
});