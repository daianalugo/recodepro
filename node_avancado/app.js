const express = require('express')
const app = express()
const bodyParser= require('body=parser')

app.use(bodyParse.json())
app.use(bodyParse.urlencoded({extend:true}))

app.set('view engine','ejs')
app.set('views','./src/views')

app.get('/',(req,res)=>{
    res.render('index')
})

app.listen(3333)