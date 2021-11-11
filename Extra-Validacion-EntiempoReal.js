const form = document.getElementById('formulario');
const submitButton = document.getElementById('btn');

let timeout = null;
let error = {
    dni: true,
    nombre: true,
    apellido: true,
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
    if (error.dni || error.nombre || error.apellido) {
        submitButton.toggleAttribute('disabled', true);
    } else {
        submitButton.toggleAttribute('disabled', false);
    }
};
form.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(event.target);
    console.log([...formData]);
    for (let [key, value] of formData.entries()) {
        console.log(`${key}: ${value}`);
    }
});