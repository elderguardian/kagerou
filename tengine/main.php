<?php

require_once 'view/src/strawberry-view/View.php';
require_once 'pageVars.php';

$path = 'views/';
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

foreach ($rii as $file) {
    $fileName = substr($file, strlen('views/'), strlen($file));
    $isValidFile = str_ends_with($fileName, '.php');

    if (!$isValidFile) {
        continue;
    }

    $filenameWithoutExtension = pathinfo($fileName, PATHINFO_FILENAME);
    $newFileName = str_replace(".php", ".html", $fileName);

    if (str_starts_with($newFileName, "components/")) {
        continue;
    }

    $filePageVars = ($pageVars ?? [])[$fileName] ?? [];
    $htmlAsView = new View($filenameWithoutExtension, $filePageVars);

    if (!is_dir("dist")) {
        mkdir("dist", 0777, true);
    }

    file_put_contents("dist/$newFileName", $htmlAsView);
    echo "Put Contents to $newFileName.\n";
}