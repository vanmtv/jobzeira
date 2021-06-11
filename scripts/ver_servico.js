function goToContract(servico) {
    if (localStorage.getItem('jobzeira_id')) {
        window.location.href = 'contrato.php?servico=' + servico;
    } else
        window.location.href = 'login.php';
}