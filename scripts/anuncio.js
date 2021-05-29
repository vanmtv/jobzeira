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

function sendToPHP() {
    $.ajax({
        url: 'http://localhost/jobzeira/scripts/submitAnuncio.php',
        type: 'POST',

        data: function() {
            var data = new FormData();
            data.append('servico', $("#servico").val());
            data.append('profissional', $("#profissional").val());
            data.append('valor', $("#valor").val());
            data.append('teste', 'foi');
            data.append('descricao', $("#descricao").val());
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