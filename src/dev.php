<?php

echo "http://localhost:8080\n";

function updateServer(): void {
    shell_exec('kill $(lsof -t -i:8080) 2> /dev/null');
    shell_exec('php src/main.php');
    shell_exec('cd dist && php -S localhost:8080 > /dev/null 2>&1 &');
}

updateServer();

while (true) {
    $files = array_filter(array_merge(
        glob(__DIR__ . '/../public/{*,*/*}', GLOB_BRACE),
        glob(__DIR__ . '/../views/{*,*/*}', GLOB_BRACE)
    ), 'is_file');

    foreach ($files as $file) {
        clearstatcache(true, $file);
        $currentContentHash = md5(file_get_contents($file));

        if (!isset($fileStates[$file])) {
            $fileStates[$file] = $currentContentHash;
        }

        if ($currentContentHash !== $fileStates[$file]) {
            updateServer();
            echo "Recompiling...\n";
            $fileStates[$file] = $currentContentHash;
        }
    }

    sleep(1);
}