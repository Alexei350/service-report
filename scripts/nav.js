function selecionaItem(id) 
{ 
    let element = document.getElementById(id);
    
    if(element != null)
        element.className = "nav-item active";
}