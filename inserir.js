$(document).ready(function() {
    $('#content').on('click', '#inserir-dados', function() {
        var nomeDoJogo = $('#game-name').val();
        var urlDoJogo = $('#game-url').val();

        var novoJogo = `
            <div class="post">
                <a href="${urlDoJogo}">
                    <p class="post-name">${nomeDoJogo}</p>
                    <span class='featured_icon'></span>
                </a>
            </div>
        `;

        // Insere o novo jogo na seção "content"
        $('#content').append(novoJogo);

        // Limpa os campos do formulário
        $('#game-name').val('');
        $('#game-url').val('');
    });
});
