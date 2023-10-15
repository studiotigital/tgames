// inserir.js

$(document).ready(function() {
    // Seleciona o formulário pelo ID
    var form = $("#content");

    // Manipula o evento de envio do formulário
    form.submit(function(event) {
        event.preventDefault();

        // Coleta os dados do formulário
        var gameName = $("#game-name").val();
        var gameUrl = $("#game-url").val();
        var gameImage = $("#game-image").val();

        // Cria uma nova div para o novo jogo
        var newGameDiv = '<div class="post">' +
            '<a href="' + gameUrl + '">' +
            '<img src="' + gameImage + '" alt="' + gameName + '">' +
            '<p class="post-name">' + gameName + '</p>' +
            '<span class="featured_icon"></span>' +
            '</a>' +
            '</div>';

        // Insere a nova div na div com o id "content"
        $("#content").append(newGameDiv);

        // Limpa os campos do formulário
        $("#game-name").val("");
        $("#game-url").val("");
        $("#game-image").val("");

        // Exibe uma mensagem de sucesso
        var message = "Dados do jogo inseridos com sucesso!";
        $("#result-message").text(message);
    });
});
