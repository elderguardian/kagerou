<?php

require_once 'view/src/strawberry-view/View.php';
require_once 'pageVars.php';

function copyDirectory($source, $destination) : void {
    if (!is_dir($destination)) {
        mkdir($destination, 0777, true);
    }

    $publicDir = opendir($source);

    while (false !== ($file = readdir($publicDir))) {
        if ($file == '.' || $file == '..') {
            continue;
        }


        $sourceFile = $source . '/' . $file;
        $destinationFile = $destination . '/' . $file;

        if (is_dir($sourceFile)) {
            copyDirectory($sourceFile, $destinationFile);
        } else {
            copy($sourceFile, $destinationFile);
        }
    }
}

function compileViews($source, $destination) : void {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source));

    foreach ($rii as $file) {
        $fileName = substr($file, strlen($source), strlen($file));
        $isValidFile = str_ends_with($fileName, '.php');

        if (!$isValidFile) {
            continue;
        }

        $filenameWithoutExtension = pathinfo($fileName, PATHINFO_FILENAME);
        $newFileName = str_replace(".php", ".html", $fileName);

        if (str_starts_with($newFileName, "/components/")) {
            continue;
        }

        $filePageVars = ($pageVars ?? [])[$fileName] ?? [];
        $htmlAsView = new View($filenameWithoutExtension, $filePageVars);

        if (!is_dir($destination)) {
            mkdir($destination, 0777, true);
        }

        file_put_contents("$destination$newFileName", $htmlAsView);
    }
}

compileViews('views', 'dist');
copyDirectory('public', 'dist');