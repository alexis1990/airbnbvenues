$('.menuProfile').click(function(){
	$('.headerProfileList').addClass('headerProfileListActive');
	return false;
});

$(document).click(function(){
	$('.headerProfileList').removeClass('headerProfileListActive');
});