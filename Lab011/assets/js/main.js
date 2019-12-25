// JavaScript Document

$(document).ready(function(){
	$('#btn-get-text').click(function(){
		var name = $('#txtname').val();
		alert(name);
	});
	
	$('#btn-set-text').click(function(){
		$('#txtname').val('Hello World!');
	});
	
	$('#btn-clear-text').click(function(){
		$('#txtname').val('');
	});
	
	$('#btnhide').click(function(){
		$('#sugar').hide();
	});
	
	$('#btnshow').click(function(){
		$('#sugar').show();
	});
	
	$('#btntoggle').click(function(){
		$('#sugar').toggle();
	});
	
	$('#btnfadein').click(function(){
		$('#sugar').fadeIn(2000);
	});
	
	$('#btnfadeout').click(function(){
		$('#sugar').fadeOut(2000);
	});
	
	$('#btnprogram').click(function(){
		$('#sugar').fadeIn(2000).fadeOut(2000);
	});
	
});