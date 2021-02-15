const fetch =require('node-fetch')

// instalar o feche
module.exports= async function buscaCep(cep){
    const response= await feche (`https://viacep.com.br/ws/${cep}/json/`)
    const json= await response.json()
    return json
}


