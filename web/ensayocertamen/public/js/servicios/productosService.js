const crearProductos = async(producto)=>{
    console.log(producto);
    let respuesta = await axios.post("api/productos/post", producto, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return respuesta.data;
};