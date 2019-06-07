function getCookie(nome)
{
    let cookies = document.cookie;

    let parts = cookies.split("; " + nome + "=");

    if (parts.length == 2) 
    {
        return parts[1].split(";")[0];
    }
}

function inicializaCookie(page)
{
    darkMode = getCookie('darkMode');
    darkMode = darkMode == null ? 0 : darkMode;
    document.cookie = `darkMode=${darkMode}`;

    setColorMode(darkMode, page);
}

function switchMode(page) 
{
    darkMode = getCookie('darkMode');
    darkMode = darkMode == 1 ? 0 : 1;
    setColorMode(darkMode, page);

    document.cookie = `darkMode=${darkMode}`;
}

function setColorMode(darkMode, page)
{
    let element = document.getElementById('body');

    if(darkMode == 1)
    {
        element.style.background = 'url("img/background-pattern-dark.png")';
        element.style.color = 'white';

        let tabela = document.getElementById('tabela');
        if(tabela != null)
            tabela.className = 'table table-striped table-dark';

        let element2 = document.getElementById(`img_${page}`);
        if(element2 != null)
            element2.src = `img/${page}.png`
    }
    else
    {
        darkMode = 0;

        element.style.background = `url("img/background-pattern.png")`;
        element.style.color = 'black';

        let tabela = document.getElementById('tabela');
        if(tabela != null)
            tabela.className = 'table table-striped';

        let element2 = document.getElementById(`img_${page}`);
        if(element2 != null)
            element2.src = `img/${page}-dark.png`
    }
}