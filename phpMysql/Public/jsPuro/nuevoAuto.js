//selector
const patente = document.getElementById('inputPatente');
const marca = document.getElementById('inputMarca');
const modelo = document.getElementById('inputModelo');
const dniDuenio = document.getElementById('inputDniDuenio');
//selector boton
const boton = document.getElementById('botonSubmit');
//inicio de validacion 
let validacion = [];
validacion['patente'] = false;
validacion['marca'] = false;
validacion['modelo'] = false;
validacion['dniDuenio'] = false;
//funcion para cambiar de estado 
const cambiarEstado = () => {
    if (validacion['patente'] && validacion['marca'] && validacion['modelo'] && validacion['dniDuenio']) {
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

marca.addEventListener('change', (e) => {
    let valor = e.target.value;
    if (valor.length > 0) {
        //gut
        marca.classList.remove('bad');
        marca.classList.add('gut');
        validacion['marca'] = true;
        cambiarEstado();
    } else {
        //bad
        marca.classList.remove('gut');
        marca.classList.add('bad');
        validacion['marca'] = false;
        cambiarEstado();
    }
})

modelo.addEventListener('change', (e) => {
    let valor = e.target.value;
    const fechaActual = new Date().getFullYear();
    if (valor.length == 4 && valor > 1900) {
        if (valor <= fechaActual) {
            //gut
            modelo.classList.remove('bad');
            modelo.classList.add('gut');
            validacion['modelo'] = true;
            cambiarEstado();
        } else {
            //bad
            modelo.classList.remove('gut');
            modelo.classList.add('bad');
            validacion['modelo'] = false;
            cambiarEstado();
        }
    } else if (valor.length == 2 && valor > 0) {
        //gut
        modelo.classList.remove('bad');
        modelo.classList.add('gut');
        validacion['modelo'] = true;
        cambiarEstado();
    } else if (valor.length == 1 && valor > 0) {
        //ver tema de un solo digito
        valor = '0' + valor;
        //gut
        modelo.classList.remove('bad');
        modelo.classList.add('gut');
        validacion['modelo'] = true;
        cambiarEstado();
    } else {
        //bad
        modelo.classList.remove('gut');
        modelo.classList.add('bad');
        validacion['modelo'] = false;
        cambiarEstado();
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