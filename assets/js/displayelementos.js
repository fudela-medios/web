function recuperavalor(elemento){
	if (elemento == 'v') {
		$('#espacio').remove();
		$('#vivienda').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#comercio').attr("style","display: none;");
		$('#remodelacion').attr("style","display: none;");
		$('#ampliaciones').attr("style","display: none;");
	}
	if (elemento == 'c') {
		$('#espacio').remove();
		$('#comercio').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#vivienda').attr("style","display: none;");
		$('#remodelacion').attr("style","display: none;");
		$('#ampliaciones').attr("style","display: none;");
	}
	if (elemento == 'r') {
		$('#espacio').remove();
		$('#remodelacion').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#vivienda').attr("style","display: none;");
		$('#comercio').attr("style","display: none;");
		$('#ampliaciones').attr("style","display: none;");
	}
	if (elemento == 'a') {
		$('#espacio').remove();
		$('#ampliaciones').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#vivienda').attr("style","display: none;");
		$('#comercio').attr("style","display: none;");
		$('#remodelacion').attr("style","display: none;");
	}
}
function recuperavalo(elemento){
	if (elemento == 'al') {
		$('#espacio').remove();
		$('#alimentaria').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#manufactura').attr("style","display: none;");
		$('#quimica').attr("style","display: none;");
		$('#medica').attr("style","display: none;");
		$('#automotriz').attr("style","display: none;");
	}
	if (elemento == 'ma') {
		$('#espacio').remove();
		$('#manufactura').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#alimentaria').attr("style","display: none;");
		$('#quimica').attr("style","display: none;");
		$('#medica').attr("style","display: none;");
		$('#automotriz').attr("style","display: none;");
	}
	if (elemento == 'qu') {
		$('#espacio').remove();
		$('#quimica').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#alimentaria').attr("style","display: none;");
		$('#manufactura').attr("style","display: none;");
		$('#medica').attr("style","display: none;");
		$('#automotriz').attr("style","display: none;");
	}
	if (elemento == 'me') {
		$('#espacio').remove();
		$('#medica').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#alimentaria').attr("style","display: none;");
		$('#manufactura').attr("style","display: none;");
		$('#quimica').attr("style","display: none;");
		$('#automotriz').attr("style","display: none;");
	}
	if (elemento == 'au') {
		$('#espacio').remove();
		$('#automotriz').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#alimentaria').attr("style","display: none;");
		$('#manufactura').attr("style","display: none;");
		$('#quimica').attr("style","display: none;");
		$('#medica').attr("style","display: none;");
	}
}
function recuperaval(elemento){
	if (elemento == 'el') {
		$('#espacio').remove();
		$('#electrica').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#sanitaria').attr("style","display: none;");
		$('#agua').attr("style","display: none;");
		$('#aire').attr("style","display: none;");
		$('#incendios').attr("style","display: none;");
	}
	if (elemento == 'sa') {
		$('#espacio').remove();
		$('#sanitaria').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#electrica').attr("style","display: none;");
		$('#agua').attr("style","display: none;");
		$('#aire').attr("style","display: none;");
		$('#incendios').attr("style","display: none;");
	}
	if (elemento == 'ag') {
		$('#espacio').remove();
		$('#agua').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#electrica').attr("style","display: none;");
		$('#sanitaria').attr("style","display: none;");
		$('#aire').attr("style","display: none;");
		$('#incendios').attr("style","display: none;");
	}
	if (elemento == 'ai') {
		$('#espacio').remove();
		$('#aire').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#electrica').attr("style","display: none;");
		$('#sanitaria').attr("style","display: none;");
		$('#agua').attr("style","display: none;");
		$('#incendios').attr("style","display: none;");
	}
	if (elemento == 'co') {
		$('#espacio').remove();
		$('#incendios').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#electrica').attr("style","display: none;");
		$('#sanitaria').attr("style","display: none;");
		$('#agua').attr("style","display: none;");
		$('#aire').attr("style","display: none;");
	}
}
function recuperava(elemento){
	if (elemento == 'el') {
		$('#espacio').remove();
		$('#electrica').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#sanitaria').attr("style","display: none;");
		$('#agua').attr("style","display: none;");
		$('#aire').attr("style","display: none;");
		$('#incendios').attr("style","display: none;");
	}
	if (elemento == 'sa') {
		$('#espacio').remove();
		$('#sanitaria').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#electrica').attr("style","display: none;");
		$('#agua').attr("style","display: none;");
		$('#aire').attr("style","display: none;");
		$('#incendios').attr("style","display: none;");
	}
	if (elemento == 'ag') {
		$('#espacio').remove();
		$('#agua').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#electrica').attr("style","display: none;");
		$('#sanitaria').attr("style","display: none;");
		$('#aire').attr("style","display: none;");
		$('#incendios').attr("style","display: none;");
	}
	if (elemento == 'ai') {
		$('#espacio').remove();
		$('#aire').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#electrica').attr("style","display: none;");
		$('#sanitaria').attr("style","display: none;");
		$('#agua').attr("style","display: none;");
		$('#incendios').attr("style","display: none;");
	}
	if (elemento == 'co') {
		$('#espacio').remove();
		$('#incendios').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#electrica').attr("style","display: none;");
		$('#sanitaria').attr("style","display: none;");
		$('#agua').attr("style","display: none;");
		$('#aire').attr("style","display: none;");
	}
}
function recuperav(elemento){
	if (elemento == 'vi') {
		$('#espacio').remove();
		$('#vialidades').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#luminaria').attr("style","display: none;");
		$('#areasv').attr("style","display: none;");
		$('#rdrenaje').attr("style","display: none;");
		$('#ragua').attr("style","display: none;");
	}
	if (elemento == 'lu') {
		$('#espacio').remove();
		$('#luminaria').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#vialidades').attr("style","display: none;");
		$('#areasv').attr("style","display: none;");
		$('#rdrenaje').attr("style","display: none;");
		$('#ragua').attr("style","display: none;");
	}
	if (elemento == 'ar') {
		$('#espacio').remove();
		$('#areasv').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#vialidades').attr("style","display: none;");
		$('#luminaria').attr("style","display: none;");
		$('#rdrenaje').attr("style","display: none;");
		$('#ragua').attr("style","display: none;");
	}
	if (elemento == 're') {
		$('#espacio').remove();
		$('#rdrenaje').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#vialidades').attr("style","display: none;");
		$('#luminaria').attr("style","display: none;");
		$('#areasv').attr("style","display: none;");
		$('#ragua').attr("style","display: none;");
	}
	if (elemento == 'ag') {
		$('#espacio').remove();
		$('#ragua').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#vialidades').attr("style","display: none;");
		$('#luminaria').attr("style","display: none;");
		$('#areasv').attr("style","display: none;");
		$('#rdrenaje').attr("style","display: none;");
	}
}
function recupera(elemento){
	if (elemento == 't') {
		$('#espacio').remove();
		$('#cdificil').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#cinterno').attr("style","display: none;");
		$('#ctelefono').attr("style","display: none;");
	}
	if (elemento == 's') {
		$('#espacio').remove();
		$('#cinterno').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#cdificil').attr("style","display: none;");
		$('#ctelefono').attr("style","display: none;");
	}
	if (elemento == 'a') {
		$('#espacio').remove();
		$('#ctelefono').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#cdificil').attr("style","display: none;");
		$('#cinterno').attr("style","display: none;");
	}
}
function recuper(elemento){
	if (elemento == 't') {
		$('#espacio').remove();
		$('#tdecisiones').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#pestrategica').attr("style","display: none;");
		$('#hgerencia').attr("style","display: none;");
	}
	if (elemento == 'p') {
		$('#espacio').remove();
		$('#pestrategica').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#tdecisiones').attr("style","display: none;");
		$('#hgerencia').attr("style","display: none;");
	}
	if (elemento == 'h') {
		$('#espacio').remove();
		$('#hgerencia').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#tdecisiones').attr("style","display: none;");
		$('#pestrategica').attr("style","display: none;");
	}
}
function recupe(elemento){
	if (elemento == 's') {
		$('#espacio').remove();
		$('#sistema').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#iso').attr("style","display: none;");
		$('#auditoria').attr("style","display: none;");
	}
	if (elemento == 'i') {
		$('#espacio').remove();
		$('#iso').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#sistema').attr("style","display: none;");
		$('#auditoria').attr("style","display: none;");
	}
	if (elemento == 'a') {
		$('#espacio').remove();
		$('#auditoria').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#sistema').attr("style","display: none;");
		$('#iso').attr("style","display: none;");
	}
}
function recup(elemento){
	if (elemento == 'e') {
		$('#espacio').remove();
		$('#estudio').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#competencia').attr("style","display: none;");
		$('#formacion').attr("style","display: none;");
	}
	if (elemento == 'c') {
		$('#espacio').remove();
		$('#competencia').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#estudio').attr("style","display: none;");
		$('#formacion').attr("style","display: none;");
	}
	if (elemento == 'f') {
		$('#espacio').remove();
		$('#formacion').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#estudio').attr("style","display: none;");
		$('#competencia').attr("style","display: none;");
	}
}
function recu(elemento){
	if (elemento == 'r') {
		$('#espacio').remove();
		$('#r').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#n').attr("style","display: none;");
		$('#c').attr("style","display: none;");
	}
	if (elemento == 'n') {
		$('#espacio').remove();
		$('#n').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#r').attr("style","display: none;");
		$('#c').attr("style","display: none;");
	}
	if (elemento == 'c') {
		$('#espacio').remove();
		$('#c').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#r').attr("style","display: none;");
		$('#n').attr("style","display: none;");
	}
}
function rec(elemento){
	if (elemento == 'o') {
		$('#espacio').remove();
		$('#o').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#m').attr("style","display: none;");
        $('#l').attr("style","display: none;");
	}
	if (elemento == 'm') {
		$('#espacio').remove();
		$('#m').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#o').attr("style","display: none;");
        $('#l').attr("style","display: none;");
	}
	if (elemento == 'l') {
		$('#espacio').remove();
		$('#l').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#o').attr("style","display: none;");
        $('#m').attr("style","display: none;");
	}
}
function re(elemento){
	if (elemento == 'b') {
		$('#espacio').remove();
		$('#b').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#p').attr("style","display: none;");
		$('#r').attr("style","display: none;");
	}
	if (elemento == 'p') {
		$('#espacio').remove();
		$('#p').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#b').attr("style","display: none;");
		$('#r').attr("style","display: none;");
	}
	if (elemento == 'r') {
		$('#espacio').remove();
		$('#r').attr("style","/*display: none;*/");
		$('.con').append('<br id="espacio">');
		$('#b').attr("style","display: none;");
		$('#p').attr("style","display: none;");
	}
}