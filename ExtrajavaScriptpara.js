function validar() {
    if ($('#dni').val() == '' || $('#dni').val() == null) {
        document.getElementById("dni-error").innerHTML = 'No se a ingresado ningun "DNI"';
        $('#dni').css("border-bottom-color", "#F14B4B");
    }
};

const form = document.getElementById('formulario');
const submitButton = document.getElementById('submit');

document.querySelectorAll('.form-floating').forEach((box) => {
    const boxInput = box.querySelector('input');

    boxInput.addEventListener('keydown', (event) => {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            console.log(`Input ${boxInput.name} value: `, boxInput.value);

            validation(box, boxInput);
        }, 300);
    });
});