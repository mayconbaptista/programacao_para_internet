


window.document.addEventListener("DOMContentLoaded", () =>{

    const h2 = document.getElementsByTagName("h2");

    for(let element of h2)
    {
        try{
            element.addEventListener('click', () => {
    
                const brother = element.nextElementSibling;
                brother.style.display = 'none';
            })
            element.addEventListener('dblclick', () => {
                const brotherDBL = element.nextElementSibling;
                brotherDBL.style.display = 'block';
                brotherDBL.style.userSelect = 'none';
            })
        }catch(e){
            alert("error ao esconder elemento");
        }
    }
})