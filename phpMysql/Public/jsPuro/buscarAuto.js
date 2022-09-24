//selector
const patente = document.getElementById('patente');
const boton = document.getElementById('botonSubmit');

const regexPatente = /^([a-zA-Z]{3})\s([0-9]{3})?$/i;

patente.addEventListener('change', (e) => {
    let valor = e.target.value;
    if (valor.length < 6) {
        //bad
        //console.log('bad');
        patente.classList.remove('gut');
        patente.classList.add('bad');
        boton.disabled = true;
    } else {
        if (valor.includes(' ')) {
            //gut
            //console.log(valor);
        } else {
            let array = valor.split('');
            valor = array[0] + array[1] + array[2] + ' ' + array[3] + array[4] + array[5];
        }
        valor = valor.toUpperCase();
        //console.log(valor);
        if (regexPatente.test(valor)) {
            //console.log('gut');
            //console.log(valor);
            patente.classList.remove('bad');
            patente.classList.add('gut');
            boton.disabled = false;
        } else {
            //console.log('bad');
            //console.log(valor);
            patente.classList.remove('gut');
            patente.classList.add('bad');
            boton.disabled = true;
        }
    }

})