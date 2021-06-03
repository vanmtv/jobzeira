setTimeout(() => {
    let role = localStorage.getItem('jobzeira_funcao');

    if (role == 'cliente' || !role) {
        let domain = window.location.hostname;
        window.location.href = 'http://' + domain + '/jobzeira/login.php';
    }
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
    alert(type);
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