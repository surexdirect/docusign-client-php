<?php
/**
 * @file adjust_generated_code.php
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();

/** @var \Symfony\Component\Finder\SplFileInfo $file */
foreach ($finder->files()->name('*.php')->in(__DIR__.'/../src/Surex/DocuSign/Resource') as $file) {

    $lines = file($file->getRealPath());

    $newLines = [];
    foreach ($lines as $line) {
        if ($l = process_line($line)) {
            $newLines[] = $l;
        }
    }

    file_put_contents($file->getRealPath(), implode($newLines));
}

function process_line($line) {
    if (strpos($line, 'use Joli\Jane\OpenApi\Runtime\Client\Resource') === 0) {
        return 'use Surex\DocuSign\AccountResource as Resource;'.PHP_EOL;
    }

    if (strpos($line, '@param string $accountId') !== false) {
        return false;
    }

    if (strpos($line, 'public function') !== false && strpos($line, '($accountId, ') !== false) {
        return str_replace('($accountId, ', '(', $line);
    }

    if (strpos($line, 'str_replace(\'{accountId}\'') && strpos($line, 'urlencode($accountId)') !== false) {
        return str_replace('$accountId', '$this->accountId', $line);
    }

    return $line;
}
