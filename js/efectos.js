//funciones javascript

var urlweb = 'http://localhost:8888/turecicla/';


function subir_avatar(){
	
	var formData = new FormData($("#formAvatar")[0]);
	$.ajax({
	type: 'POST',
	url: urlweb + 'invsubida.php',
	data: formData,
	contentType: false,
	processData: false,
	success: function(respuesta){
		//Refrescar imagen una vez subida
		$('#formAvatar')[0].reset();
		$('#imagenavatar').attr('src', respuesta);
	}
	});
}


function login_ajax(user, pass) {
    if (limpiar(user) !== '' && limpiar(pass) !== '') {
         
            //enviar el registro
                $.ajax({
                    type: 'POST',
                    url: urlweb + '/inc/login.php',
					cache: false,
                    //data: 'user=' + user + '&correo=' + correo + '&pass1=' + pass1,
                    data: $('#formInicio').serialize(),
					success: function(respuesta) {
						console.log("Respuesta: " + respuesta);
						if (respuesta === 'correcto'){
			                //recargar la pagina -----no quiere cargarr en el min 4:50 + el minuto 5:40 del curso video:https://www.youtube.com/watch?v=W7EwGrjjies&index=17&list=PLn6DZNSAhHfttuiGIbvEdyo_8OEWC6sAZ
							//location.reload(); 
							window.location.replace("http://localhost:8888/turecicla/iniciar");
						} else if (limpiar(respuesta) == 'error'){
							//mostrar error
							$('#login-error').fadeIn(500);
							$('#login-mensaje').text('Datos incorrectos');
						}
					}
                });             
            
    } else {
            $('#login-error').fadeIn(500);
            $('#login-mensaje').text('completa los campos');
        }
}


function registro_ajax(user,correo,pass1,pass2) {
    if (limpiar(user) !== '' && limpiar(correo) !== '' && limpiar(pass1) !== '' && limpiar(pass2) !== '') {
            //paso 1 validacion ok
            if (limpiar(pass1) != limpiar(pass2)){
                $('#registro-error').fadeIn(500);
                $('#registro-mensaje').text('Las contraseñas no coinciden');
            } else {
                //enviar el registro
                $.ajax({
                    type:'POST',
                    url: urlweb + 'inc/adduser.php',
					cache: false,
                    //data: 'user=' + user + '&correo=' + correo + '&pass1=' + pass1,
                    data: $('#formRegistro').serialize(),
					success: function(respuesta) {
						if (limpiar(respuesta) == 'correcto'){
							//ir a login
							location.href = urlweb + 'iniciar';
						} else if (limpiar(respuesta) == 'existe'){
							//mostrar error
							$('#registro-error').fadeIn(500);
							$('#registro-mensaje').text('correo no disponible');
						}
					}
                });             
            }
    }    else {
            $('#registro-error').fadeIn(500);
            $('#registro-mensaje').text('completa los campos');
        }
}

//funcion que elimine los espacios en blanco
function limpiar(valor) {
  var cadena = valor.split(" ").join("");
  return cadena;
}



