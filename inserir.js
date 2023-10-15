// Manipula o envio do formulário
$('#game-form').submit(function (event) {
    event.preventDefault();
    var gameName = $('#game-name').val();
    var gameUrl = $('#game-url').val();
    var gameImage = $('#game-image').val();

    // Adicione aqui qualquer validação necessária

    // Chame a função addGame para adicionar o novo jogo à página
    addGame(gameName, gameUrl, gameImage);

    // Limpa os campos do formulário
    $('#game-name').val('');
    $('#game-url').val('');
    $('#game-image').val('');
});
