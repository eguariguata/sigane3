$(document).ready(function(){
	$("#Iniciar").click(function(){
		var username=$('#username').val();
		var password=$("#password").val();
		console.log(username,password);
		$.ajax({
			type:"POST",
			dataType:'json',
			url:'assets/includes/IndexAjax.php',
			data:{username:username,password:password},
			success:function(response){
				if(response.respuesta==true){
					$("#mensaje").html(response.mensaje);
					window.location='login.html';
				}else{
					$("#mensaje").html(response.mensaje);
				}
			},error:function(){
				alert('Ups');
			}
		});

		// alert("Funciona");
	});



});