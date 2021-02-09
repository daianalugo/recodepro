// precisa colocar no package.json "type" : "module", tirar a linha 3
import express from 'express';
// const express = require('express');
// console.log(express)
const server = express();
server.use(express.json())


const usuarios = ["Daiana", "Mickey", "Mag", "Mouse", "Pig"]


// server.get("/usuarios",(req, res)=>{
    // const valueParam= req.query.name
    // res.send (`oi, ${valueParam} deu bom`)
    // pega o valor informado na url > Querr params 
    // res.send("altera automaticamente")   
// })

// mostra a const usuarios na tela, como array
server.get("/usuarios",(req, res)=>{
    res.json(usuarios)
})



server.get("/usuarios/:index",(req,res)=> {
    const {index} = req.params
    res.jason(usuarios[index])
})



server.post("/usuarios",(req,res)=> {
    const {name} = req.body
    usuarios.push(name)
    res.send("nome cadastrado")
})




server.listen(3333, function(){
    // console.log("deu bom")
})


