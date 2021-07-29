//getnegocios
const getNegocio = async()=>{
    let respuesta = await axios.get("api/negocios/get");
    return respuesta.data;

};

//crearnegocios
const crearNegocios = async(negocio)=>{
    console.log(negocio);
    let respuesta = await axios.post("api/negocios/post", negocio, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return respuesta.data;
};