<?php
//Percorre o arquivo inteiro importanto as classes que precisa, com o caminho formatado certo.
spl_autoload_register(function (string $className) {

    $caminho = str_replace("ScreenMatch", 'src', $className) . '.php';

    //No linux o \ não é interpretado. (DIRECTORY_SEPARATOR é a divisão de arquivos do sistema operacional)
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);

    $caminhoCompleto = __DIR__ . DIRECTORY_SEPARATOR . $caminho;

    //É possível ter vários autoloaders registrados...
    //PSR: autoloader não deve gerar erros.
    if (file_exists($caminhoCompleto)) {
        require_once $caminhoCompleto;
    }
});
