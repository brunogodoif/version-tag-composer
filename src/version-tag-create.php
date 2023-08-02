<?php
$options = getopt("n:", ["mode:"]);

if (!isset($options['mode'])) {
    echo "Unspecified execution mode";
    exit(1);
}

$json = json_decode(file_get_contents(dirname(__DIR__, 4) . DIRECTORY_SEPARATOR. 'composer.json'), true);
$version = 'v' . $json['version'];
echo "Commit version: $version" . "\n\r";
exec("git pull");
exec("git add composer.json");
$commitMessage = 'Increment ' . $options['mode'] . ' version: ' . $version;
exec('git commit -m "' . $commitMessage . '"');
exec("git tag $version");
exec("git push --tags");

?>
