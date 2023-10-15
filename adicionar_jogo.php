<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novaOpcao = $_POST['novo_jogo'];

    if (!empty($novaOpcao)) {
        $novaOpcao = htmlspecialchars($novaOpcao); // Evitar injeção de HTML

        // Abra o arquivo index.html para leitura
        $conteudoAtual = file_get_contents('index.html');

        // Encontre a posição onde deseja inserir a nova opção no HTML
        $posicaoInserir = strpos($conteudoAtual, '<div id="content">') + strlen('<div id="content">');

        if ($posicaoInserir !== false) {
            // Construa a nova opção com a estrutura HTML necessária
            $novaOpcaoHTML = "
                <div class='post'>
                    <a href='{$novaOpcao}'>
                        <img src='https://tgames.vercel.app/images/{$novaOpcao}.jpg' alt='{$novaOpcao}'>
                        <p class='post-name'>{$novaOpcao}</p>
                        <span class='featured_icon'></span>
                    </a>
                </div>
            ";

            // Insira a nova opção na posição encontrada
            $novoConteudo = substr_replace($conteudoAtual, $novaOpcaoHTML, $posicaoInserir, 0);

            // Abra o arquivo index.html para escrita
            if (file_put_contents('index.html', $novoConteudo)) {
                echo 'Opção adicionada com sucesso ao arquivo index.html.';
                // Redirecionar para index.html
                header("Location: index.html");
                exit;
            } else {
                echo 'Erro ao abrir o arquivo index.html para escrita.';
            }
        } else {
            echo 'Erro ao encontrar a posição para adicionar a nova opção no arquivo index.html.';
        }
    } else {
        echo 'O campo de nova opção está vazio. Insira um valor válido.';
    }
}
?>
