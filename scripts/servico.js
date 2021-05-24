let nomeServicoOk  = false
let nomeServico = window.document.getElementById('nomeServico')
let numTel = window.document.getElementById('telNumber')
let numTelOk = false
let descricao = window.document.getElementById('descricao')
let descricaoOk = false


function validaNomeServico(){
    let txtNomeServico = document.getElementById('txtNomeServico')
    if(nomeServico.value.length < 3){
        txtNomeServico.innerHTML = 'Digite mais que 10 caracteres.'
        txtNomeServico.style.color = 'red'
    }
    else{
        txtNomeServico.innerHTML ='Nome válido'
        txtNomeServico.style.color = '#2352A8'
        nomeServicoOk = true
    }
}

function validaNumTel(){
    let txtNumTel= document.getElementById('txtNumTel')
    if(numTel.value.length < 11){
        txtNumTel.innerHTML = 'Telefone no mínimo de 11 caracteres'
        txtNumTel.style.color = 'red'
    }
    else{
        txtNumTel.innerHTML ='Telefone válido'
        txtNumTel.style.color = '#2352A8'
        numTelOk = true
    }
}

function validaDescricao(){
    let txtDescricao= document.getElementById('txtDescricao')
    if(descricao.value <30){
        txtDescricao.innerHTML = 'Descricao precisa ter no minimo 30 caracteres'
        txtDescricao.style.color = 'red'
    }
    else {
        txtNumTel.innerHTML ='Descrição válida'
        txtNumTel.style.color = '#2352A8'
        descricaoOk = true
    }
}

function cadastrar(){
    if( nomeServicoOk == true && numTelOk == true && descricaoOk == true){
        alert('Serviço cadastrado com sucesso')
    }
    else{
        alert('Não foi possível cadastrar seu serviço')
    }
}

//verificar pq descricao nao esta ficando ok

function editar(){

}

