window.onload = function() {
    let role = localStorage.getItem('jobzeira_funcao');
    let id = localStorage.getItem('jobzeira_id');
    if (!id)
        id = -1;

    let itens = [];
    itens.push({ url: 'index.php', label: 'Catálogo' });

    switch (role) {
        case 'cliente':
            itens.push({ url: 'logout.php', label: 'Sair' });
            break;
        case 'profissional':
            itens.push({ url: 'anuncio.php', label: 'Anunciar', param: 'id=' + id });
            itens.push({ url: 'meus_itens.php', label: 'Meus anúncios', param: 'id=' + id });
            itens.push({ url: 'logout.php', label: 'Sair' });
            break;
        case 'admin':
            itens.push({ url: 'anuncio.php', label: 'Anunciar', param: 'id=' + id });
            itens.push({ url: 'meus_itens.php', label: 'Meus anúncios', param: 'id=' + id });
            itens.push({ url: 'logout.php', label: 'Sair' });
            break;
        default:
            itens.push({ url: 'login.php', label: 'Entrar' });
            break;
    }
    itens.push({ url: 'profile.php', label: false });
    _insertMenuItens(itens);
}

function _insertMenuItens(itens) {
    let menu = document.getElementById('menu-itens');
    let html = '';
    let page = window.location.pathname;
    page = page.split('/');
    page = page[2];

    Array.prototype.forEach.call(itens, function(item) {
        let url = item.url + '?' + item.param;
        if (item.label) {
            if (page == item.url)
                html += '<li><a href="' + url + '" class="current">' + item.label + '</a></li>';
            else
                html += '<li><a href="' + url + '">' + item.label + '</a></li>';
        } else
            html += '<li><img class="profile" src="imagens/profile.svg" alt="perfil"></li>';
    });
    menu.innerHTML = html;
}