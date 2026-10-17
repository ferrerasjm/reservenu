<?php
// Token diagnostics are available only from a local command line.
if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}

$tokenPath = __DIR__ . '/token.json';
echo is_file($tokenPath) ? "Token file is present.\n" : "Token file is missing.\n";