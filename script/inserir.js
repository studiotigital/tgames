// Função para adicionar um novo jogo à página
function addGame(name, url, imageUrl) {
    var newGame = '<div class="post">';
    newGame += '<a href="' + url + '">';
    newGame += '<img src="' + imageUrl + '" alt="' + name + '">';
    newGame += '<p class="post-name">' + name + '</p>';
    newGame += '<span class="featured_icon"></span>';
    newGame += '</a></div>';

    $('#content').prepend(newGame);  // Adiciona o novo jogo no topo da lista
}

// Manipula o envio do formulário
$('#content').submit(function (event) {
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
