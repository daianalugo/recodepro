var http=require('http');
var server = http.createServer(function (req,res){
    res.end("<html><body>Desculpa Vi TEA MO! </body></htm>");
});
server.listen(3000);
console.log("servidor ativo");