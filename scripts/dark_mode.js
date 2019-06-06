function getCookie(nome)
{
    let cookies = document.cookie;

    let parts = cookies.split("; " + nome + "=");

    if (parts.length == 2) 
    {
        return parts[1].split(";")[0];
    }
}

function inicializaCookie()
{
    darkMode = getCookie('darkMode');
    darkMode = darkMode == null ? 0 : darkMode;
    document.cookie = `darkMode=${darkMode}`;

    setColorMode(darkMode);
}

function switchMode() 
{
    darkMode = getCookie('darkMode');
    darkMode = darkMode == 1 ? 0 : 1;
    setColorMode(darkMode);

    document.cookie = `darkMode=${darkMode}`;
}

function setColorMode(darkMode)
{
    let element = document.getElementById('body');
    if(darkMode == 1)
    {
        element.style.background = 'url("/img/background-pattern-dark.png")';
        element.style.color = 'white';
    }
    else
    {
        darkMode = 0;

        element.style.background = 'url("/img/background-pattern.png")';
        element.style.color = 'black';
    }
}

inicializaCookie();