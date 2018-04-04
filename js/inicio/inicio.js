$(document).ready(function(){
	$("#page-wrapper").load('vista/inicio/inicio.php');

	$(".ir_a").click(function(event){
		event.preventDefault();
		$("#page-wrapper").load($(this).attr('href'));
	});
});