
window.onload = function () {

    const articles = document.getElementsByTagName('article');

    for(let node of articles){

        try{

            node.onclick = () => {node.style.visibility = 'hidden'} 
        }catch(e){
            alert("error")
        }
    }
}