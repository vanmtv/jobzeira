var filledForm = false;

function isFilled() {
    var mandatories = document.getElementsByClassName('mandatory');
    let foundEmptyField = false;
    Array.prototype.forEach.call(mandatories, function(el, index) {
        let tag = el.tagName;
        if (tag == 'INPUT' || tag == 'TEXTAREA' || tag == 'SELECT') {
            if (el.value) {
                el.classList.add("filled");
                mandatories[index - 1].classList.add("filled");
            } else {
                foundEmptyField = true;
                el.classList.remove("filled");
                mandatories[index - 1].classList.remove("filled");
            }
        }
    });

    filledForm = !foundEmptyField;
}

function sendToPHP(type, id) {
    if(!filledForm){
        alert('Oops... Você deixou algum campo em branco');
        return;
    }

    let docType;
    if($('#cpf').is(':checked'))
        docType = 'cpf';
    else
        docType = 'cnpj';

    $.ajax({
        url: 'scripts/submitUser.php',
        type: 'POST',

        data: function() {
            var data = new FormData();
            data.append('nome', $("#nome").val());
            if( $("#cliente").is(':checked'))
                data.append('funcao', $("#cliente").val())
            else
                data.append('funcao', $("#profissional").val());
            data.append('document', $("#document").val());
            data.append('tel', $("#tel").val());
            data.append('docType', docType);
            data.append('data_nasc', $("#data_nasc").val());
            data.append('file', $("#file").prop('files')[0]);
            data.append('email', $("#email").val());
            data.append('senha', $("#senha").val());
            data.append('logradouro', $("#logradouro").val());
            data.append('numero', $("#numero").val());
            data.append('cep', $("#cep").val());
            data.append('municipio', $("#municipio").val());
            data.append('complemento', $("#complemento").val());
            data.append('bairro', $("#bairro").val());
            data.append('type', type);
            data.append('id', id);
            return data;
        }(),
        success: function(data) {
            var obj = JSON.parse(data);
            alert(obj.result);
            localStorage.setItem('jobzeira_logado', 'logado');
            localStorage.setItem('jobzeira_funcao', obj.user.funcao);
            localStorage.setItem('jobzeira_id', obj.user.usuario_id);
            localStorage.setItem('jobzeira_nome', obj.user.nome);
            window.location.href = 'index.php';
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