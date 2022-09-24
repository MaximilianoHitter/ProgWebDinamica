//selector
const patente = document.getElementById('inputPatente');
const dniDuenio = document.getElementById('inputDni');
//selector boton
const boton = document.getElementById('botonSubmit');
//inicio de validacion 
let validacion = [];
validacion['patente'] = false;
validacion['dniDuenio'] = false;
//funcion para cambiar de estado 
const cambiarEstado = () => {
    if (validacion['patente'] && validacion['dniDuenio']) {
        //gut
        boton.disabled = false;
    } else {
        //bad
        boton.disabled = true;
    }
};
//regex
const regexPatente = /^([a-zA-Z]{3})\s([0-9]{3})?$/i;

patente.addEventListener('change', (e) => {
    let valor = e.target.value;
    if (valor.length < 6) {
        //bad
        patente.classList.remove('gut');
        patente.classList.add('bad');
        validacion['patente'] = false;
        cambiarEstado();
    } else {
        if (valor.includes(' ')) {
            //gut  
        } else {
            let array = valor.split('');
            valor = array[0] + array[1] + array[2] + ' ' + array[3] + array[4] + array[5];
        }
        valor = valor.toUpperCase();
        if (regexPatente.test(valor)) {
            //gut
            patente.classList.remove('bad');
            patente.classList.add('gut');
            validacion['patente'] = true;
            cambiarEstado();
        } else {
            //bad
            patente.classList.remove('gut');
            patente.classList.add('bad');
            validacion['patente'] = false;
            cambiarEstado();
        }
    }

})

dniDuenio.addEventListener('change', (e) => {
    let valor = e.target.value;
    if (valor.includes('.') || valor.includes('-') || isNaN(valor) || valor.length <= 6 || valor.length >= 9) {
        //bad
        dniDuenio.classList.add('bad');
        dniDuenio.classList.remove('gut');
        validacion['dniDuenio'] = false;
        cambiarEstado();
    } else {
        dniDuenio.classList.add('gut');
        dniDuenio.classList.remove('bad');
        validacion['dniDuenio'] = true;
        cambiarEstado();
    }
})