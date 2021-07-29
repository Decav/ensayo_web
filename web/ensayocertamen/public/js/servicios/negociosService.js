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

const eliminarNegocio = async(id)=>{
    try{
        let respuesta = await axios.post("api/negocios/delete", {id},{
            headers:{
                'Content-Type': 'application/json'
            }
        })
        return respuesta.data == "ok";
    }catch(e){
        return false;
    }
    
}