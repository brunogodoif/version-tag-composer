<?php
$json = json_decode(file_get_contents(dirname(__DIR__, 4) . DIRECTORY_SEPARATOR . 'composer.json'), true);
echo $json['version'];
?>
