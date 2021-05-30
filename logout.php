<html>
<script>
    localStorage.removeItem('jobzeira_logado');
    localStorage.removeItem('jobzeira_funcao');
    localStorage.removeItem('jobzeira_id');
    let domain = window.location.hostname;
    window.location.href = 'http://' + domain + '/jobzeira/login.php';
</script>
</html>