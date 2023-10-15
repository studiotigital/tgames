document.addEventListener("DOMContentLoaded", function () {
    var adicionarJogoBtn = document.getElementById("adicionarJogo");
    adicionarJogoBtn.addEventListener("click", adicionarJogo);

    function adicionarJogo() {
        // Captura os valores dos campos do formulário
        var nomeDoJogo = document.getElementById("jogo-nome").value;
        var urlDoJogo = document.getElementById("jogo-url").value;

        // Crie um novo elemento de jogo
        var novoJogo = document.createElement("div");
        novoJogo.className = "post";

        novoJogo.innerHTML = `
            <a href="${urlDoJogo}">
                <img src="${urlDoJogo}" alt="${nomeDoJogo}">
                <p class="post-name">${nomeDoJogo}</p>
                <span class='featured_icon'></span>
            </a>
        `;

        // Adicione o novo jogo à seção "content"
        var content = document.getElementById("content");
        content.appendChild(novoJogo);

        // Limpe os campos do formulário
        document.getElementById("jogo-nome").value = "";
        document.getElementById("jogo-url").value = "";

        alert("Novo jogo adicionado com sucesso!");
    }
});
