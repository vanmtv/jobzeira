setTimeout(window.onload = function() {
    getContrato();
}, 1000);

function getContrato() {
    var urlParams = new URLSearchParams(window.location.search);
    $.ajax({
        url: 'http://localhost/jobzeira/scripts/getContrato.php',
        type: 'POST',

        data: function() {
            var data = new FormData();
            data.append('servico', urlParams.get('servico'));
            data.append('cliente', localStorage.getItem('jobzeira_id'));
            return data;
        }(),
        success: function(data) {
            var contrato = JSON.parse(data);
            formPopulate(contrato);
        },
        error: function(data) {
            window.location.href = 'index.php';
        },
        complete: function(data) {

        },
        cache: false,
        contentType: false,
        processData: false
    });
}

function formPopulate(contrato) {
    var date = new Date();
    $('#nome-solicitante').val(contrato.clienteName);
    $('#nome-profissional').val(contrato.profissionalName);
    $('#cpf-solicitante').val(contrato.clienteDoc);
    $('#cpf-profissional').val(contrato.profissionalDoc);
    $('#data-contratacao').val(date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear());
    $('#titulo-servico').val(contrato.itemTitle);
    $('#descricao-servico').val(contrato.itemDesc);
    $('#valor').val(contrato.value);
}

function exportPDF() {
    var urlParams = new URLSearchParams(window.location.search);
    $.ajax({
        url: 'http://localhost/jobzeira/scripts/getContrato.php',
        type: 'POST',

        data: function() {
            var data = new FormData();
            data.append('servico', urlParams.get('servico'));
            data.append('cliente', localStorage.getItem('jobzeira_id'));
            return data;
        }(),
        success: function(data) {
            var pdf = JSON.parse(data);
            getPDF(pdf);
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

function getPDF(pdf) {
    var date = new Date();
    var html = "<h1 style=\"margin-bottom: 32px;font-weight: 700;font-size: 32px;\">Contrato</h1>";
    html += "<h4 style=\"padding-bottom: 0px;font-weight: 700;font-size: 20px;\">Descrição do Serviço Contratado</h4>"
    html += "<p style=\"margin-bottom: 8px;\">" + pdf.itemTitle + "</p>";
    html += "<p style=\"margin-bottom: 16px;\">" + pdf.itemDesc + "</p>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Valor</h3>";
    html += "<p style=\"margin-bottom: 16px;\">" + pdf.value + "</p>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Dados do Profissional Liberal</h3>";
    html += "<p style=\"margin-bottom: 16px;\">Nome: " + pdf.profissionalName + "<br>";
    html += "Telefone: " + pdf.profissionalTel + "<br>";
    html += "Email: " + pdf.profissionalEmail + "<br>";
    html += pdf.profissionalDocType + ": " + pdf.profissionalDoc + "</p>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Dados do Contratante</h3>";
    html += "<p style=\"margin-bottom: 16px;\">Nome: " + pdf.clienteName + "<br>";
    html += "Telefone: " + pdf.clienteTel + "<br>";
    html += "Email: " + pdf.clienteEmail + "<br>";
    html += pdf.clienteDocType + ": " + pdf.clienteDoc + "</p>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Assinatura do profissional liberal</h4>";
    html += "<p style=\"margin-bottom: 16px;\">____________________________</p>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Assinatura do contratante</h4>";
    html += "<p style=\"margin-bottom: 16px;\">____________________________</p>";
    html += "<p style=\"margin-bottom: 16px;\">Data de Contratação: " + date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear() + "</p>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Notas</h4>";
    html += "<p style=\"margin-bottom: 16px;\">Os termos deste contrato estão válidos somente aos envolvidos, a plataforma Jobzeira não se responsabiliza por quaisquer problemas oriundos da prestação do serviço descrito.</p>";


    var val = htmlToPdfmake(html);
    var dd = { content: val };
    pdfMake.createPdf(dd).download();
}