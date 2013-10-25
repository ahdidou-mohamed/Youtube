<?php
require 'Youtube.php';

$youtube = new Zarkiel\Media\Youtube();
$links = $youtube->getDownloadLinks('q_gfD3nvh-8');
print_r($links);
