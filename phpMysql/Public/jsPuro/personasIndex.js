//selector
const dni = document.getElementById('inputDni');
const apellido = document.getElementById('inputApellido');
const nombre = document.getElementById('inputNombre');
const fechaNac = document.getElementById('inputFechaNac');
const telefono = document.getElementById('inputTelefono');
const domicilio = document.getElementById('inputDomicilio');

//boton
const boton = document.getElementById('btnViewPeople');
const botonSubmit = document.getElementById('botonSubmit');

let validacion = [];
validacion['dni'] = false;
validacion['apellido'] = false;
validacion['nombre'] = false;
validacion['fechaNac'] = false;
validacion['telefono'] = false;
validacion['domicilio'] = false;

const cambiarEstado = ()=>{
    if(validacion['dni'] && validacion['nombre'] && validacion['apellido'] && validacion['fechaNac'] && validacion['telefono'] && validacion['domicilio']){
        boton.disabled = false;
    }else{
        boton.disabled = true;
    }
}

//regex nombre/apellido
const regex = /^[A-Z'a-z]+$/i;
const regexDomicilio = /^[A-Za-z0-9\s]+$/i;

//logica año
//Logica de años
const arrayMeses = [
    [31],
    [28],
    [31],
    [30],
    [31],
    [30],
    [31],
    [31],
    [30],
    [31],
    [30],
    [31]
];

const calcularAnio = (e) => {
    let esBisiesto = null;
    if (e % 4 == 0) {
        //paso 2
        if (e % 100 == 0) {
            //paso 3
            if (e % 400 == 0) {
                //paso 4
                //es bisiesto
                esBisiesto = true;
            } else {
                //paso 5
                //no es bisiesto
                esBisiesto = false;
            }
        } else {
            //paso 4
            //es bisiesto
            esBisiesto = true;
        }
    } else {
        //paso 5
        //no es bisiesto
        esBisiesto = false;
    }
    return esBisiesto;
}

dni.addEventListener('change', (e)=>{
    let valor = e.target.value;
    if(valor.includes('.') || valor.includes('-') || isNaN(valor) || valor.length <= 6 || valor.length >= 9){
        //bad
        dni.classList.add('bad');
        dni.classList.remove('gut');
        validacion['dni'] = false;
        cambiarEstado();
    }else{
        dni.classList.add('gut');
        dni.classList.remove('bad');
        validacion['dni'] = true;
        cambiarEstado();
    }
})

apellido.addEventListener('change', (e)=>{
    let valor = e.target.value;
    if(regex.test(valor)){
        //gut
        apellido.classList.add('gut');
        apellido.classList.remove('bad');
        validacion['apellido'] = true;
        cambiarEstado();
    }else{
        //bad
        apellido.classList.add('bad');
        apellido.classList.remove('gut');
        validacion['apellido'] = false;
        cambiarEstado();
    }
})

nombre.addEventListener('change', (e)=>{
    let valor = e.target.value;
    if(regex.test(valor)){
        //gut
        nombre.classList.add('gut');
        nombre.classList.remove('bad');
        validacion['nombre'] = true;
        cambiarEstado();
    }else{
        //bad
        nombre.classList.add('bad');
        nombre.classList.remove('gut');
        validacion['nombre'] = false;
        cambiarEstado();
    }
})

fechaNac.addEventListener('change', (e)=>{
    let fechaStr = e.target.value;
    let arrayFecha = fechaStr.split('/');
    //console.table(arrayFecha);
    let anio = parseInt(arrayFecha[2]);
    let dia = parseInt(arrayFecha[0]);
    let mes = parseInt(arrayFecha[1]) - 1;
    //Comprobar si es año bisiesto 
    if (calcularAnio(anio)) {
        //Es bisiesto
        arrayMeses[1] = 29;
        console.log('Es bisiesto');
    } else {
        arrayMeses[1] = 28;
    }

    //Comprobar si el mes esta bien
    console.log(mes);
    if(mes <= 11 && mes >= 0) {
        //comprobar si la cantidad de dias esta bien
        let cantidadDias = parseInt(arrayMeses[mes]);
        if (cantidadDias >= dia) {
            //gut
            fechaNac.classList.remove('bad');
            fechaNac.classList.add('gut');
            validacion['fechaNac'] = true;
            cambiarEstado();
        } else {
            //bad
            fechaNac.classList.remove('gut');
            fechaNac.classList.add('bad');
            validacion['fechaNac'] = false;
            cambiarEstado();
            console.log('mal el dia');
        }
    } else {
        //bad
        fechaNac.classList.remove('gut');
        fechaNac.classList.add('bad');
        validacion['fechaNac'] = false;
        cambiarEstado();
        console.log('mal el mes');
    }
})

telefono.addEventListener('change', (e)=>{
    let valor = e.target.value;
    if(valor.includes('-') || isNaN(valor) || valor == '' || valor < 1){
        //bad
        telefono.classList.remove('gut');
        telefono.classList.add('bad');
        validacion['telefono'] = false;
        cambiarEstado();
    }else{
        //gut
        telefono.classList.remove('bad');
        telefono.classList.add('gut');
        validacion['telefono'] = true;
        cambiarEstado();
    }
})

domicilio.addEventListener('change', (e)=>{
    let valor = e.target.value;
    if(regexDomicilio.test(valor)){
        //gut
        domicilio.classList.remove('bad');
        domicilio.classList.add('gut');
        validacion['domicilio'] = true;
        cambiarEstado();
    }else{
        //bad
        domicilio.classList.remove('gut');
        domicilio.classList.add('bad');
        validacion['domicilio'] = false;
        cambiarEstado();
    }
})

/* botonSubmit.addEventListener('change', (e) => {
    let valor = e.target.value;
    if( valor.length >= 7 && valor.lenght <= 8 ){
        botonSubmit.disabled = false;
    }
}) */