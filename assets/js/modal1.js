$(document).ready(function(){
  $('.galeria_img').click(function(e){
		var img = e.target.src;
		var subst = img.substr(56,1);
		$('.modal_img').attr("src",img);
		$('.modal').attr("style","/* display: none; */");
		
	});
	
	$('.modal_boton_d').click(function(){
		var img = $('img.modal_img').attr("src");
		var subst = img.substr(56,1);
		if (img.substr(57,1)!= '.'){
		    subst=subst+img.substr(57,1);
		}
		if(subst == 14){
			//alert("Primera imagen");
		}
		else{
		    if(subst == 62){
		        var subst2 = subst-27;
    			var nimg = img.replace(subst,subst2);
    			$('img.modal_img').attr("src",nimg);
		    }
		    else{
		        var subst2 = subst-1;
    			var nimg = img.replace(subst,subst2);
    			$('img.modal_img').attr("src",nimg);
		    }
			
		}
	});
	
	$('.modal_boton_i').click(function(){
		var img = $('img.modal_img').attr("src");
		var subst = img.substr(56,1);
		if (img.substr(57,1)!= '.'){
		    subst=subst+img.substr(57,1);
		}
		if (subst == 63) {
			//alert("Ultima imagen");
		}
		else{
		    if(subst ==35 ){
		        var subst2 = parseInt(subst)+27;
    			var nimg = img.replace(subst,subst2);
    			$('img.modal_img').attr("src",nimg);
		    }
		    else{
		        var subst2 = parseInt(subst)+1;
    			var nimg = img.replace(subst,subst2);
    			$('img.modal_img').attr("src",nimg);
		    }
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

$(document).keydown(function(e){
    if (e.which == "37") {
		var img = $('img.modal_img').attr("src");
		var subst = img.substr(56,1);
		if (img.substr(57,1)!= '.'){
		    subst=subst+img.substr(57,1);
		}
		if(subst == 14){
			//alert("Primera imagen");
		}
		else{
		    if(subst == 62){
		        var subst2 = subst-27;
    			var nimg = img.replace(subst,subst2);
    			$('img.modal_img').attr("src",nimg);
		    }
		    else{
		        var subst2 = subst-1;
    			var nimg = img.replace(subst,subst2);
    			$('img.modal_img').attr("src",nimg);
		    }
			
		}
	}
});

$(document).keydown(function(e){
    if (e.which == "39") {
		var img = $('img.modal_img').attr("src");
		var subst = img.substr(56,1);
		if (img.substr(57,1)!= '.'){
		    subst=subst+img.substr(57,1);
		}
		if (subst == 63) {
			//alert("Ultima imagen");
		}
		else{
		    if(subst ==35 ){
		        var subst2 = parseInt(subst)+27;
    			var nimg = img.replace(subst,subst2);
    			$('img.modal_img').attr("src",nimg);
		    }
		    else{
		        var subst2 = parseInt(subst)+1;
    			var nimg = img.replace(subst,subst2);
    			$('img.modal_img').attr("src",nimg);
		    }
		}
	}
});