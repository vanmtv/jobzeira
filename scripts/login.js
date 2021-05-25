let emailOk  = false
let txtEmail = window.document.getElementById('email')
let senha = window.document.getElementById('senha')
let senhaOk = false

function validaEmail(){
    let txtEmail = document.getElementById('txtEmail')
    if(email.value.indexOf('@') == -1 || email.value.indexOf('.') == -1 ){
        txtEmail.innerHTML = 'Digite email válido'
        txtEmail.style.color = 'red'
        
    }
    else{
        txtEmail.innerHTML ='Email válido'
        txtEmail.style.color = '#2352A8'
        emailOk = true
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
    if(emailOk == true && senhaOk == true){
        alert('Login efetuado com sucesso')
    }
    else{
        alert('Não foi possível efetuar login')
    }
}