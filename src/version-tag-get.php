<?php
$json = json_decode(file_get_contents('composer.json'), true);
echo $json['version'];
?>
