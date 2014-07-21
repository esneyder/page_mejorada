$(document).on('ready',function(){
	var switMenu=0;
	$('.menu-button').click(function(){
		switMenu++;
		if(switMenu%2==0)
		{
			$('.nav-menu').slideToggle("slow");
			$('header').css({'left':'0','width':'100%'}).addClass('bounceInRight animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			$(this).removeClass();});
			$('.nav-menu li ul').css('display','none');
			$('.contenido').css('padding-left','0');
			switMenu=0;
		}
		else
		{
			$('.nav-menu').slideToggle("slow") ;
			$('header').css({'left':'10.8em','width':'87%'}).addClass('bounceInRight animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			$(this).removeClass();});
			$('.nav-menu li ul').css('display','none');
			$('.contenido').css('padding-left','180px');
		}




	});

});