function exportPDF() {
    var urlParams = new URLSearchParams(window.location.search);
    console.log(urlParams);
    $.ajax({
        url: 'http://localhost/jobzeira/scripts/getContrato.php',
        type: 'POST',

        data: function() {
            var data = new FormData();
            data.append('anuncio', 1);
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
    var html = "<h1 style=\"margin-bottom: 30px;font-weight: 700;font-size: 32px;\">Contrato nº" + Math.random() + "</h1>";
    html += "<h4 style=\"padding-bottom: 0px;font-weight: 700;font-size: 20px;\">Descrição do Serviço Anúncio contratado</h4>"
    html += "<p style=\"margin-bottom: 16px;\">" + pdf.itemTitle + "</p>";
    html += "<p style=\"margin-bottom: 16px;\">" + pdf.itemDesc + "</p>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Descrição do Serviço Contratado</h4>";
    html += "<p style=\"margin-bottom: 16px;\">" + pdf.servicoTitle + "</p>";
    html += "<p style=\"margin-bottom: 16px;\">" + pdf.servicoDesc + "</p>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Valor</h3>";
    html += "<p style=\"margin-bottom: 16px;\">" + pdf.value + "</p>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Dados do Profissiona liberall</h3>";
    html += "<p>Nome: " + pdf.profissionalName + "<br>";
    html += "<p>Telefone: " + pdf.profissionalTel + "<br>";
    html += "<p>Email: " + pdf.profissionalEmail + "<br>";
    html += "<p>" + pdf.profissionalDocType + ": " + pdf.profissionalDoc + "<br>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Dados do Contratante</h3>";
    html += "<p>Nome: " + pdf.clienteName + "<br>";
    html += "<p>Telefone: " + pdf.clienteTel + "<br>";
    html += "<p>Email: " + pdf.clienteEmail + "<br>";
    html += "<p>" + pdf.clienteDocType + ": " + pdf.clienteDoc + "<br>";
    html += "<p style=\"margin-bottom: 16px;\">Telefone: " + pdf.profissionalTel + "<br>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Assinatura do profissional liberal</h4>";
    html += "<p style=\"margin-bottom: 16px;\">____________________________</p>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Assinatura do contratante</h4>";
    html += "<p style=\"margin-bottom: 16px;\">____________________________</p>";
    html += "<h4 style=\"margin-bottom: 0px;font-weight: 700;font-size: 20px;\">Notas</h4>";
    html += "<p style=\"margin-bottom: 16px;\">*** Texto de não responsabilidade ***</p>";


    var val = htmlToPdfmake(html);
    var dd = { content: val };
    pdfMake.createPdf(dd).download();
}