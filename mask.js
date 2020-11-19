const cpf = document.querySelector("#cpf")


function formataCpf(){
    if(cpf.value.length == 3) cpf.value += ".";
    if(cpf.value.length == 7) cpf.value += ".";
    if(cpf.value.length == 11) cpf.value += "-";
}
