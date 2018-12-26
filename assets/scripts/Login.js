$(document).ready(function(){
	$("#Entrar").click(function(){
		var username=$('#username').val();
		var password=$("#password").val();
		console.log(username,password);
		$.ajax({
			type:"POST",
			dataType:'json',
			url:'assets/scripts/IndexAjax.php',
			data:{username:username,password:password},
			success:function(response){
				if(response.respuesta==true){
					$("#mensaje").html(response.mensaje);
					window.location='inicio.php';
				}else{
					$("#mensaje").html(response.mensaje);
				}
			},error:function(){
				alert('Datos incorrectos');
			}
		});
	});
});