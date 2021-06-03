setTimeout(() => {
    let role = localStorage.getItem('jobzeira_funcao');

    if (role == 'cliente' || !role)
        window.location.href = 'login.php';
}, 200);

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
    if (!filledForm && type != 'Delete') {
        alert('Ooops parece que você não preencheu tudo o que precisamos');
        return;
    }

    if (type == 'Delete') {
        var awnser = prompt('Você está certo disso? Digite "S" para sim.');
        if (awnser.toLocaleLowerCase() != 's')
            return;
    }

    $.ajax({
        url: 'http://localhost/jobzeira/scripts/submitAnuncio.php',
        type: 'POST',

        data: function() {
            var data = new FormData();
            data.append('titulo', $("#titulo").val());
            data.append('servico', $("#servico").val());
            data.append('profissional', localStorage.getItem('jobzeira_id'));
            data.append('valor', $("#valor").val());
            data.append('descricao', $("#descricao").val());
            data.append('file', $("#file").prop('files')[0]);
            data.append('type', type);
            data.append('id', id);
            return data;
        }(),
        success: function(data) {
            var obj = JSON.parse(data);
            alert(obj.result);
            window.location.href = 'meus_itens.php?id=' + localStorage.getItem('jobzeira_id');
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