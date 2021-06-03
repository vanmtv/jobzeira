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
    $.ajax({
        url: 'http://localhost/jobzeira/scripts/submitUser.php',
        type: 'POST',

        data: function() {
            var data = new FormData();
            data.append('nome', $("#nome").val());
            if( $("#cliente").is(':checked'))
            data.append('funcao', $("#cliente").val())
            else
            data.append('funcao', $("#profissional").val());
            data.append('document', $("#document").val());
            data.append('date', $("#date").val());
            data.append('file', $("#file").prop('files')[0]);
            data.append('email', $("#email").val());
            data.append('senha', $("#senha").val());
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