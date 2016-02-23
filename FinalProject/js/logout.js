$(function(){
	$('html').unload(function(e){
		$.ajax({
			url: "http://localhost/xampp/FinalProject/php/logout.php";
		})
	});
});