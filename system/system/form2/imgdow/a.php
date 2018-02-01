<?php


$thisdir="./";

$zip = new ZipArchive();
$filename = "./download.zip";

if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
exit("cannot open <$filename>\n");
}


$zip->addFile($thisdir ."fat.png","fat.png");

echo "numfiles: " . $zip->numFiles . "\n";
echo "status:" . $zip->status . "\n";
$zip->close();





?>
