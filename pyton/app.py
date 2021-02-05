from flask import Flask, render_template, request

app = Flask (__name__,template_folder="./src/views")

@app.route("/",methods=["GET", "POST"])
def home():
    if(request.method == "GET"):
        return render_template("index.html")
    else:
        # return"deu ruim"
        # return request.form["num1"]  aqui retorna
        if (request.form["num1"]!="" and request.form["num2"]!=""):
            if(request.form["opc"]=="soma"):
                soma = int(request.form["num1"]) +int (request.form["num2"])
                return str(soma)
            elif (request.form["opc"]=="div"):
                div = int(request.form["num1"]) /int (request.form["num2"]) 
                return str(div) 
            elif (request.form["opc"]=="mult"):
                mult = int(request.form["num1"]) *int (request.form["num2"]) 
                return str(mult)
            elif (request.form["opc"]=="subt"):
                subt = int(request.form["num1"]) -int (request.form["num2"]) 
                return str(subt)             
        else:
            return"digite um numero valido"    

@app.errorhandler(404)
def not_found(error):
    # return"no existe"
    return render_template("soma.html")   

# @app.route("/sobre")
# def sobre():
#     return"Sobre"  


app.run(port=8080, debug=True)    
# port=8080, debug=True, para não precisar fechar


