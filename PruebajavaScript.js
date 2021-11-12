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
            document.getElementById("dni-error").innerHTML = 'El campo no puede estar vacío';
        } else if (isNaN(boxInput.value)) {
            document.getElementById("dni-error").innerHTML = 'No debe contener ninguna letra o carácter especial';
            $('#dni').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else if (/^\s+$/.test(boxInput.value)) {
            document.getElementById("dni-error").innerHTML = 'Debe ingresar un DNI válido';
            $('#dni').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else if (!(/^\d{7,8}$/.test(boxInput.value))) {
            document.getElementById("dni-error").innerHTML = "El 'DNI' ingresado no corresponde con lo parámetros de 8 dígitos";
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
            document.getElementById("nombre-error").innerHTML = 'El campo no puede estar vacío';
        } else if (/^\s+$/.test(boxInput.value)) {
            document.getElementById("nombre-error").innerHTML = 'Debe ingresar un NOMBRE válido';
            $('#nombre').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else if (!(/^[a-zA-ZÀ-ÿ]{1,40}$/.test(boxInput.value))) {
            document.getElementById("nombre-error").innerHTML = 'No debe contener ningún número o carácter especial';
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
            document.getElementById("apellido-error").innerHTML = 'El campo no puede estar vacío';
            $('#apellido').css("border-bottom-color", "#F14B4B");
        } else if (/^\s+$/.test(boxInput.value)) {
            document.getElementById("apellido-error").innerHTML = 'Debe ingresar un APELLIDO válido';
            $('#apellido').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else if (!(/^[a-zA-ZÀ-ÿ]{1,40}$/.test(boxInput.value))) {
            document.getElementById("apellido-error").innerHTML = 'No debe contener ningún número o caracter especial';
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
            document.getElementById("email-error").innerHTML = 'El campo no puede estar vacío';
            $('#email').css("border-bottom-color", "#F14B4B");
        } else if (!(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]{1,50}$/.test(boxInput.value))) {
            document.getElementById("email-error").innerHTML = 'Ingrese un EMAIL válido';
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
            document.getElementById("celular-error").innerHTML = 'El campo no puede estar vacío';
            $('#celular').css("border-bottom-color", "#F14B4B");

        } else if (!(/^\d{9,12}$/.test(boxInput.value))) {
            document.getElementById("celular-error").innerHTML = 'No debe contener ninguna letra o caracter especial / El número debe tener de 9 a 12 dígitos';
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
            document.getElementById("telefonoFijo-error").innerHTML = 'El campo no puede estar vacío';
            $('#telefonoFijo').css("border-bottom-color", "#F14B4B");

        } else if (!(/^\d{7,10}$/.test(boxInput.value))) {
            document.getElementById("telefonoFijo-error").innerHTML = 'No debe conterner ninguna letra o caracter epecial / El número debe tener de 7 a 10 dígitos';
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
            document.getElementById("carrera-error").innerHTML = 'El campo no puede estar vacío';
            $('#carrera').css("border-bottom-color", "#F14B4B");

        } else if (/^\s+$/.test(boxInput.value)) {
            document.getElementById("carrera-error").innerHTML = 'Debe ingresar una CARRERA válida';
            $('#carrera').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);

        } else if (!(/^[a-zA-ZÀ-ÿ\s]{5,50}/.test(boxInput.value))) {
            document.getElementById("carrera-error").innerHTML = 'No debe contener ningún número o carácter especial / La palabra no puede ser menor a 4 letras';
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
            document.getElementById("materia-error").innerHTML = 'El campo no puede estar vacío';
            $('#materia').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else if (/^\s+$/.test(boxInput.value)) {
            document.getElementById("materia-error").innerHTML = 'Debe ingresar una MATERIA valida';
            $('#materia').css("border-bottom-color", "#F14B4B");
            showError(true, boxInput);
        } else if (!(/^[a-zA-ZÀ-ÿ\s]{5,40}/.test(boxInput.value))) {
            document.getElementById("materia-error").innerHTML = 'No debe contener ningún número o carácter especial / La palabra no puede ser menor a 4 letras';
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