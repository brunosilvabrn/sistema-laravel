
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}

function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}

function telefone(v){
    v=v.replace(/\D/g,"")                  //Remove tudo o que não é dígito
    v=v.replace(/^(\d\d)(\d)/g,"($1) $2 ") //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")     //Coloca hífen entre o quarto e o quinto dígitos
    return v
}

function cpf(v){
    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                             //de novo (para o segundo bloco de números)
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
    return v
}

function mdata(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/(\d{2})(\d)/,"$1/$2");
    v=v.replace(/(\d{2})(\d)/,"$1/$2");

    v=v.replace(/(\d{2})(\d{2})$/,"$1$2");
    return v;
}

document.getElementById("CPF").addEventListener("input", function() {
    var i = document.getElementById("CPF").value.length;
    var str = document.getElementById("CPF").value
    if (isNaN(Number(str.charAt(i-1)))) {
        document.getElementById("CPF").value = str.substr(0, i-1)
    }
});

document.addEventListener('keydown', function(event) { 
    if(event.keyCode != 46 && event.keyCode != 8) {
        var i = document.getElementById("CPF").value.length;
        if (i === 3 || i === 7) {
            document.getElementById("CPF").value = document.getElementById("CPF").value + ".";
        }
        else if (i === 11) {
            document.getElementById("CPF").value = document.getElementById("CPF").value + "-";
        }
    }
});