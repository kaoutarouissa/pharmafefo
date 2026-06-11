<?php

function loadEnv($path)
{
    if (!file_exists($path)) {
        return;
    }

    $lines = file($path);

    foreach ($lines as $line) {

        $line = trim($line);

        if ($line === '' || str_starts_with($line, '#')) {
            continue;
        }

        [$key, $value] = explode('=', $line, 2);

        $_ENV[$key] = $value;
    }
}