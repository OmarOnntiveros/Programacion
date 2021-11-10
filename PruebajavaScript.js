$(document).ready(function() {
    $('#submit').click(function() {
        error = true;
        contador = 0;
        /*------------------------------------------Validacion_del_campo_DNI------------------------------------------------------------------------*/
        if ($('#dni').val() == '' || $('#dni').val() == null) {
            document.getElementById("dni-error").innerHTML = 'No se a ingresado ningun "DNI"';
            $('#dni').css("border-bottom-color", "#F14B4B");
        }
    });
});

/*const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    dni: /^\d{7,8}$/, // 8 numeros.
	nombre: /^[a-zA-ZÀ-ÿ]{1,40}$/, // Letras, pueden llevar acentos.
    apellidos: /^[a-zA-ZÀ-ÿ]{1,40}$/, // Letras, pueden llevar acentos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]{1,50}$/,
    celular: /^\d{9,12}$/, //Numeros de telefono como: 156555444 o 2611234567
	tel_fijo: /^\d{7,10}$/, //Numeros fijos como: 4921111
    carrera: /^[a-zA-ZÀ-ÿ\s]{1,50}/, //Letras, tildes y espacios
    materia: /^[a-zA-ZÀ-ÿ\s]{1,40}/, //Letras, tildes y espacios
}

/*formulario.addEventListener('submit', (e) => {
    e.preventDefault();
});*/

/*const validarFormulario = (e) => {
    switch (e.target.name) {
        case "dni":
            if (expresiones.dni.test(e.target.value)){

            } else {
                document.getElementById('dni').classList.add('');
            }
        break;

        case "dni":

        break;

        case "dni":

        break;

        case "dni":

        break;

        case "dni":

        break;

        case "dni":

        break;

        case "dni":

        break;

        case "dni":

        break;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});*/