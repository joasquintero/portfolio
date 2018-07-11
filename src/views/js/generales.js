/*
$('.menu-bar').on('click', function(){
	$('.contenedor').toggleClass('abrir');
});
*/
$('#p_personal').change(function(){
  $('#diagnostico1').removeAttr('disabled');
});

$('#diagnostico1').change(function(){
  $('#diagnostico2').removeAttr('disabled');
});

$('#diagnostico2').change(function(){
  $('#diagnostico3').removeAttr('disabled');
});

function mensaje ( mensaje ) {
	return alert( mensaje );
}