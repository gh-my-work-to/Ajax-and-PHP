<?php
$f_name = $_POST['name'];
$f_memo = $_POST['memo'];
//------------------------
header('Content-Type:text/plain; charset=utf-8');
echo "($f_name)($f_memo)";
?>
