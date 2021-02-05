var http = require('http');
var fs = require('fs');
const { dirname } = require('http');
var server = http.createServer(function(request,response){
    var categoria = request.url;

    if (categoria == '/index') {
        fs.readFile(__dirname + '/index.html', function (err, html){
            response.end(html);
        });
    }else if (categoria == '/teste'){
        fs.readFile(__dirname + '/teste.html', function(err,html){
            response.end(html);
        });
    }
});

server.listen(2000, function(){
    console.log("opa, site ok");
});