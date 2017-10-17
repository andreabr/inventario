$(document).ready(function() {

$(".dropdown-button").dropdown({
		hover:true,
		belowOrigin: true
	});

$('select').material_select();
	

setTimeout(function() {
    $('#msg').fadeOut('fast');
}, 3000);


});



        