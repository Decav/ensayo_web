const cargarTabla = (negocios) =>{
    let tbody = document.querySelector("#tbody-negocio");
    tbody.innerHTML = "";
    for(let i=0; i < negocios.length; ++i){
        let tr = document.createElement("tr");

        let tdPatente = document.createElement("td");
        tdPatente.innerText = negocios[i].patente;
        let tdNombre = document.createElement("td");
        tdNombre.innerText = negocios[i].nombre;
        let tdDireccion = document.createElement("td");
        tdDireccion.innerText = negocios[i].direccion;
        let tdNumero = document.createElement("td");
        tdNumero.innerText = negocios[i].numero;

        let tdAcciones = document.createElement("td");
        
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idNegocios = negocios[i].id;

        tr.appendChild(tdPatente);
        tr.appendChild(tdNombre);
        tr.appendChild(tdDireccion);
        tr.appendChild(tdNumero);
        tr.appendChild(tdAcciones);
        tdAcciones.appendChild(botonEliminar);


        tbody.appendChild(tr);
    }
}

document.addEventListener("DOMContentLoaded" , async()=>{
    let negocios = await getNegocio() ;
    cargarTabla(negocios);
});