//funciones javascript

var urlweb='http://localhost/turecicla/';


function login_ajax(user,pass){
    if(limpiar(user)!=='' && limpiar(pass)!==''){
         
            //enviar el registro
                $.ajax({
                    type:'POST',
                    url: urlweb + 'inc/login.php',
					cache: false,
                    //data: 'user=' + user + '&correo=' + correo + '&pass1=' + pass1,
                    data: $('#formInicio').serialize(),
					success: function(respuesta){
						if(limpiar(respuesta)=='correcto'){
							//recargar la pagina
							alert("hola mundo");
							window.location.replace("http://localhost/turecicla/iniciar");
						}
						else if(limpiar(respuesta)=='error'){
							//mostrar error
							$('#registro-error').fadeIn(500);
							$('#registro-mensaje').text('Datos incorrectos');
						}
					}
                });             
            
    }
        else {
            $('#registro-error').fadeIn(500);
            $('#registro-mensaje').text('completa los campos');
        }
}


function registro_ajax(user,correo,pass1,pass2){
    if(limpiar(user)!=='' && limpiar(correo)!=='' && limpiar(pass1)!=='' && limpiar(pass2)!==''){
            //paso 1 validacion ok
            if(limpiar(pass1) != limpiar(pass2)){
                $('#registro-error').fadeIn(500);
                $('#registro-mensaje').text('Las contraseñas no coinciden');
            }
            else {
                //enviar el registro
                $.ajax({
                    type:'POST',
                    url: urlweb + 'inc/adduser.php',
					cache: false,
                    //data: 'user=' + user + '&correo=' + correo + '&pass1=' + pass1,
                    data: $('#formRegistro').serialize(),
					success: function(respuesta){
						if(limpiar(respuesta)=='correcto'){
							//ir a login
							Location.href=urlweb + 'iniciar';
						}
						else if(limpiar(respuesta)=='existe'){
							//mostrar error
							$('#registro-error').fadeIn(500);
							$('#registro-mensaje').text('correo no disponible');
						}
					}
                });             
            }
    }
        else {
            $('#registro-error').fadeIn(500);
            $('#registro-mensaje').text('completa los campos');
        }
}

//funcion que elimine los espacios en blanco
function limpiar(valor){
    var cadenavalor = valor + " ";
    return cadenavalor;
}



