$(document).on('ready',function(){
	var switMenu=0;
	$('.menu-button').click(function(){
		switMenu++;
		if(switMenu%2==0)
		{
			$('.nav-menu').slideToggle("slow");
			$('header').removeAttr( 'style' ).addClass('bounceInRight animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			$(this).removeClass();});
			$('.nav-menu li ul').removeAttr( 'style' );
			$('.contenido').removeAttr( 'style' );
			switMenu=0;
		}
		else
		{
			$('.nav-menu').slideToggle("slow") ;
			$('header').css({'left':'10.8em','width':'87%'}).addClass('bounceInRight animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			$(this).removeClass();});
			$('.nav-menu li ul').removeAttr( 'style' );
			$('.contenido').css('padding-left','180px');
		}
	});

        // activar display del menu

	$(".nav-menu>ul>li").click(function(){
		var contenido=$(this).find('ul');
		if($(this).find('ul').length==1)
		{
	       // boton atras
	       $('.nav-menu >ul> li:first-child a').css('display','block').addClass('rotateInUpRight animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
				$(this).removeClass();});
	     // activar ul li ul
	       $(this).find('ul').css('display','block');
	       // pendiente
	       $(this).find('ul li:first-child a').html($(this).children('a').text());

	      // --------- activar submenu ---------
	       $('.nav-menu> ul> li:first-child a').click(function(){
             $(this).removeAttr( 'style' );
             $(contenido).fadeOut(300);
	       });
		}
	});

	// ------------activar buscador-----------
		var contarB=0;
	$('.search-b').click(function(){
		contarB++;
		if (contarB%2==0) {

           $('.txt-buscador').fadeToggle().animate({
        	 width: "0"
         }, 1000, "swing");
                   contarB=0;

		}else{

          $('.txt-buscador').css('display','block').animate({
        	 width: "200px"
         }, 1000, "swing");

		}

	});



 $('.login-button').click(function(){
      	$('.login').css('display','block').addClass('bounceInRight animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			 });
      });

 // hover acciones -- activar div acciones
 //
  $('.descripcion').hover(function(){
  	$('.acciones').css('display','block').addClass('rotateInUpRight animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		});
       });

  // cerrar formulario login

  $('.exit').click(function(){
  	$('.login').css('display','none');
  });


});

