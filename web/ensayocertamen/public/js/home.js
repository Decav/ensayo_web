
document.querySelector("#registrar-btn").addEventListener("click", async() =>{
    let patente = document.querySelector("#patente-txt").value.trim();
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let direccion = document.querySelector("#direccion-txt").value.trim();
    let numero = document.querySelector("#numero-txt").value.trim();
    
    

    let errores = [];
    if(patente === ""){
        errores.push("Debe ingresar una patente");
    }else{
        let productos = await getproducto();
        let productoEncontrada = productos.find(c=>c.patente.toLowerCase() === patente.toLowerCase());
        if(productoEncontrada != undefined){
            errores.push("El producto ya existe");
        }
    }

    if(errores.length == 0){
        let producto = {};
        producto.patente = patente;
        producto.nombre = nombre;
        producto.direccion = direccion;
        producto.numero = numero;

        
        let resultado = await crearproductos(producto);
        await Swal.fire("producto creado", "producto creado exitosamente", "success");
    }else{
        Swal.fire({
            title: "Errores de validacion",
            icon: "warning",
            html: errores.join("<br />")
        });
    }
});


document.querySelector("#registrar2-btn").addEventListener("click", async() =>{
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let stock = document.querySelector("#stock-txt").value.trim();
    let precio = document.querySelector("#precio-txt").value.trim();
    
    
    
    let producto = {};
    producto.nombre = nombre;
    producto.stock = stock;
    producto.precio = precio;

    
    let resultado = await crearProducto(producto);
    await Swal.fire("producto creado", "producto creado exitosamente", "success");

});