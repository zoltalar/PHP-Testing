<?php

namespace Spl\FileInfo;

$info = new \SplFileInfo(__FILE__);

echo 'getATime(): '; var_dump($info->getATime());
echo '<br>getBasename(): '; var_dump($info->getBasename());
echo '<br>getCTime(): '; var_dump($info->getCTime());
echo '<br>getExtension(): '; var_dump($info->getExtension());
echo '<br>getFileInfo(): '; var_dump($info->getFileInfo());
echo '<br>getFilename(): '; var_dump($info->getFilename());