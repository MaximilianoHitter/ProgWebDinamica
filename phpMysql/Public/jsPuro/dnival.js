const dni = document.getElementById('inputDni');
const boton = document.getElementById('boton');
//console.log('aca toy');
dni.addEventListener('change', (e) => {
    let valor = e.target.value;
    if (valor.includes('.') || valor.includes('-') || isNaN(valor) || valor.length <= 6 || valor.length >= 9) {
        //bad
        dni.classList.add('bad');
        dni.classList.remove('gut');
        boton.disabled = true;
        console.log('ta mal');
        //validacion['dni'] = false;
        //cambiarEstado();
    } else {
        dni.classList.add('gut');
        dni.classList.remove('bad');
        boton.disabled = false;
        console.log('ta bien');
        //validacion['dni'] = true;
        //cambiarEstado();
    }
})