let btnDias = document.querySelector('#btnDias');

btnDias.addEventListener('click', () =>{
    let cantDias = document.querySelector('#diasCursada').value;
    for(let i = 0; i < cantDias.length; i++){
        let input = document.createElement('input');
        input.setAttribute("type", "number");
        input.setAttribute('name', 'horas_form');
        input.setAttribute('id', 'horas_form');
        document.body.appendChild(input);
    }
    
})