<?php
session_start();
include('../config.php');
if(empty($_SESSION['username'])){
header("location:../index.php");
}
$last = $_SESSION['username'];
$sqlupdate = "UPDATE users SET last_activity=now() WHERE username='$last'";
$queryupdate = mysql_query($sqlupdate);

$id_file =  $_GET['id_file'];

$query = mysql_query("SELECT * FROM file WHERE id_file='$id_file'");
$data = mysql_fetch_array($query);
$filename_finish = $data['file_name_finish'];
$filename_source = $data['file_name_source'];
if ($data['status'] == 1) {
unlink("file_encrypt/$filename_finish");
}else{
 unlink("file_encrypt/$filename_finish");
 unlink("file_decrypt/$filename_source");
}
$sqldelete = "DELETE FROM file WHERE id_file='$id_file'";
$querydelete = mysql_query($sqldelete);

if($querydelete){
    echo("<script language='javascript'>
    window.location.href='history.php';
    window.alert('File Telah Di Hapus');
    </script>");
}else{
    echo("<script language='javascript'>
    window.location.href='history.php';
    window.alert('File Gagal Di Hapus');
    </script>");
}
?>
