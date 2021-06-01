let emailOk = false
let txtEmail = window.document.getElementById('email')
let senha = window.document.getElementById('senha')
let senhaOk = false

function validaEmail() {
    let txtEmail = document.getElementById('txtEmail')
    if (email.value.indexOf('@') == -1 || email.value.indexOf('.') == -1) {
        txtEmail.innerHTML = 'Digite email válido'
        txtEmail.style.color = 'red'

    } else {
        txtEmail.innerHTML = 'Email válido'
        txtEmail.style.color = '#0f710f'
        emailOk = true
    }
}

function validaSenha() {
    let txtSenha = document.getElementById('txtSenha')
    if (senha.value.length < 6) {
        txtSenha.innerHTML = 'Senha no mínimo de 6 caracteres'
        txtSenha.style.color = 'red'
    } else {
        txtSenha.innerHTML = 'Números de caracteres válidos'
        txtSenha.style.color = '#0f710f'
        senhaOk = true
    }
}


function logar() {
    if (!emailOk || !senhaOk) {
        alert('Senha ou email incorretos');
        return;
    }

    $.ajax({
        url: 'http://localhost/jobzeira/scripts/submitLogin.php',
        type: 'POST',

        data: function() {
            var data = new FormData();
            data.append('email', $("#email").val());
            data.append('senha', $("#senha").val());
            return data;
        }(),
        success: function(data) {
            var obj = JSON.parse(data);
            if (obj.result) {
                localStorage.setItem('jobzeira_logado', 'logado');
                localStorage.setItem('jobzeira_funcao', obj.result.funcao);
                localStorage.setItem('jobzeira_id', obj.result.usuario_id);
                window.location.href = window.location.origin + '/jobzeira/index.php';
            } else {
                localStorage.removeItem('jobzeira_logado');
                localStorage.removeItem('jobzeira_funcao');
                localStorage.removeItem('jobzeira_id');
                alert('Senha ou email incorretos');
            }
        },
        error: function(data) {
            alert(data);
        },
        complete: function(data) {

        },
        cache: false,
        contentType: false,
        processData: false
    });
}