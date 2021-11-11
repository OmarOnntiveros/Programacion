        $('#btn').click(function() {
            if ($('#dni').val() == '' || $('#dni').val() == null) {
                document.getElementById("dni-error").innerHTML = 'No se a ingresado ningun DNI';
                $('#dni').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (isNaN($('#dni').val())) {
                document.getElementById("dni-error").innerHTML = 'No debe conterner niguna letra o caracter epecial';
                $('#dni').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (/^\s+$/.test($('#dni').val())) {
                document.getElementById("dni-error").innerHTML = 'Debe de ingresar un DNI valido';
                $('#dni').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (!(/^\d{8}$/.test($('#dni').val()))) {
                document.getElementById("dni-error").innerHTML = "El 'DNI' ingresado no corresponde con lo parametros de 8 digitos";
                $('#dni').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            }
            /*------------------------------------------------------------------------------------------*/
            if ($('#nombre').val() == '' || $('#nombre').val() == null) {
                document.getElementById("nombre-error").innerHTML = 'No se a ingresado ningun Nombre';
                $('#nombre').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (/^\s+$/.test($('#nombre').val())) {
                document.getElementById("nombre-error").innerHTML = 'Debe de ingresar un Nombre valido';
                $('#nombre').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (!(/^[a-zA-ZñÑ\s\W]/.test($('#nombre').val()))) {
                document.getElementById("nombre-error").innerHTML = 'No debe conterner ningun numero o caracter especial';
                $('#nombre').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else {
                document.getElementById("nombre-error").innerHTML = '';
                $('#nombre').css("border-bottom-color", "#C8C8C8");
                contador++;
            }

            /*------------------------------------------------------------------------------------------*/
            if ($('#apellido').val() == '' || $('#apellido').val() == null) {
                document.getElementById("apellido-error").innerHTML = 'No se a ingresado ningun Apellido';
                $('#apellido').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (/^\s+$/.test($('#apellido').val())) {
                document.getElementById("apellido-error").innerHTML = 'Debe de ingresar un Apellido valido';
                $('#apellido').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (!(/^[a-zA-ZñÑ\s\W]/.test($('#apellido').val()))) {
                document.getElementById("apellido-error").innerHTML = 'No debe conterner ningun numero o caracter especial';
                $('#apellido').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else {
                document.getElementById("apellido-error").innerHTML = '';
                $('#apellido').css("border-bottom-color", "#C8C8C8");
                contador++;
            }
            /*------------------------------------------------------------------------------------------*/
            if (!(/^[^@]+@\w+(\.\w+)+\w$/.test($('#email').val()))) {
                document.getElementById("email-error").innerHTML = 'Ingrese un email valido';
                $('#email').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else {
                document.getElementById("email-error").innerHTML = '';
                $('#email').css("border-bottom-color", "#C8C8C8");
                contador++;
            }
            /*------------------------------------------------------------------------------------------*/
            if ($('#celular').val() == '' || $('#celular').val() == null) {
                document.getElementById("celular-error").innerHTML = 'No se a ingresado ningun celular';
                $('#celular').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (isNaN($('#celular').val())) {
                document.getElementById("celular-error").innerHTML = 'No debe conterner niguna letra o caracter epecial';
                $('#celular').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else {
                document.getElementById("celular-error").innerHTML = '';
                $('#celular').css("border-bottom-color", "#C8C8C8");
                contador++;
            }
            /*------------------------------------------------------------------------------------------*/
            if ($('#telefonoFijo').val() == '' || $('#telefonoFijo').val() == null) {
                document.getElementById("telefonoFijo-error").innerHTML = 'No se a ingresado ningun Telefono Fijo';
                $('#telefonoFijo').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (isNaN($('#telefonoFijo').val())) {
                document.getElementById("telefonoFijo-error").innerHTML = 'No debe conterner niguna letra o caracter epecial';
                $('#telefonoFijo').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else {
                document.getElementById("telefonoFijo-error").innerHTML = '';
                $('#telefonoFijo').css("border-bottom-color", "#C8C8C8");
                contador++;
            }

            /*------------------------------------------------------------------------------------------*/
            if ($('#carrera').val() == '' || $('#carrera').val() == null) {
                document.getElementById("carrera-error").innerHTML = 'No se a ingresado ningun Nombre';
                $('#carrera').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (/^\s+$/.test($('#carrera').val())) {
                document.getElementById("carrera-error").innerHTML = 'Debe de ingresar un Nombre valido';
                $('#carrera').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (!(/^[a-zA-ZñÑ\s\W]/.test($('#nombre').val()))) {
                document.getElementById("carrera-error").innerHTML = 'No debe conterner ningun numero o caracter especial';
                $('#carrera').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else {
                document.getElementById("carrera-error").innerHTML = '';
                $('#carrera').css("border-bottom-color", "#C8C8C8");
                contador++;
            }
            /*------------------------------------------------------------------------------------------*/
            if ($('#materia').val() == '' || $('#materia').val() == null) {
                document.getElementById("materia-error").innerHTML = 'No se a ingresado ningun Nombre';
                $('#materia').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (/^\s+$/.test($('#materia').val())) {
                document.getElementById("materia-error").innerHTML = 'Debe de ingresar un Nombre valido';
                $('#materia').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else if (!(/^[a-zA-ZñÑ\s\W]/.test($('#materia').val()))) {
                document.getElementById("materia-error").innerHTML = 'No debe conterner ningun numero o caracter especial';
                $('#materia').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else {
                document.getElementById("materia-error").innerHTML = '';
                $('#materia').css("border-bottom-color", "#C8C8C8");
                contador++;
            }

            /*--------------------------------------------------------------------------------------------*/
            if ($('#fechaInscripcion').val() == '' || $('#fechaInscripcion').val() == null) {
                document.getElementById("fechaInscripcion-error").innerHTML = 'No se a ingresado ningun Nombre';
                $('#fechaInscripcion').css("border-bottom-color", "#F14B4B");
                respuesta = 1;
            } else {
                document.getElementById("fechaInscripcion-error").innerHTML = '';
                $('#fechaInscripcion').css("border-bottom-color", "#C8C8C8");
                contador++;
            }
        });