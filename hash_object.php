#!/usr/bin/env php
<?php

$inputContent = file_get_contents('php://stdin');

$options     = getopt('wt:');
$writeObject = isset($options['w']);
$type        = $options['t'] ?? 'blob';

$contentSeparator = "\0";
$typeSeparator    = ' ';

$objectContent = $type . $typeSeparator . strlen($inputContent) . $contentSeparator . $inputContent;
$objectSha1    = sha1($objectContent);

echo $objectSha1;

if ($writeObject) {
    $objectContentCompressed = gzdeflate($objectContent, -1, ZLIB_ENCODING_DEFLATE);


    $objectDirName  = substr($objectSha1, 0, 2);
    $objectFileName = substr($objectSha1, 2);

    $dirPath = '.git/objects/' . $objectDirName;
    if (!mkdir($dirPath) && !is_dir($dirPath)) {
        throw new \RuntimeException(sprintf('Directory "%s" was not created', $dirPath));
    }

    file_put_contents($dirPath . '/' . $objectFileName, $objectContentCompressed);
}
