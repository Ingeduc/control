$(document).ready(function(){
	$("#page-wrapper").load('vista/menus/inicio.php');

	$(".ir_a").click(function(event){
		event.preventDefault();
		$("#page-wrapper").load($(this).attr('href'));
	});
});