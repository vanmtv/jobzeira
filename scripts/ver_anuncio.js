function goToContract(anuncio) {
    if (localStorage.getItem('jobzeira_id')) {
        window.location.href = 'contrato.php?anuncio=' + anuncio;
    } else
        window.location.href = 'login.php';
}