const form = document.getElementById('formulario');
const submitButton = document.getElementById('btn');

let timeout = null;
let error = {
    dni: true,
    nombre: true,
    apellido: true,
    email: true,
    celular: true,
    telefonoFijo: true,
    carrera: true,
    materia: true,

};
document.querySelectorAll('.form-floating').forEach((box) => {
    const boxInput = box.querySelector('input');
    boxInput.addEventListener('keydown', (event) => {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            console.log(`Input ${boxInput.id} value: `, boxInput.value);
            validacion(boxInput)
        }, 300);


    });
});
validacion = (boxInput) => {
    if (boxInput.id == "dni") {
        console.log('validacion')
        if (boxInput.value == '') {
            showError(true, boxInput);
            document.getElementById("dni-error").innerHTML = 'El campo no puede estar vacio';
        } else if (isNaN(boxInput.value)) {
            document.getElementById("dni-error").innerHTML = 'No debe conterner niguna letra o caracter epecial';
            $('#dni').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else if (/^\s+$/.test(boxInput.value)) {
            document.getElementById("dni-error").innerHTML = 'Debe de ingresar un DNI valido';
            $('#dni').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else if (!(/^\d{8}$/.test(boxInput.value))) {
            document.getElementById("dni-error").innerHTML = "El 'DNI' ingresado no corresponde con lo parametros de 8 digitos";
            $('#dni').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else {
            document.getElementById("dni-error").innerHTML = '';
            $('#dni').css("border-bottom-color", "#5cbe00");
            showError(false, boxInput);
        }
    }
    if (boxInput.id == "nombre") {
        if (boxInput.value == '') {
            showError(true, boxInput);
            document.getElementById("nombre-error").innerHTML = 'El campo debe estar vacio';
        } else if (/^\s+$/.test(boxInput.value)) {
            document.getElementById("nombre-error").innerHTML = 'Debe de ingresar un Nombre valido';
            $('#nombre').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else if (!(/^[a-zA-ZñÑ\s\W]/.test(boxInput.value))) {
            document.getElementById("nombre-error").innerHTML = 'No debe conterner ningun numero o caracter especial';
            $('#nombre').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else {
            document.getElementById("nombre-error").innerHTML = '';
            $('#nombre').css("border-bottom-color", "#5cbe00");
            showError(false, boxInput);
        }
    }
    if (boxInput.id == "apellido") {
        if (boxInput.value == '') {
            showError(true, boxInput);
            document.getElementById("apellido-error").innerHTML = 'No se a ingresado ningun Apellido';
            $('#apellido').css("border-bottom-color", "#F14B4B");
        } else if (/^\s+$/.test(boxInput.value)) {
            document.getElementById("apellido-error").innerHTML = 'Debe de ingresar un Apellido valido';
            $('#apellido').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else if (!(/^[a-zA-ZñÑ\s\W]/.test(boxInput.value))) {
            document.getElementById("apellido-error").innerHTML = 'No debe conterner ningun numero o caracter especial';
            $('#apellido').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else {
            document.getElementById("apellido-error").innerHTML = '';
            $('#apellido').css("border-bottom-color", "#5cbe00");
            showError(false, boxInput);
        }
    }
    if (boxInput.id == "email") {
        if (boxInput.value == '') {
            showError(true, boxInput);
            document.getElementById("email-error").innerHTML = 'NO puede estar el campo vacio';
            $('#email').css("border-bottom-color", "#F14B4B");
        } else if (!(/^[^@]+@\w+(\.\w+)+\w$/.test(boxInput.value))) {
            document.getElementById("email-error").innerHTML = 'Ingrese un email valido';
            $('#email').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else {
            document.getElementById("email-error").innerHTML = '';
            $('#email').css("border-bottom-color", "#5cbe00");
            showError(false, boxInput);
        }
    }
    if (boxInput.id == "celular") {
        if (boxInput.value == '') {
            showError(true, boxInput);
            document.getElementById("celular-error").innerHTML = 'No se a ingresado ningun celular';
            $('#celular').css("border-bottom-color", "#F14B4B");

        } else if (isNaN(boxInput.value)) {
            document.getElementById("celular-error").innerHTML = 'No debe conterner niguna letra o caracter epecial';
            $('#celular').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);

        } else if (/^\s+$/.test(boxInput.value)) {
            document.getElementById("celular-error").innerHTML = 'Debe de ingresar un Celular valido';
            $('#celular').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else {
            document.getElementById("celular-error").innerHTML = '';
            $('#celular').css("border-bottom-color", "#5cbe00");
            showError(false, boxInput);

        }
    }
    if (boxInput.id == "telefonoFijo") {
        if (boxInput.value == '') {
            showError(true, boxInput);
            document.getElementById("telefonoFijo-error").innerHTML = 'No se a ingresado ningun Telefono';
            $('#telefonoFijo').css("border-bottom-color", "#F14B4B");

        } else if (isNaN(boxInput.value)) {
            document.getElementById("telefonoFijo-error").innerHTML = 'No debe conterner niguna letra o caracter epecial';
            $('#telefonoFijo').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);

        } else if (/^\s+$/.test(boxInput.value)) {
            document.getElementById("telefonoFijo-error").innerHTML = 'Debe de ingresar un Telefono valido';
            $('#telefonoFijo').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else {
            document.getElementById("telefonoFijo-error").innerHTML = '';
            $('#telefonoFijo').css("border-bottom-color", "#5cbe00");
            showError(false, boxInput);

        }
    }
    if (boxInput.id == "carrera") {
        if (boxInput.value == '') {
            showError(true, boxInput);
            document.getElementById("carrera-error").innerHTML = 'No se a ingresado ningun Carrera';
            $('#carrera').css("border-bottom-color", "#F14B4B");

        } else if (/^\s+$/.test(boxInput.value)) {
            document.getElementById("carrera-error").innerHTML = 'Debe de ingresar una Carrera valido';
            $('#carrera').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);

        } else if (!(/^[a-zA-ZñÑ\s\W]/.test(boxInput.value))) {
            document.getElementById("carrera-error").innerHTML = 'No debe conterner ningun numero o caracter especial';
            $('#carrera').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);

        } else {
            document.getElementById("carrera-error").innerHTML = '';
            $('#carrera').css("border-bottom-color", "#5cbe00");
            showError(false, boxInput);

        }
    }
    if (boxInput.id == "materia") {
        if (boxInput.value == '') {
            document.getElementById("materia-error").innerHTML = 'No se a ingresado ningun Materia';
            $('#materia').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else if (/^\s+$/.test(boxInput.value)) {
            document.getElementById("materia-error").innerHTML = 'Debe de ingresar una Materia valido';
            $('#materia').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else if (!(/^[a-zA-ZñÑ\s\W]/.test(boxInput.value))) {
            document.getElementById("materia-error").innerHTML = 'No debe conterner ningun numero o caracter especial';
            $('#materia').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else {
            document.getElementById("materia-error").innerHTML = '';
            $('#materia').css("border-bottom-color", "#5cbe00");
            showError(false, boxInput);

        }
    }

    submitButtonActivation();
}
showError = (respuestas, boxInput) => {
    if (respuestas) {
        error[boxInput.id] = true;
    } else {
        error[boxInput.id] = false;
    }
}
submitButtonActivation = () => {
    console.log(error);
    if (error.dni || error.nombre || error.apellido || error.email || error.celular || error.telefonoFijo || error.carrera || error.materia) {
        submitButton.toggleAttribute('disabled', true);
    } else {
        submitButton.toggleAttribute('disabled', false);
    }
};