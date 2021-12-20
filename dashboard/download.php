<?php
session_start();
$file  = $_SESSION["download"];
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($file));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: private');
header('Pragma: private');
header('Content-Length: ' . filesize($file));
ob_clean();
flush();
readfile($file);
unset($_SESSION["download"]);
?>