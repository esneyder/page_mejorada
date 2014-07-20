<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
	$(document).on('ready',function(){
		 $("#acepta").prop("checked",true);	
		$('#form').on('submit',function(){

			var nom=$('#nom').val();
			var edad=$("#edad");
			if(nom==""){
				$('#validacion1').fadeIn(500).html('señor usuario deje de ser idiota y llene el nombre').css('display','inline-block');
				$('#triangulito1').fadeIn(500).css('display','inline-block');
			}
			if (edad="") {
          	 $("#validacion2").fadeIn(500).html("Debe seleccionar una edad").css("display","inline-block");
          	 $("#triangulito2").fadeIn(500).css("display","inline-block");

			};

		});

      


		$('#nom').on("keyup",function(){
			var no=$('#nom').val();
			if(no==""){
           		$('#validacion1').fadeIn(500).html('señor usuario deje de ser idiota y llene el nombre').css('display','inline-block');
           		$('#triangulito1').fadeIn(500).css('display','inline-block');
           	}
           	else{

           		$('#validacion1').delay(1500).fadeOut(1500);
           		$('#triangulito1').delay(1500).fadeOut(1500);
           	}
           
			});
          
           
			$('#nom').on("click",function(){
						var no=$('#nom').val();
						if(no==""){
			           		$('#validacion1').fadeIn(500).html('señor usuario deje de ser idiota y lle
			           			ne el nombre').css('display','inline-block');
			           		$('#triangulito1').fadeIn(500).css('display','inline-block');
			           	}
			           	else{

			           		$('#validacion1').delay(1500).fadeOut(1500);
			           		$('#triangulito1').delay(1500).fadeOut(1500);
			           	}
			           
						});
			//_______________________validación edad___________________________

			$("#form").on("submit",function(){

				var v_edad=$("#edad").val();

				if (v_edad=="") {

					$('#validacion2').fadeIn(500).html('Debe ingresar una edad.').css('display','inline-block');
					$('#triangulito2').fadeIn(500).css('display','inline-block');
				}
				else {
					 
					if(v_edad<=18 || v_edad>=50 ) {
			
                 	$('#validacion2').fadeIn(500).html('Debe ingresar una edad valida').css('display','inline-block');
					$('#triangulito2').fadeIn(500).css('display','inline-block');
				}
				}
			});

			$("#form").on("submit",function(){
				var msg=$("#mensaje").val();
				if (msg=="") {
		            $("#validacion4").fadeIn(500).html("Debe ingresar un mensaje").css("display","inline-block");
		            $("#triangulito4").fadeIn(500).css("display","inline-block");
				}
			});
			 
         

	});
	</script>

	<style>	
	#validacion1, #validacion2, #validacion3, #validacion4, #validacion5{
		height: 40px;
		display: inline-block;
		background-color: orange;
		border-radius: 5px;
		color: white;
		margin-left: 0;
		display:none; 
	}
	.triangulito{

		border-top: 4px solid transparent;
		border-bottom: 4px solid transparent;
		border-right: 4px solid orange;
		display: inline-block;
		margin:0 auto;
		position: relative;
		left: 4px;
		display:none;



	}
	

	</style>
</head>
<body>
	<fieldset>
		
		<form action="javascript:void(0);" method="post" id="form">

			nombre: <input type="text" id="nom" name="nom">
			<div class="triangulito" id="triangulito1"></div>
			<div id="validacion1"></div>
			<br>
			edad: <input type="number" id="edad" name="edad">
			<div class="triangulito" id="triangulito2"></div>
			<div id="validacion2">	</div><br>
			acepta los terminos: <input type="checkbox" id="acepta" name="acepta">
			<div class="triangulito" id="triangulito3"></div>
			<div id="validacion3">	</div>
			<br>
			mensaje: <br><textarea name="" id="mensaje" cols="30" rows="10"></textarea>
			<div class="triangulito" id="triangulito4"></div>
			<div id="validacion4">	</div><br>
			Genero<br>
			m<input type="radio" name="sexo" id="sexo"  checked>
			f<input type="radio" name="sexo" id="sexo2">
			<br>
			<div class="triangulito" id="triangulito5"></div>
			<div id="validacion5">	</div>

			<input type="submit" value="aceptar">	



		</form>


	</fieldset>
	
</body>
</html>