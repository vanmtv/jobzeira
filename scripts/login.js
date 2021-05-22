let nomeOk  = false
let nome = window.document.getElementById('nome')
let senha = window.document.getElementById('senha')
let senhaOk = false

function validaNome(){
    let txtName = document.getElementById('txtName')
    if(nome.value.length < 3){
        txtName.innerHTML = 'Digite mais que 3 caracteres.'
        txtName.style.color = 'red'
        
    }
    else{
        txtName.innerHTML ='Nome válido'
        txtName.style.color = '#2352A8'
        nomeOk = true
    }
}

function validaSenha(){
    let txtSenha = document.getElementById('txtSenha')
    if(senha.value.length < 6){
        txtSenha.innerHTML = 'Senha no mínimo de 6 caracteres'
        txtSenha.style.color = 'red'
    }
    else{
        txtSenha.innerHTML ='Números de caracteres válidos'
        txtSenha.style.color = '#2352A8'
        senhaOk = true
    }
}



function logar(){
    if(nomeOk == true && senhaOk == true){
        alert('Login efetuado com sucesso')
    }
    else{
        alert('Não foi possível efetuar login')
    }
}