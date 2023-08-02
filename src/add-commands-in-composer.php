<?php

try {

// Caminho para o arquivo composer.json do projeto principal
    $composerJsonPath = dirname(__DIR__, 4) . DIRECTORY_SEPARATOR . 'composer.json';
// Lê o conteúdo atual do composer.json
    $content = file_get_contents($composerJsonPath);

    if ($content === false) {
        return false;
    }

// Decodifica o conteúdo em um array associativo
    $data = json_decode($content, true);

    $linesToAdd = [
        'app-version' => 'php version-tag-get.php',
        'app-version-patch' => 'php version-tag-increment.php --mode=patch',
        'app-version-minor' => 'php version-tag-increment.php --mode=minor',
        'app-version-major' => 'php version-tag-increment.php --mode=major',
    ];

// Verifica se a tag "scripts" já existe
    if (!isset($data['scripts'])) {
        // Se não existir, cria a tag "scripts" e adiciona os novos scripts
        $data['scripts'] = $linesToAdd;
    } else {
        // Se já existir, adiciona apenas os novos scripts
        foreach ($linesToAdd as $key => $lineAdd) {
            if (!isset($data['scripts'][$key])) {
                $data['scripts'][$key] = $lineAdd;
            }
        }
    }

// Codifica o array de volta para o formato JSON
    $updatedComposerJson = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

// Escreve o conteúdo atualizado de volta no arquivo composer.json
    file_put_contents($composerJsonPath, $updatedComposerJson);

} catch (Exception $e) {
    return false;
}
?>