/* const btnInfoDuenio = document.querySelector('#btnViewPeople');
const cuerpo = document.querySelector('.containerPersonas');

eventListener();

function eventListener(){
    btnInfoDuenio.addEventListener('click', mostrar);
}

function mostrar(){
    let parrafo = document.createElement('p');
    parrafo.innerHTML = `
        <?php
        foreach($this->personas as $key){ ?>
            <strong>DNI:</strong> <?php echo $key->getNroDni() ?>;
            <strong>Apellidos:</strong> <?php echo $key->getApellido() ?>;
            <strong>Nombre:</strong> <?php echo $key->getNombre() ?>;
            <strong>Fecha nacimiento:</strong> <?php echo $key->getFechaNac() ?>;
            <strong>Telefono:</strong> <?php echo $key->getTelefono() ?>;
            <strong>Domicilio:</strong> <?php echo $key->getDomicilio() ?> <br><hr>
        <?php } ?> `;

    cuerpo.appendChild(parrafo);
} */