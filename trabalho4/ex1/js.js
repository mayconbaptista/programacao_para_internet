
function func1 ()
{
    document.getElementById("firstTitulo").textContent = "Dono do curriculo";
}

window.document.addEventListener("DOMContentLoaded", function (){

    const h2 = document.querySelectorAll("h2")
    
    for(let elem of h2)
    {
        elem.addEventListener("click", () => elem.textContent = "obrigado")
    }
})