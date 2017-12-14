<?php
# Redirect all links into external media
# media-router.php?type=src&filename=1234567890.jpg

$remoteServer = "http://localhost:88/files/";
$remotePrefix = "foobar";

$newURL = $remoteServer . $filenamePrefix . $_GET['type'] . "-" . $_GET['filename'];
# url should be: foobar-src-1234567890.jpg

header('Location: '.$newURL);
die();