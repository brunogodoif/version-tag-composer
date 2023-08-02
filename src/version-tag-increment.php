<?php
$options = getopt("n:", ["mode:"]);

if (!isset($options['mode'])) {
    echo "Unspecified execution mode";
    exit(1);
}

$json = json_decode(file_get_contents('composer.json'), true);
$version = $json['version'];
list($major, $minor, $patch) = explode('.', $version);

if ($options['mode'] == 'patch') {
    $patch++;
} else if ($options['mode'] == 'minor') {
    $minor++;
} else if ($options['mode'] == 'major') {
    $major++;
}

$json['version'] = $major . "." . $minor . "." . $patch;
$result = file_put_contents('composer.json', json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

if ($result) {
    echo "Increment to version:" . $json['version'];
}
echo "\n\r";

exec('php version-tag-create.php --mode='.$options['mode']);

?>
