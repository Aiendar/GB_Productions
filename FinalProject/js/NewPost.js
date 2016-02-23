$(function(){
	$('textarea').click(function(){
		console.log("I've been clicked.");
		$('textarea').css({'height':'250px'});
		$('#cancel').css({'display':'inline-block'});
	});
	$('#cancel').click(function(){
		$('textarea').css({'height':'50px'});
		$('textarea').val('');
		$('#cancel').css({'display':'none'});
	});
});