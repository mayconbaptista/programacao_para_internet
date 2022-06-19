
window.onload = function () {

    const botao = window.document.getElementById('adiciona');

    // adiciona enento click para adição 
    botao.addEventListener('click', () => {

        // pega o elemento input com o interesse
        const input = window.document.getElementById('interesse');
        
        // pega alista de interesses
        const lista = window.document.getElementById('lista');

        // cria im li para novo interesse
        const novoLI = window.document.createElement('li');

        // o elemento recebe o interesse
        novoLI.textContent = input.value;

        //zera o valor
        input.value = '';

        // e adivionado a lista
        lista.appendChild(novoLI);
    })
}